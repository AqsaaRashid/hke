<section class="hero-section">
    <!-- HERO BACKGROUND SLIDER (ADD ONLY) -->
<div class="hero-bg-slider">
    <div class="hero-bg-slide active" style="background-image:url('/images/header-bg.png');"></div>
    <div class="hero-bg-slide" style="background-image:url('/images/header-bg.png');"></div>
    <div class="hero-bg-slide" style="background-image:url('/images/header-bg.png');"></div>
</div>

    
    <div class="hero-overlay d-flex align-items-center">
        <div class="container text-white">
            <div class="hero-content">
                <h1 class="fw-bold">ENGINEERING<br>YOUR DREAMS</h1>
                <p class="lead mt-2">Crafting the future of construction.</p>
                <!-- Hero Animated Slider (ADD ONLY) -->
<div class="hero-slider mt-3">
    <span class="slide active">Residential Construction</span>
    <span class="slide">Commercial Projects</span>
    <span class="slide">Industrial Engineering</span>
    <span class="slide">Smart Infrastructure</span>
</div>

                <div class="hero-buttons mt-4">
                    <a href="services" class="btn btn-primary me-2">OUR SERVICES</a>
                    <a href="javascript:void(0)" class="btn btn-light text-dark" onclick="openQuote()">REQUEST A QUOTE</a>
                </div>
            </div>
        </div>
    </div>

    <!-- Stats Section -->
    <div class="container position-relative" >
        <div class="row stats-row justify-content-center text-white gx-0">
            <div class="col-md-4 col-sm-12">
                <div class="stat-card dark-blue d-flex align-items-center justify-content-center p-4">
                    <i class="fas fa-building me-3"></i>
                    <div>
                        <h4>09K+</h4>
                        <p>Successful Projects</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-sm-12">
                <div class="stat-card medium-blue d-flex align-items-center justify-content-center p-4">
                    <i class="fas fa-users me-3"></i>
                    <div>
                        <h4>200+</h4>
                        <p>Professional Team</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-sm-12">
                <div class="stat-card light-blue d-flex align-items-center justify-content-center p-4">
                    <i class="fas fa-smile me-3"></i>
                    <div>
                        <h4>12K+</h4>
                        <p>Satisfied Clients</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

</section>
    
<!-- ===== QUOTE POPUP MODAL ===== -->
<div id="quoteModal" class="quote-overlay">
    <div class="quote-popup">
        <h3>REQUEST QUOTE</h3>

        <form>
            <div class="quote-row">
                <input type="text" placeholder="Your Name">
                <input type="email" placeholder="Your Email">
            </div>

            <input type="text" placeholder="Subject">

            <textarea placeholder="Message"></textarea>

            <button class="quotee-btn">REQUEST A QUOTE</button>
        </form>

        <span class="close-btn" onclick="closeQuote()">✕</span>
    </div>
</div>
<script>
function openQuote() {
    document.getElementById('quoteModal').style.display = 'flex';
}

function closeQuote() {
    document.getElementById('quoteModal').style.display = 'none';
}
</script>



<style>
  .quote-overlay {
    position: fixed;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background: rgba(0,0,0,0.45);
    display: none;
    justify-content: center;
    align-items: center;
    z-index: 99999;
}

.quote-popup {
    width: 450px;
    background: white;
    padding: 25px;
    border-radius: 6px;
    box-shadow: 0 4px 18px rgba(0,0,0,0.2);
    position: relative;
    font-family: 'Segoe UI';
}

.quote-popup h3 {
    font-size: 18px;
    font-weight: 700;
    margin-bottom: 20px;
    color: #04182F;
}

.quote-row {
    display: flex;
    gap: 10px;
    margin-bottom: 12px;
}

.quote-row input,
.quote-popup input,
.quote-popup textarea {
    background: #f7f8fa;
    border: 1px solid #e3e5e7;
    padding: 12px;
    width: 100%;
    border-radius: 4px;
    font-size: 14px;
}

.quote-popup textarea {
    height: 120px;
    resize: none;
    margin-top: 10px;
    margin-bottom: 15px;
}

.quotee-btn {
    width: 100%;
    padding: 14px;
    background: #2761A3;
    color: white;
    border: none;
    border-radius: 4px;
    font-weight: 600;
    font-size: 14px;
    cursor: pointer;
}

.close-btn {
    position: absolute;
    top: 12px;
    right: 15px;
    font-size: 18px;
    cursor: pointer;
    color: #555;
}
/* =======================================
   HERO SECTION RESPONSIVE FIXES
   ======================================= */

/* Tablet & Mobile */
@media (max-width: 992px) {

    .hero-section {
        text-align: center;
    }

    .hero-content h1 {
        font-size: 40px;
        line-height: 1.2;
    }

    .hero-content p {
        font-size: 16px;
    }

    .hero-buttons {
        display: flex;
        flex-direction: column;
        align-items: center;
        gap: 12px;
    }

    .hero-buttons .btn {
        width: 80%;
        max-width: 280px;
    }
}


/* Mobile Only */
@media (max-width: 768px) {

    .hero-content h1 {
        font-size: 32px;
        line-height: 1.2;
    }

    .hero-content p {
        font-size: 15px;
    }

    .hero-overlay {
        padding: 60px 0;
    }

    /* Stats section */
    .stats-row {
        margin-top: 20px !important;
    }

    .stat-card {
        margin-bottom: 15px;
        text-align: center;
        padding: 20px !important;
        border-radius: 6px;
    }

    .stat-card i {
        font-size: 26px !important;
        margin-bottom: 6px;
    }

    .stat-card h4 {
        font-size: 22px;
        margin: 5px 0;
    }

    .stat-card p {
        font-size: 14px;
        margin: 0;
    }
}


