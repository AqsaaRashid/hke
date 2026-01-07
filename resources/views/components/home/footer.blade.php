<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">

<footer class="footer-section">

    <!-- Newsletter Section -->
    <div class="newsletter">
    <h2 style="margin-top:20px;">Subscribe to our Newsletter</h2>

    <div class="newsletter-box">
        <input type="email" id="newsletterEmail" placeholder="Enter your email">
        <button id="subscribeBtn">Subscribe Now</button>
    </div>

    <p id="newsletterMsg" style="margin-top:10px;"></p>
</div>


    <!-- Divider -->
    <hr class="footer-line">

    <!-- Main Footer Content -->
    <div class="footer-content">
        
        <!-- Left Logo & Text -->
        <div class="footer-box">
            <img src="/images/hke-logo.png" class="footer-logo">

            <p class="footer-text" style=" text-align: justify !important;">

                From residential homes to commercial complexes, we deliver top-quality construction with precision,
                durability, and attention to detail. Every project is built to meet the highest.
            </p>

            <div class="footer-social">
                <!-- <a><i class="fab fa-twitter"></i></a> -->
                <a><i class="fab fa-facebook"></i></a>
                <a><i class="fab fa-instagram"></i></a>
                <a><i class="fab fa-linkedin"></i></a>
            </div>
        </div>

        <!-- Get in Touch -->
        <div class="footer-box" style="margin-left:100px;">
            <h3>Get in Touch</h3>

            <p class="footerr-line">
    <span class="icon-circle"><i class="fa fa-phone"></i></span>
    +92 339 0099098<br>
    +92 339 0099098
</p>

<p class="footerr-line">
    <span class="icon-circle"><i class="fa fa-map-marker"></i></span>
    Office 08, Gulberg Square,<br>
    Gulberg Greens, Islamabad
</p>

<p class="footerr-line">
    <span class="icon-circle"><i class="fa fa-envelope"></i></span>
    roaviimkamal@hkebuilders.com<br>
    rowaimikamal@hkebuilders.com
</p>

        </div>

        <!-- Useful Links -->
        <div class="footer-box">
    <h3 style="margin-left: 140px;">Useful Links</h3>
    <ul style="text-decoration:none !important;">
        <li> ><a href="{{ route('aboutus') }}" style="text-decoration:none !important; color
        :#D5D5D5 !important;">About Us</a></li>
        <li> ><a href="{{ route('contact') }}" style="text-decoration:none !important; color
        :#D5D5D5 !important;">Contact Us</a></li>
        <li> ><a href="{{ route('services') }}" style="text-decoration:none !important; color
        :#D5D5D5 !important;">Services</a></li>
        <li> ><a href="{{ route('projects') }}" style="text-decoration:none !important; color
        :#D5D5D5 !important;">Projects</a></li>
        <li> ><a href="javascript:void(0)"  onclick="openQuote()" style="text-decoration:none !important; color
        :#D5D5D5 !important;">Request a Quote</a></li>
    </ul>
</div>


        <!-- Explore -->
        <div class="footer-box" >
            <h3 style="margin-left: 140px;">Explore</h3>
            <ul>
                <li>> Videos</li>
                <li>> Social Media</li>
                <li>> FAQs</li>
                <li>> Testimonials</li>
                <li>> Request a Quote</li>
            </ul>
        </div>

    </div>

    

    <!-- Footer Bottom -->
  
   
</footer>

<div class="footer-bottom-bar">
    <div class="footer-bottom ">
        <p style=" margin-top:8px;">Copyright@hkebuilders2025</p>
<p style="margin-left:-15px; margin-top:8px;">
    Powered By 
    <a href="https://daamsolutions.com" target="_blank" style="text-decoration:none; color:inherit;">
        DaamSolutions
    </a>
</p>


        <div class="footer-links" style="margin-top:8px;">
           <a href="{{ route('terms') }}" style="color: inherit; text-decoration: none;">
    Terms & Conditions
</a>
&nbsp;&nbsp;
<a href="{{ route('policy') }}" style="margin-right:30px; color: inherit; text-decoration: none;">
    Privacy Policy
</a>

        </div>
    </div>

    <!-- Back to Top Button -->
    <div class="back-to-top" >
        <i class="fa fa-arrow-up" ></i>
    </div>
</div> 

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

<script>
    document.addEventListener('DOMContentLoaded', function () {
        const backToTop = document.querySelector('.back-to-top');

        if (backToTop) {
            backToTop.addEventListener('click', function () {
                window.scrollTo({
                    top: 0,
                    behavior: 'smooth' // smooth scroll to top
                });
            });
        }
    });
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

/* ===========================================
   RESPONSIVE FOOTER — TABLET SCREEN
   =========================================== */

