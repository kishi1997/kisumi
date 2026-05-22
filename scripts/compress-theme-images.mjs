import { copyFile, mkdtemp, rename, rm, stat } from "node:fs/promises";
import path from "node:path";
import process from "node:process";
import { fileURLToPath } from "node:url";

import { glob } from "glob";
import sharp from "sharp";

const __dirname = path.dirname(fileURLToPath(import.meta.url));
const rootDir = path.resolve(__dirname, "..");
const imageDir = path.join(rootDir, "themes", "yaotemp", "img");

const backupDir = await mkdtemp(
  path.join("/private/tmp", "yaotemp-img-backup-"),
);
const files = await glob("*.{jpg,jpeg,png}", {
  cwd: imageDir,
  absolute: true,
  nodir: true,
  nocase: true,
});

if (files.length === 0) {
  console.log("No jpg/jpeg/png files found in themes/yaotemp/img.");
  console.log(`Backup directory prepared: ${backupDir}`);
  process.exit(0);
}

const beforeTotal = await totalSize(files);

for (const file of files) {
  const backupPath = path.join(backupDir, path.basename(file));
  await copyFile(file, backupPath);
}

for (const file of files) {
  const ext = path.extname(file).toLowerCase();
  const width = getResizeWidth(file);
  const tmpOutput = `${file}.compressing`;
  let pipeline = sharp(file).resize({ width, withoutEnlargement: true });

  if (ext === ".jpg" || ext === ".jpeg") {
    pipeline = pipeline.jpeg({ quality: 75, mozjpeg: true });
  } else if (ext === ".png") {
    pipeline = pipeline.png({
      compressionLevel: 9,
      palette: true,
      quality: 80,
      effort: 10,
    });
  }

  try {
    await pipeline.toFile(tmpOutput);
    await rename(tmpOutput, file);
  } catch (error) {
    await rm(tmpOutput, { force: true });
    throw error;
  }
}

const afterTotal = await totalSize(files);
const savedBytes = beforeTotal - afterTotal;
const savedPercent = beforeTotal > 0 ? (savedBytes / beforeTotal) * 100 : 0;

console.log(`Compressed ${files.length} image(s) in themes/yaotemp/img.`);
console.log(`Before: ${formatBytes(beforeTotal)}`);
console.log(`After:  ${formatBytes(afterTotal)}`);
console.log(`Saved:  ${formatBytes(savedBytes)} (${savedPercent.toFixed(1)}%)`);
console.log(`Backup: ${backupDir}`);

async function totalSize(paths) {
  const sizes = await Promise.all(
    paths.map(async (file) => (await stat(file)).size),
  );
  return sizes.reduce((sum, size) => sum + size, 0);
}

function formatBytes(bytes) {
  const units = ["B", "KB", "MB", "GB"];
  let value = bytes;
  let unitIndex = 0;

  while (Math.abs(value) >= 1024 && unitIndex < units.length - 1) {
    value /= 1024;
    unitIndex += 1;
  }

  return `${value.toFixed(unitIndex === 0 ? 0 : 1)} ${units[unitIndex]}`;
}

function getResizeWidth(file) {
  const basename = path.basename(file).toLowerCase();
  if (basename.includes("sp")) {
    return 600;
  }

  return basename.includes("-kv") || basename.includes("-bg") ? 1280 : 800;
}
