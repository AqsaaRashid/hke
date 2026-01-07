@extends('components.layout')
@section('content')

@include('components.home.navbar')
@include('components.terms')


<section class="terms" style="margin-left:110px !important;">

    <div class="terms-hero">
        <h1 class="terms-title" >Terms & Conditions</h1>
    </div>

    <div class="terms-content">

        <h2 class="terms-section-title">1. Company Overview</h2>
        <p class="terms-text">
            These Terms & Conditions govern the use of the website and services provided by
            <strong>HKE Builders</strong>, a construction and development company offering residential,
            commercial, and infrastructure construction services.
        </p>

        <div class="terms-divider"></div>

        <h2 class="terms-section-title">2. Use of Website</h2>
        <ul class="terms-list">
            <li>The website may only be used for lawful purposes related to our construction services.</li>
            <li>You agree not to misuse the website, submit false inquiries, or attempt unauthorized access.</li>
            <li>We reserve the right to modify or discontinue any part of the website without notice.</li>
        </ul>

        <h2 class="terms-section-title">3. Project Estimates & Quotations</h2>
        <p class="terms-text">
            Any quotation or estimate provided by HKE Builders through this website or via email is
            preliminary and based on the information supplied by the client. Final project costs may
            vary after site inspection, material selection, scope clarification, and formal agreement.
        </p>

        <h2 class="terms-section-title">4. Client Responsibilities</h2>
        <ul class="terms-list">
            <li>Clients must provide accurate project details, drawings, and site access when required.</li>
            <li>Delays caused by incomplete information or late approvals may impact timelines and costs.</li>
            <li>Clients are responsible for obtaining required approvals unless otherwise agreed in writing.</li>
        </ul>

        <div class="terms-divider"></div>

        <h2 class="terms-section-title">5. Intellectual Property</h2>
        <p class="terms-text">
            All website content including text, designs, images, logos, and layouts are the property
            of HKE Builders and may not be copied, reproduced, or reused without written permission.
        </p>

        <h2 class="terms-section-title">6. Third-Party Links</h2>
        <p class="terms-text">
            Our website may contain links to third-party websites. HKE Builders is not responsible
            for the content, accuracy, or practices of these external sites.
        </p>

        <h2 class="terms-section-title">7. Communications & Newsletter</h2>
        <p class="terms-text">
            By submitting your email or contacting us, you agree to receive communications related
            to our construction services, updates, and project information. You may opt out at any time.
        </p>

        <div class="terms-divider"></div>

        <h2 class="terms-section-title">8. Limitation of Liability</h2>
        <p class="terms-text">
            HKE Builders shall not be liable for indirect, incidental, or consequential damages arising
            from the use of this website or reliance on information provided herein.
        </p>

        <h2 class="terms-section-title">9. Disclaimer</h2>
        <p class="terms-text">
            The website is provided on an “as-is” basis. While we strive for accuracy, we do not guarantee
            that all content is error-free or continuously available.
        </p>

        <h2 class="terms-section-title">10. Privacy</h2>
        <p class="terms-text">
            Use of this website is also governed by our Privacy Policy, which explains how we collect,
            store, and use personal information.
        </p>

        <div class="terms-divider"></div>

        <h2 class="terms-section-title">11. Changes to Terms</h2>
        <p class="terms-text">
            HKE Builders may revise these Terms & Conditions at any time. Updated terms will be posted
            on this page and will take effect immediately.
        </p>

        <h2 class="terms-section-title">12. Governing Law</h2>
        <p class="terms-text">
            These Terms shall be governed and interpreted in accordance with applicable local laws
            governing construction and commercial activities.
        </p>

        <h2 class="terms-section-title">13. Contact Information</h2>
        <p class="terms-text">
            For any questions regarding these Terms & Conditions, please contact:
            <br>
            <strong>Email:</strong>
            <a class="terms-link" href="mailto:rowaimikamal@hkebuilders.com">
                rowaimkamal@hkebuilders.com
            </a>
        </p>

    </div>
</section>

@include('components.home.footer')

@endsection
<style>
/* ===== TERMS PAGE ONLY ===== */

.terms {
    background: #ffffff;
    color: #000000;
    padding: 30px 0;
    text-align: justify !important;
}

.terms-hero {
    margin-bottom: 20px;
    font-family: 'Roboto', sans-serif !important;

}

.terms-title {
    font-size: 20px;
    font-weight: 600;
    margin: 0;
    font-family: 'Roboto', sans-serif !important;
    text-align: justify !important;


}

.terms-content {
    max-width: 1100px;
    font-family: 'Roboto', sans-serif !important;
        font-size: 14px;
            text-align: justify !important;



}

.terms-section-title {
    font-size: 17px;
    font-weight: 600;
    margin: 20px 0 6px;
    font-family: 'Roboto', sans-serif !important;

}

.terms-text {
    font-size: 14px;
    margin-bottom: 10px;
    line-height: 1.6;
    font-family: 'Roboto', sans-serif !important;
        text-align: justify !important;


}

.terms-list {
    font-size: 14px;
    margin-left: 18px;
    margin-bottom: 12px;
    font-family: 'Roboto', sans-serif !important;
        text-align: justify !important;


}

.terms-list li {
        font-size: 14px;
    text-align: justify !important;

    margin-bottom: 6px;
    font-family: 'Roboto', sans-serif !important;
    

}

.terms-divider {
    height: 1px;
    background: #e5e5e5;
    margin: 16px 0;
    font-family: 'Roboto', sans-serif !important;

}

.terms-link {
    color: #000000;
    text-decoration: underline;
}

@media (max-width: 768px) {
    .terms-content {
        padding: 0 15px;
    }
}
</style>
