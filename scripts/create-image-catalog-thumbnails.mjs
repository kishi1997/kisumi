import { execFile } from 'node:child_process';
import { mkdir, readdir, rm, stat, writeFile } from 'node:fs/promises';
import path from 'node:path';
import process from 'node:process';
import { promisify } from 'node:util';

const execFileAsync = promisify(execFile);
const rootDir = path.resolve(import.meta.dirname, '..');

const options = parseArgs(process.argv.slice(2));
const sourceDir = path.resolve(rootDir, options.source ?? 'themes/yaotemp/img/draft');
const outputDir = path.resolve(rootDir, options.output ?? 'themes/yaotemp/img/catalog');
const catalogPath = path.resolve(rootDir, options.catalog ?? '.ai-work/image-catalog.md');
const maxSize = String(options.size ?? 512);

await ensureSips();
await rm(outputDir, { recursive: true, force: true });
await mkdir(outputDir, { recursive: true });
await mkdir(path.dirname(catalogPath), { recursive: true });

const files = (await listImages(sourceDir))
  .sort((a, b) => path.basename(a).localeCompare(path.basename(b), 'en'));

if (files.length === 0) {
  console.log(`No images found in ${toPosix(path.relative(rootDir, sourceDir))}.`);
  process.exit(0);
}

const rows = [];

for (const [index, file] of files.entries()) {
  const id = `img-${String(index + 1).padStart(3, '0')}`;
  const relativeSource = path.relative(sourceDir, file);
  const stem = relativeSource.slice(0, relativeSource.length - path.extname(relativeSource).length);
  const thumbName = `${id}__${stem}__thumb.jpg`;
  const thumbPath = path.join(outputDir, sanitizeThumbName(thumbName));
  const info = await readImageInfo(file);

  await rm(thumbPath, { force: true });
  await execFileAsync('sips', [
    '--resampleHeightWidthMax',
    maxSize,
    '--setProperty',
    'format',
    'jpeg',
    file,
    '--out',
    thumbPath,
  ]);

  rows.push({
    id,
    thumb: toPosix(path.relative(rootDir, thumbPath)),
    original: toPosix(path.relative(rootDir, file)),
    size: info.size,
    orientation: getOrientation(info.width, info.height),
  });
}

await writeFile(catalogPath, renderCatalog(rows), 'utf8');

console.log(`Created ${rows.length} thumbnail(s).`);
console.log(`Thumbnails: ${toPosix(path.relative(rootDir, outputDir))}`);
console.log(`Catalog: ${toPosix(path.relative(rootDir, catalogPath))}`);

function parseArgs(args) {
  const parsed = {};

  for (let i = 0; i < args.length; i += 1) {
    const arg = args[i];
    if (!arg.startsWith('--')) {
      continue;
    }

    const [rawKey, inlineValue] = arg.slice(2).split('=');
    const value = inlineValue ?? args[i + 1];
    parsed[rawKey] = value;

    if (inlineValue === undefined) {
      i += 1;
    }
  }

  return parsed;
}

async function ensureSips() {
  try {
    await execFileAsync('sips', ['--version']);
  } catch {
    throw new Error('This script requires macOS `sips` to create thumbnails.');
  }
}

async function listImages(dir) {
  const entries = await readdir(dir, { withFileTypes: true });
  const images = [];

  for (const entry of entries) {
    const fullPath = path.join(dir, entry.name);

    if (entry.isDirectory()) {
      images.push(...(await listImages(fullPath)));
      continue;
    }

    if (entry.isFile() && /\.(jpe?g|png|webp|heic)$/i.test(entry.name)) {
      images.push(fullPath);
    }
  }

  return images;
}

async function readImageInfo(file) {
  try {
    const { stdout } = await execFileAsync('sips', ['-g', 'pixelWidth', '-g', 'pixelHeight', file]);
    const widthMatch = stdout.match(/pixelWidth:\s*(\d+)/);
    const heightMatch = stdout.match(/pixelHeight:\s*(\d+)/);
    const width = widthMatch ? Number(widthMatch[1]) : 0;
    const height = heightMatch ? Number(heightMatch[1]) : 0;

    return {
      width,
      height,
      size: width && height ? `${width}x${height}` : 'unknown',
    };
  } catch {
    const fallback = await stat(file);
    return {
      width: 0,
      height: 0,
      size: `${Math.round(fallback.size / 1024)}KB`,
    };
  }
}

function getOrientation(width, height) {
  if (!width || !height) {
    return 'unknown';
  }

  if (width === height) {
    return 'square';
  }

  return width > height ? 'landscape' : 'portrait';
}

function renderCatalog(rows) {
  const lines = [
    '# Image Catalog',
    '',
    '> `themes/yaotemp/img/catalog/` is for AI image selection only. Do not reference catalog thumbnails from PHP, SCSS, CSS, or HTML. When an image is selected, copy the matching original from `themes/yaotemp/img/draft/` to `themes/yaotemp/img/` with a meaningful English filename.',
    '',
    '| id | thumb | original | size | orientation | content | use candidates | notes |',
    '|---|---|---|---|---|---|---|---|',
  ];

  for (const row of rows) {
    lines.push(`| ${row.id} | ${row.thumb} | ${row.original} | ${row.size} | ${row.orientation} |  |  |  |`);
  }

  lines.push('');
  return lines.join('\n');
}

function toPosix(value) {
  return value.split(path.sep).join('/');
}

function sanitizeThumbName(value) {
  return value
    .split(path.sep)
    .join('__')
    .replace(/[<>:"/\\|?*]/g, '-');
}
