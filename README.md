# NFTwebpageMallu 🎨🔥

[![Deploy to GitHub Pages](https://github.com/Abiramkrishn/NFTwebpageMallu/actions/workflows/pages.yml/badge.svg)](https://github.com/Abiramkrishn/NFTwebpageMallu/actions/workflows/pages.yml)
[![Live Demo](https://img.shields.io/badge/Live-GitHub%20Pages-brightgreen)](https://abiramkrishn.github.io/NFTwebpageMallu/)
[![Collection](https://img.shields.io/badge/Collectibles-1008%20Genesis-orange)](#-genesis-collection)
[![Chain](https://img.shields.io/badge/Chain-Ethereum%20%7C%20Polygon-blue)](#-ecosystem-pillars)

> **"The Sacred Living Gods of North Malabar, Immortalized as Immutable Digital Collectibles."**

A production-grade, interactive Web3 creative showcase and decentralized cultural heritage platform archiving Kerala's millennia-old **Theyyam** ritual performances into digital collectibles. Designed with responsive parallax layouts, full-resolution PhotoSwipe modal lightbox galleries, custom typography, dynamic masonry grids, and community whitelist workflows.

---

## 🌐 Live Website Preview

Experience the live deployment on GitHub Pages:
👉 **[https://abiramkrishn.github.io/NFTwebpageMallu/](https://abiramkrishn.github.io/NFTwebpageMallu/)**

---

## 📅 Project Timeline & Provenance

- **Project Timeline:** **May 23, 2023 – May 24, 2023** *(Strictly preserved)*
- **Repository:** [Abiramkrishn/NFTwebpageMallu](https://github.com/Abiramkrishn/NFTwebpageMallu.git)
- **Author & Creator:** [Abiram Krishn](https://github.com/Abiramkrishn)
- **Original Upload Date:** `Wed May 24 04:27:59 2023 +0530`

---

## 🎭 The Theyyam Genesis Collection

Theyyam is one of humanity’s oldest living ritual dance traditions, celebrated in the sacred groves (*Kavu*) of North Malabar, Kerala. Through sacred fire embers, hypnotic percussion (*Chenda*), and intricate organic face-painting (*Mukhathezhuthu*), human performers transcend mortality to embody divine forces.

### Featured Genesis Kolams:

| Deity / Kolam | Rarity Tier | Token ID | Cultural Iconography |
| :--- | :--- | :--- | :--- |
| **Gulikan Theyyam** | Mythic Deity | `#001` | Lord of time and mortality; towering conical bamboo headgear (*Mudi*), palm fronds, piercing ritual gaze. |
| **Muchilot Bhagavathi** | Divine Mother | `#007` | Supreme goddess of wisdom and benevolence; peacock-crested golden crowns, royal crimson silks, ceremonial sword. |
| **Kandanar Kelan** | Flame Leaper | `#024` | Heroic forest deity leaping dynamically across towering pyres of glowing sacred embers (*Theechamundi*). |
| **Raktha Chamundi** | Fierce Protector | `#042` | Cosmic warrior vanquishing adharma; vermilion face motifs, flaming aura, sacred garlands, and celestial scimitars. |
| **Vishnumoorthi** | Narasimha Avatar | `#077` | The roaring lion incarnation of divine righteousness, triumphing amid sacred drums and ritual fire pyres. |
| **Pottan Theyyam** | Folk Philosopher | `#108` | Folk sage and champion of social equality who historically proclaimed universal human oneness upon burning coals. |

---

## ⚡ Ecosystem Pillars & Features

1. **Sacred Archival:** High-fidelity visual curation and digital restoration capturing the rarest Kolams of North Malabar before endangered oral rituals fade from memory.
2. **Artist Empowerment & Restitution:** 10% perpetual smart contract secondary royalties directed to traditional temple performers, percussionists (*Chenda*), and hereditary costume artisans.
3. **Algorithmic Rarity Framework:** Attributes weighted according to authentic ritual characteristics: headgear styles, weapon iconography, ceremonial face pigments, and fire trials.
4. **Decentralized Provenance:** Permanent media pinning across IPFS and Arweave, secured on Ethereum/Polygon for multi-generational survival.
5. **Interactive PhotoSwipe Lightbox:** Lossless full-resolution modal inspection with responsive gesture navigation, zoom, and fullscreen controls.
6. **Heritage DAO Governance:** Community stewardship allowing collectors and cultural researchers to vote on research grants, temple restoration sponsorships, and regional collections.

---

## 🛠️ Technology Stack

- **Frontend:** Semantic HTML5, Modular CSS3 (Flexbox & CSS Grid), ES6+ JavaScript, jQuery 3.6.1.
- **Visuals & Interactivity:** 
  - [PhotoSwipe 4.1.3](https://photoswipe.com/) — Multi-touch full-resolution lightbox gallery with zoom.
  - [Masonry Grid](https://masonry.desandro.com/) — Fluid brick layout with automatic image loading synchronization.
  - [Slick Carousel](https://kenwheeler.github.io/slick/) — Responsive ecosystem partner slider with touch gestures.
  - [AOS (Animate On Scroll)](https://michalsnik.github.io/aos/) — Smooth viewport reveal animations.
  - [Pace.js](https://codebyzach.github.io/pace/) — Minimal, automatic page load progress indicator.
  - [Parallax.js](http://pixelcog.github.io/parallax.js/) — Dynamic background depth on scroll.
- **Typography:** Lora (Serif) & Montserrat (Geometric Sans-Serif) + FontAwesome 4.7 & custom IcoMoon vector glyphs.
- **Backend Handler:** PHP contact & whitelist submission processor (`inc/sendEmail.php`).
- **CI/CD & Deployment:** GitHub Actions automated deployment workflow (`.github/workflows/pages.yml`) with `.nojekyll` static hosting support.

---

## 📂 Project Structure

```
NFTwebpageMallu/
├── .github/
│   └── workflows/
│       └── pages.yml                 # Automated GitHub Pages CI/CD workflow
├── .nojekyll                         # Disables Jekyll processing on GitHub Pages
├── css/
│   ├── base.css                      # Base layout & font-awesome / micons import paths
│   ├── font-awesome/
│   │   ├── css/font-awesome.min.css  # Standard font-awesome stylesheet
│   │   └── fonts/                    # FontAwesome vector glyphs (woff2)
│   ├── fonts.css                     # Lora & Montserrat rules + Google Fonts fallback
│   ├── main.css                      # Responsive layout, grid & theme styling
│   ├── micons/
│   │   ├── fonts/icomoon4286.ttf     # Custom UI icon vector font
│   │   └── micons.css                # Icon mapping declarations
│   └── vendor.css                    # PhotoSwipe, Slick, and AOS styling
├── fonts/
│   ├── lora/                         # Lora serif font family (woff2)
│   └── montserrat/                   # Montserrat sans-serif family (woff2)
├── images/
│   ├── avatars/                      # Collector and researcher avatars
│   ├── clients/                      # Web3 ecosystem partner badges
│   ├── portfolio/
│   │   ├── gallery/                  # High-res PhotoSwipe lightbox modal assets
│   │   └── theyyam-*.jpg             # Grid thumbnail artworks (6 deities)
│   ├── photoswipe/                   # Lightbox controls (default-skin.png & svg)
│   ├── hero-bg.jpg                   # High-res cinematic ritual night hero background
│   ├── logo.png                      # Custom Theyyam NFT brand mark
│   └── logo-footer.png               # Footer brand mark
├── inc/
│   └── sendEmail.php                 # AJAX whitelist / contact form processor
├── js/
│   ├── jquery-3.6.1.min.js           # Core DOM library
│   ├── main.js                       # Preloader, sliders, lightbox & smoothscroll
│   ├── modernizr.js                  # Browser feature detection
│   ├── pace.min.js                   # Minimal page progress bar
│   └── plugins.js                    # Slick, Masonry, PhotoSwipe, Waypoints bundle
├── favicon.ico                       # Custom brand favicon
├── index.html                        # Main webpage entry point
└── README.md                         # Project documentation & portfolio summary
```

---

## 💻 Local Setup & Execution

To run the project locally:

```bash
# Clone the repository
git clone https://github.com/Abiramkrishn/NFTwebpageMallu.git

# Navigate into the project directory
cd NFTwebpageMallu

# Start a local HTTP server using Python 3
python -m http.server 8000
```

Open your browser and navigate to `http://localhost:8000`.

---

## 📜 Credits & Cultural Attribution

- **Cultural Lore & Concept:** Deeply rooted in the indigenous sacred ritual traditions of North Malabar, Kerala, India.
- **Creative Curation & Engineering:** Developed and presented by [Abiram Krishn](https://github.com/Abiramkrishn).
- **License:** Open for cultural preservation, research, and non-commercial educational review.
