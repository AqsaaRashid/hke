<section class="hero-section">
    <div class="hero-overlay d-flex align-items-center">
        <div class="container text-white">
            <div class="hero-content">
                <p class="breadcrumb-text">
<a href="{{ url('/') }}" class="breadcrumb-link">Home</a> &gt; About Us &gt;

</p>

                <h1 class="fw-bold">ABOUT US</h1>
                
                
            </div>
        </div>
    </div>

    <!-- Stats Section -->
    
</section>
<style>
    /* ===========================
   HERO RESPONSIVE FIXES
=========================== */

/* Base styling improvements */
.hero-section {
    position: relative;
}

.hero-overlay {
    min-height: 280px;              /* Keeps good height on all screens */
    padding: 50px 0;
    background-size: cover;
    background-position: center;
}

.hero-content {
    text-align: left;
}

.breadcrumb-text {
    font-size: 14px;
    opacity: 0.9;
    margin-bottom: 5px;
}

.breadcrumb-link {
    color: #fff;
    text-decoration: none;
    font-weight: 500;
}

.breadcrumb-link:hover {
    text-decoration: underline;
}

/* Desktop title size */
.hero-content h1 {
    font-size: 48px;
    font-weight: 800;
}



/* ===========================
   TABLET (≤ 992px)
=========================== */
@media (max-width: 992px) {
    .hero-overlay {
        text-align: center;
        padding: 60px 0;
    }

    .hero-content {
        text-align: center;
    }

    .breadcrumb-text {
        font-size: 13px;
    }

    .hero-content h1 {
        font-size: 38px;
    }
}



/* ===========================
   MOBILE (≤ 768px)
=========================== */
@media (max-width: 768px) {

    .hero-overlay {
        padding: 50px 15px;
    }

    .hero-content h1 {
        font-size: 30px;
    }

    .breadcrumb-text {
        font-size: 12px;
    }
}



/* ===========================
   SMALL PHONES (≤ 480px)
=========================== */
@media (max-width: 480px) {

    .hero-overlay {
        padding: 40px 10px;
    }

    .hero-content h1 {
        font-size: 26px;
    }

    .breadcrumb-text {
        font-size: 11px;
    }
}

</style>