<section class="achievements-section" style="margin-top:-199px;">
    <div class="overlay">
        <p class="sub-titleee">Our Achievements</p>
        <h2 class="main-titleee">STRENGTH IN EVERY BUILD</h2>

        <div class="statss-row">

            <div class="stats-box">
                <h3>09K+</h3>
                <p>Successful Projects</p>
            </div>

            <div class="dividerr"></div>

            <div class="stats-box">
                <h3>200+</h3>
                <p>Professional Team</p>
            </div>

            <div class="dividerr"></div>

            <div class="stats-box">
                <h3>12K+</h3>
                <p>Satisfied Clients</p>
            </div>

        </div>
    </div>
</section>
<style>
    /* ===========================================
   ACHIEVEMENTS — RESPONSIVE FIXES
=========================================== */

/* Tablet Screens (992px and below) */
@media (max-width: 992px) {

    .achievements-section {
        margin-top: -120px !important; /* adjust drop on medium screens */
    }

    .main-titleee {
        font-size: 28px;
        margin-bottom: 40px;
    }

    .statss-row {
        gap: 40px;
    }

    .stats-box h3 {
        font-size: 32px;
    }
}

/* Mobile Screens (768px and below) */
@media (max-width: 768px) {

    .achievements-section {
        margin-top: -80px !important; /* looks cleaner on mobile */
    }

    .achievements-section .overlay {
        padding: 50px 20px;
    }

    .main-titleee {
        font-size: 24px;
        margin-bottom: 30px;
    }

    /* Stack the stats vertically instead of row */
    .statss-row {
        flex-direction: column;
        gap: 25px;
    }

    /* Remove vertical lines since stacking */
    .dividerr {
        display: none;
    }

    .stats-box h3 {
        font-size: 30px;
    }

    .stats-box p {
        font-size: 14px;
    }
}

/* Extra Small Phones (480px and below) */
@media (max-width: 480px) {

    .achievements-section {
        margin-top: -60px !important;
    }

    .main-titleee {
        font-size: 22px;
    }

    .stats-box h3 {
        font-size: 26px;
    }

    .stats-box p {
        font-size: 13px;
    }
}
/* =====================================
   ACHIEVEMENTS SCROLL ANIMATION
   ===================================== */

.achievements-section {
    opacity: 0;
    transform: translateY(40px);
    transition: opacity 0.9s ease, transform 0.9s ease;
}

.achievements-section.animate {
    opacity: 1;
    transform: translateY(0);
}

/* Individual stat animation */
.stats-box {
    opacity: 0;
    transform: translateY(25px);
    transition: opacity 0.7s ease, transform 0.7s ease;
}

.stats-box.animate {
    opacity: 1;
    transform: translateY(0);
}


</style>
<script>
/* =====================================
   ACHIEVEMENTS — SCROLL REPEAT ANIMATION
   ===================================== */

document.addEventListener("DOMContentLoaded", () => {

    const section = document.querySelector(".achievements-section");
    const boxes = document.querySelectorAll(".stats-box");

    /* Section observer */
    const sectionObserver = new IntersectionObserver(
        entries => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.classList.add("animate");
                    animateStats();
                } else {
                    entry.target.classList.remove("animate");
                    resetStats();
                }
            });
        },
        { threshold: 0.35 }
    );

    sectionObserver.observe(section);

    /* Stats observer (staggered) */
    const boxObserver = new IntersectionObserver(
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
        { threshold: 0.4 }
    );

    boxes.forEach(box => boxObserver.observe(box));

    /* Count-up animation */
    function animateStats() {
        boxes.forEach(box => {
            const numEl = box.querySelector("h3");
            const original = numEl.dataset.value || numEl.innerText;

            numEl.dataset.value = original;
            const clean = original.replace("+", "").replace("K", "");
            const isK = original.includes("K");
            const target = parseInt(clean) * (isK ? 1000 : 1);

            let current = 0;
            const step = Math.ceil(target / 60);

            const counter = setInterval(() => {
                current += step;
                if (current >= target) {
                    clearInterval(counter);
                    numEl.innerText = original;
                } else {
                    numEl.innerText = isK
                        ? Math.floor(current / 1000) + "K+"
                        : current + "+";
                }
            }, 20);
        });
    }

    function resetStats() {
        boxes.forEach(box => {
            const numEl = box.querySelector("h3");
            if (numEl.dataset.value) {
                numEl.innerText = "0";
            }
        });
    }

});
</script>
