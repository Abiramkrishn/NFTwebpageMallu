# NFTwebpageMallu 🎨

[![Deploy to GitHub Pages](https://github.com/Abiramkrishn/NFTwebpageMallu/actions/workflows/pages.yml/badge.svg)](https://github.com/Abiramkrishn/NFTwebpageMallu/actions/workflows/pages.yml)
[![Live Demo](https://img.shields.io/badge/Live-GitHub%20Pages-brightgreen)](https://abiramkrishn.github.io/NFTwebpageMallu/)

A responsive, high-performance web showcase and digital agency template customized for the **NFTwebpageMallu** creative portfolio. Originally initiated as a technical exploration and evaluation of web scraping pipelines and asset extraction, then adapted into a dedicated interactive digital showcase.

---

## 📅 Project Timeline

- **Project Timeline:** **May 23, 2023 – May 24, 2023** *(Strictly maintained)*
- **Original Upload Date:** `Wed May 24 04:27:59 2023 +0530`
- **Initial Commit Hash:** `e516e1d32bad2c91aedb23a0b6500f5800d5b52a`

---

## 🚀 Live Demo

Experience the live deployment on GitHub Pages:
👉 **[https://abiramkrishn.github.io/NFTwebpageMallu/](https://abiramkrishn.github.io/NFTwebpageMallu/)**

---

## 🛠️ Project Background & Work Details

### 1. Web Scraping Test & Asset Extraction Phase
The foundation of the site was captured during an automated web scraping evaluation test:
- **Scraping Source:** Interactive creative agency layout (`preview.colorlib.com/theme/glint/`).
- **Tools:** Automated crawler / `HTTrack Website Copier [XR&CO'2014]`.
- **Extraction Scope:** Semantic HTML structure, modular stylesheets (`base.css`, `main.css`, `vendor.css`), and JavaScript vendor suites.

### 2. Adaptation to User Idea
- Preserved the user's custom concept and identity for **NFTwebpageMallu** without overwriting it with an unmodified template clone.
- Structured sections for creative presentation, portfolio showcase, partner logos, statistics, and contact messaging.

### 3. Missing Asset Restoration & Pipeline Fixes
Automated scrapers commonly omit dynamic or nested assets. The following assets and fixes were integrated:
- **Hero Background:** Restored full-resolution 740 KB parallax image (`images/hero-bg.jpg`), replacing a corrupted 2.9 KB placeholder.
- **PhotoSwipe Gallery:** Rebuilt `images/portfolio/gallery/` containing all 6 full-resolution modal preview images (`g-shutterbug.jpg`, `g-woodcraft.jpg`, `g-beetle.jpg`, `g-grow-green.jpg`, `g-guitarist.jpg`, `g-palmeira.jpg`).
- **Typography & Fonts:** Restored local WOFF2 packages for `Lora` and `Montserrat` in `fonts/`, alongside FontAwesome and IcoMoon vector font files. Added Google Fonts resilience fallback.
- **Client Logos:** Corrected broken double extensions (`dropbox.png.png`, `envato.png.png` → clean PNGs).
- **PhotoSwipe UI Assets:** Added `default-skin.png` and `default-skin.svg` to `images/photoswipe/`.
- **DOM & Script Cleanup:** Removed orphaned Cloudflare Zaraz tracking tags and decoded obfuscated email tokens into clean `mailto:` links.
- **Backend Handler:** Added `inc/sendEmail.php` to handle AJAX contact submissions.
- **Favicon:** Created `favicon.ico` for clean tab rendering.

### 4. GitHub Pages Support
- Added `.nojekyll` to disable Jekyll processing of static assets and font directories.
- Configured automated GitHub Actions deployment workflow [`.github/workflows/pages.yml`](.github/workflows/pages.yml).
- Ensured 100% relative paths across all CSS and HTML references for subdirectory hosting support.

---

## 📂 Project Architecture

```
NFTwebpageMallu/
├── .github/
│   └── workflows/
│       └── pages.yml                 # Automated GitHub Pages CI/CD workflow
├── .nojekyll                         # Bypasses Jekyll on GitHub Pages
├── css/
│   ├── base.css                      # Base layout & font-awesome / micons import paths
│   ├── font-awesome/
│   │   ├── css/font-awesome.min.css  # Restored path for base.css @import
│   │   └── fonts/                    # FontAwesome vector glyphs
│   ├── fonts.css                     # Lora & Montserrat rules + Google Fonts fallback
│   ├── main.css                      # Responsive layout, grid & theme styling
│   ├── micons/
│   │   ├── fonts/icomoon4286.ttf     # Custom UI icon vector font
│   │   └── micons.css                # Icon mapping declarations
│   └── vendor.css                    # PhotoSwipe, Slick, and AOS styling
├── fonts/
│   ├── lora/                         # Lora serif font family
│   └── montserrat/                   # Montserrat geometric sans-serif family
├── images/
│   ├── avatars/                      # Testimonial avatars
│   ├── clients/                      # Partner brand logos
│   ├── portfolio/
│   │   ├── gallery/                  # Full-res PhotoSwipe lightbox assets
│   │   └── *.jpg                     # Masonry grid thumbnails
│   ├── photoswipe/                   # Lightbox controls (default-skin)
│   └── hero-bg.jpg                   # High-res parallax background
├── inc/
│   └── sendEmail.php                 # AJAX contact form processor
├── js/
│   ├── jquery-3.6.1.min.js           # Core DOM library
│   ├── main.js                       # Preloader, sliders, lightbox & smoothscroll
│   ├── modernizr.js                  # Browser feature detection
│   ├── pace.min.js                   # Minimal page progress bar
│   └── plugins.js                    # Slick, Masonry, PhotoSwipe, Waypoints bundle
├── favicon.ico                       # Site favicon
├── index.html                        # Main webpage entry point
└── README.md                         # Project documentation & work details
```

---

## 💻 Local Development

To run the website locally:

```bash
# Clone the repository
git clone https://github.com/Abiramkrishn/NFTwebpageMallu.git

# Navigate into the project folder
cd NFTwebpageMallu

# Start a simple local HTTP server (Python 3)
python -m http.server 8000
```

Open your browser and navigate to `http://localhost:8000`.

---

## 📜 License & Credits

- Template base originally designed by [Colorlib](https://colorlib.com/).
- Customized & evaluated for web scraping testing by **Abiramkrishn**.
