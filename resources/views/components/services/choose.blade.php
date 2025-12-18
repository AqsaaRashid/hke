<section class="whyy-choose-us">
    <p class="whyy-subtitle">How We Work</p>
    <h2 class="whyy-title">HIGH-QUALITY PROJECT EXECUTION </h2>
<div class="whyy-grid">

    <!-- CARD 1 -->
    <div class="whyy-card small">
        <div class="circle-wrapper small">
            <div class="circle-img">
                <img src="/images/recent.png" alt="">
            </div>
            <span class="number-tag">1</span>
        </div>
        <h3>Planning & Consultation</h3>
        <p>We understand your requirements, analyze the site, and create a clear project roadmap.</p>
    </div>

    <div class="arrowss">→</div>

    <!-- CARD 2 -->
    <div class="whyy-card large">
        <div class="circle-wrapper large">
            <div class="circle-img">
                <img src="/images/recent.png" alt="">
            </div>
            <span class="number-tag">2</span>
        </div>
        <h3>Design & Development</h3>
        <p>
            Our team prepares detailed designs & coordinates <br>
            all technical elements for seamless execution.
        </p>
    </div>

    <div class="arrowss">→</div>

    <!-- CARD 3 -->
    <div class="whyy-card small">
        <div class="circle-wrapper small">
            <div class="circle-img">
                <img src="/images/recent.png" alt="">
            </div>
            <span class="number-tag">3</span>
        </div>
        <h3>Execution & Delivery</h3>
        <p>We build with precision, monitor quality at every stage, and hand over the project on time.</p>
    </div>

</div>

   
</section>
<style>
    /* ======================================
   RESPONSIVE – HOW WE WORK (WHY CHOOSE US)
   ====================================== */

/* Tablet */
@media (max-width: 1024px) {

    .whyy-grid {
        grid-template-columns: 1fr 60px 1.4fr 60px 1fr;
        gap: 10px;
    }

    .circle-wrapper .circle-img {
        width: 140px;
        height: 140px;
    }

    .circle-wrapper.large .circle-img {
        width: 220px;
        height: 220px;
    }

    .arrowss {
        font-size: 60px;
        margin-top: -70px;
    }
}

/* Mobile */
@media (max-width: 768px) {

    .whyy-choose-us {
        padding: 40px 20px;
    }

    .whyy-title {
        font-size: 26px;
        margin-bottom: 30px;
    }

    .whyy-grid {
        grid-template-columns: 1fr;
        row-gap: 40px;
    }

    .arrowss {
        display: none;
    }

    .circle-wrapper .circle-img {
        width: 160px;
        height: 160px;
    }

    .circle-wrapper.large .circle-img {
        width: 200px;
        height: 200px;
    }

    .circle-wrapper.large .number-tag {
        bottom: 150px;
        right: 10px;
    }

    .whyy-card h3 {
        font-size: 17px;
    }

    .whyy-card p {
        font-size: 14px;
        line-height: 1.6;
        max-width: 320px;
        margin-left: auto;
        margin-right: auto;
    }
}

/* Small Mobile */
@media (max-width: 480px) {

    .whyy-title {
        font-size: 22px;
    }

    .whyy-subtitle {
        font-size: 14px;
    }

    .circle-wrapper .circle-img {
        width: 140px;
        height: 140px;
    }

    .circle-wrapper.large .circle-img {
        width: 180px;
        height: 180px;
    }

    .number-tag {
        width: 38px;
        height: 38px;
        font-size: 14px;
    }
}

</style>