# Samsung Zenith — Website

A 7-page website recreating the Samsung Zenith Figma prototype in code:
**HTML5 (via PHP templates) · CSS3 · JavaScript · PHP · MySQL**

## Pages

| Page | File |
|---|---|
| Home | `index.php` |
| About | `about.php` |
| Products | `products.php` |
| Product Detail | `product-detail.php?slug=zenith-prime` |
| Gallery | `gallery.php` |
| Media | `media.php` |
| Contact | `contact.php` |

## Project structure

```
zenith/
├── index.php, about.php, products.php, ...   ← the 7 pages
├── includes/
│   ├── header.php       sticky nav, <head>, opens <body>
│   ├── footer.php        footer, newsletter form, closes </body>
│   ├── functions.php    data access + fallback content + helpers
│   └── db.php           MySQL (mysqli) connection
├── api/
│   ├── contact-submit.php       handles the Contact page form (AJAX)
│   └── newsletter-submit.php    handles newsletter sign-ups (AJAX)
├── css/style.css        full design system + all page styles
├── js/main.js           nav toggle, forms, filters, scroll reveal
├── sql/schema.sql       database schema + seed data
└── assets/img/          drop your real product photography here
```

## Setup

1. **Database**
   ```bash
   mysql -u root -p -e "CREATE DATABASE zenith_db"
   mysql -u root -p zenith_db < sql/schema.sql
   ```
2. **Configure credentials** in `includes/db.php` (`DB_HOST`, `DB_NAME`, `DB_USER`, `DB_PASS`).
3. **Run locally**, e.g. with PHP's built-in server from the project root:
   ```bash
   php -S localhost:8000
   ```
   Then visit `http://localhost:8000/index.php`.

   Works equally well on XAMPP/MAMP/WAMP or any Apache/Nginx + PHP + MySQL stack —
   just place the `zenith/` folder inside your server's document root.

> **The site works even without a database connected.** Every data-driven page
> (products, media, events) has a static fallback in `includes/functions.php`,
> so you can preview the whole site before MySQL is set up, and the contact/
> newsletter forms will still respond (in "demo mode") until the DB is live.

## Notes on assets

No real product photography was supplied, so product/gallery imagery is
represented with styled placeholder blocks (`.media-block`, `.card-media`,
`.gallery-item`) rather than fake stock photos. Drop real images into
`assets/img/` and swap them in via the `hero_image` / `image_path` columns
(products already read from `hero_image`) or directly in the markup.

## Design reference

Built from the provided Figma prototype screenshots — dark/black premium
theme (`#0B0B0B` background, silver `#C0C0C0` and white text), Poppins for
headings, Inter for body copy — matching the site's 7-page IA: Home, About,
Products, Product Detail, Gallery, Media, Contact.

Because the reference screenshots were low-resolution thumbnails, layout and
section order were matched closely, but exact spacing/typography scale was
interpreted using consistent design-system values rather than pixel-measured.
If you can export higher-resolution PNGs (or a Figma dev-mode inspect link)
per page, send them over and I can tighten up spacing, sizing and any copy
to match exactly.
