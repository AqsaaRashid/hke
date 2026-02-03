<section class="hero-section">

    <!-- HERO BACKGROUND SLIDER -->
    <div class="hero-bg-slider">
        <div class="hero-bg-slide active" style="background-image:url('/images/header-bg.png');"></div>
        <div class="hero-bg-slide" style="background-image:url('/images/header-bg.png');"></div>
        <div class="hero-bg-slide" style="background-image:url('/images/header-bg.png');"></div>
    </div>

    <div class="hero-overlay d-flex align-items-center">
        <div class="container text-white">
            <div class="hero-content hero-animate">
                <p class="breadcrumb-text">
                    <a href="{{ url('/') }}" class="breadcrumb-link">Home</a> &gt; About Us &gt;
                </p>

                <h1 class="fw-bold">ABOUT US</h1>
            </div>
        </div>
    </div>
</section>

<style>
    /* ===========================
   HERO RESPONSIVE FIXES
=========================== */

/* Base styling improvements */
.hero-section {
    position: relative;
}

.hero-overlay {
    min-height: 280px;              /* Keeps good height on all screens */
    padding: 50px 0;
    background-size: cover;
    background-position: center;
}

.hero-content {
    text-align: left;
}

.breadcrumb-text {
    font-size: 14px;
    opacity: 0.9;
    margin-bottom: 5px;
}

.breadcrumb-link {
    color: #fff;
    text-decoration: none;
    font-weight: 500;
}

.breadcrumb-link:hover {
    text-decoration: underline;
}

/* Desktop title size */
.hero-content h1 {
    font-size: 48px;
    font-weight: 800;
}



/* ===========================
   TABLET (≤ 992px)
=========================== */
@media (max-width: 992px) {
    .hero-overlay {
        text-align: center;
        padding: 60px 0;
    }

    .hero-content {
        text-align: center;
    }

    .breadcrumb-text {
        font-size: 13px;
    }

    .hero-content h1 {
        font-size: 38px;
    }
}



/* ===========================
   MOBILE (≤ 768px)
=========================== */
@media (max-width: 768px) {

    .hero-overlay {
        padding: 50px 15px;
    }

    .hero-content h1 {
        font-size: 30px;
    }

    .breadcrumb-text {
        font-size: 12px;
    }
}



/* ===========================
   SMALL PHONES (≤ 480px)
=========================== */
@media (max-width: 480px) {

    .hero-overlay {
        padding: 40px 10px;
    }

    .hero-content h1 {
        font-size: 26px;
    }

    .breadcrumb-text {
        font-size: 11px;
    }
}


/* ===========================
   HERO BACKGROUND SLIDER
=========================== */

.hero-section {
    position: relative;
    overflow: hidden;
}

.hero-bg-slider {
    position: absolute;
    inset: 0;
    z-index: 0;
}

.hero-bg-slide {
    position: absolute;
    inset: 0;
    background-size: cover;
    background-position: center;
    opacity: 0;
    transform: scale(1.08);
    transition: opacity 1.4s ease-in-out, transform 6s ease-in-out;
}

.hero-bg-slide.active {
    opacity: 1;
    transform: scale(1);
}

/* Keep content above slider */
.hero-overlay {
    position: relative;
    z-index: 2;
    background: rgba(0,0,0,0.45);
}

/* ===========================
   HERO TEXT ANIMATION
=========================== */

.hero-animate {
    opacity: 0;
    transform: translateY(30px);
    transition: opacity 0.9s ease, transform 0.9s ease;
}

.hero-animate.animate {
    opacity: 1;
    transform: translateY(0);
}

</style>

<script>
/* =====================================
   HERO BACKGROUND IMAGE SLIDER
   ===================================== */
const heroBgSlides = document.querySelectorAll('.hero-bg-slide');
let heroBgIndex = 0;

setInterval(() => {
    heroBgSlides[heroBgIndex].classList.remove('active');
    heroBgIndex = (heroBgIndex + 1) % heroBgSlides.length;
    heroBgSlides[heroBgIndex].classList.add('active');
}, 5000);


/* =====================================
   HERO TEXT SCROLL ANIMATION (REPEAT)
   ===================================== */
document.addEventListener("DOMContentLoaded", () => {
    const heroText = document.querySelector(".hero-animate");

    if (!heroText) return;

    const observer = new IntersectionObserver(
        entries => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.classList.add("animate");
                } else {
                    entry.target.classList.remove("animate");
                }
            });
        },
        { threshold: 0.5 }
    );

    observer.observe(heroText);
});
</script>
