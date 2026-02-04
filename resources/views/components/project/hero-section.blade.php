<section class="hero-section">
     <!-- HERO BACKGROUND SLIDER -->
    <div class="hero-bg-slider">
        <div class="hero-bg-slide active" style="background-image:url('/images/header-bg.png');"></div>
        <div class="hero-bg-slide" style="background-image:url('/images/header-bg.png');"></div>
        <div class="hero-bg-slide" style="background-image:url('/images/header-bg.png');"></div>
    </div>
    <div class="hero-overlay d-flex align-items-center">
        <div class="container text-white">
            <div class="hero-content">
                <p class="breadcrumb-text hero-animate">
                    <a href="{{ url('/') }}" class="breadcrumb-link">Home</a> &gt; Sitara Market &gt;
                </p>

                <h1 class="fw-bold hero-animate" style="font-size:5rem;">
                    SITARA<br> MARKET
                </h1>
            </div>
        </div>
    </div>
</section>


<style>
    /* ===============================
   HERO BASE
================================ */

.hero-section {
    position: relative;
    overflow: hidden;
}

/* ===============================
   BACKGROUND SLIDER
================================ */

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

/* ===============================
   OVERLAY
================================ */

.hero-overlay {
    position: relative;
    z-index: 2;
    background: rgba(0,0,0,0.45);
}

    /* ======================================
   HERO TEXT SCROLL ANIMATION
====================================== */

.hero-animate {
    opacity: 0;
    transform: translateY(35px);
    transition: opacity 0.9s ease, transform 0.9s ease;
}

.hero-animate.animate {
    opacity: 1;
    transform: translateY(0);
}

    /* ======================================
   RESPONSIVE – HERO SECTION
   ====================================== */

/* Large screens already fine — no change */

/* Laptop / Tablet */
@media (max-width: 1024px) {
    
    .hero-content h1 {
        font-size: 4rem !important;
        line-height: 1.15;
    }

    
}

/* Tablet & Small Laptop */
@media (max-width: 768px) {
    
    .hero-content h1 {
        font-size: 3.2rem !important;
        line-height: 1.2;
    }

    
}

/* Mobile */
@media (max-width: 576px) {
    
    .hero-content h1 {
        font-size: 2.6rem !important;
        line-height: 1.2;
    }

    
}

/* Small Mobile */
@media (max-width: 420px) {
    

    .hero-content h1 {
        font-size: 2.2rem !important;
        line-height: 1.25;
    }

    
}

</style>
<script>
document.addEventListener("DOMContentLoaded", () => {

    /* ===============================
       HERO TEXT SCROLL ANIMATION
    ================================ */
    const animatedItems = document.querySelectorAll(".hero-animate");

    if (!animatedItems.length) return;

    const observer = new IntersectionObserver(
        entries => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.classList.add("animate");
                } else {
                    entry.target.classList.remove("animate"); // replay on scroll
                }
            });
        },
        { threshold: 0.4 }
    );

    animatedItems.forEach(item => observer.observe(item));

    /* ===============================
       HERO BACKGROUND SLIDER
    ================================ */
    const slides = document.querySelectorAll(".hero-bg-slide");
    let index = 0;

    if (slides.length > 1) {
        setInterval(() => {
            slides[index].classList.remove("active");
            index = (index + 1) % slides.length;
            slides[index].classList.add("active");
        }, 5000);
    }

});
</script>
