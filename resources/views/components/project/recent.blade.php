<section class="recenttt-work recent-animate" style="overflow-x:hidden !important;">
<div class="rw-header recent-item">    <div>
            <p class="sub-title" style="color: #2761A3 !important;">Projects</p>
            <h2 class="main-title" style="color: #04182F !important;">RECENT PROJECTS</h2>
        </div>

       <a href="projects" class="faq-btn" style=" padding-right:20px; padding-left:30px;">
            LOAD MORE <i class="bi bi-arrow-right"></i>
        </a>
    </div>

    <div class="rwww-card">
<div class="rwww-image recent-left">            
            <img src="/images/recent.png" alt="Construction Image">
        </div>

 <div class="rwww-content recent-right">            <div>
                <h2 class="rwww-title">SITARA MARKET</h2>
                <p class="rwww-description" style=" text-align: justify !important;">
                    The Sitara Market Construction Project stands
                    as a landmark example of our commitment to 
                    quality, innovation, and precision Designed to
                   accommodate a wide range.
                </p>

                <div class="rwww-info">
                    <div>
                        <p class="labelll">CLIENT</p>
                        <p class="valueee">Sitara Group</p>
                    </div>

                    <div>
                        <p class="labelll">DATE</p>
                        <p class="valueee">November 12, 2025</p>
                    </div>

                    <div>
                        <p class="labelll">BUDGET</p>
                        <p class="valueee">900 Million PKR</p>
                    </div>
                </div>
            </div>

            <button class="viewww-details">
                View Details <span class="new">→</span>
            </button>
        </div>
    </div>
</section>
<style>
    /* ==========================
   RESPONSIVE MEDIA QUERIES
   ========================== */

/* For tablets (screens up to 991px) */
@media (max-width: 991px) {
    /* Adjust the card container to display in one column on smaller screens */
    .rwww-card {
        flex-direction: column;
        gap: 20px;
    }

    /* Adjust the image to take full width */
    .rwww-image {
        width: 100%;
    }

    .rwww-image img {
        width: 100%;
        height: auto;
    }

    .rwww-content {
        width: 100%;
    }

    /* Reduce the font size of titles and descriptions */
    .rwww-title {
        font-size: 24px;
    }

    .rwww-description {
        font-size: 14px;
    }

    /* Adjust margins and padding */
    .rwww-info div {
        padding: 5px 0;
    }
}

/* For mobile devices (screens up to 767px) */
@media (max-width: 767px) {
    /* Card layout as single column */
    .rwww-card {
        flex-direction: column;
        gap: 10px;
    }

    .rwww-image {
        width: 100%;
    }

    .rwww-image img {
        width: 100%;
        height: auto;
    }

    .rwww-content {
        width: 100%;
    }

    .rwww-title {
        font-size: 20px;
    }

    .rwww-description {
        font-size: 14px;
    }

    .rwww-info div {
        padding: 5px 0;
        font-size: 12px;
    }

    /* Adjust the view details button */
    .viewww-details {
        font-size: 12px;
        padding: 0 6px;
    }
    .faq-btn{
        padding-right: 10px !important;
    }
    
}
/* ===============================
   RECENT PROJECTS – SCROLL ANIMATION
================================ */

.recent-animate {
    opacity: 0;
    transform: translateY(40px);
    transition: opacity 0.9s ease, transform 0.9s ease;
}

.recent-animate.animate {
    opacity: 1;
    transform: translateY(0);
}

/* Header fade */
.recent-item {
    opacity: 0;
    transform: translateY(25px);
    transition: opacity 0.7s ease, transform 0.7s ease;
}

.recent-animate.animate .recent-item {
    opacity: 1;
    transform: translateY(0);
}

/* Image slide from left */
.recent-left {
    opacity: 0;
    transform: translateX(-50px);
    transition: opacity 0.9s ease, transform 0.9s ease;
}

.recent-animate.animate .recent-left {
    opacity: 1;
    transform: translateX(0);
}

/* Content slide from right */
.recent-right {
    opacity: 0;
    transform: translateX(50px);
    transition: opacity 0.9s ease, transform 0.9s ease;
}

.recent-animate.animate .recent-right {
    opacity: 1;
    transform: translateX(0);
}


</style>
<script>
document.addEventListener("DOMContentLoaded", () => {

    const recentSection = document.querySelector(".recent-animate");
    if (!recentSection) return;

    const observer = new IntersectionObserver(
        entries => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.classList.add("animate");
                } else {
                    entry.target.classList.remove("animate"); // replay
                }
            });
        },
        { threshold: 0.3 }
    );

    observer.observe(recentSection);
});
</script>
