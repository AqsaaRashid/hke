n<section class="hero-section">
    <!-- HERO BACKGROUND SLIDER -->
    <div class="hero-bg-slider">
        <div class="hero-bg-slide active" style="background-image:url('/images/header-bg.png');"></div>
        <div class="hero-bg-slide" style="background-image:url('/images/header-bg.png');"></div>
        <div class="hero-bg-slide" style="background-image:url('/images/header-bg.png');"></div>
    </div>
    <div class="hero-overlay d-flex align-items-center">
        <div class="container text-white">
            <div class="hero-content">
                <p class="breadcrumb-text">
<a href="{{ url('/') }}" class="breadcrumb-link">Home</a> &gt;Building Construction &gt;

</p>

                <h1 class="fw-bold" style="font-size:5rem;">BUILDING<br>CONSTRUCTION</h1>
                
                
            </div>
        </div>
    </div>

    <!-- Stats Section -->
    
</section>

<style>
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
/* animation */
/* ======================================
   HERO BACKGROUND SLIDER (FADE)
   ====================================== */

.hero-section {
    position: relative;
    overflow: hidden;
}

/* Slider wrapper */
.hero-bg-slider {
    position: absolute;
    inset: 0;
    z-index: 0;
}

/* Individual slides */
.hero-bg-slide {
    position: absolute;
    inset: 0;
    background-size: cover;
    background-position: center;
    opacity: 0;
    transform: scale(1.05);
    transition: opacity 1.5s ease-in-out, transform 6s linear;
}

/* Active slide */
.hero-bg-slide.active {
    opacity: 1;
    transform: scale(1);
}

/* Keep content above slider */
.hero-overlay {
    position: relative;
    z-index: 2;
}

</style>
<script>
/* ======================================
   HERO BACKGROUND SLIDER SCRIPT
   ====================================== */

document.addEventListener("DOMContentLoaded", () => {

    const slides = document.querySelectorAll(".hero-bg-slide");
    let current = 0;

    function showSlide(index) {
        slides.forEach((slide, i) => {
            slide.classList.toggle("active", i === index);
        });
    }

    function nextSlide() {
        current = (current + 1) % slides.length;
        showSlide(current);
    }

    // Initial state
    showSlide(current);

    // Auto slide every 5 seconds
    setInterval(nextSlide, 5000);
});
</script>
