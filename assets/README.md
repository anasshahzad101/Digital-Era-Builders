# assets

Image files served directly by the site.

## sako-rassam.jpg

The founder portrait. One file, used in two places:

- `index.php` — beside the statement line ("We don't take on clients...")
- `about.php` — beside the statement line ("I own The Roofer Bros...")

Drop the photo in at exactly this path and filename:

    assets/sako-rassam.jpg

Both pages render the portrait only when that file exists, so they fall
back to the original single-column statement until it is added. No broken
image icon in the meantime.

Guidance for the file:

- **Square.** It is rendered at `aspect-ratio: 1` with `object-fit: cover`
  and `object-position: center top`, so a square or portrait crop works;
  a wide landscape crop will lose the sides.
- **640x640 or larger.** It displays between 190px and 320px wide, so
  640px covers 2x retina.
- **JPEG, compressed.** Aim for under ~200KB. If you would rather use
  `.webp` or `.png`, change the two `sako-rassam.jpg` references in the
  statement block of `about.php` to match.
