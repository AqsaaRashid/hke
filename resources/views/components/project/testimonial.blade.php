<div class="testimonial-card testimonial-animate">

    <p class="client-title testimonial-item">CLIENT</p>
    <h2 class="mainn-title testimonial-item">TESTIMONIALS</h2>

    <div class="client-img testimonial-img">
        <img src="/images/farooq.png" alt="">
    </div>

    <div class="arrows testimonial-item">
        <i class="bi bi-chevron-left"></i>
        <i class="bi bi-chevron-right"></i>
    </div>

    <p class="testimonial-text testimonial-item">
        Working with HKE Construction was a seamless experience from start to finish. 
        Their professionalism, timely communication, and commitment to quality exceeded 
        our expectations. The Sitara Market project was completed ahead of schedule and 
        with outstanding craftsmanship. We couldn't have asked for a more dedicated team
    </p>

    <p class="author testimonial-item">- Farooq Zahid</p>
    <i class="bi bi-heart testimonial-item"></i>

</div>

<style>

.testimonial-card {
    background: url('/images/ab2.png') center/cover no-repeat;
    max-width: 1050px;
    padding: 50px 40px;
    margin-top: 10px;
    border-radius: 12px;
    box-shadow: 0 10px 35px rgba(0,0,0,0.1);
    text-align: center;
    position: relative;
}

/* CLIENT text */
.client-title {
    letter-spacing: 2px;
    font-size: 12px;
    color: #FFFFFF;
    margin-bottom: 5px;
}

/* main title */
.mainn-title {
    margin-bottom: 30px;
    font-size: 32px;
    font-weight: 800;
    color: #FFFFFF;
}

/* client image */
.client-img img {
    width: 85px;
    height: 85px;
    border-radius: 100%;
    object-fit: cover;
    margin-bottom: 20px;
}

/* arrow icons */
.arrows {
    display: flex;
    justify-content: center;   /* center them */
    gap: 460px;                 /* distance between arrows (adjust as you like) */
    font-size: 20px;
    color: #FFFFFF;
    position: absolute;
    top: 36%;
    width: 100%;
    left: 0;
}

.testimonial-text {
    margin-top: 30px;
    line-height: 1.8;
    color: #FFFFFF;
}

.author {
    margin-top: 25px;
    font-weight: 600;
    color: #FFFFFF;
}

.bi-heart {
    color: #FFFFFF;
    font-size: 18px;
    margin-top: 3px;
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
}

/* ===============================
   TESTIMONIAL SCROLL ANIMATION
================================ */

.testimonial-animate {
    opacity: 0;
    transform: translateY(40px);
    transition: opacity 0.9s ease, transform 0.9s ease;
}

.testimonial-animate.animate {
    opacity: 1;
    transform: translateY(0);
}

/* Image subtle scale */
.testimonial-img img {
    opacity: 0;
    transform: scale(0.9);
    transition: opacity 0.9s ease, transform 0.9s ease;
}

.testimonial-animate.animate .testimonial-img img {
    opacity: 1;
    transform: scale(1);
}

/* Staggered text reveal */
.testimonial-item {
    opacity: 0;
    transform: translateY(20px);
    transition: opacity 0.7s ease, transform 0.7s ease;
}

.testimonial-animate.animate .testimonial-item {
    opacity: 1;
    transform: translateY(0);
}

.testimonial-animate.animate .testimonial-item:nth-child(1) { transition-delay: 0.1s; }
.testimonial-animate.animate .testimonial-item:nth-child(2) { transition-delay: 0.2s; }
.testimonial-animate.animate .testimonial-item:nth-child(3) { transition-delay: 0.3s; }
.testimonial-animate.animate .testimonial-item:nth-child(4) { transition-delay: 0.4s; }
.testimonial-animate.animate .testimonial-item:nth-child(5) { transition-delay: 0.5s; }
.testimonial-animate.animate .testimonial-item:nth-child(6) { transition-delay: 0.6s; }


</style>
<script>
document.addEventListener("DOMContentLoaded", () => {

    const testimonial = document.querySelector(".testimonial-animate");
    if (!testimonial) return;

    const observer = new IntersectionObserver(
        entries => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.classList.add("animate");
                } else {
                    entry.target.classList.remove("animate"); // replay
                }
            });
        },
        { threshold: 0.3 }
    );

    observer.observe(testimonial);
});
</script>
