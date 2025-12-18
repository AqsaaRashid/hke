<section class="experts-section">

    <div class="experts-header">
        <div>
            <p class="experts-sub">Our People</p>
            <h2 class="experts-title">MEET THE EXPERTS</h2>
        </div>

        <a href="services" class="experts-btn">LOAD MORE <i class="bi bi-arrow-right"></i></a>
    </div>

    <div class="experts-grid">

        <!-- FIRST CARD (Static Info Card) -->
        <div class="expert-card">

    <div class="image-area hover-card">
        <img src="/images/recent.png" alt="">
        
        <div class="hover-info">
            <p>
                From residential homes to commercial complexes,<br>
                we deliver top-quality construction.
            </p>
            <div class="info-icons">
                <i class="bi bi-twitter"></i>
                <i class="bi bi-facebook"></i>
                <i class="bi bi-instagram"></i>
            </div>
        </div>
    </div>

    <h4 class="expert-name">Ahmed Raza</h4>
    <span class="expert-role">Project Manager</span>
</div>
        <!-- CARD TEMPLATE REPEATED -->
        <div class="expert-card">

    <div class="image-area hover-card">
        <img src="/images/recent.png" alt="">
        
        <div class="hover-info">
            <p>
                From residential homes to commercial complexes,<br>
                we deliver top-quality construction.
            </p>
            <div class="info-icons">
                <i class="bi bi-twitter"></i>
                <i class="bi bi-facebook"></i>
                <i class="bi bi-instagram"></i>
            </div>
        </div>
    </div>

    <h4 class="expert-name">Sara Khan</h4>
    <span class="expert-role">Senior Architect</span>
</div>

       <div class="expert-card">

    <div class="image-area hover-card">
        <img src="/images/recent.png" alt="">
        
        <div class="hover-info">
            <p>
                From residential homes to commercial complexes,<br>
                we deliver top-quality construction.
            </p>
            <div class="info-icons">
                <i class="bi bi-twitter"></i>
                <i class="bi bi-facebook"></i>
                <i class="bi bi-instagram"></i>
            </div>
        </div>
    </div>

    <h4 class="expert-name">Bilal Malik</h4>
    <span class="expert-role">Site Engineer</span>
</div>

        <div class="expert-card">

    <div class="image-area hover-card">
        <img src="/images/recent.png" alt="">
        
        <div class="hover-info">
            <p>
                From residential homes to commercial complexes,<br>
                we deliver top-quality construction.
            </p>
            <div class="info-icons">
                <i class="bi bi-twitter"></i>
                <i class="bi bi-facebook"></i>
                <i class="bi bi-instagram"></i>
            </div>
        </div>
    </div>

    <h4 class="expert-name">Fatima Ali</h4>
    <span class="expert-role">Interior Designer</span>
</div>

    </div>

</section>
<style>
    /* ============================================
   EXPERTS SECTION — RESPONSIVE FIXES
============================================ */

/* Large Tablets (max-width: 1200px) */
@media (max-width: 1200px) {
    .experts-section {
        width: 100% !important;
        margin-left: 0 !important;
        padding: 40px 20px;
    }

    .experts-grid {
        grid-template-columns: repeat(3, 1fr);
        gap: 20px;
    }
}

/* Tablets (max-width: 992px) */
@media (max-width: 992px) {

    .experts-header {
        flex-direction: column;
        text-align: center;
        gap: 10px;
    }

    .experts-grid {
        grid-template-columns: repeat(2, 1fr);
    }

    .image-area img,
    .image-area {
        height: 230px; /* reduce height for medium screens */
    }
}

/* Mobile Screens (max-width: 768px) */
@media (max-width: 768px) {

    .experts-section {
        padding: 20px 15px;
        width: 100% !important;
        margin: 0 !important;
    }

    .experts-header {
        text-align: center;
    }

    .experts-grid {
        grid-template-columns: 1fr; /* stack all cards */
        gap: 25px;
    }

    .image-area img,
    .image-area {
        height: 220px; /* reduce image height for mobile */
    }

    .hover-info {
        padding: 20px;
        font-size: 14px;
    }

    .info-icons i {
        width: 35px;
        height: 35px;
        font-size: 16px;
        margin-top: 10px;
    }

    .expert-name {
        font-size: 17px;
    }

    .expert-role {
        font-size: 12px;
    }
}

/* Small Phones (max-width: 480px) */
@media (max-width: 480px) {

    .image-area img,
    .image-area {
        height: 200px;
    }

    .hover-info {
        padding: 15px;
    }

    .info-icons i {
        width: 32px;
        height: 32px;
        font-size: 15px;
    }
}

</style>