<section class="hero-section">
    <div class="hero-overlay d-flex align-items-center">
        <div class="container text-white">
            <div class="hero-content">
                <h1 class="fw-bold">ENGINEERING<br>YOUR DREAMS</h1>
                <p class="lead mt-2">Crafting the future of construction.</p>
                <div class="hero-buttons mt-4">
                    <a href="services" class="btn btn-primary me-2">OUR SERVICES</a>
                    <a href="javascript:void(0)" class="btn btn-light text-dark" onclick="openQuote()">REQUEST A QUOTE</a>
                </div>
            </div>
        </div>
    </div>

    <!-- Stats Section -->
    <div class="container position-relative">
        <div class="row stats-row justify-content-center text-white gx-0">
            <div class="col-md-4 col-sm-12">
                <div class="stat-card dark-blue d-flex align-items-center justify-content-center p-4">
                    <i class="fas fa-building me-3"></i>
                    <div>
                        <h4>09K+</h4>
                        <p>Successful Projects</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-sm-12">
                <div class="stat-card medium-blue d-flex align-items-center justify-content-center p-4">
                    <i class="fas fa-users me-3"></i>
                    <div>
                        <h4>200+</h4>
                        <p>Professional Team</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-sm-12">
                <div class="stat-card light-blue d-flex align-items-center justify-content-center p-4">
                    <i class="fas fa-smile me-3"></i>
                    <div>
                        <h4>12K+</h4>
                        <p>Satisfied Clients</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

</section>
    
<!-- ===== QUOTE POPUP MODAL ===== -->
<div id="quoteModal" class="quote-overlay">
    <div class="quote-popup">
        <h3>REQUEST QUOTE</h3>

        <form>
            <div class="quote-row">
                <input type="text" placeholder="Your Name">
                <input type="email" placeholder="Your Email">
            </div>

            <input type="text" placeholder="Subject">

            <textarea placeholder="Message"></textarea>

            <button class="quotee-btn">REQUEST A QUOTE</button>
        </form>

        <span class="close-btn" onclick="closeQuote()">✕</span>
    </div>
</div>
<script>
function openQuote() {
    document.getElementById('quoteModal').style.display = 'flex';
}

function closeQuote() {
    document.getElementById('quoteModal').style.display = 'none';
}
</script>



<style>
  .quote-overlay {
    position: fixed;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background: rgba(0,0,0,0.45);
    display: none;
    justify-content: center;
    align-items: center;
    z-index: 99999;
}

.quote-popup {
    width: 450px;
    background: white;
    padding: 25px;
    border-radius: 6px;
    box-shadow: 0 4px 18px rgba(0,0,0,0.2);
    position: relative;
    font-family: 'Segoe UI';
}

.quote-popup h3 {
    font-size: 18px;
    font-weight: 700;
    margin-bottom: 20px;
    color: #04182F;
}

.quote-row {
    display: flex;
    gap: 10px;
    margin-bottom: 12px;
}

.quote-row input,
.quote-popup input,
.quote-popup textarea {
    background: #f7f8fa;
    border: 1px solid #e3e5e7;
    padding: 12px;
    width: 100%;
    border-radius: 4px;
    font-size: 14px;
}

.quote-popup textarea {
    height: 120px;
    resize: none;
    margin-top: 10px;
    margin-bottom: 15px;
}

.quotee-btn {
    width: 100%;
    padding: 14px;
    background: #2761A3;
    color: white;
    border: none;
    border-radius: 4px;
    font-weight: 600;
    font-size: 14px;
    cursor: pointer;
}

.close-btn {
    position: absolute;
    top: 12px;
    right: 15px;
    font-size: 18px;
    cursor: pointer;
    color: #555;
}
/* =======================================
   HERO SECTION RESPONSIVE FIXES
   ======================================= */

/* Tablet & Mobile */
@media (max-width: 992px) {

    .hero-section {
        text-align: center;
    }

    .hero-content h1 {
        font-size: 40px;
        line-height: 1.2;
    }

    .hero-content p {
        font-size: 16px;
    }

    .hero-buttons {
        display: flex;
        flex-direction: column;
        align-items: center;
        gap: 12px;
    }

    .hero-buttons .btn {
        width: 80%;
        max-width: 280px;
    }
}


/* Mobile Only */
@media (max-width: 768px) {

    .hero-content h1 {
        font-size: 32px;
        line-height: 1.2;
    }

    .hero-content p {
        font-size: 15px;
    }

    .hero-overlay {
        padding: 60px 0;
    }

    /* Stats section */
    .stats-row {
        margin-top: 20px !important;
    }

    .stat-card {
        margin-bottom: 15px;
        text-align: center;
        padding: 20px !important;
        border-radius: 6px;
    }

    .stat-card i {
        font-size: 26px !important;
        margin-bottom: 6px;
    }

    .stat-card h4 {
        font-size: 22px;
        margin: 5px 0;
    }

    .stat-card p {
        font-size: 14px;
        margin: 0;
    }
}


/* Extra Small Phones */
@media (max-width: 480px) {

    .hero-content h1 {
        font-size: 26px;
    }

    .hero-buttons .btn {
        width: 100%;
    }

    .stat-card {
        padding: 16px !important;
    }

    .stat-card i {
        font-size: 22px !important;
    }
}


</style>