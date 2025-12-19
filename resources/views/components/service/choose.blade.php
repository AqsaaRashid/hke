<section class="whyyy-section">
    <h2 class="whyyy-title">Why choose our services?</h2>

    <p class="whyyy-text">
        Choose our construction service for reliable execution, superior quality,
        and long-lasting results. We bring expertise, modern techniques, and a 
        client-first approach to every project we build.
    </p>

    <div class="why-grid" style="margin-left:-5px">

        <!-- Card 1 -->
        <div class="why-card">
            <div class="icon-box">
                <i class="bi bi-building"></i>
            </div>
            <div class="card-text-area">
                <h3>Building<br> Construction</h3>
                <p>From residential homes to commercial complexes, we deliver top-quality construction with precision, durability, and attention to detail. Every project is built to meet the highest.</p>
            </div>
        </div>

        <!-- Card 2 -->
        <div class="why-card">
            <div class="icon-box">
 <i class="bi bi-gear-wide-connected"></i>            </div>
            <div class="card-text-area">
                <h3>Expert <br>Engineers</h3>
                <p>From residential homes to commercial complexes, we deliver top-quality construction with precision, durability, and attention to detail. Every project is built to meet the highest.</p>
            </div>
        </div>

        <!-- Right Side Image -->
        <div class="why-image-box">
        </div>

        <!-- Card 3 -->
        <div class="why-card">
            <div class="icon-box">
<i class="bi bi-calendar-check"></i>            </div>
            <div class="card-text-area">
                <h3>Project <br>Planning</h3>
                <p>From residential homes to commercial complexes, we deliver top-quality construction with precision, durability, and attention to detail. Every project is built to meet the highest.</p>
            </div>
        </div>

        <!-- Card 4 -->
        <div class="why-card">
            <div class="icon-box">
                 <i class="bi bi-headset"></i>
            </div>
            <div class="card-text-area">
                <h3>Customer<br> Support</h3>
                <p>From residential homes to commercial complexes, we deliver top-quality construction with precision, durability, and attention to detail. Every project is built to meet the highest.</p>
            </div>
        </div>

    </div>
</section>
<style>

    /* =========================================
   RESPONSIVE – WHY CHOOSE OUR SERVICES
   ========================================= */

/* Large tablets */
@media (max-width: 1200px) {

    .whyyy-section {
        margin-left: 60px;
        margin-right: 60px;
    }

    .why-grid {
        max-width: 100%;
        grid-template-columns: repeat(2, 1fr);
    }

    .why-image-box {
        display: none; /* hide center image cleanly */
    }
}

/* Tablets */
@media (max-width: 992px) {

    .whyyy-title {
        font-size: 26px;
    }

    .whyyy-text {
        max-width: 100%;
    }

    .why-grid {
        grid-template-columns: repeat(2, 1fr);
        gap: 20px;
        margin-left: 0 !important;
    }

    .why-card p {
        margin-left: 0 !important; /* prevent overflow */
    }
}

/* Mobile */
@media (max-width: 768px) {

    .whyyy-section {
        margin-left: 20px;
        margin-right: 20px;
    }

    .whyyy-title {
        font-size: 24px;
    }

    .whyyy-text {
        font-size: 13px;
        line-height: 1.6;
    }

    .why-grid {
        grid-template-columns: 1fr;
        gap: 18px;
    }

    .why-card {
        grid-template-columns: 50px auto;
        padding: 20px;
    }

    .why-card p {
        margin-left: 0 !important;
        text-align: left !important;
    }
}

/* Small Mobile */
@media (max-width: 480px) {

    .whyyy-title {
        font-size: 22px;
    }

    .why-card h3 {
        font-size: 16px;
    }

    .why-card p {
        font-size: 13px;
    }

    .icon-box {
        width: 45px;
        height: 45px;
    }

    .icon-box i {
        font-size: 18px;
    }
}

</style>