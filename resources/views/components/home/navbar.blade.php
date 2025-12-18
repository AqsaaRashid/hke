
    <!-- ===== TOP BAR ===== -->
    <div class="top-bar">
        <div class="container d-flex justify-content-between align-items-center">
          <div class="text-end ms-auto me-5">
 <i class="fa-solid fa-envelope-open-text"></i></i> rosamikamal@hkebuilders.com
</div>

                <div class="social-icons d-flex align-items-center">
    <a href="#"><i class="fab fa-twitter"></i></a>
    <a href="#"><i class="fab fa-facebook-f"></i></a>
    <a href="#"><i class="fab fa-instagram"></i></a>
    <a href="#"><i class="fab fa-linkedin-in"></i></a>
    <a href="contact" class="connect-btn">CONNECT WITH US</a>
</div>


        </div>
    </div>

    <!-- ===== HEADER MIDDLE ===== -->
    <div class="header-middle">
        <div class="container">
            <div class="row align-items-center">
                <!-- Logo -->
                <div class="col-md-4 col-12 text-center text-md-start logo">
                    <img src="/images/hke-logo.png" alt="HKE Logo">
                </div>

                <!-- Call Info -->
                <div class="col-md-4 col-6 mt-3 mt-md-0">
                    <div class="info-box">
 <i class="fa-solid fa-phone-volume"></i>    </i>                  <div>
                            <strong>Call Us: +92 339 8887959</strong><br>
                            <small>24/7 Customer Support</small>
                        </div>
                    </div>
                </div>

                <!-- Location Info -->
                <div class="col-md-4 col-6 mt-3 mt-md-0 ">
                    <div class="info-box justify-content-end">
 
<i class="fas fa-location-arrow"></i></i>                        <div>
                            <strong>Our Location</strong><br>
                            <small>Office 08, Gulberg Square, Gulberg Greens, Islamabad</small>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

   <!-- ===== NAVBAR ===== -->
<nav class="navbar navbar-expand-lg main-navbar">
  <div class="container custom-width">
    <button class="navbar-toggler text-white" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
      <i class="fa-solid fa-bars"></i>
    </button>

    <div class="collapse navbar-collapse justify-content-center" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item"><a class="nav-link active" href="/">HOME</a></li>
        <li class="nav-item"><a class="nav-link" href="{{ route('aboutus') }}">ABOUT US</a></li>
        <li class="nav-item"><a class="nav-link" href="{{ route('services') }}">SERVICES</a></li>
        <li class="nav-item"><a class="nav-link" href="{{ route('projects') }}">PROJECTS</a></li>
        <li class="nav-item"><a class="nav-link" href="{{ route('contact') }}">CONTACT US</a></li>
      </ul>
    </div>

<a href="javascript:void(0)" class="quote-btn ms-auto" onclick="openQuote()">REQUEST A QUOTE</a>
  </div>
</nav>


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
@media (max-width: 992px) {
    .navbar {
        margin-left: 0 !important;
        margin-right: 0 !important;
        width: 100% !important;
    }
}
@media (max-width: 992px) {
    .navbar-nav {
        margin-left: 0 !important;
    }
}
@media (max-width: 768px) {
    .top-bar .connect-btn {
        margin-left: 0 !important;
    }
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
/* ==============================
   RESPONSIVE FIXES ONLY
   ============================== */

/* Top Bar */
@media (max-width: 768px) {
    .top-bar .container {
        flex-direction: column;
        text-align: center;
        gap: 10px;
    }

    .social-icons {
        justify-content: center;
        flex-wrap: wrap;
        gap: 10px;
    }

    .top-bar .text-end {
        margin: 0 auto !important;
    }
}

/* Header Middle */
@media (max-width: 768px) {
    .header-middle .logo img {
        max-width: 160px;
        margin-bottom: 10px;
        margin-top:-20px;
    }

    .info-box {
        display: flex;
        align-items: center;
        justify-content: center !important;
        text-align: center;
        gap: 10px;
    }

    

    .header-middle .row > div {
        margin-bottom: 15px;
    }
}
/* =======================================
   FIX CALL + LOCATION BOX LOOK ON MOBILE
   ======================================= */
@media (max-width: 768px) {

    /* Reset icon size (your 180px was breaking layout) */
    .info-box i {
        font-size: 16px !important;
        margin-right: 8px;
        color: #2761A3;
    }

    /* Make icon and text stack clean + aligned */
    .info-box {
        display: flex;
        flex-direction: row;
        align-items: center;
        justify-content: center !important;
        text-align: left !important;
        gap: 12px !important;
        width: 100%;
        padding: 6px 0;
    }

    /* Text styling inside */
    .info-box div strong {
        font-size: 15px;
        line-height: 1.2;
        display: block;
        margin-bottom: 3px;
        text-align: left !important;
    }

    .info-box div small {
        font-size: 13px;
        line-height: 1.3;
        text-align: left !important;
        display: block;
        max-width: 160px;
    }

    /* Ensure the two boxes appear clean and equal */
    .header-middle .col-6 {
        display: flex;
        justify-content: center !important;
    }
}


/* Navbar */
@media (max-width: 992px) {
    .main-navbar {
        padding: 10px 0;
        max-width:500px !important;
        margin:0px !important;

    }

    .navbar-collapse {
        background: #04182F;
        padding: 10px;
        border-radius: 6px;
        margin-top: 10px;
        max-width:500px !important
    }

    .navbar-nav .nav-link {
        padding: 10px 0;
        text-align: center;
    }

    .quote-btn {
        margin-left: 0 !important;
        display: block;
        width: 100%;
        text-align: center;
        margin-top: 10px;
    }
}

/* Quote Popup Mobile Fix */
@media (max-width: 480px) {
    .quote-popup {
        width: 92%;
        padding: 18px;
    }

    .quote-row {
        flex-direction: column;
    }


}
/* =======================================
   FIX HEADER-MIDDLE ALIGNMENT ON MOBILE
   ======================================= */
@media (max-width: 768px) {

    /* Force call + location boxes to 50/50 clean layout */
    .header-middle .col-6 {
        display: flex;
        justify-content: center !important;
    }

    .info-box {
        width: 100%;
        justify-content: center !important;
        text-align: center;
        gap: 0px !important;
    }

    .info-box div strong {
        display: block;
    }
}

/* =======================================
   MAKE MOBILE DRAWER (NAVBAR) VISIBLE
   ======================================= */
@media (max-width: 992px) {
    .navbar-collapse {
        background: #04182F !important;  /* DARK NAV BACKGROUND */
        padding: 15px;
        border-radius: 6px;
        margin-top: 10px;
    }

    .navbar-nav .nav-link {
        color: white !important;        /* WHITE LINKS FOR DARK BACKGROUND */
        text-align: center;
        padding: 12px 0;
    }

    .navbar-toggler {
        background: #04182F !important; /* DARK BUTTON BACKGROUND */
        padding: 8px 10px;
        border-radius: 4px;
    }

    .navbar-toggler i {
        color: #fff !important;         /* WHITE ICON */
    }

    .main-navbar {
        background: #04182F;            /* Keep navbar dark on mobile */
    }

    /* Quote button full width */
    .quote-btn {
        width: 100%;
        margin-left: 0 !important;
        text-align: center;
        margin-top: 10px;
    }
}

/* =======================================
   EXTRA FIX: Prevent drawer overlap
   ======================================= */
@media (max-width: 500px) {
    .navbar-collapse {
        width: 100%;
    }
}


</style>