<style>
  
  body {
    font-family: 'Roboto', sans-serif;
  }

        /* ===== TOP BAR ===== */
        .top-bar {
            background-color: #1A395D;
            color: white;
            font-size: 14px;
            padding: 6px 0;
        }

        .top-bar .social-icons a {
            color: white;
            text-decoration: none;
            margin-left: 12px;
            font-size: 14px;
        }

        .top-bar .connect-btn {
            background-color: #2761A3;
            color: white;
            border: none;
            padding: 5px 15px;
            font-size: 13px;
            margin-left: 70px; /* ✅ Added space between icons and button */
        }

        .top-bar .connect-btn:hover {
            background-color: #163f7a;
        }
        



        /* ===== HEADER MIDDLE ===== */
        .header-middle {
            background: #fff;
            padding: 20px 0 10px;
            border-bottom: 1px solid #eaeaea;
        }

        .header-middle .logo img {
            height: 100px;
            margin-top: -50px; /* ✅ Move logo upward */
        }

        .header-middle .info-box {
            display: flex;
            align-items: center;
            gap: 12px;
        }

        .header-middle .info-box i {
            color: #2761A3;
            font-size: 20px;
            border: 1px solid #2761A3; /* ✅ Add square border */
            padding: 8px;
            border-radius: 4px;
        }

        .header-middle strong {
            font-size: 15px;
            font-weight: 600;
        }

        .header-middle small {
            color: #777;
            font-size: 12px;
        }

        /* ===== NAVBAR ===== */
       .navbar {
    background-color: #1A395D;
    padding: 0; /* Adds equal spacing on left and right */
    display: flex;
    justify-content: space-between; /* Distribute items evenly */
    align-items: center;
    margin-left:107px;
    margin-right: 89px;
}

        .navbar-nav {
  margin-left: -230px;  /* move the whole nav list 90px left */
}


        .navbar-nav .nav-item {
  margin: 0 25.5px; /* gives ~15px total between items */
}


        .navbar-nav .nav-link {
            color: white !important;
            font-weight: 500;
            padding: 14px 20px;
        }

        .navbar-nav .nav-link.active,
        .navbar-nav .nav-link:hover {
            background-color: #1A395D;
        }

        .quote-btn {
            background-color: #2761A3;
            color: white !important;
            text-decoration: none;

            font-weight: 500;
            padding: 8px 28px;
        }

        .quote-btn:hover {
            background-color: #163f7a;
        }

        @media (max-width: 991px) {
            .header-middle .col-md-4.text-end {
                text-align: center !important;
                margin-top: 10px;
            }
        }





        /* herosection */
        .hero-section {
       background: url('/images/header-bg.png') center center/cover no-repeat;
    height: 90vh;
    position: relative;
    margin-top:-30px;
    z-index: -1; /* pushes the hero section behind other elements */
}

.hero-overlay {
    background: rgba(0, 0, 0, 0.4);
    height: 100%;
}

.hero-content {
    max-width: 700px;
}

.hero-content h1 {
    font-size: 3.9rem;
    line-height: 1.2;
    color: #fff;
}

.hero-content p {
    color: #ddd;
    font-size: 20px !important;
}

.hero-buttons .btn-primary {
    background-color: #2761A3;
    border: none;
    border-radius: 0px !important;
    padding: 10px 25px;
}

.hero-buttons .btn-light {
    background-color: #fff;
    border: none;
        border-radius: 0px !important;

    padding: 10px 25px;
}

/* ===== Stats Section ===== */
.stats-row {
    position: absolute;
    bottom: -50px;
    width: 100%;
}

.stat-card {
    border-radius: 0;
    color: white;
    gap: 10px;
}

.dark-blue {
    background-color: #1A395D;
}

.medium-blue {
    background-color: #2761A3;
}

.light-blue {
    background-color: #355980;
}

.stat-card i {
    font-size: 2rem;
    color: #fff;
}

.stat-card h4 {
    font-size: 1.8rem;
    margin: 0;
}

.stat-card p {
    margin: 0;
    color: #ddd;
}

/* Remove gaps between cards */
.row.gx-0 {
    margin-right: 0;
    margin-left: 0;
}

.col-md-4 {
    padding-left: 0 !important;
    padding-right: 0 !important;
}

/* Responsive */
@media (max-width: 768px) {
    .stats-row {
        position: static;
        margin-top: 30px;
    }
    .hero-content {
        text-align: center;
    }
    .stat-card {
        justify-content: flex-start;
        padding: 15px;
    }
}

/* about.blade.php */
/* === GENERAL SECTION === */
.about-section {
  padding: 80px 0;
}


.about-img {
  position: relative;
  overflow: hidden;
  height: 780px; /* adjust this until it visually matches your accordion height */
  margin-left:-100px;
  margin-right:60px;
z-index: 5; /* 🔥 Forces image to be in front */

}

.about-img img {
  position: absolute;
  top: -120px;
  width: 100%;
  height: 100%;
  object-fit: cover; /* keeps image proportional without stretching */
  z-index: 5; /* 🔥 Forces image to be in front */
}

.section-subtitle {
  color: #2761A3;
  font-weight: 600;
  letter-spacing: 1px;
}

.section-title {
  font-weight: 700;
  font-size: 32px;
  color: #0A1D37;
}

