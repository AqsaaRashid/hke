<div class="gallery-section" style="margin-left:150px; margin-bottom:4px; margin-top:30px;">
    <h2 class="gallery-title">Project Gallery</h2>

    <div class="gallery-grid">

        <div class="gallery-item wide1">
            <img src="/images/recent.png">
        </div>

        <div class="gallery-item small1">
            <img src="/images/recent.png">
        </div>

        <div class="gallery-item small2">
            <img src="/images/recent.png">
        </div>

        <div class="gallery-item wide2">
            <img src="/images/recent.png">
        </div>

    </div>
</div>

<style>
    .gallery-section{
        max-width: 1050px !important;
    }
.gallery-grid {
    display: grid;
    grid-template-columns: 1.5fr 1.4fr 1.5fr; /* KEY */
    gap: 12px;
}

/* ROW 1 */
.wide1 {
    grid-column: 1 / span 2; /* wide */
}
.small1 {
    grid-column: 3 / 4; /* small */
}

/* ROW 2 */
.small2 {
    grid-column: 1 / 2; /* small */
}
.wide2 {
    grid-column: 2 / span 2; /* wide */
}

.gallery-item img {
    width: 100%;
    height: 325px;
    object-fit: cover;
    border-radius: 16px;
}

/* Mobile */
@media (max-width: 767px) {
    .gallery-section{
        margin-left: 10px !important;
    }
    .gallery-grid {
        grid-template-columns: 1fr;
    }

    .wide1, .small1, .small2, .wide2 {
        grid-column: auto;
    }
}
/* Large laptops / smaller desktops */
@media (max-width: 1200px) {
    .gallery-section {
        margin-left: auto !important;
        margin-right: auto !important;
        max-width: 95%;
    }
}

/* Tablets */
@media (max-width: 992px) {
    .gallery-section {
        margin-left: auto !important;
        margin-right: auto !important;
        max-width: 100%;
        padding: 0 12px;
    }
}

/* Small tablets */
@media (max-width: 768px) {
    .gallery-section {
        margin-left: 0 !important;
        padding: 0 10px;
    }
}


</style>