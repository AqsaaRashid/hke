<section class="testimonial-section" style="margin-bottom:50px;">

    <!-- Top Blue Background with Icons -->
    <div class="testimonial-top">
        <i class="bi bi-twitter"></i>
        <i class="bi bi-twitter"></i>
        <i class="bi bi-twitter"></i>
        <i class="bi bi-twitter"></i>
        <i class="bi bi-twitter"></i>
    </div>

    <!-- White Card -->
    <div class="testimonial-card">
        
        <p class="client-title">CLIENT</p>
        <h2 class="mainn-title">TESTIMONIALS</h2>

        <!-- Client Image -->
        <div class="client-img">
            <img src="/images/farooq.png" alt="">
        </div>

        <!-- Arrows -->
        <div class="arrows">
            <i class="bi bi-chevron-left"></i>
            <i class="bi bi-chevron-right"></i>
        </div>

        <!-- Text -->
        <p class="testimonial-text">
            Working with HKE Construction was a seamless experience from start to finish. 
            Their professionalism, timely communication, and commitment to quality exceeded 
            our expectations. The Sitara Market project was completed ahead of schedule and 
            with outstanding craftsmanship. We couldn't have asked for a more dedicated team
        </p>

        <p class="author">- Farooq Zahid</p>
        <i class="bi bi-heart"></i>

    </div>

</section>
<style>
    @media (max-width: 992px) {

    .testimonial-top {
        height: 300px;
        padding: 30px 0;
    }

    .testimonial-top i {
        font-size: 32px;
        margin: 0 40px;
    }

    .testimonial-card {
        max-width: 85%;
        margin: -180px auto 0 auto;
        padding: 40px 30px;
    }

    .mainn-title {
        font-size: 28px;
    }

    .arrows {
        gap: 250px;
        top: 32%;
    }

    .testimonial-text {
        font-size: 15px;
        line-height: 1.6;
    }
}
@media (max-width: 768px) {

    .testimonial-top {
        height: 220px;
        padding: 20px 0;
        background-size: cover;
        background-position: center;
    }

    .testimonial-top i {
        font-size: 26px;
        margin: 0 18px;
    }

    .testimonial-card {
        max-width: 95%;
        margin: -140px auto 0 auto;
        padding: 35px 25px;
    }

    .mainn-title {
        font-size: 24px;
        margin-bottom: 20px;
    }

    .client-img img {
        width: 70px;
        height: 70px;
    }

    .arrows {
        gap: 100px;
        font-size: 18px;
        top: 30%;
    }

    .testimonial-text {
        font-size: 14px;
        line-height: 1.6;
        padding: 0 5px;
    }

    .author {
        font-size: 14px;
        margin-top: 18px;
    }

    .bi-heart {
        font-size: 16px;
    }
}
@media (max-width: 480px) {

    .testimonial-top {
        height: 180px;
    }

    .testimonial-top i {
        font-size: 20px;
        margin: 0 10px;
    }

    .testimonial-card {
        margin: -120px auto 0 auto;
        padding: 28px 18px;
    }

    .mainn-title {
        font-size: 20px;
    }

    .arrows {
        gap: 160px;
        font-size: 16px;
        top: 28%;
    }

    .testimonial-text {
        font-size: 13px;
        line-height: 1.5;
    }

    .client-img img {
        width: 60px;
        height: 60px;
    }
}
@media (max-width: 767px) {
    .testimonial-card {
        max-width: 100%;
        overflow-x: hidden;
    }

    .arrows {
        gap: 40px;          /* reduce massive gap */
        position: static;   /* stop absolute overflow */
        margin-top: 15px;
    }
    .testimonial-section {
    overflow-x: hidden;
}

}
/* ==============================
   TESTIMONIAL SCROLL ANIMATION
   ============================== */

/* Card animation */
.testimonial-card {
    opacity: 0;
    transform: translateY(40px);
    transition: opacity 0.9s ease, transform 0.9s ease;
}

/* Client image animation */
.testimonial-card .client-img img {
    opacity: 0;
    transform: scale(0.9);
    transition: opacity 0.8s ease, transform 0.8s ease;
    transition-delay: 0.15s;
}

/* Text animation */
.testimonial-text,
.author,
.bi-heart {
    opacity: 0;
    transform: translateY(20px);
    transition: opacity 0.7s ease, transform 0.7s ease;
}

/* ACTIVE STATES */
.testimonial-card.animate {
    opacity: 1;
    transform: translateY(0);
}

.testimonial-card.animate .client-img img {
    opacity: 1;
    transform: scale(1);
}

.testimonial-card.animate .testimonial-text,
.testimonial-card.animate .author,
.testimonial-card.animate .bi-heart {
    opacity: 1;
    transform: translateY(0);
}

</style>