.section-text {
  color: #5c5c5c;
  margin-bottom: 30px;
}

/* === GRADIENT starts from Key Points heading and expands both sides === */
.content-col {
  position: relative;
  padding: 40px;
  border-radius: 8px;
  z-index: 1;
}

.content-col::before {
  content: "";
  position: absolute;
  top: 90px; /* 👈 starts right under the About Us line */
  left: -680px; /* 👈 slight left extension */
  right: -40px; /* 👈 slight right extension */
  bottom: 0;
  background: linear-gradient(90deg, #F3F3F3 0%, #FFFFFF 100%);
  border-radius: 0px;
  z-index: -1;
}

/* === ACCORDION STYLING === */
.custom-accordion .accordion-item {
  border: none;
  border-bottom: 1px solid #ddd;
  background: transparent;
  margin-bottom: 5px;
}


.custom-accordion .accordion-button {
  background: transparent;
  padding-left: 0;
  padding-right: 0;
  box-shadow: none;
  display: flex;
  align-items: center;
  gap: 10px;
}


.custom-accordion .accordion-button::after {
  filter: brightness(0) saturate(100%);
}
.custom-accordion .accordion-item:first-child {
  border-bottom: none !important;
}
.about-divider {
  width: 100%;
  height: 1px;
  background: #ddd;
  margin: 10px 0 20px 0;
}


.custom-accordion .accordion-button:not(.collapsed) {
  color: #0A1D37;
  background: transparent !important;
}
.custom-accordion .accordion-body {
  background: #ffffff;
  padding: 15px 20px;
  box-shadow: 0 0 10px rgba(0,0,0,0.05);
  border-radius: 4px;
  margin-bottom: 10px;
  text-align: justify;
}
.custom-accordion .accordion-button::after {
  display: none !important;
}

/* services */
/* Container spacing */
.servicess-section {
    background: #ffffff;
}

/* Titles */
.servicess-subtitle {
    font-size: 14px;
    font-weight: 500;
    color: #2761A3;
    text-transform: uppercase;
    letter-spacing: 2px;
}

.servicess-title {
    font-size: 32px;
    font-weight: 800;
    color: #04182F;
}

/* SLIDER CARD STYLING */
.servicess-card {
    width: 300px !important;   /* EXACT smaller width */
    padding-right: 35px;
    border-right: 1px solid #dcdcdc; /* same divider */
}

.servicess-card:last-child {
    border-right: none;
}

/* ICON */
.servicess-icon {
    width: 45px;
    opacity: 0.8;
    margin-bottom: 15px;
}

/* Heading */
.servicess-heading {
    font-size: 17px;
    font-weight: 700;
    color: #04182F;
    margin-bottom: 10px;
}

/* Text */
.servicess-text {
    font-size: 13px;
    line-height: 1.6;
    color: #555;
}

/* Swiper spacing */
.swiper {
    padding-left: 40px;
}

.swiper-slide {
    display: flex;
    flex-direction: column;
}



/* recent work */
/* recent work */
.recent-work {
    width: 75%;   /* 🔥 Was 90% — now perfect smaller width */
    margin: 40px auto;
    padding: 30px; /* Was 40 — reduced for smaller height */
    border-radius: 15px;
    color: white;

    background:
        linear-gradient(to right, rgba(22, 54, 88, 0.95) 40%, rgba(22, 54, 88, 0.98) 80%),
        url('/images/new.jpg');
    
    background-size: cover;
    background-repeat: no-repeat;
    background-position: left center;
}




/* Header */
.rw-header {
    display: flex;
    justify-content: space-between;
    align-items: center;
    margin-bottom: 35px;
}

.sub-title {
    font-size: 16px;
    opacity: 0.7;
    letter-spacing: 1px;
    color: #FFFFFF !important;
}

.main-title {
    font-size: 32px;
    margin-top: -5px !important;
    color: #FFFFFF !important;
}

/* SEE ALL PROJECTS BUTTON WITH WHITE ARROW BOX */
.see-projects {
    background: #1c4e80;
    padding-right:  10px;
    padding-left:  10px;

    border-radius: 8px;
    border: none;
    color: white;
    font-size: 14px;
    cursor: pointer;
    display: flex;
    gap: 10px;
    align-items: center;
}

.see-projects span {
    background: white;
    color: #2761A3;
    padding: 5px 7px;
    border-radius: 0px;
    font-weight: bolder;
    font-size: 22px;
}

/* Card Container */
.rw-card {
    display: flex;
    gap: 20px;
    backdrop-filter: blur(4px);
}

/* Image Section (WIDER THAN BEFORE) */
.rw-image {
    width: 55%;
}

.rw-image img {
    width: 100%;
    height: 100%;
    object-fit: cover;
    border-radius: 15px;
}

/* Content Section (NARROWER NOW) */
.rw-content {
    width: 45%;
    display: flex;
    flex-direction: column;
    justify-content: space-between;
    margin-left:30px;
}

.rw-title {
    font-size: 28px;
    margin-bottom: 5px;
}

.rw-description {
    opacity: 0.8;
    line-height: 1.2;
}

/* Info Section with lines below each field */
.rw-info {
    margin-top: -11px !important;
}

.rw-info div {
    
    margin-bottom: 5px !important ;
    border-bottom: 1px solid rgba(255,255,255,0.25);
}

.label {
    font-size: 12px;
    opacity: 0.6;
}

.value {
    font-size: 15px;
    margin-top: -10px;
}

/* VIEW DETAILS BUTTON WITH ONLY LINE + ARROW */
.view-details {
    background: transparent;
    border: none;
    color: white;
    font-size: 15px;
    cursor: pointer;
    margin-top: -15px !important;
    padding: 0;
    display: inline-flex;
    align-items: center;
    gap: 8px;
    position: relative;
}

.view-details::after {
    content: "";
    position: absolute;
    left: 0;
    bottom: -3px;
    width: 110px;
    height: 1px;
    background: rgba(255,255,255,0.4);
}

.view-details span {
    font-size: 18px;
    margin-left: 5px;
}
/* whychooseus */
.why-section {
    padding: 30px 20px;
    
}

.text-center {
    text-align: start;
}

.sub-titlee {
    font-size: 16px;
    color: #2761A3 ;
}

.main-titlee {
    font-size: 32px;
    font-weight: 800;
    color: #04182F;
}

/* GRID */
.why-grid {
    max-width: 1050px;
    margin: 40px auto;
    display: grid;
    grid-template-columns: repeat(3, 1fr);
    gap: 25px;
}

/* CARD */
.why-card {
    background: #ffffff;
    padding: 25px;
    border-radius: 15px;
    box-shadow: 0px 4px 20px rgba(0,0,0,0.06);
}

.why-card h3 {
    margin-top: 5px;
    font-size: 18px;
    font-weight: 700;
    color: #0f1f38;
}
.why-card {
    display: grid;
    grid-template-columns: 50px auto;
    column-gap: 15px;
}

.icon-box {
    margin-top: 5px;
}

.card-text-area {
    display: flex;
    flex-direction: column;
    justify-content: flex-start;
}

.card-text-area h3 {
    margin-top: 12px !important;
}

.why-card p {
    margin-top: 20px;
    font-size: 14px;
    color: #555;
    line-height: 1.6;
    margin-left: -65px !important;
    text-align: justify !important;
}

/* ICON BOX */
.icon-box {
    background: #2761A3;
    width: 55px;
    height: 55px;
    border-radius: 4px;
    display: flex;
    align-items: center;
    justify-content: center;
}

.icon-box i {
    font-size: 22px;
    color: #fff;
}

/* IMAGE BOX EXACT HEIGHT MATCHED TO 2 CARDS */
/* Make image height exactly equal to two cards */
.why-image-box {
    grid-row: span 2; /* VERY IMPORTANT */
    height: 100%;
}

.why-image-box img {
    width: 100%;
    height: 100%;
    object-fit: cover;
    border-radius: 15px;
}


/* testimonials */
.testimonial-section {
    margin-top: 0;
}

/* Blue Background With Icons */
.testimonial-top {
    background: url('/images/t11.png');;
    padding: 40px 0;
    text-align: center;
    height: 400px;
}

.testimonial-top i {
    color: white;
    font-size: 40px;
    margin: 0 80px;
}

/* White Card */
.testimonial-card {
    background: white;
    max-width: 1050px;
    margin: -240px auto 0 auto;
    padding: 50px 40px;
    border-radius: 6px;
    box-shadow: 0 10px 35px rgba(0,0,0,0.1);
    text-align: center;
    position: relative;
}

/* CLIENT text */
.client-title {
    letter-spacing: 2px;
    font-size: 12px;
    color: #2761A3;
    margin-bottom: 5px;
}

/* main title */
.mainn-title {
    margin-bottom: 30px;
    font-size: 32px;
    font-weight: 800;
    color: #0f1f38;
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
    color: #7b8aa0;
    position: absolute;
    top: 36%;
    width: 100%;
    left: 0;
}

.testimonial-text {
    margin-top: 30px;
    line-height: 1.8;
    color: #4a4a4a;
}

.author {
    margin-top: 25px;
    font-weight: 600;
    color: #0f1f38;
}

.bi-heart {
    color: #7486a3;
    font-size: 18px;
    margin-top: 3px;
}




/* faq section */
/* ===== FAQ SECTION ===== */

.faq-section {
    padding: 60px 40px;
    max-width: 1090px !important;
    margin-left: 130px;
    font-family: 'Roboto', sans-serif;

    
}

/* Header */
.faq-header {
    display: flex;
    justify-content: space-between;
    align-items: center;
    margin-bottom: 40px;
}

.faq-subtitle {
    font-size: 16px;
    color: #2761A3;
    margin-bottom: 5px;
    font-family: 'Roboto', sans-serif;
}

.faq-title {
    font-size: 32px;
    font-weight: 800;
    color: #04182F;
    margin: 0;
    font-family: 'Roboto', sans-serif;
}

/* Button */
.faq-btn {
    display: inline-flex;
    align-items: center;
    background: #2761A3;
    color: white;
    padding: 0px 15px;
    border-radius: 12px;
    font-weight: 600;
    text-decoration: none;
    font-size: 14px;
    transition: 0.25s ease;
}

.faq-btn i {
    margin-left: 8px;
    background-color: #163658;
    width:40px;
    height:40px;
    text-align: center;
    padding-top: 9px;
}


/* Grid */
.faq-grid {
    display: grid;
    grid-template-columns: repeat(3, 1fr);
    max-width: 1080px;
    gap: 40px;
    
}

/* FAQ Item */
.faq-item {
    padding-right: 20px;
}

.faq-item h3 {
    margin-top: 12px;
    font-size: 18px;
    font-weight: 700;
    color: #0f1f38;
}

.faq-item p {
    margin-top: 8px;
    font-size: 14px;
    color: #555;
    line-height: 1.6;
}

.faq-icon {
    background: #2761A333;
    width: 45px;
    height: 45px;
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
}

.faq-icon i {
    font-size: 22px;
    color: #2761A3;
}
/* footer */

.footer-section {
    background: #163658;
    color: white;
    
    padding: 40px 60px;
    position: relative;
}

.newsletter h2 {
    font-size: 30px;
    font-weight: 600;
    margin-bottom: 15px;
}

.newsletter-box {
    display: flex;
    margin-top: -65px;
    width: 45%;
    gap: 15px;
    margin-left: 650px;
}

.newsletter-box input {
    flex: 1;
    padding: 12px 20px;
    border-radius: 50px;
    border: 1px solid #F5F5F5;
    background: transparent;
    color: #F5F5F5;
    font-size: 14px;
}

.newsletter-box button {
    padding: 12px 28px;
    border-radius: 50px;
    border: none;
    background: #2761A3;
    color: #F5F5F5;
    font-weight: 600;
    cursor: pointer;
}

.footer-line {
    border: none;
    border-bottom: 2px solid #FFFFFF;
    margin: 30px 0;
}

.footer-content {
    display: flex;
    justify-content: space-between;
}

.footer-box {
    width: 23%;
}

.footer-logo {
    width: 130px;
    margin-bottom: 15px;
}

.footer-text {
    font-size: 13px;
    line-height: 20px;
    margin-bottom: 40px;
    color: #D5D5D5;
}

.footer-social i {
    font-size: 18px;
    margin-right: 12px;
    background: #163658;
    padding: 8px;
    border:1px solid #C4C4C4;
    border-radius: 50%;
    cursor: pointer;
    color: #D5D5D5;
    margin-bottom: 20px;
}

/* Titles */

.footer-box h3 {
    font-size: 20px;
    margin-bottom: 15px;
}
 .footerr-line {
    display: flex;
    align-items: center; /* ICON MID */
    gap: 12px;           /* space between icon and text */
    margin-bottom: 15px;
    font-size: 14px;
    color: #D5D5D5;
}

.icon-circle {
    width: 40px;
    height: 40px;
    border: 1px solid #C4C4C4;
    border-radius: 50%;
    display: flex;
    align-items: center;  /* center icon vertical */
    justify-content: center; /* center icon horizontal */
}

.icon-circle i {
    font-size: 18px;
}
.footer-bottom p {
    margin: 0;
    padding: 0;
}


/* List */
.footer-box ul {
    list-style: none;
    padding: 0;
    margin-left: 140px;
    color: #D5D5D5;
}

.footer-box ul li {
    font-size: 13px;
    margin-bottom: 10px;
    color: #D5D5D5;
}
/* FULL FOOTER BACKGROUND */
.footer-section {
    background: #0B325E;
    color: white;
    padding-bottom: 0;
}

/* SEPARATE BOTTOM STRIP (LIGHT BLUE LIKE DEMO) */
.footer-bottom-bar {
    background: #2761A3;  /* exact demo-style lighter blue */
    position: relative;
    margin-top: 0px;
    height:37px;
    margin-bottom: 0px !important;
}

/* CONTENT OF BOTTOM BAR */
.footer-bottom {
    display: flex;
    max-width: 1200px !important; /* like container */
    margin: 0 auto;    /* center content */
    justify-content: space-between;
    align-items: center;
    font-size: 13px;
    color: #d0d7e4;
}

/* BACK TO TOP */
.back-to-top {
    position: absolute;
    top: -16px;  /* so it floats above like demo */
    right: 40px;
    background: #ffffff;
    color: #0B325E;
    width: 35px;
    height: 35px;
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    box-shadow: 0px 0px 6px rgba(0,0,0,0.25);
    cursor: pointer;
}
/* breaddcumb */
.breadcrumb-text {
    font-size: 12px;
    color: #dfe6f1;
    opacity: 0.9;
    margin-bottom: 8px;
    margin-top: -142px !important;
}

.breadcrumb-link {
    color: #dfe6f1;
    text-decoration: none !important;
}
/* about */
/* Background Section */
.achievements-section {
    background: url('/images/ab2.png') center/cover no-repeat;
    position: relative;
    padding: 40px 0;
    z-index: 4;
}

.achievements-section .overlay {
    
    padding: 70px 20px;
    text-align: center;
}

/* Titles */
.sub-titleee {
    color: #d3dae6;
    font-size: 14px;
    margin-bottom: 5px;
    letter-spacing: 1px;
}

.main-titleee{
    color: #ffffff;
    font-size: 32px;
    font-weight: 700;
    margin-bottom: 60px;
}

/* Stats Row */
.statss-row {
    display: flex;
    justify-content: center;
    align-items: center;
    gap: 70px;
}

/* Numbers */
.stats-box h3 {
    font-size: 38px;
    font-weight: 700;
    color: #ffffff;
    margin: 0;
}

/* Subtext */
.stats-box p {
    margin-top: 5px;
    font-size: 14px;
    color: #d3dae6;
}

/* Vertical Line */
.dividerr {
    height: 60px;
    width: 1px;
    background: rgba(255,255,255,0.25);
}

/* cards */
.history-section {
    padding: 40px 0 80px;
    font-family: "Segoe UI", sans-serif;
}

/* Big Image */
.history-image-box {
    max-width: 1100px;
    margin: 0 auto 50px;
    position: relative;
    border-radius: 8px;
    overflow: hidden;
}

.history-image-box img {
    width: 100%;
    height: 450px;
    object-fit: cover;
    border-radius: 20px;
}

/* Center Circle Icon */
.history-icon {
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
    background: white;
    width: 80px;
    height: 80px;
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    border: 3px solid #2761A3;
    box-shadow: 0 5px 15px rgba(0,0,0,0.15);
}

.history-icon i {
    font-size: 32px;
    color: #0d4fd3;
}

/* Cards */
.history-cards {
    max-width: 1100px;
    margin: 0 auto;
    display: grid;
    grid-template-columns: repeat(3, 1fr);
    gap: 25px;
}

.history-card {
    border: 1px solid #d7dfeb;
    border-radius: 6px;
    padding: 25px;
    background: white;
    transition: 0.2s;
}

.history-card:hover {
    transform: translateY(-3px);
}

/* Year tag */
.year-badge {
    display: inline-block;
    background: #2761A3;
    color: white;
    padding: 5px 15px;
    border-radius: 6px;
    font-size: 14px;
    font-weight: 600;
    margin-bottom: 15px;
}

.history-card h3 {
    font-size: 18px;
    font-weight: 700;
    color: #0f1f38;
}

.history-card p {
    margin-top: 8px;
    font-size: 14px;
    color: #555;
    line-height: 1.6;
}

/* team */
/* Section spacing */
.experts-section {
    padding: 40px 0 60px;
    width:1100px;
    margin-left:120px;
}

/* Header */
.experts-header {
    display: flex;
    justify-content: space-between;
    align-items: center;
    margin-bottom: 30px;
}

.experts-sub {
    font-size: 16px;
    color: #2761A3;
}

.experts-title {
    font-size: 32px;
    font-weight: 800;
    color: #04182F;
}

/* Button */
.experts-btn {
    background: #2761A3;
    color: white;
    padding: 6px 22px;
    border-radius: 8px;
    text-decoration: none;
    font-size: 14px;
    font-weight: 600;
}

.experts-btn i {
    margin-left: 8px;
    background-color: #163658;
    padding:8px;
    border: 1px solid #163658;
}

/* Grid */
.experts-grid {
    display: grid;
    grid-template-columns: repeat(4, 1fr);
    gap: 22px;
}

/* All cards */
.expert-card {
    border-radius: 12px;
    overflow: hidden;
    position: relative;
}

/* First card (info-card) */
.info-card {
    background: #0f1f38;
    color: white;
    padding: 30px;
}

.info-card p {
    font-size: 16px;
    line-height: 1.5;
    margin-left: 20px;
    text-align: justify;
    color: #C4C4C4 !important;
}
.info-icons {
    display: flex;
    gap: 15px;  /* space between icons */
    margin-top: 10px;
}


.info-icons i {
    font-size: 20px;
    width: 45px;
    height: 45px;
    display: flex;
    align-items: center;
    justify-content: center;
    
    color: #C4C4C4;
    border: 1px solid #C4C4C4;
    border-radius: 50%;

    margin-top: 20px;
    margin-right: 10px;
}


/* Other cards default image */
.image-area img {
    width: 100%;
    height: 260px;
    object-fit: cover;
    border-radius: 12px;
}
.image-area {
    position: relative;
    height: 260px;
    overflow: hidden;
    border-radius: 12px;
}


/* Hover Layout (Hidden initially) */
.hover-info {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background: #163658;
    color: white;
    padding: 30px;
    display: flex;
    flex-direction: column;
    justify-content: center;
    opacity: 0;
    pointer-events: none;
    transition: 0.3s ease-in-out;
    border-radius: 12px;
}

/* Reveal on Hover */
.image-area:hover .hover-info {
    opacity: 1;
}
/* Name & Role under each card */
.expert-card h4 {
    margin-top: 10px;
    font-size: 18px;
    font-weight: 700;
}

.expert-card span {
    font-size: 13px;
    color: #6d7c90;
}
.expert-name {
    margin-top: 12px;
    font-size: 18px;
    font-weight: 700;
    color: #04182F;
}

.expert-role {
    font-size: 13px;
    color: #818181;
}
/* our services */
/* SECTION WRAPPER */
.services-section {
    padding: 60px 0;
    text-align: center;
}

/* SUBTITLE */
.services-subtitle {
    font-size: 16px;
    color: #2761A3;
    margin-bottom: 5px;
}

/* MAIN TITLE */
.services-title {
    font-size: 32px;
    font-weight: 800;
    color: #04182F;
    margin-bottom: 50px;
}

/* GRID LAYOUT */
.services-grid {
    max-width: 1000px;
    margin: 0 auto;
    display: grid;
    grid-template-columns: repeat(3, 1fr);
    gap: 50px 40px;
    text-align: left;
}

/* INDIVIDUAL CARD */

.service-cards {
    position: relative;
    padding-bottom: 15px;
    padding-right: 25px;
}
.service-cards {
    background: white; /* FIX → this removes the vertical fake line */
}


/* Vertical line */
/* Vertical line */
.service-cards::before {
    content: "";
    position: absolute;
    top: 0;
    right: 0;
    width: 2px;
    height: 80%;
    background: #e7e7e7; /* FIX THIS */
}

/* Remove line for every 3rd card */
.services-grid .service-cards:nth-child(3n)::before {
    display: none;
}


/* Horizontal line */
.service-cards::after {
    content: "";
    position: absolute;
    left: 0;
    bottom: 0;
    height: 2px;
    width: 80%; /* controls horizontal line length */
    background: #e7e7e7;
}

/* Remove lines for last column */
/* Remove vertical line for every 3rd item */




/* Remove lines for last row */
.services-grid .service-cards:nth-child(4)::after,
.services-grid .service-cards:nth-child(5)::after,
.services-grid .service-cards:nth-child(6)::after {
    display: none;
}


/* ICON */
.service-icon {
    font-size: 38px;
    color: #5D5F61;
    margin-bottom: 15px;
}

/* TITLE */
.service-cards h3 {
    font-size: 18px;
    font-weight: 700;
    color: #04182F;
    margin-bottom: 10px;
}

/* DESCRIPTION */
.service-cards p {
    font-size: 14px;
    color: #555;
    line-height: 1.7;
}

/* choooseus */

.whyy-choose-us {
    text-align: center;
    padding: 60px 0;
}

.whyy-subtitle {
    color: #2761A3;
    font-size: 16px;
    margin-bottom: 5px;
}

.whyy-title {
    font-size: 32px;
    color: #04182F;
    font-weight: 800;
    margin-bottom: 40px;
}

/* GRID */
.whyy-grid {
    max-width: 1100px;
    margin: auto;
    display: grid;
    grid-template-columns: 1fr 80px 1.4fr 80px 1fr;
    align-items: center;
}

/* CARD */
.whyy-card {
    text-align: center;
}

/* WRAPPER (outside — lets number tag go out) */
.circle-wrapper {
    position: relative;
    width: fit-content;
    height: fit-content;
    overflow: visible !important;
    margin: auto;
}

/* ROUND IMAGE (inside — keeps border radius) */
.circle-wrapper .circle-img {
    width: 160px;
    height: 160px;
    border-radius: 50%;
    overflow: hidden;
}

.circle-wrapper.large .circle-img {
    width: 260px;
    height: 260px;
}

/* IMAGE INSIDE */
.circle-wrapper img {
    width: 100%;
    height: 100%;
    object-fit: cover;
}

/* NUMBER TAG */
.number-tag {
    position: absolute;
    background: #2761A3;
    color: white;
    width: 45px;
    height: 45px;
    border-radius: 50%;
    display: flex;
    justify-content: center;
    align-items: center;
    font-weight: bold;
    font-size: 16px;
}

/* Small tag position */
.circle-wrapper.small .number-tag {
    bottom: 20px;
    right: -20px;
}

/* Large tag position */
.circle-wrapper.large .number-tag {
    bottom: 205px;
    right: 4px;
}

/* TITLE */
.whyy-card h3 {
    margin-top: 15px;
    font-size: 18px;
    font-weight: 700;
    color: #04182F;
}

/* DESCRIPTION */
.whyy-card p {
    font-size: 14px;
    color: #555;
    margin-top: 8px;
}

/* ARROW */
.arrowss {
    font-size: 80px;
    color: #a6a6a6;
    font-weight: 200;
    margin-top: -100px;
}

/* singleservices */
 .service-overview-section {
            padding: 50px 0;
        }

        .service-title-label {
            font-size: 12px;
            letter-spacing: 0.16em;
            text-transform: uppercase;
            color: #2761A3;
            font-weight: 600;
            margin-bottom: 5px;
        }

        .service-main-heading {
            font-size: 32px;
            font-weight: 700;
            color: #111827;
            margin-bottom: 16px;
        }

        .service-description {
            font-size: 14px;
            line-height: 1.7;
            color: #4b5563;
            max-width: 650px;
            margin-bottom: 22px;
        }

        /* .service-main-card {
            
            border: 2px solid #9E9E9E ;
            padding: 28px 28px 24px;
        } */

        .service-image-wrapper {
            border-radius: 12px;
            overflow: hidden;
        }

        .service-image-main {
            width: 100%;
            height: 340px;
            object-fit: cover;
            display: block;
        }

        .service-thumbs {
            display: flex;
            gap: 8px;
            margin-top: 10px;
        }

        .service-thumb {
            flex: 1;
            border-radius: 8px;
            overflow: hidden;
            cursor: pointer;
        }

        .service-thumb img {
            width: 100%;
            height: 110px;
            object-fit: cover;
            display: block;
        }

        /* Right Column – Other Services card */
        .other-services-card {
            border-radius: 12px;
            border: 1px solid #9E9E9E ;

            padding: 18px 20px;
            margin-bottom: 20px;
        }

        .other-services-title {
            font-size: 14px;
            font-weight: 600;
            color: #6b7280;
            margin-bottom: 14px;
        }

        .service-item {
            display: flex;
            align-items: center;
            justify-content: space-between;
            padding-left:  10px;
            padding-right: 5px;;
            
            border-radius: 0px;
            font-size: 14px;
            margin-bottom: 6px;
            border: 1px solid transparent;
            transition: all 0.15s ease-in-out;
        }

        .service-item span {
            font-weight: 700;
        }

        .service-item i {
            font-size: 14px;
            color: #535455;
            margin-left: 3px;
            padding: 12px;
            background-color: #F5F5F5;
            border: 1px solid #E8E8E8;
        }

        .service-item.active {

            background: #2761A3;
            color: #ffffff;
            

        }

        .service-item.active i {
            color: #ffffff;
            margin-left: 3px;
            padding: 12px;
            background-color: #163658;
            border: 1px solid #163658;

        }

        .service-item:not(.active) {
            background: #f9fafb;
            color: #4b5563;
            border-color: #e5e7eb;
        }

        .service-item:not(.active):hover {
            background: #eef2ff;
            border-color: #c7d2fe;
        }

        /* CTA card */
        .cta-card {
            background: url('images/side.png');
            border-radius: 16px;
            padding: 22px 22px 20px;
            color: #e5e7eb;
            box-shadow: 0 14px 40px rgba(15, 23, 42, 0.2);
        }

        .cta-header {
            /* display: flex; */
            align-items: center;
            gap: 12px;
            margin-bottom: 10px;
        }

        .cta-icon {
            width: 60px;
            height: 60px;
            border-radius: 999px;
            border: 1px solid rgba(255, 255, 255, 0.35);
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 20px;
        }

        .cta-title {
            font-size: 16px;
            font-weight: 600;
        }

        .cta-text {
            font-size: 13px;
            line-height: 1.6;
            margin-bottom: 14px;
            color: #cbd5f5;
        }

        .cta-btn {
            display: inline-flex;
            align-items: center;
            gap: 8px;
            background: #2761A3;
            color: #ffffff;
            border-radius: 2px;
            padding-left: 15px;
            padding-right: 25px;

            font-size: 13px;
            font-weight: 600;
            text-decoration: none;
        }

        .cta-btn i {
            font-size: 14px;
            color: #1A395D;
            margin-left: 3px;
            padding: 8px;
            background-color: #ffffff;
            border: 1px solid #ffffff;
        }

        .cta-btn:hover {
            background: #e5e7eb;
        }

        /* Responsive tweaks */
        @media (max-width: 991.98px) {
            .service-main-card {
                margin-bottom: 24px;
            }
        }

        @media (max-width: 575.98px) {
            .service-main-heading {
                font-size: 26px;
            }

            .service-image-main {
                height: 210px;
            }

            .service-description {
                font-size: 13px;
            }
        }
        /* what we offer */
        .offer-section {
        color: #1f2937;
        margin-left:120px;
    }

    .offer-title {
        font-size: 30px;
        font-weight: 700;
        color: #0f172a;
        margin-bottom: 10px;
    }

    .offer-text {
        max-width: 800px;
        font-size: 14px;
        line-height: 1.7;
        color: #4b5563;
        margin-bottom: 20px;
    }

    .offer-list {
    display: grid;
    grid-template-columns: repeat(3, max-content); /* keeps items snug */
    column-gap: 60px;   /* LEFT–RIGHT spacing (same as screenshot) */
    row-gap: 6px;       /* TOP–BOTTOM spacing between lines */
    font-size: 14px;
    color: #1e293b;
}


    .offer-item {
        display: flex;
        align-items: center;
        gap: 5px;
        font-weight: 500;
    }

    .offer-dot {
        width: 8px;
        height: 8px;
        background-color: #2761A3; /* blue bullet */
        border-radius: 2px;
    }

    @media(max-width: 768px) {
        .offer-list {
            grid-template-columns: repeat(2, auto);
        }
    }

    @media(max-width: 500px) {
        .offer-list {
            grid-template-columns: repeat(1, auto);
        }
    }


    /* chooseee */
    .whyyy-section {
        margin-left: 120px;
        margin-right: 120px;
        margin-top: 40px;
    }

    .whyyy-title {
        font-size: 30px;
        font-weight: 700;
        color: #0f172a;
        margin-bottom: 10px;
    }

    .whyyy-text {
        font-size: 14px;
        color: #4b5563;
        line-height: 1.7;
        max-width: 750px;
        margin-bottom: 30px;
    }

    .whyyy-grid {
        display: grid;
        grid-template-columns: repeat(2, 1fr);
        gap: 20px 24px;
    }

    .whyyy-card {
        background: #ffffff;
        border-radius: 12px;
        padding: 22px;
        box-shadow: 0 6px 18px rgba(0, 0, 0, 0.06);
        display: flex;
        gap: 16px;
        align-items: flex-start;
    }

    .whyyy-card-icon {
        background: #E8F0FB;
        width: 50px;
        height: 50px;
        border-radius: 8px;
        display: flex;
        justify-content: center;
        align-items: center;
    }

    .whyyy-card-icon img {
        width: 28px;
        height: 28px;
        object-fit: contain;
    }

    .whyyy-card-title {
        font-size: 18px;
        font-weight: 700;
        color: #0f172a;
        margin-bottom: 6px;
    }

    .whyyy-card-text {
        font-size: 14px;
        color: #4b5563;
        line-height: 1.6;
        max-width: 300px;
    }

    @media(max-width: 768px) {
        .whyyy-grid {
            grid-template-columns: 1fr;
        }
        .whyyy-section {
            margin-left: 20px;
            margin-right: 20px;
        }
    }


  /* faq */
  .faqq-section {
    max-width: 900px;
    margin: 0 auto;
    margin-left: 112px;
}

.faqq-title {
    font-size: 28px;
    font-weight: 700;
    color: #0f172a;
    margin-bottom: 40px;
}

.faqq-grid {
    display: grid;
    grid-template-columns: repeat(2, 1fr);
    gap: 30px 30px;
    column-gap: 5px;
}

.faqq-item {
    position: relative;
}

.faqq-number {
    width: 45px;
    height: 45px;
    background-color: #2761A333;
    color: #2761A3;
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    font-weight: 600;
    margin-bottom: 10px;
    font-size: 16px;
}

.faqq-question {
    font-size: 18px;
    font-weight: 600;
    color: #0f172a;
    margin-bottom: 6px;
}

.faqq-answer {
    color: #475569;
    font-size: 14px;
    line-height: 1.6;
    max-width: 360px;
}

.faqq-btn {
    margin-top: 40px;
    background-color: #1e3a8a;
    color: white;
    padding: 12px 25px;
    border-radius: 8px;
    border: none;
    font-size: 14px;
    font-weight: 500;
    cursor: pointer;
    display: inline-flex;
    gap: 10px;
    align-items: center;
}

.faqq-btn:hover {
    background-color: #1b3578;
}


/* recent projectsssss */


.recenttt-work {
    width: 90%;   /* 🔥 Was 90% — now perfect smaller width */
    margin: 40px auto;
    padding: 30px; /* Was 40 — reduced for smaller height */
    border-radius: 15px;
    color: white;

    
    
    background-size: cover;
    background-repeat: no-repeat;
    background-position: left center;
}




/* Header */
.rwww-header {
    display: flex;
    justify-content: space-between;
    align-items: center;
    margin-bottom: 35px;
}

.subbb-title {
    font-size: 16px;
    opacity: 0.7;
    letter-spacing: 1px;
    color:  #2761A3 !important;
}

.mainnn-title {
    font-size: 32px;
    margin-top: -5px !important;
    color: #04182F !important;
}

/* SEE ALL PROJECTS BUTTON WITH WHITE ARROW BOX */
.seee-projects {
    padding-right:  10px;
    padding-left:  10px;

    border-radius: 8px;
    border: none;
    color: white;
    font-size: 14px;
    cursor: pointer;
    display: flex;
    gap: 10px;
    align-items: center;
}

.seee-projects span {
    background: white;
    color: #000 !important;
    padding: 5px 7px;
    border-radius: 0px;
    font-weight: bolder;
    font-size: 22px;
}

/* Card Container */
.rwww-card {
    display: flex;
    gap: 20px;
    backdrop-filter: blur(4px);
    margin-top: 60px;
}

/* Image Section (WIDER THAN BEFORE) */
.rwww-image {
    width: 50%;
}

.rwww-image img {
    width: 100%;
    height: 100%;
    object-fit: cover;
    border-radius: 15px;
}

/* Content Section (NARROWER NOW) */
.rwww-content {
    width: 45%;
    display: flex;
    flex-direction: column;
    justify-content: space-between;
    margin-left:30px;
    color: #000 !important;

}

.rwww-title {
    font-size: 28px;
    margin-bottom: 5px;
        color: #000 !important;
        margin-bottom:20px;

}

.rwww-description {
    opacity: 0.8;
    line-height: 1.2;
        color: #000 !important;
        margin-bottom: 50px;

}

/* Info Section with lines below each field */
.rwww-info {
    margin-top: -11px !important;
        color: #000 !important;

}

.rwww-info div {
    
    margin-bottom: 5px !important ;
    border-bottom: 1px solid  #535355;
;
        color: #000 !important;

}

.labelll {
    font-size: 12px;
    opacity: 0.6;
        color: #000 !important;

}

.valueee {
    font-size: 15px;
    margin-top: -10px;
        color: #000 !important;

}

/* VIEW DETAILS BUTTON WITH ONLY LINE + ARROW */
.viewww-details {
    background: transparent;
    border: none;
    font-size: 15px;
     color: #2761A3 !important;

    cursor: pointer;
    margin-top: -2px !important;
    padding: 0;
    display: inline-flex;
    align-items: center;
    gap: 8px;
    position: relative;
}

.viewww-details::after {
    content: "";
    position: absolute;
    left: 0;
    bottom: -7px;
    width: 110px;
    height: 1px;
    color: #2761A3;
    background: #2761A3;
}

.new {
    font-size: 18px;
        color: #2761A3!important;

    margin-left: 5px;
}



</style>