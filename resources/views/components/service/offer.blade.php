<section class="offer-section">
    <h2 class="offer-title">What we Offer</h2>

    <p class="offer-text">
        We provide complete building construction solutions designed to deliver strong, modern, and 
        long-lasting<br> structures. Our team combines expert planning, skilled craftsmanship, and reliable 
        project management to ensure <br>every building is completed with quality, safety, and precision. 
        From foundational work to final finishing, we cover all<br> essential aspects to bring your vision to 
        life with excellence.
    </p>

    <div class="offer-list">

        <div class="offer-item">
            <div class="offer-dot"></div>
            <span>Detailed Project Planning</span>
        </div>

        <div class="offer-item">
            <div class="offer-dot"></div>
            <span>Skilled Workforce</span>
        </div>

        <div class="offer-item">
            <div class="offer-dot"></div>
            <span>Interior & Exterior Finishing</span>
        </div>

        <div class="offer-item">
            <div class="offer-dot"></div>
            <span>High-Quality Materials</span>
        </div>

        <div class="offer-item">
            <div class="offer-dot"></div>
            <span>Structural Construction</span>
        </div>

        <div class="offer-item">
            <div class="offer-dot"></div>
            <span>Strict Quality & Safety Standards</span>
        </div>

    </div>
</section>
<style>
    /* ======================================
   RESPONSIVE – WHAT WE OFFER SECTION
   ====================================== */

/* Tablet */
@media (max-width: 1024px) {

    .offer-section {
        margin-left: 60px;
        margin-right: 60px;
    }

    .offer-title {
        font-size: 26px;
    }

    .offer-text {
        max-width: 100%;
    }

    .offer-list {
        grid-template-columns: repeat(2, max-content);
        column-gap: 50px;
    }
}

/* Mobile */
@media (max-width: 768px) {

    .offer-section {
        margin-left: 20px;
        margin-right: 20px;
    }

    .offer-title {
        font-size: 24px;
    }

    .offer-text {
        font-size: 13px;
        line-height: 1.6;
    }

    .offer-list {
        grid-template-columns: repeat(1, max-content);
        row-gap: 10px;
    }
}

/* Small Mobile */
@media (max-width: 480px) {

    .offer-title {
        font-size: 22px;
    }

    .offer-text {
        font-size: 13px;
    }

    .offer-item {
        font-size: 13px;
    }
}

</style>