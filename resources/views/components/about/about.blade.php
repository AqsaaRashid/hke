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

</style>