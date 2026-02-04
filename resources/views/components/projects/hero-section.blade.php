<section class="hero-section">
      <div class="hero-bg-slider">
        <div class="hero-bg-slide active" style="background-image:url('/images/header-bg.png');"></div>
        <div class="hero-bg-slide" style="background-image:url('/images/header-bg.png');"></div>
        <div class="hero-bg-slide" style="background-image:url('/images/header-bg.png');"></div>
    </div>
    <div class="hero-overlay d-flex align-items-center">
        <div class="container text-white">
            <div class="hero-content hero-animate">
                
                <p class="breadcrumb-text">
                    <a href="{{ url('/') }}" class="breadcrumb-link">Home</a> &gt; Projects &gt;
                </p>

                <h1 class="fw-bold" style="font-size:4rem;">
                    RECENT<br>PROJECTS
                </h1>

            </div>
        </div>
    </div>
</section>

<style>
    /* =====================================
   HERO – CLASSIC SCROLL ANIMATION
===================================== */

.hero-animate {
    opacity: 0;
    transform: translateY(40px);
    transition: opacity 0.9s ease, transform 0.9s ease;
}

.hero-animate.animate {
    opacity: 1;
    transform: translateY(0);
}

/* Stagger breadcrumb & heading */
.hero-animate .breadcrumb-text {
    transition-delay: 0.1s;
}

.hero-animate h1 {
    transition-delay: 0.25s;
}
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

</style>
<script>
document.addEventListener("DOMContentLoaded", () => {

    /* ===============================
       HERO BACKGROUND SLIDER
    ================================ */
    const heroBgSlides = document.querySelectorAll(".hero-bg-slide");
    let heroBgIndex = 0;

    if (heroBgSlides.length > 1) {
        setInterval(() => {
            heroBgSlides[heroBgIndex].classList.remove("active");
            heroBgIndex = (heroBgIndex + 1) % heroBgSlides.length;
            heroBgSlides[heroBgIndex].classList.add("active");
        }, 5000);
    }

    /* ===============================
       HERO TEXT SCROLL ANIMATION (REPEAT)
    ================================ */
    const heroText = document.querySelector(".hero-animate");

    if (!heroText) return;

    const observer = new IntersectionObserver(
        (entries) => {
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