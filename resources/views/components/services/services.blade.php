<link rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css">

<section class="services-section">

    <p class="services-subtitle">Our Services</p>
    <h2 class="services-title">WHAT WE OFFER</h2>

   <div class="services-grid">

    <!-- CARD 1 -->
    <div class="service-cards">
         <img src="/images/b1.png"class="servicess-icon">
       <h3>
    <a href="{{ route('singleser') }}" style="text-decoration:none; color:inherit;">
        Building Construction
    </a>
</h3>

        <p style=" text-align: justify !important;">From residential homes to commercial complexes, we deliver top-quality
            construction with precision, durability, and attention to detail. Every project is 
            built to meet the highest standards of safety and strength.</p>
    </div>

    <!-- CARD 2 -->
    <div class="service-cards">
         <img src="/images/b2.png"class="servicess-icon">
        <h3>Renovation & Remodeling</h3>
        <p style=" text-align: justify !important;">We transform existing spaces into modern, functional, and stylish environments.
            Whether it's a full renovation or interior upgrade, our team ensures a seamless blend
            of design and practicality.</p>
    </div>

    <!-- CARD 3 -->
    <div class="service-cards">
 <img src="/images/b3.png"class="servicess-icon">        <h3>Project Management</h3>
        <p style=" text-align: justify !important;">Our experts handle every stage — from planning and budgeting to execution and
            supervision. We ensure projects are completed on time, within budget, and to your
            satisfaction.</p>
    </div>

    <!-- CARD 4 -->
    <div class="service-cards">
 <img src="/images/b4.png"class="servicess-icon">        <h3>Infrastructure Development</h3>
        <p style=" text-align: justify !important;">We support large-scale infrastructure needs including roads, drainage systems,
            and utilities. With advanced planning and reliable resources, we deliver projects built
            to last and serve communities for years.</p>
    </div>

    <!-- CARD 5 -->
    <div class="service-cards">
 <img src="/images/bb5.png"class="servicess-icon">        <h3>Architectural Planning</h3>
        <p style=" text-align: justify !important;">Our architects provide creative, efficient, and practical designs tailored to client needs,
            ensuring each project is functional, sustainable, and visually appealing. We deliver 
            architectural solutions that bring your vision to life.</p>
    </div>

    <!-- CARD 6 -->
    <div class="service-cards">
 <img src="/images/bb6.png"class="servicess-icon">        <h3>Material Supply</h3>
        <p style=" text-align: justify !important;">We provide reliable construction materials and manage advanced machinery to ensure
            smooth, uninterrupted site operations and consistent quality. We help maintain workflow 
            consistency & reduce downtime.</p>
    </div>

</div>


</section>
<style>
    /* ======================================
   RESPONSIVE – WHAT WE OFFER (SERVICES)
   ====================================== */

/* Tablet */
@media (max-width: 1024px) {

    .services-section {
        padding: 40px 20px;
    }

    .services-title {
        font-size: 28px;
    }

    .services-grid {
        max-width: 100%;
        grid-template-columns: repeat(2, 1fr);
        gap: 40px 30px;
        padding: 0 20px;
    }

    .service-cards::before {
        display: none;
    }

    .service-cards::after {
        display: none;
    }
}

/* Mobile */
@media (max-width: 768px) {

    .services-section {
        padding: 30px 15px;
    }

    .services-title {
        font-size: 24px;
        margin-bottom: 35px;
    }

    .services-grid {
        grid-template-columns: 1fr;
        gap: 30px;
        padding: 0;
    }

    .service-cards {
        padding-right: 0;
        padding-bottom: 0;
    }

    .servicess-icon {
        width: 42px;
        margin-bottom: 12px;
    }

    .service-cards h3 {
        font-size: 17px;
    }

    .service-cards p {
        font-size: 13px;
        line-height: 1.6;
    }
}

/* Small Mobile */
@media (max-width: 480px) {

    .services-title {
        font-size: 22px;
    }

    .services-subtitle {
        font-size: 14px;
    }

    .servicess-icon {
        width: 38px;
    }

    .service-cards h3 {
        font-size: 16px;
    }

    .service-cards p {
        font-size: 13px;
    }
}
/* ===============================
   SERVICES SCROLL ANIMATION
================================ */

.service-cards {
    opacity: 0;
    transform: translateY(35px);
    transition: opacity 0.7s ease, transform 0.7s ease;
}

.service-cards.animate {
    opacity: 1;
    transform: translateY(0);
}

</style>
<script>
document.addEventListener("DOMContentLoaded", () => {

    const serviceCards = document.querySelectorAll(".service-cards");

    if (!serviceCards.length) return;

    const observer = new IntersectionObserver(
        (entries) => {
            entries.forEach((entry, index) => {
                if (entry.isIntersecting) {
                    entry.target.style.transitionDelay = `${index * 120}ms`;
                    entry.target.classList.add("animate");
                } else {
                    entry.target.classList.remove("animate");
                    entry.target.style.transitionDelay = "0ms";
                }
            });
        },
        {
            threshold: 0.25
        }
    );

    serviceCards.forEach(card => observer.observe(card));
});
</script>
