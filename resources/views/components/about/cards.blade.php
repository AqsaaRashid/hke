<section class="history-section">

    <!-- Big Image Box -->
    <div class="history-image-box">
        <img src="/images/header-bg.png" alt="History Image">

        <div class="history-icon">
            <i class="bi bi-twitter"></i>
        </div>
    </div>

    <!-- Cards Row -->
    <div class="history-cards">

        <!-- Card 1 -->
        <!-- Card 1 -->
<div class="history-card">
    <span class="year-badge">1986</span>
    <h3>Foundation & Beginnings</h3>
    <p style=" text-align: justify !important;">We started with a small team and a big vision, focusing on delivering reliable and quality 
       construction services. This phase laid the groundwork for our reputation in the industry.</p>
</div>

<!-- Card 2 -->
<div class="history-card">
    <span class="year-badge">2002</span>
    <h3>Growth & Expansion</h3>
    <p style=" text-align: justify !important;">As demand grew, we expanded our services, took on larger projects, and built a skilled team. 
       During this phase, we strengthened our capabilities & established long-term clients.</p>
</div>

<!-- Card 3 -->
<div class="history-card">
    <span class="year-badge">2025</span>
    <h3>Excellence & Innovation</h3>
    <p style=" text-align: justify !important;">Today, we combine experience, modern techniques, and innovative solutions to deliver 
       landmark projects. Our focus remains on quality, sustainability, exceeding client expectations.</p>
</div>


    </div>

</section>
<style>
 /* ============================================================
   HISTORY SECTION — RESPONSIVE FIXES
============================================================ */

/* Large Tablets (max-width: 992px) */
@media (max-width: 992px) {

    .history-image-box img {
        height: 350px; /* smaller height for medium screens */
    }

    .history-icon {
        width: 65px;
        height: 65px;
    }

    .history-icon i {
        font-size: 26px;
    }

    .history-cards {
        grid-template-columns: repeat(2, 1fr); /* 3 → 2 layout */
        gap: 20px;
    }
}


/* Tablets & Large Phones (max-width: 768px) */
@media (max-width: 768px) {

    /* .history-section {
        padding: 30px 15px 60px;
    } */

    .history-image-box {
        margin-bottom: 30px;
    }

    .history-image-box img {
        height: 280px;
    }

    .history-icon {
        width: 60px;
        height: 60px;
    }

    .history-icon i {
        font-size: 24px;
    }

    .history-cards {
        grid-template-columns: 1fr; /* All cards stack */
        gap: 18px;
        padding: 0 10px;
    }

    .history-card {
        padding: 20px;
    }

    .history-card h3 {
        font-size: 17px;
    }

    .history-card p {
        font-size: 14px;
        line-height: 1.5;
    }
}


/* Small Phones (max-width: 480px) */
@media (max-width: 480px) {

    .history-image-box img {
        height: 230px;
    }

    .history-icon {
        width: 55px;
        height: 55px;
        border-width: 2px;
    }

    .history-icon i {
        font-size: 22px;
    }

    .year-badge {
        font-size: 13px;
        padding: 4px 12px;
    }

    .history-card h3 {
        font-size: 16px;
    }

    .history-card p {
        font-size: 13px;
        line-height: 1.45;
    }
}
   

   /* =====================================
   HISTORY SECTION SCROLL ANIMATIONS
   ===================================== */

/* Image animation */
.history-image-box {
    opacity: 0;
    transform: scale(1.05);
    transition: opacity 1s ease, transform 1.2s ease;
}

.history-image-box.animate {
    opacity: 1;
    transform: scale(1);
}

/* Center icon animation */
.history-icon {
    opacity: 0;
    transform: scale(0.7);
    transition: opacity 0.6s ease, transform 0.6s ease;
    transition-delay: 0.3s;
}

.history-image-box.animate .history-icon {
    opacity: 1;
    transform: scale(1);
}

/* Cards animation */
.history-card {
    opacity: 0;
    transform: translateY(35px);
    transition: opacity 0.8s ease, transform 0.8s ease;
}

/* Active state */
.history-card.animate {
    opacity: 1;
    transform: translateY(0);
}

</style>
<script>
/* =====================================
   HISTORY SECTION — SCROLL REPEAT ANIMATION
   ===================================== */

document.addEventListener("DOMContentLoaded", () => {

    const imageBox = document.querySelector(".history-image-box");
    const cards = document.querySelectorAll(".history-card");

    /* Image + icon observer */
    if (imageBox) {
        const imageObserver = new IntersectionObserver(
            entries => {
                entries.forEach(entry => {
                    if (entry.isIntersecting) {
                        entry.target.classList.add("animate");
                    } else {
                        entry.target.classList.remove("animate");
                    }
                });
            },
            { threshold: 0.4 }
        );

        imageObserver.observe(imageBox);
    }

    /* Cards observer (staggered) */
    const cardObserver = new IntersectionObserver(
        entries => {
            entries.forEach((entry, index) => {
                if (entry.isIntersecting) {
                    setTimeout(() => {
                        entry.target.classList.add("animate");
                    }, index * 180);
                } else {
                    entry.target.classList.remove("animate");
                }
            });
        },
        { threshold: 0.35 }
    );

    cards.forEach(card => cardObserver.observe(card));
});
</script>
