import fs from 'node:fs/promises';
import path from 'node:path';
import sharp from 'sharp';

const root = path.resolve('/var/www/saasapps');
const srcSvg = path.join(root, 'public', 'images', 'logo.svg');
const outDir = path.join(root, 'public', 'images');

async function ensureExists(filePath) {
  try {
    await fs.access(filePath);
    return true;
  } catch {
    return false;
  }
}

async function main() {
  const exists = await ensureExists(srcSvg);
  if (!exists) {
    throw new Error(`SVG not found: ${srcSvg}`);
  }

  // Target sizes (width x height) based on viewBox 280x60
  const sizes = [
    { name: 'logo.png', width: 560, height: 120 },   // 1x
    { name: 'logo@2x.png', width: 1120, height: 240 } // 2x
  ];

  for (const { name, width, height } of sizes) {
    const outFile = path.join(outDir, name);
    await sharp(srcSvg, { density: 300 })
      .resize(width, height, { fit: 'contain' })
      .png({ compressionLevel: 9 })
      .toFile(outFile);
    console.log(`Generated: ${outFile}`);
  }
}

main().catch((err) => {
  console.error(err);
  process.exit(1);
});
