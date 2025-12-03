
<section class="service-overview-section">
    <div class="container">
        <div class="row g-4">
            <!-- LEFT: Service Overview -->
            <div class="col-lg-8">
                <div class="service-main-card">
                    <div class="service-title-label">Building Construction</div>
                    <h2 class="service-main-heading">SERVICE OVERVIEW</h2>
                    <p class="service-description">
                        Our Building Construction service covers every stage of the construction
                        process—from initial planning and site preparation to structural development
                        and final finishing. We focus on delivering strong, durable, and modern
                        structures using high-quality materials and skilled craftsmanship. Whether
                        it’s residential, commercial, or industrial projects, our team ensures
                        precision, safety, and efficiency at every step.
                    </p>

                    <div class="service-image-wrapper mb-2">
                        <img src="/images/recent.png"
                             class="service-image-main"
                             alt="Building Construction">
                    </div>

                    <div class="service-thumbs">
                        <!-- Use different images if you like -->
                        <div class="service-thumb">
                                                    <img src="/images/recent.png"
 alt="">
                        </div>
                        <div class="service-thumb">
                                                    <img src="/images/recent.png"
alt="">
                        </div>
                        <div class="service-thumb">
                                                    <img src="/images/recent.png"
 alt="">
                        </div>
                        <div class="service-thumb">
                                                    <img src="/images/recent.png"
 alt="">
                        </div>
                        <div class="service-thumb">
                                                    <img src="/images/recent.png"
 alt="">
                        </div>
                    </div>
                </div>
            </div>

            <!-- RIGHT: Sidebar -->
            <div class="col-lg-4">
                <!-- Other Services card -->
                <div class="other-services-card">
                    <div class="other-services-title">Other Services</div>

                    <div class="service-item active">
                        <span>Building Construction</span>
                        <i class="bi bi-arrow-right"></i>
                    </div>
                    <div class="service-item">
                        <span>Renovation &amp; Remodeling</span>
                        <i class="bi bi-arrow-right"></i>
                    </div>
                    <div class="service-item">
                        <span>Project Management</span>
                        <i class="bi bi-arrow-right"></i>
                    </div>
                    <div class="service-item">
                        <span>Infrastructure Development</span>
                        <i class="bi bi-arrow-right"></i>
                    </div>
                    <div class="service-item">
                        <span>Architectural Planning</span>
                        <i class="bi bi-arrow-right"></i>
                    </div>
                    <div class="service-item">
                        <span>Material Supply</span>
                        <i class="bi bi-arrow-right"></i>
                    </div>
                </div>

                <!-- CTA card -->
                <div class="cta-card">
                    <div class="cta-header">
                        <div class="cta-icon">
                            <i class="bi bi-telephone"></i>
                        </div>
                        <div>
                            <div class="cta-title">Ready to start your work?</div>
                        </div>
                    </div>
                    <p class="cta-text">
                        Let’s bring your vision to life with services
                        precision and purpose.
                    </p>
                    <a href="javascript:void(0)" class="cta-btn" onclick="openQuote()">
                        Get a Quote
                        <i class="bi bi-arrow-right"></i>
                    </a>
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

</style>