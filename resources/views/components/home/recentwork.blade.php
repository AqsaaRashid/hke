<section class="recent-work">
    <div class="rw-header">
        <div>
            <p class="sub-title">Projects</p>
            <h2 class="main-title">RECENT WORK</h2>
        </div>

      <a href="{{ route('projects') }}" class="see-projects" style="text-decoration:none;">
    SEE ALL PROJECTS <span>→</span>
</a>


    </div>

    <div class="rw-card">
        <div class="rw-image">
            <img src="/images/recent.png" alt="Construction Image">
        </div>

        <div class="rw-content">
            <div>
                <h2 class="rw-title">SITARA MARKET</h2>
                <p class="rw-description" style=" text-align: justify !important;">
                    The Sitara Market Construction Project stands
                    as a landmark example of our commitment to 
                    quality, innovation, and precision Designed to
                   accommodate a wide range.
                </p>

                <div class="rw-info">
                    <div>
                        <p class="label">CLIENT</p>
                        <p class="value">Sitara Group</p>
                    </div>

                    <div>
                        <p class="label">DATE</p>
                        <p class="value">November 12, 2025</p>
                    </div>

                    <div>
                        <p class="label">BUDGET</p>
                        <p class="value">900 Million PKR</p>
                    </div>
                </div>
            </div>

             <a href="{{ route('singlepro') }}"class="view-details" style="text-decoration:none;">
                View Details <span>→</span>
</a>
        </div>
    </div>
</section>
<style>
    @media (max-width: 992px) {

    .recent-work {
        width: 90%;
        padding: 25px;
        margin: 30px auto;
    }

    .rw-header {
        flex-direction: column;
        text-align: center;
        gap: 10px;
    }

    .main-title {
        font-size: 28px;
    }

    .rw-card {
        flex-direction: column;
        gap: 20px;
    }

    .rw-image,
    .rw-content {
        width: 100% !important;
        margin-left: 0;
    }

    .rw-title {
        font-size: 24px;
    }

    .rw-description {
        font-size: 14px;
        line-height: 1.4;
    }

    .rw-info div {
        padding-bottom: 6px;
    }
}
@media (max-width: 768px) {

    .recent-work {
        width: 95%;
        padding: 20px;
        border-radius: 12px;
    }

    .sub-title {
        font-size: 14px;
        margin-bottom: 4px;
    }

    .main-title {
        font-size: 24px;
    }

    .see-projects {
        font-size: 13px;
        padding: 8px 12px;
    }

    .see-projects span {
        padding: 4px 6px;
        font-size: 18px;
    }

    .rw-card {
        flex-direction: column;
    }

    .rw-image img {
        height: 240px !important;
        border-radius: 10px;
    }

    .rw-title {
        font-size: 20px;
        margin-bottom: 8px;
    }

    .rw-description {
        font-size: 13px;
        line-height: 1.4;
    }

    .rw-info div {
        margin-bottom: 10px !important;
    }

    .view-details {
        font-size: 14px;
        margin-top: 10px !important;
    }

    .view-details::after {
        width: 90px;
    }
}
@media (max-width: 480px) {

    .recent-work {
        padding: 15px;
        width: 92%;
    }

    .main-title {
        font-size: 22px;
    }

    .rw-image img {
        height: 200px !important;
    }

    .rw-title {
        font-size: 18px;
    }

    .rw-description {
        font-size: 13px;
    }

    .view-details {
        font-size: 13px;
    }

    .view-details::after {
        width: 75px;
    }
}


/* ==============================
   RECENT WORK – CLASSIC ANIMATION
   ============================== */

/* Initial hidden state */
.recent-work,
.rw-image,
.rw-content,
.rw-info div,
.view-details {
    opacity: 0;
    transform: translateY(30px);
    transition: all 0.8s ease;
}

/* Image zoom prep */
.rw-image img {
    transform: scale(1.08);
    transition: transform 1.2s ease;
}

/* Active animation */
.recent-work.animate {
    opacity: 1;
    transform: translateY(0);
}

.recent-work.animate .rw-image {
    opacity: 1;
    transform: translateY(0);
}

.recent-work.animate .rw-image img {
    transform: scale(1);
}

.recent-work.animate .rw-content {
    opacity: 1;
    transform: translateY(0);
}

/* Stagger info lines */
.recent-work.animate .rw-info div {
    opacity: 1;
    transform: translateY(0);
}

.recent-work.animate .rw-info div:nth-child(1) { transition-delay: 0.2s; }
.recent-work.animate .rw-info div:nth-child(2) { transition-delay: 0.35s; }
.recent-work.animate .rw-info div:nth-child(3) { transition-delay: 0.5s; }

/* Button reveal */
.recent-work.animate .view-details {
    opacity: 1;
    transform: translateY(0);
    transition-delay: 0.6s;
}
.recent-work {
    transition-delay: 0.1s;
}

</style>
<script>
/* =====================================
   RECENT WORK – REPEAT ON SCROLL
   ===================================== */

document.addEventListener("DOMContentLoaded", () => {
    const section = document.querySelector(".recent-work");

    if (!section) return;

    const observer = new IntersectionObserver(
        (entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    section.classList.add("animate");
                } else {
                    section.classList.remove("animate");
                }
            });
        },
        {
            threshold: 0.3   // 30% visible → animate
        }
    );

    observer.observe(section);
});
</script>
