import { readFileSync } from 'node:fs';
import { dirname, resolve } from 'node:path';
import { fileURLToPath } from 'node:url';
import { spawnSync } from 'node:child_process';

const __dirname = dirname(fileURLToPath(import.meta.url));
const rootDir = resolve(__dirname, '..');
const pagesPath = resolve(rootDir, 'config/pages.json');

function runWp(args, options = {}) {
  const result = spawnSync('wp-env', ['run', 'cli', 'wp', ...args], {
    cwd: rootDir,
    encoding: 'utf8',
    stdio: options.capture ? ['ignore', 'pipe', 'pipe'] : 'inherit',
  });

  if (result.error) {
    throw result.error;
  }

  if (result.status !== 0) {
    const command = `wp-env run cli wp ${args.join(' ')}`;
    const stderr = result.stderr ? `\n${result.stderr.trim()}` : '';
    throw new Error(`Command failed: ${command}${stderr}`);
  }

  return options.capture ? result.stdout.trim() : '';
}

function pageExists(slug) {
  const ids = runWp(
    [
      'post',
      'list',
      '--post_type=page',
      '--post_status=any',
      `--pagename=${slug}`,
      '--field=ID',
      '--format=ids',
    ],
    { capture: true },
  );

  return ids.length > 0;
}

function loadPages() {
  const pages = JSON.parse(readFileSync(pagesPath, 'utf8'));

  if (!Array.isArray(pages)) {
    throw new Error('config/pages.json must contain an array.');
  }

  return pages.map((page, index) => {
    if (!page || typeof page.slug !== 'string' || typeof page.title !== 'string') {
      throw new Error(`config/pages.json item ${index + 1} needs string "slug" and "title" fields.`);
    }

    return {
      slug: page.slug.trim(),
      title: page.title.trim(),
    };
  });
}

console.log('Activating theme: yaotemp');
runWp(['theme', 'activate', 'yaotemp']);

console.log('Setting permalink structure: /%postname%/');
runWp(['option', 'update', 'permalink_structure', '/%postname%/']);
runWp(['rewrite', 'flush', '--hard']);

for (const page of loadPages()) {
  if (!page.slug || !page.title) {
    throw new Error('Page slug and title cannot be empty.');
  }

  if (pageExists(page.slug)) {
    console.log(`Skipping existing page: ${page.slug}`);
    continue;
  }

  console.log(`Creating page: ${page.slug} (${page.title})`);
  runWp([
    'post',
    'create',
    '--post_type=page',
    '--post_status=publish',
    `--post_name=${page.slug}`,
    `--post_title=${page.title}`,
  ]);
}

console.log('wp-env setup complete.');
