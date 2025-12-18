<section class="servicess-section py-5" style="margin-top:-140px;">
    <div class="text-center mb-5">
        <h6 class="servicess-subtitle">Our Services</h6>
        <h2 class="servicess-title">WHAT WE OFFER</h2>
    </div>

    <div class="swiper mySwiper">
        <div class="swiper-wrapper">

            <!-- CARD 1 -->
            <div class="swiper-slide servicess-card">
<img src="/images/b1.png" class="servicess-icon">                
<h3>
    <a href="{{ route('singleser') }}"class="servicess-heading" style="text-decoration:none; color:inherit;">
        Building Construction
    </a>
</h3>
                <p class="servicess-text">
                    From residential homes to commercial complexes, we deliver top-quality construction 
                    with precision, durability, and attention to detail. Every project is built to meet 
                    the highest standards of safety and strength.
                </p>
            </div>

            <!-- CARD 2 -->
            <div class="swiper-slide servicess-card">
<img src="/images/b2.png" class="servicess-icon">                <h5 class="servicess-heading">Renovation & Remodeling</h5>
                <p class="servicess-text">
                    We transform existing spaces into modern, functional, and stylish environments. 
                    Whether it's a full renovation or interior upgrade, our team ensures a seamless 
                    blend of design and practicality.
                </p>
            </div>

            <!-- CARD 3 -->
            <div class="swiper-slide servicess-card">
<img src="/images/b3.png" class="servicess-icon">                <h5 class="servicess-heading">Project Management</h5>
                <p class="servicess-text">
                    Our experts handle every stage — from planning and budgeting to execution and 
                    supervision. We ensure projects are completed on time, within budget, and to your satisfaction.
                </p>
            </div>

            <!-- CARD 4 -->
            <div class="swiper-slide servicess-card">
<img src="/images/b4.png" class="servicess-icon">                <h5 class="servicess-heading">Historical Restoration</h5>
                <p class="servicess-text">
                    We preserve and restore heritage buildings with precision, maintaining authenticity 
                    while strengthening structural integrity for future generations.
                </p>
            </div>
            <!-- CARD 5 -->
<div class="swiper-slide servicess-card">
    <img src="/images/bb5.png" class="servicess-icon">
    <h5 class="servicess-heading">Interior Design</h5>
    <p class="servicess-text">
        Our interior design team creates elegant, functional, and modern living and working 
        environments. We blend aesthetics with purpose to ensure every space feels inspiring 
        and comfortable.
    </p>
</div>
<!-- CARD 6 -->
<div class="swiper-slide servicess-card">
    <img src="/images/bb6.png"class="servicess-icon">
    <h5 class="servicess-heading">Architecture Planning</h5>
    <p class="servicess-text">
        From concept to blueprint, our architects develop smart, sustainable, and visually 
        appealing plans tailored to your requirements. Every design is crafted with precision 
        and long-term value in mind.
    </p>
</div>



        </div>
    </div>
</section>

<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

<script>
var swiper = new Swiper(".mySwiper", {
    slidesPerView: 3.2,  
    spaceBetween: 40,
    loop: true,
    grabCursor: true,  // cursor se drag possible
});
</script>
<script>
var swiper = new Swiper(".mySwiper", {
    loop: true,
    grabCursor: true,
    spaceBetween: 40,

    breakpoints: {
        1200: { slidesPerView: 3.2 },
        992: { slidesPerView: 2.2 },
        768: { slidesPerView: 1.5 },
        480: { slidesPerView: 1.15 },
        0:   { slidesPerView: 1.1 }
    }
});
</script>

<style>

/* ================================
   RESPONSIVE SERVICES SECTION
   ================================ */

/* Tablet */
@media (max-width: 992px) {

    .servicess-title {
        font-size: 28px;
        overflow: hidden !important;
    }

    .servicess-card {
        width: 260px !important;
        padding-right: 25px;
        border-right: 1px solid #e5e5e5;
    }

    .servicess-icon {
        width: 40px;
    }

    .servicess-text {
        font-size: 13px;
    }

    .swiper {
        padding-left: 20px;
    }
}

/* Mobile */
@media (max-width: 768px) {

    .servicess-section {
        margin-top: -40px !important;
        padding-top: 30px !important;
    }

    .servicess-title {
        font-size: 24px;
    }

    .servicess-card {
        width: 75% !important;
        border-right: none;
        background: #fff;
        padding: 20px !important;
        border-radius: 8px;
        box-shadow: 0 4px 12px rgba(0,0,0,0.05);
        text-align: center;
    }

    .servicess-icon {
        width: 38px;
        margin-bottom: 10px;
    }

    .servicess-text {
        font-size: 14px;
        line-height: 1.5;
    }

    .swiper {
        padding-left: 10px;
    }
}

/* Small Phones */
@media (max-width: 480px) {

    .servicess-title {
        font-size: 22px;
    }

    .servicess-card {
        width: 85% !important;
        padding: 18px !important;
    }

    .servicess-icon {
        width: 35px;
    }

    .servicess-heading {
        font-size: 16px;
    }

    .servicess-text {
        font-size: 13px;
    }
}
</style>