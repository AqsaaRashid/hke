<div class="gallery-section" style="margin-left:150px; margin-bottom:4px; margin-top:30px;">

    <h2 class="gallery-title">Project Gallery</h2>

    <div class="gallery-grid">

        <div class="gallery-item wide">
            <img src="/images/recent.png">
        </div>

        <div class="gallery-item small">
            <img src="/images/recent.png">
        </div>

        <div class="gallery-item small">
            <img src="/images/recent.png">
        </div>

        <div class="gallery-item wide">
            <img src="/images/recent.png">
        </div>

    </div>

</div>
<style>
.gallery-grid {
    display: grid;
    grid-template-columns: 1fr 1fr;
    column-gap: 7px;
    row-gap: 10px;
}



/* All images same height */
.gallery-item img {
    height: 325px;
    object-fit: cover;
    display: block;
    border-radius: 16px;
}

/* Row 1 → Wide Left */
.gallery-item:nth-child(1) img {
    width: 600px;
    margin-left: 0;
    margin-right: 0px !important;
}

/* Row 1 → Small Right */
.gallery-item:nth-child(2) img {
    width: 75%;
    margin-left: 0px !important;
    margin-right: 0;
}

/* Row 2 → Small Left */
.gallery-item:nth-child(3) img {
    width: 75%;
    margin-left: 0;
    margin-right: auto;
}

/* Row 2 → Wide Right */
.gallery-item:nth-child(4) img {
    width: 600px;
    margin-left: -149px !important;
    margin-right: 0;
}

.gallery-grid {
    display: grid;
    grid-template-columns: 1fr 1fr;
    column-gap: 7px;
    row-gap: 10px;
}

/* All images same height */
.gallery-item img {
    height: 325px;
    object-fit: cover;
    display: block;
    border-radius: 16px;
}

/* Row 1 → Wide Left */
.gallery-item:nth-child(1) img {
    width: 100%; /* Ensure full width */
    margin-left: 0;
    margin-right: 0;
}

/* Row 1 → Small Right */
.gallery-item:nth-child(2) img {
    width: 100%; /* Ensure full width */
    margin-left: 0;
    margin-right: 0;
}

/* Row 2 → Small Left */
.gallery-item:nth-child(3) img {
    width: 100%; /* Ensure full width */
    margin-left: 0;
    margin-right: auto;
}

/* Row 2 → Wide Right */
.gallery-item:nth-child(4) img {
    width: 100%; /* Ensure full width */
    margin-left: 0;
    margin-right: 0;
}

/* Media Query for responsiveness */
@media (min-width: 768px) {
    .gallery-grid {
        grid-template-columns: 1fr 1fr;
    }
    .gallery-title{
        margin-left: -40px !important;

    }

    /* Adjusting images' width for larger screens */
    .gallery-item img {
        width: 100%;
    }

    /* Specific layout adjustments for large screens */
    .gallery-item:nth-child(1) img {
        width: 75%;
    }

    .gallery-item:nth-child(2) img {
        width: 75%;
    }

    .gallery-item:nth-child(3) img {
        width: 75%;
    }

    .gallery-item:nth-child(4) img {
        width: 75%;
    }
}

@media (max-width: 767px) {
    .gallery-grid {
        grid-template-columns: 1fr;
        column-gap: 10px;
    }
.gallery-title{
        margin-left: -40px !important;

    }
    /* Ensure all images take full width on smaller screens */
    .gallery-item img {
        width: 100%;
        margin-left: 0 !important;
        margin-right: 0 !important;
    }

    /* Adjust the layout for mobile view */
    .gallery-item:nth-child(1) img, 
    .gallery-item:nth-child(2) img,
    .gallery-item:nth-child(3) img,
    .gallery-item:nth-child(4) img {
        margin-left: -80px !important;
        margin-right: 0 !important;
    }
}

</style>