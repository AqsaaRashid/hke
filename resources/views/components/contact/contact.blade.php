<section class="contact" style="margin-bottom:40px;">
<div class="contact-section">
    <h6>Contact Us</h6>
    <h2>MESSAGE US FOR DETAILS</h2>
</div>

<div class="contact-wrapper">

    {{-- LEFT FORM --}}
    <div class="contact-form-box" style="width:500px !important;">
        <form>
            <!-- @csrf -->

            <div class="rowwwww">
                <input type="text" name="name" placeholder="Your Name">
                <input type="email" name="email" placeholder="Your Email">
            </div>

            <input type="text" name="subject" placeholder="Subject">
            <textarea name="message" placeholder="Message"></textarea>

            <button class="btnn-custom">Request a Quote</button>
        </form>
    </div>

    {{-- RIGHT SIDE --}}
    <div class="iinfo-box">

        {{-- ADDRESS --}}
        <div class="iinfo-row">
    <div class="iicon-box">
        <i class="bi bi-geo-alt-fill" style="font-size:16px;color:#1f4c8f;"></i>
    </div>
    <div>
        <h4>Address</h4>
        <p>Office 08, Gulberg Square, Gulberg Greens, Islamabad</p>
    </div>
</div>

<div class="ddivider"></div>

{{-- PHONE --}}
<div class="iinfo-row">
    <div class="iicon-box">
        <i class="bi bi-telephone-fill" style="font-size:16px;color:#1f4c8f;"></i>
    </div>
    <div>
        <h4>Phone :</h4>
        <p>+92 339 0909098<br>+92 339 0909098</p>
    </div>
</div>

<div class="ddivider"></div>

{{-- EMAIL --}}
<div class="iinfo-row">
    <div class="iicon-box">
        <i class="bi bi-envelope-fill" style="font-size:16px;color:#1f4c8f;"></i>
    </div>
    <div>
        <h4>Email :</h4>
        <p>rowaimkamal@hkebuilders.com<br>rowaimkamal@hkebuilders.com</p>
    </div>
</div>


    </div>

</div>


<div class="contact-map">
    <iframe 
        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3311.1274818595043!2d73.109!3d33.620!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x38df95123456789%3A0xabcdef123456789!2sGulberg%20Greens%2C%20Islamabad!5e0!3m2!1sen!2sPK!4v1730000000000"
        width="100%"
        height="350"
        style="border:0; border-radius:10px;"
        allowfullscreen=""
        loading="lazy">
    </iframe>
</div>

</section>

<style>
    .contact-map {
    width: 100%;
    max-width: 840px;
    margin: -25px auto 0 auto;
    padding: 0 20px;
    border-radius: 0px !important;
}

    .contact{
        max-width: 1400px !important;
    }

     .contact-section {
        text-align: center;
        margin-top: 40px;
    }

    .contact-section h6 {
        color: #2761A3;
        font-size: 12px;
        letter-spacing: 1px;
        margin: 0;
    }

    .contact-section h2 {
        font-size: 28px;
        font-weight: 700;
        color: #04182F;
        margin-top: 5px;
    }

    .contact-wrapper {
        display: flex;
        justify-content: center;
        gap: 40px;
        margin-top: 40px;
        padding: 20px;
    }

    /* LEFT FORM */
    .contact-form-box {
        width: 430px;
        background: #f7f8fa;
        border-radius: 0px;
        padding: 25px;
    }

    .rowwwww {
        display: flex;
        gap: 10px;
    }

    .rowwwww input {
        width: 50%;
    }

    input, textarea {
        width: 100%;
        padding: 12px;
        border: 1px solid #e5e7eb;
        border-radius: 4px;
        margin-bottom: 12px;
        font-size: 14px;
    }

    textarea {
        height: 140px;
        resize: none;
    }

    .btnn-custom {
        background: #2761A3;
        color: white;
        border: none;
        padding: 12px 20px;
        border-radius: 4px;
        font-size: 15px;
        cursor: pointer;
    }

    /* RIGHT SIDE */
    .iinfo-box {
        width: 260px;
    }

    .iinfo-row {
        display: flex;
        align-items: flex-start;
        gap: 12px;
        margin-bottom: 25px;
    }

    .iinfo-row h4 {
        margin: 0;
        font-size: 15px;
        font-weight: 600;
        color: #04182F;
    }

    .iinfo-row p {
        margin-top: 5px;
        font-size: 14px;
        color: #04182F;
        line-height: 20px;
    }

    .iicon-box {
        min-width: 42px;
        height: 42px;
        background: #F5F5F5;
        border-radius: 4px;
        display: flex;
        justify-content: center;
        align-items: center;
        color:#2761A3 !important;

    }
    

    .ddivider {
        height: 1px;
        background: #e5e7eb;
        margin: 20px 0;
        width: 100%;
    }
    /* res */
    /* ===============================
   RESPONSIVE – TABLET & MOBILE
   =============================== */

@media (max-width: 1024px) {
    .contact-wrapper {
        gap: 30px;
        padding: 15px;
    }

    .contact-form-box {
        width: 100% !important;
        max-width: 520px;
    }

    .iinfo-box {
        width: 100%;
        max-width: 300px;
    }

    .contact-map {
        max-width: 100%;
        margin-top: 20px;
    }
}

@media (max-width: 768px) {
    .contact-wrapper {
        flex-direction: column;
        align-items: center;
        gap: 30px;
    }

    .contact-form-box {
        width: 100% !important;
        max-width: 100%;
    }

    .iinfo-box {
        width: 100%;
        max-width: 100%;
    }

    .rowwwww {
        flex-direction: column;
        gap: 0;
    }

    .rowwwww input {
        width: 100%;
    }

    .contact-section h2 {
        font-size: 24px;
    }

    .contact-map iframe {
        height: 300px;
    }
}

@media (max-width: 480px) {
    .contact {
        padding: 0 10px;
    }

    .contact-section h2 {
        font-size: 22px;
        line-height: 28px;
    }

    .btnn-custom {
        width: 100%;
    }

    .contact-map iframe {
        height: 260px;
        border-radius: 6px;
    }
}

</style>