/* Extra Small Phones */
@media (max-width: 480px) {

    .hero-content h1 {
        font-size: 26px;
    }

    .hero-buttons .btn {
        width: 100%;
    }

    .stat-card {
        padding: 16px !important;
    }

    .stat-card i {
        font-size: 22px !important;
    }
}

/* =======================================
   HERO TEXT SLIDER (ADD ONLY)
   ======================================= */

.hero-slider {
    position: relative;
    height: 28px;
    overflow: hidden;
    font-weight: 600;
    font-size: 18px;
    color: #ffffff;
}

.hero-slider .slide {
    position: absolute;
    left: 0;
    right: 0;
    opacity: 0;
    transform: translateY(100%);
    transition: all 0.6s ease-in-out;
}

.hero-slider .slide.active {
    opacity: 1;
    transform: translateY(0);
}

/* Mobile size tweak */
@media (max-width: 768px) {
    .hero-slider {
        font-size: 16px;
        height: 24px;
    }
}
/* =======================================
   HERO BACKGROUND SLIDER (SAFE VERSION)
   DOES NOT AFFECT STATS CARDS
   ======================================= */

.hero-section {
    position: relative;
    overflow: hidden;
}

/* Background slider layer */
.hero-bg-slider {
    position: absolute;
    inset: 0;
    z-index: 0; /* BELOW content, ABOVE body */
}

/* Each slide */
.hero-bg-slide {
    position: absolute;
    inset: 0;
    background-size: cover;
    background-position: center;
    opacity: 0;
    transform: scale(1.08);
    transition:
        opacity 1.4s ease-in-out,
        transform 6s ease-in-out;
}

/* Active slide */
.hero-bg-slide.active {
    opacity: 1;
    transform: scale(1);
}

/* Ensure content + stats stay on top */
.hero-overlay,
.stats-row {
    position: relative;
    z-index: 2;
}

/* === FIX: Allow stats cards to be visible === */
.hero-section {
    overflow: visible !important;
}
/* === FIX: Force stats above background slider === */
.stats-row {
    position: absolute;
    bottom: -50px;
    left: 0;
    right: 0;
    z-index: 5;
}
/* =======================================
   STAT CARD ANIMATION (PROFESSIONAL)
   ======================================= */

.stat-card {
    opacity: 0;
    transform: translateY(30px);
    transition:
        opacity 0.8s ease,
        transform 0.8s ease;
}

/* When visible */
.stat-card.animate {
    opacity: 1;
    transform: translateY(0);
}

/* Slight hover polish (optional but premium) */
.stat-card:hover {
    transform: translateY(-4px);
    transition: transform 0.3s ease;
}
/* =======================================
   FIX STATS RESPONSIVENESS (MOBILE ONLY)
   ======================================= */

@media (max-width: 768px) {

    .stats-row {
        position: static !important;   /* remove absolute */
        margin-top: 30px !important;   /* spacing below hero */
        z-index: auto;
    }

    .hero-section {
        padding-bottom: 30px; /* space for stats */
    }
}
html, body {
    overflow-x: hidden !important;
}

</style>
<script>
/* Hero Slider Animation (ADD ONLY) */
let slides = document.querySelectorAll('.hero-slider .slide');
let currentSlide = 0;

setInterval(() => {
    slides[currentSlide].classList.remove('active');
    currentSlide = (currentSlide + 1) % slides.length;
    slides[currentSlide].classList.add('active');
}, 2500);
</script>
<script>
/* HERO BACKGROUND IMAGE SLIDER – SAFE */
const heroBgSlides = document.querySelectorAll('.hero-bg-slide');
let heroBgIndex = 0;

setInterval(() => {
    heroBgSlides[heroBgIndex].classList.remove('active');
    heroBgIndex = (heroBgIndex + 1) % heroBgSlides.length;
    heroBgSlides[heroBgIndex].classList.add('active');
}, 5000);
</script>
<script>
/* =======================================
   STATS ANIMATION + COUNT UP
   ======================================= */

document.addEventListener("DOMContentLoaded", () => {
    const cards = document.querySelectorAll(".stat-card");

    cards.forEach((card, index) => {
        // Stagger animation
        setTimeout(() => {
            card.classList.add("animate");
            animateCount(card);
        }, index * 200);
    });
});

/* Count-up animation */
function animateCount(card) {
    const numberEl = card.querySelector("h4");
    if (!numberEl) return;

    const text = numberEl.innerText.replace("+", "").replace("K", "");
    const isK = numberEl.innerText.includes("K");
    const target = parseInt(text) * (isK ? 1000 : 1);

    let current = 0;
    const increment = Math.ceil(target / 60);

    const counter = setInterval(() => {
        current += increment;
        if (current >= target) {
            clearInterval(counter);
            numberEl.innerText = isK
                ? (target / 1000).toFixed(0) + "K+"
                : target + "+";
        } else {
            numberEl.innerText = isK
                ? Math.floor(current / 1000) + "K+"
                : current + "+";
        }
    }, 20);
}
</script>
