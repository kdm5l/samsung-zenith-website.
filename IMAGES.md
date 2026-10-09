# Adding Your Images — Naming Guide

Every image slot on the site is already wired up in the code to look for a
**specific filename** inside `assets/img/`. You don't need to edit any code —
just save your images with the exact names below and drop them into
`assets/img/`. Anything you haven't added yet will keep showing the current
placeholder (gradient block or text), so you can do this gradually.

All images: any common format works (`.jpg`, `.jpeg`, `.png`, `.webp`, `.gif`).
**The code now automatically detects whichever extension you use** — so if
the guide says `hero-home.jpg` and you only have a PNG, just save it as
`hero-home.png` and it will still be found and displayed. You don't need to
match the extension exactly, only the name before the dot.

> Recommended sizes: hero banners ~1920×1080px (wide), product/gallery shots
> ~1200×1200px (square-ish), card thumbnails ~800×600px. Bigger is fine —
> the CSS crops everything to fit — just keep file sizes reasonable
> (under ~500KB each) so pages load quickly.

## Logo (already done)
| File | Used for |
|---|---|
| `assets/img/logo.png` | Nav bar + footer logo ✅ already added |
| `assets/img/logo-symbol.png` | Intro splash animation mark ✅ already added |

## Home page (`index.php`)
| File | Used for |
|---|---|
| `assets/img/hero.png` | Big hero background behind "THE FUTURE IS NOW" |
| `assets/img/collection-mobile.jpg` | "Explore The Collection" — large left tile |
| `assets/img/collection-buds.jpg` | "Explore The Collection" — top right tile |
| `assets/img/collection-prime.jpg` | "Explore The Collection" — bottom right tile |
| `assets/img/discover-about.jpg` | "Discover More" — About card |
| `assets/img/discover-media.jpg` | "Discover More" — Newsroom card |

Featured product cards on this page automatically use each product's image
(see **Product images** below) — no separate filename needed.

## About page (`about.php`)
| File | Used for |
|---|---|
| `assets/img/about.png` | Hero background |

## Products page (`products.php`)
| File | Used for |
|---|---|
| `assets/img/hero-products.jpg` | Hero background |

Product cards + the featured product block use the **Product images** table
below automatically.

## Product Detail page (`product-detail.php`)
Each product needs a main image plus (optionally) three gallery shots.
Replace `<slug>` with the product's slug:

| File pattern | Used for |
|---|---|
| `assets/img/product-<slug>.jpg` | Main product shot — card thumbnails + hero + related products |
| `assets/img/product-<slug>-gallery-1.jpg` | Product Gallery — tile 1 |
| `assets/img/product-<slug>-gallery-2.jpg` | Product Gallery — tile 2 |
| `assets/img/product-<slug>-gallery-3.jpg` | Product Gallery — tile 3 |

### Product images (main shot) — exact filenames
| Product | Slug | Filename |
|---|---|---|
| Zenith Prime | `zenith-prime` | `assets/img/product-zenith-prime.jpg` |
| Zenith Mobile | `zenith-mobile` | `assets/img/product-zenith-mobile.jpg` |
| Zenith Buds | `zenith-buds` | `assets/img/product-zenith-buds.jpg` |
| Zenith Watch | `zenith-watch` | `assets/img/product-zenith-watch.jpg` |
| Zenith Display | `zenith-monitor` | `assets/img/product-zenith-monitor.jpg` |
| Zenith Cam | `zenith-cam` | `assets/img/product-zenith-cam.jpg` |
| Zenith Headset | `zenith-headset` | `assets/img/product-zenith-headset.jpg` |

> Adding new products? Add a row to `products` in your database (or to
> `fallback_products()` in `includes/functions.php` if not using MySQL yet)
> with a `hero_image` path — everywhere that product appears will pick up
> the image automatically.

## Gallery page (`gallery.php`)
| File | Used for |
|---|---|
| `assets/img/hero-gallery.jpg` | Hero background |
| `assets/img/gallery-banner.jpg` | Large "Sleek Outside. Powerful Inside." banner |
| `assets/img/gallery-zenith-prime.jpg` | Gallery grid tile |
| `assets/img/gallery-zenith-watch.jpg` | Gallery grid tile |
| `assets/img/gallery-zenith-buds.jpg` | Gallery grid tile |
| `assets/img/gallery-zenith-ring.jpg` | Gallery grid tile |
| `assets/img/gallery-zenith-tablet.jpg` | Gallery grid tile |
| `assets/img/gallery-studio-setup.jpg` | Gallery grid tile |
| `assets/img/lifestyle-work.jpg` | "Let's Reach Our Peak" — left photo |
| `assets/img/lifestyle-campus.jpg` | "Let's Reach Our Peak" — right photo |

## Media page (`media.php`)
| File | Used for |
|---|---|
| `assets/img/hero-media.jpg` | Hero background |
| `assets/img/media-1.jpg` | Latest Stories — 1st article thumbnail |
| `assets/img/media-2.jpg` | Latest Stories — 2nd article thumbnail |
| `assets/img/media-3.jpg` | Latest Stories — 3rd article thumbnail |
| `assets/img/video-poster.jpg` | "Brand Growth" video block background |

## Contact page (`contact.php`)
| File | Used for |
|---|---|
| `assets/img/contact-banner.jpg` | Top banner image |

## Quick checklist
1. Save/export/rename your images to match the filenames above exactly.
2. Copy them all into `zenith/assets/img/`.
3. Refresh the page in your browser (hard refresh — `Ctrl+Shift+R` /
   `Cmd+Shift+R` — if an old placeholder still shows).
4. That's it — no PHP, CSS, or HTML editing required.
