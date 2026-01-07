@extends('components.layout')
@section('content')

@include('components.home.navbar')
@include('components.policy')


<section class="terms" style="margin-left:110px !important;">

    <div class="terms-hero">
        <h1 class="terms-title">Privacy Policy</h1>
    </div>

    <div class="terms-content">

        <h2 class="terms-section-title">1. Introduction</h2>
        <p class="terms-text">
            This Privacy Policy explains how <strong>HKE Builders</strong> collects, uses, and protects
            your personal information when you visit our website or interact with our construction services.
        </p>

        <div class="terms-divider"></div>

        <h2 class="terms-section-title">2. Information We Collect</h2>
        <p class="terms-text">
            We may collect personal information when you contact us, request a quote, or subscribe
            to our communications. This information may include:
        </p>
        <ul class="terms-list">
            <li>Name, email address, and phone number</li>
            <li>Project details and service inquiries</li>
            <li>Any information you voluntarily submit through forms</li>
        </ul>

        <h2 class="terms-section-title">3. How We Use Your Information</h2>
        <p class="terms-text">
            The information collected is used solely to respond to inquiries, provide construction
            services, prepare quotations, improve our website, and communicate project-related updates.
        </p>

        <h2 class="terms-section-title">4. Cookies & Website Analytics</h2>
        <p class="terms-text">
            Our website may use cookies or basic analytics tools to understand visitor behavior
            and improve user experience. Cookies do not collect sensitive personal information.
        </p>

        <div class="terms-divider"></div>

        <h2 class="terms-section-title">5. Data Sharing</h2>
        <p class="terms-text">
            HKE Builders does not sell, trade, or rent your personal information to third parties.
            Information may only be shared when required by law or with trusted partners involved
            in delivering our construction services.
        </p>

        <h2 class="terms-section-title">6. Data Security</h2>
        <p class="terms-text">
            We take reasonable technical and organizational measures to protect your information
            against unauthorized access, alteration, disclosure, or destruction.
        </p>

        <h2 class="terms-section-title">7. Email Communications</h2>
        <p class="terms-text">
            If you provide your email address, you may receive communications related to project updates,
            quotations, or company information. You may opt out of non-essential communications at any time.
        </p>

        <div class="terms-divider"></div>

        <h2 class="terms-section-title">8. Third-Party Links</h2>
        <p class="terms-text">
            Our website may contain links to external websites. We are not responsible for the privacy
            practices or content of those third-party sites.
        </p>

        <h2 class="terms-section-title">9. Data Retention</h2>
        <p class="terms-text">
            Personal information is retained only for as long as necessary to fulfill the purpose
            for which it was collected or as required by applicable laws.
        </p>

        <h2 class="terms-section-title">10. Your Rights</h2>
        <p class="terms-text">
            You have the right to request access, correction, or deletion of your personal information
            held by HKE Builders, subject to legal and contractual obligations.
        </p>

        <div class="terms-divider"></div>

        <h2 class="terms-section-title">11. Policy Updates</h2>
        <p class="terms-text">
            This Privacy Policy may be updated periodically. Any changes will be posted on this page
            and will take effect immediately upon publication.
        </p>

        <h2 class="terms-section-title">12. Contact Us</h2>
        <p class="terms-text">
            If you have any questions or concerns regarding this Privacy Policy, please contact us at:
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
