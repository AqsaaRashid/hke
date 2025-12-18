<section class="why-section">
    <div class="text-center">
        <p class="sub-titlee">Why Choose Us</p>
        <h2 class="main-titlee">EXCELLENCE IN EVERY BUILD</h2>
    </div>

    <div class="why-grid">

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
            <img src="/images/choose.png" alt="">
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
    @media (max-width: 992px) {

    .text-center {
        text-align: center !important;
    }

    .why-grid {
        grid-template-columns: repeat(2, 1fr);
        gap: 20px;
    }

    .why-image-box {
        grid-row: unset;
        height: auto;
    }

    .why-image-box img {
        height: 100% !important;
        max-height: 420px;
        object-fit: cover;
    }

    .why-card p {
        margin-left: 0 !important;
        text-align: left !important;
    }
}
@media (max-width: 768px) {

    .main-titlee {
        font-size: 26px;
        text-align: center;
    }

    .sub-titlee {
        text-align: center;
        font-size: 14px;
    }

    .why-grid {
        grid-template-columns: 1fr;
        gap: 18px;
    }

    .why-card {
        grid-template-columns: 45px auto;
        padding: 20px;
    }

    .icon-box {
        width: 45px;
        height: 45px;
    }

    .icon-box i {
        font-size: 18px;
    }

    .card-text-area h3 {
        font-size: 16px;
    }

    .why-card p {
        margin-left: 0 !important;
        font-size: 14px;
        text-align: justify;
    }

    .why-image-box img {
        width: 100%;
        height: 260px !important;
        border-radius: 12px;
        object-fit: cover;
    }
}
@media (max-width: 480px) {

    .main-titlee {
        font-size: 22px;
    }

    .why-card {
        padding: 18px;
        grid-template-columns: 40px auto;
    }

    .icon-box {
        width: 40px;
        height: 40px;
    }

    .icon-box i {
        font-size: 16px;
    }

    .why-image-box img {
        height: 220px !important;
    }
}

</style>