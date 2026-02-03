<section class="faq-section">

    <div class="faq-header">
        <div>
            <p class="faq-subtitle">Based on our Users</p>
            <h2 class="faq-title">FREQUENTLY ASKED QUESTIONS</h2>
        </div>

        <a href="contact" class="faq-btn">
            ASK A QUESTION <i class="bi bi-arrow-right"></i>
        </a>
    </div>

   <div class="faq-grid">

    <!-- 1 -->
    <div class="faq-item">
        <div class="faq-icon">1</div>
        <h3>What projects do you handle?</h3>
        <p style=" text-align: justify !important;">
            We handle a wide range of projects including residential buildings, 
            commercial complexes, industrial facilities, renovations, and 
            infrastructure development.
        </p>
    </div>

    <!-- 2 -->
    <div class="faq-item">
        <div class="faq-icon">2</div>
        <h3>How long does a project take?</h3>
        <p style=" text-align: justify !important;">
            Project duration varies based on size and complexity. We provide a 
            detailed timeline during the planning phase and ensure timely 
            completion through effective project management.
        </p>
    </div>

    <!-- 3 -->
    <div class="faq-item">
        <div class="faq-icon">3</div>
        <h3>Do you offer design services?</h3>
        <p style=" text-align: justify !important;">
            Yes, our team provides complete design, planning, and feasibility 
            studies to ensure every project meets your requirements and complies 
            with industry standards.
        </p>
    </div>

    <!-- 4 -->
    <div class="faq-item">
        <div class="faq-icon">4</div>
        <h3>How do you ensure quality?</h3>
        <p style=" text-align: justify !important;">
            We follow strict quality control procedures, use premium materials, and 
            adhere to safety regulations. Regular inspections and professional 
            supervision ensure top-notch quality and safe construction.
        </p>
    </div>

    <!-- 5 -->
    <div class="faq-item">
        <div class="faq-icon">5</div>
        <h3>Can you work within my budget?</h3>
        <p style=" text-align: justify !important;">
            Absolutely. We provide transparent cost estimates and work closely with 
            clients to deliver projects that maximize value while staying within 
            the allocated budget.
        </p>
    </div>

    <!-- 6 -->
    <div class="faq-item">
        <div class="faq-icon">6</div>
        <h3>How can I start my project?</h3>
        <p style=" text-align: justify !important;">
            You can contact us via phone, email, or the contact form on our website. 
            Our team will schedule a consultation to understand your needs, provide 
            guidance, and prepare a detailed proposal.
        </p>
    </div>

</div>


</section>
<style>
    @media (max-width: 992px) {

    .faq-section {
        padding: 50px 20px;
        margin-left: 0 !important;
        max-width: 100% !important;
    }

    .faq-header {
        flex-direction: column;
        align-items: flex-start;
        gap: 15px;
    }

    .faq-title {
        font-size: 28px;
    }

    .faq-grid {
        grid-template-columns: repeat(2, 1fr);
        gap: 30px;
        max-width: 100%;
    }

    .faq-item h3 {
        font-size: 17px;
    }

    .faq-item p {
        font-size: 14px;
        line-height: 1.5;
    }

    .faq-btn {
        padding: 6px 14px;
        font-size: 13px;
    }

    .faq-btn i {
        width: 34px;
        height: 34px;
        padding-top: 6px;
        font-size: 16px;
    }
}
@media (max-width: 768px) {

    .faq-header {
        text-align: left;
        gap: 10px;
    }

    .faq-section {
        padding: 40px 15px;
    }

    .faq-title {
        font-size: 24px;
    }

    .faq-grid {
        grid-template-columns: 1fr;
        gap: 25px;
    }

    .faq-item {
        padding-right: 0;
    }

    .faq-item h3 {
        font-size: 16px;
    }

    .faq-item p {
        font-size: 13.5px;
    }

    .faq-icon {
        width: 40px;
        height: 40px;
        font-size: 16px;
    }

    .faq-btn {
        align-self: stretch;
        justify-content: center;
        padding: 10px;
        font-size: 14px;
    }

    .faq-btn i {
        width: 28px;
        height: 28px;
        padding-top: 5px;
        font-size: 14px;
    }
}
@media (max-width: 480px) {

    .faq-title {
        font-size: 22px;
    }

    .faq-subtitle {
        font-size: 14px;
    }

    .faq-grid {
        gap: 22px;
    }

    .faq-item h3 {
        font-size: 15px;
    }

    .faq-item p {
        font-size: 13px;
        line-height: 1.5;
    }

    .faq-btn {
        font-size: 13px;
        padding: 8px 12px;
    }

    .faq-btn i {
        width: 25px;
        height: 25px;
        padding-top: 4px;
        font-size: 12px;
    }
}
@media (max-width: 768px) {

    .faq-section,
    .faq-header,
    .faq-grid {
        max-width: 100%;
        overflow-x: hidden;
    }

    .faq-btn {
        max-width: 100%;
        box-sizing: border-box;
    }

}
/* ==============================
   FAQ SCROLL ANIMATION
   ============================== */

/* Initial state */
.faq-header,
.faq-item {
    opacity: 0;
    transform: translateY(30px);
    transition:
        opacity 0.8s ease,
        transform 0.8s ease;
}

/* Active animation */
.faq-header.animate,
.faq-item.animate {
    opacity: 1;
    transform: translateY(0);
}

/* Stagger effect */
.faq-item {
    transition-delay: 0.15s;
}

</style>
<script>
/* =====================================
   FAQ – REPEAT ON SCROLL (UP & DOWN)
   ===================================== */

document.addEventListener("DOMContentLoaded", () => {
    const header = document.querySelector(".faq-header");
    const items = document.querySelectorAll(".faq-item");

    const observer = new IntersectionObserver(
        (entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.classList.add("animate");
                } else {
                    entry.target.classList.remove("animate");
                }
            });
        },
        {
            threshold: 0.25
        }
    );

    if (header) observer.observe(header);
    items.forEach(item => observer.observe(item));
});
</script>
