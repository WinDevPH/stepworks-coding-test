# Stepworks coding test

Custom WordPress theme for the product landing page. Built from the Figma frames (desktop ~1440, mobile ~375). No Elementor or other page builders - content is edited through ACF.

---

## How to run it locally

I used XAMPP on Windows. Rough steps:

1. Start Apache + MySQL.
2. Drop this theme into `wp-content/themes/stepworks`.
3. Activate **Advanced Custom Fields** (included under `wp-content/plugins/advanced-custom-fields`, or install the free one from wordpress.org).
4. Activate the **Stepworks Coding Test** theme.
5. Under Settings → Reading, set a static front page (e.g. Home).
6. Visit the site — locally that was `http://127.0.0.1/stepworks/`.

If you’re starting from a blank WordPress install:

- Create a DB (I used `stepworks_test`, user `root`, empty password).
- Point `wp-config.php` at that DB and finish the WP install as usual.

Optional WP-CLI bits I used:

```bash
php wp-cli.phar theme activate stepworks
php wp-cli.phar plugin activate advanced-custom-fields
```

---

## Editing content

Once ACF is on, there’s a **Landing Content** menu in the admin. That's the whole page: header/regions/mega menu, hero slides, features, CTA, news, footer.

I registered the field groups in PHP (`inc/acf-fields.php`) instead of only storing them in the database, so the theme stays portable when you zip it up. Values live on an ACF options page so a client doesn't have to dig into the page editor.

Helper `stepworks_field()` (`inc/helpers.php`) reads the option, then falls back to `inc/defaults.php` if something’s empty. That way the page still looks filled out before anyone types real copy.

---

## Animations (GSAP)

I'm using GSAP 3 + ScrollTrigger from the CDN, wired up in `assets/js/main.js`.

- On load: header + hero content stagger in (fade / slide up).
- On scroll: features, CTA, news, footer pieces animate when they come into view.
- Mega menu: CSS for the panel open; a light motion on the content when you switch items.
- The hero line graphic has a slow spin (optional polish from the brief).
- Skips the motion if the user has `prefers-reduced-motion` on.

Nothing too flashy; just enough to feel finished.

---

## Folder layout

```
stepworks/
├── assets/css/main.css
├── assets/js/main.js
├── assets/images/
├── inc/                 # ACF fields, defaults, helpers, enqueue
├── template-parts/      # header, hero, features, CTA, news, footer
├── front-page.php
├── functions.php
└── style.css
```

---

## What's in the submission zip

Just the theme and ACF, not the whole WordPress core:

```
wp-content/
  themes/stepworks/
  plugins/advanced-custom-fields/
```

---

## A few notes from building it

I worked mostly from the exported frames when Figma Dev Mode wasn't available. Brand colours came from the swatches in the asset pack (`#C33B32`, `#3F4C54`, etc.).

Where copy felt too long for the layout (especially hero slides on mobile), I shortened it a bit so it still matched the design rhythm.

Desktop mega menu is hover/click; mobile uses a side drawer with nested panels. Defaults in PHP saved a lot of time when checking the page before filling ACF.
