<section class="about-section" style="margin-top:10px; color:#1a1a1a;">
  <div class="container">
    <div class="row align-items-center">
      <!-- LEFT IMAGE -->
      <div class="col-lg-6 about-img">
         <img src="/images/about.png" alt="Construction site" class="img-fluid">
      </div>

      <!-- RIGHT CONTENT -->
      <div class="col-lg-6 ps-lg-5 content-col">
        <h6 class="section-subtitle">About Us</h6>
        <h2 class="section-title">KEY POINTS</h2>
        <p class="section-text">We're in this business since 1986</p>
        <div class="about-divider"></div>

        <div class="accordion custom-accordion" id="aboutAccordion">
          <!-- History -->
          <div class="accordion-item">
            <h2 class="accordion-header" id="headingOne">
              <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true">
                <i class="fa-solid fa-clock me-2"></i> History
              </button>
            </h2>
            <div id="collapseOne" class="accordion-collapse collapse show">
              <div class="accordion-body">
                Founded with a commitment to quality and precision, our company began its journey with a vision to redefine construction standards. Over the years, we have delivered projects that stand as a testament to our craftsmanship and integrity.
              </div>
            </div>
          </div>

          <!-- Quality -->
          <div class="accordion-item">
            <h2 class="accordion-header" id="headingTwo">
              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo">
                <i class="fa-solid fa-award me-2"></i> Quality
              </button>
            </h2>
            <div id="collapseTwo" class="accordion-collapse collapse">
              <div class="accordion-body">
                We ensure every project meets international quality benchmarks, employing premium materials and expert supervision at every stage.
              </div>
            </div>
          </div>

          <!-- Future Plans -->
          <div class="accordion-item">
            <h2 class="accordion-header" id="headingThree">
              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree">
                <i class="fa-solid fa-lightbulb me-2"></i> Future Plans
              </button>
            </h2>
            <div id="collapseThree" class="accordion-collapse collapse">
              <div class="accordion-body">
                Looking forward, we aim to integrate sustainable practices and smart technologies to create a lasting impact on the construction industry.
              </div>
            </div>
          </div>
        </div>

      </div>
    </div>
  </div>
</section>
<style>
  /* ==========================================
   ABOUT SECTION RESPONSIVE FIXES
   ========================================== */

/* Tablet and below */
@media (max-width: 992px) {

    .about-section {
        text-align: center;
    }
    #aboutAccordion{
     margin-bottom:20px !important;
    
    }


    .content-col {
        padding-left: 0 !important;
        padding-right: 0 !important;
    }

    .section-title {
        font-size: 28px;
    }

    .section-subtitle {
        font-size: 15px;
    }

    .section-text {
        font-size: 16px;
        margin-bottom: 10px;
    }

    .about-divider {
        margin: 15px auto;
    }
}

/* Mobile screens */
@media (max-width: 768px) {

    .section-title {
        font-size: 24px;
    }

    .section-text {
        font-size: 15px;
    }

    .accordion-button {
        font-size: 15px;
        padding: 14px 12px;
    }

    .accordion-body {
        font-size: 14px;
        text-align: left;
    }
}


/* Small Phones */
@media (max-width: 480px) {

    .section-title {
        font-size: 22px;
    }

    .accordion-button {
        font-size: 14px;
        padding: 12px;
    }

    .accordion-body {
        font-size: 13px;
       
    }
}
/* Tablet and below */
@media (max-width: 992px) {

    .about-img {
        position: relative;
        height: auto !important;    /* Removes forced height */
        margin: 0 auto !important;  /* Centers the image */
        width: 100% !important;     /* Full width */
        overflow: hidden;
    }

    .about-img img {
        position: relative !important;
        width: 100% !important;
        height: auto !important;    /* Natural height */
        top: 0 !important;          /* Removes weird cropping */
        object-fit: contain !important; 
        border-radius: 6px;
    }
}

/* Mobile */
@media (max-width: 768px) {

    .about-img {
        margin-bottom: -60px !important;
        text-align: center;
    }

    .about-img img {
        top:-90px !important;
        max-width: 100%;
        height: auto;
    }
}

/* Extra Small Phones */
@media (max-width: 480px) {

    .about-img img {
        width: 100%;
        height: auto;
    }
}


</style>