@media (max-width: 992px) {

    /* Make newsletter box centered and fluid */
    .newsletter-box {
        width: 80%;
        margin-left: 0;
        margin: 20px auto;
        flex-direction: column;
        gap: 10px;
    }

    .newsletter-box input,
    .newsletter-box button {
        width: 100%;
        text-align: center;
    }

    /* Footer boxes become 2 columns */
    .footer-content {
        flex-wrap: wrap;
        justify-content: space-between;
        gap: 30px;
    }

    .footer-box {
        width: 48%;    /* Two boxes per row */
    }

    .footer-box ul {
        margin-left: 0 !important;
        text-align: left;
    }

    /* Social icons wrap */
    .footer-social {
        display: flex;
        flex-wrap: wrap;
    }
}


/* ===========================================
   RESPONSIVE FOOTER — MOBILE SCREEN
   =========================================== */

@media (max-width: 768px) {

    /* Make newsletter full width */
    .newsletter-box {
        width: 100%;
        padding: 0 20px;
    }

    /* Footer boxes become single column */
    .footer-box {
        width: 100%;
        text-align: left;
    }

    .footer-logo {
        width: 120px;
        margin-bottom: 15px;
    }

    .footer-text {
        font-size: 14px;
        line-height: 22px;
        margin-bottom: 25px;
    }

    /* Ensure list alignment is clean */
    .footer-box ul {
        margin-left: 0 !important;
        padding-left: 0;
    }

    .footer-box h3 {
        margin-left: 0 !important;
    }

    .footerr-line {
        font-size: 14px;
        line-height: 22px;
    }

    /* Footer bottom */
    .footer-bottom {
        flex-direction: column;
        text-align: center;
        gap: 10px;
        padding: 10px 0;
    }
    .footer-links{
    color: #2761A3 !important ;

    }

    .back-to-top {
        right: 20px;
        top: -18px;
    }
}


/* ===========================================
   RESPONSIVE FOOTER — SMALL PHONE
   =========================================== */

@media (max-width: 480px) {

    .newsletter h2 {
        font-size: 22px;
    }

    .newsletter-box input {
        font-size: 13px;
        padding: 10px 15px;
    }

    .footer-box {
        width: 100%;
    }

    .footer-box h3 {
        font-size: 18px;
    }

    .footer-bottom span {
        font-size: 12px;
    }

    .back-to-top {
        width: 32px;
        height: 32px;
        right: 15px;
        font-size: 14px;
    }
}
/* FIX GET IN TOUCH ON MOBILE */
@media (max-width: 768px) {

    /* Remove the problematic left margin */
    .footer-content .footer-box:nth-child(2) {
        margin-left: 0 !important;
        padding-left: 0 !important;
    }

    /* Cleaner spacing between contact items */
    .footerr-line {
        display: flex;
        align-items: flex-start !important;
        gap: 12px;
        margin-bottom: 18px !important;
        line-height: 20px !important;
    }

    /* Fix icon alignment */
    .icon-circle {
        width: 34px;
        height: 34px;
        min-width: 34px;
        display: flex;
        align-items: center;
        justify-content: center;
        margin-top: 2px;
    }

    .icon-circle i {
        font-size: 14px !important;
    }

    /* Phone / email text fixes */
    .footerr-line span + span,
    .footerr-line br + span {
        display: block;
    }

    .footerr-line {
        font-size: 14px;
        color: #D5D5D5;
    }

    /* Make all footer boxes visually clean on mobile */
    .footer-box h3 {
        margin-top: 10px;
        margin-bottom: 15px;
        font-size: 18px !important;
    }
}


</style>
<script>
document.addEventListener("DOMContentLoaded", function () {

    const btn = document.getElementById("subscribeBtn");
    const emailInput = document.getElementById("newsletterEmail");
    const msg = document.getElementById("newsletterMsg");

    if (!btn) {
        console.error("Subscribe button not found");
        return;
    }

    btn.addEventListener("click", function () {
        const email = emailInput.value.trim();

        msg.innerText = "";
        msg.style.color = "red";

        if (!email) {
            msg.innerText = "Email is required.";
            return;
        }

        if (!/^\S+@\S+\.\S+$/.test(email)) {
            msg.innerText = "Enter a valid email address.";
            return;
        }

        btn.disabled = true;
        btn.innerText = "Subscribing...";

       fetch("https://formspree.io/f/mykzqqyy", {
    method: "POST",
    headers: {
        "Content-Type": "application/json",
        "Accept": "application/json"
    },
    body: JSON.stringify({ email })
})
.then(res => res.json())
.then(() => {
    msg.style.color = "green";
    msg.innerText = "Subscribed successfully ";
    emailInput.value = "";
})
.catch(() => {
    msg.style.color = "red";
    msg.innerText = "Something went wrong. Try again.";
})
.finally(() => {
    btn.disabled = false;
    btn.innerText = "Subscribe Now";
});

    });

});
</script>