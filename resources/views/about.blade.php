@extends('layouts.app')

@section('title', 'About Us Page')

@section('content')
<!-- Slider Start -->


<div class="rs-breadcrumbs img4">
    <div class="container">
        <div class="breadcrumbs-inner">
            <h1 class="page-title">
                About Us
            </h1>
            <span class="sub-text">We are committed to providing the best quality of service</span>
            <ul class="breadcrumbs-area">
                <li title="Go to konstruk">
                    <a href="{{ route('home') }}">Home</a>
                </li>
                <li>About</li>
            </ul>
        </div>
    </div>
</div>
<!-- Services End -->
<!-- About Start -->
<div class="rs-about about-style3 about-modify1 pt-120 pb-120 md-pt-80 md-pb-80">
    <div class="container">
        <div class="row y-middle">
            <div class="col-lg-6 md-mb-50">
                <div class="image-part2">
                    <img src="assets/images/about/style5/about4.png" alt="About">
                </div>
            </div>
            <div class="col-lg-6">
                <div class="sec-title">
                    <span class="sub-text sub-text9">About Us</span>
                    <h2 class="title title7 pb-30">
                        Company Overview
                    </h2>
                    <p class="desc desc9 desc-small">
                        we specialize in building construction within existing structures.
                        Our services encompass interior renovations, room additions, and structural enhancements to optimize the functionality and aesthetics of your space.
                        Whether you're looking to remodel existing rooms or undertake major structural changes,
                        our team is dedicated to delivering high-quality results tailored to your needs.
                    </p>
                    <p class="desc desc6 pt-30">
                        we specialize in building construction within existing structures. Our services encompass interior renovations, room additions,
                        and structural enhancements to optimize the functionality and aesthetics of your space. Whether you're
                        looking to remodel existing rooms or undertake major structural changes, our team is dedicated to delivering high-quality results tailored to your needs.
                    </p>
                    <!-- Services Start -->
                    <div class="rs-services services-style19 pt-30 pb-40">
                        <div class="row">
                            <div class="col-lg-6 md-mb-30">
                                <div class="services-item">
                                    <div class="services-icon">
                                        <img src="assets/images/about/style5/ser1.png" alt="Images">
                                    </div>
                                    <div class="services-text">
                                        <h4 class="title">Pre Engineered Structures</h4>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="services-item">
                                    <div class="services-icon">
                                        <img src="assets/images/about/style5/ser2.png" alt="Images">
                                    </div>
                                    <div class="services-text">
                                        <h4 class="title">Masonry Works And Plaster</h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Services End -->
                    <div class="btn-part">
                        <a class="readon more orange-btn2" href="contact.html">Learn More</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- About End -->
<!-- Services Start -->
<div id="rs-services" class="rs-services services-style18 services-modify1 gray-bg11 pt-115 pb-120 md-pt-75 md-pb-80">
    <div class="container">
        <div class="sec-title2 text-center mb-65 md-mb-45">
            <span class="sub-title text-white">Valued Services</span>
            <h2 class="title pb-25 text-white">
                Our experts offer a full range<br>
                contracting services
            </h2>
            <div class="heading-border-line text-white"></div>
        </div>
        <div class="row">
            <div class="col-lg-4 col-md-6 mb-60">
                <div class="services-item">
                    <div class="services-icon">
                        <img src="assets/images/services/style3/ser-icon1.png" alt="Services">
                    </div>
                    <div class="services-text">
                        <h2 class="title"><a href="general-construction.html">Planning and Designing</a></h2>
                        <p class="services-txt">
                            This stage involves conceptualizing the project, determining its purpose, and creating initial designs.
                            Architects and engineers work together to create blueprints, structural plans, and other necessary documents.
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 mb-60">
                <div class="services-item">
                    <div class="services-icon">
                        <img src="assets/images/services/style3/ser-icon2.png" alt="Services">
                    </div>
                    <div class="services-text">
                        <h2 class="title"><a href="property-maintenance.html">Site Supervision</a></h2>
                        <p class="services-txt">
                            Construction building supervision involves overseeing the construction process to ensure that it adheres to design specifications, quality standards,
                            safety regulations, and timelines. Here's a breakdown of what it entails:
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 mb-60">
                <div class="services-item">
                    <div class="services-icon">
                        <img src="assets/images/services/style3/ser-icon3.png" alt="Services">
                    </div>
                    <div class="services-text">
                        <h2 class="title"><a href="project-managment.html">Permitting and Approvals</a></h2>
                        <p class="services-txt">
                            Before construction can begin, the necessary permits and approvals must be obtained from local government authorities.
                            These permits ensure that the project complies with building codes, zoning regulations, and other legal requirements.
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 md-mb-60">
                <div class="services-item">
                    <div class="services-icon">
                        <img src="assets/images/services/style3/ser-icon4.png" alt="Services">
                    </div>
                    <div class="services-text">
                        <h2 class="title"><a href="virtual-design-build.html">Structural Framing:</a></h2>
                        <p class="services-txt">
                            Once the foundation is in place, the structural framework of the building is constructed. This framework includes columns, beams,
                            walls, and floors that support the weight of the structure and transfer loads to the foundation.
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 sm-mb-60">
                <div class="services-item">
                    <div class="services-icon">
                        <img src="assets/images/services/style3/ser-icon5.png" alt="Services">
                    </div>
                    <div class="services-text">
                        <h2 class="title"><a href="preconstruction.html">Site Preparation:</a></h2>
                        <p class="services-txt">
                            Site preparation involves clearing the land, grading the terrain, and preparing the foundation for construction.
                            This may include excavation, leveling, and soil compaction.
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="services-item">
                    <div class="services-icon">
                        <img src="assets/images/services/style3/ser-icon6.png" alt="Services">
                    </div>
                    <div class="services-text">
                        <h2 class="title"><a href="design-build.html">Foundation Construction</a></h2>
                        <p class="services-txt">
                            The foundation is the base upon which the entire structure rests. It provides stability and support for the building above.
                            Foundations can be constructed using various materials such as concrete,
                            steel, or wood, depending on the building design and local conditions.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Services End -->
<!-- Testimonial Section Start -->
<div id="rs-testimonial" class="rs-testimonial testimonial-style3 bg3 pt-120 pb-120 md-pt-80 md-pb-80">
    <div class="container">
        <div class="sec-title2 text-center mb-55 md-mb-35">
            <span class="sub-title">Testimonials</span>
            <h2 class="title pb-25">
                Customers reviews
            </h2>
            <div class="heading-border-line"></div>
        </div>
        <div class="rs-carousel owl-carousel" data-loop="true" data-items="3" data-margin="30" data-autoplay="true" data-hoverpause="true" data-autoplay-timeout="5000" data-smart-speed="800" data-dots="false" data-nav="false" data-nav-speed="false" data-center-mode="false" data-mobile-device="1" data-mobile-device-nav="false" data-mobile-device-dots="false" data-ipad-device="2" data-ipad-device-nav="false" data-ipad-device-dots="true" data-ipad-device2="2" data-ipad-device-nav2="false" data-ipad-device-dots2="true" data-md-device="3" data-md-device-nav="false" data-md-device-dots="true">
            <div class="testi-item">
                <div class="testi-wrap">
                    <div class="image-wrap">
                        <img src="assets/images/testimonial/style1/testi1.jpg" alt="Testimonial">
                    </div>
                    <div class="item-contents">
                        <p>Capitalize on low hanging fruit to identify a ballpark value added activity to beta test. Override the digital divide with additional clickthroughs from DevOps. Nanotechnology immersion along the information highway.</p>
                    </div>
                    <div class="testi-information">
                        <div class="testi-name">Megan Fox</div>
                        <span class="testi-title">Senior CEO</span>
                    </div>
                </div>
            </div>
            <div class="testi-item">
                <div class="testi-wrap">
                    <div class="image-wrap">
                        <img src="assets/images/testimonial/style1/testi2.jpg" alt="Testimonial">
                    </div>
                    <div class="item-contents">
                        <p>Capitalize on low hanging fruit to identify a ballpark value added activity to beta test. Override the digital divide with additional clickthroughs from DevOps. Nanotechnology immersion along the information highway.</p>
                    </div>
                    <div class="testi-information">
                        <div class="testi-name">Angelina Jolie</div>
                        <span class="testi-title">Envato Advisor</span>
                    </div>
                </div>
            </div>
            <div class="testi-item">
                <div class="testi-wrap">
                    <div class="image-wrap">
                        <img src="assets/images/testimonial/style1/testi3.jpg" alt="Testimonial">
                    </div>
                    <div class="item-contents">
                        <p>Capitalize on low hanging fruit to identify a ballpark value added activity to beta test. Override the digital divide with additional clickthroughs from DevOps. Nanotechnology immersion along the information highway.</p>
                    </div>
                    <div class="testi-information">
                        <div class="testi-name">Matt Damon</div>
                        <span class="testi-title">Envato User</span>
                    </div>
                </div>
            </div>
            <div class="testi-item">
                <div class="testi-wrap">
                    <div class="image-wrap">
                        <img src="assets/images/testimonial/style1/testi4.jpg" alt="Testimonial">
                    </div>
                    <div class="item-contents">
                        <p>Capitalize on low hanging fruit to identify a ballpark value added activity to beta test. Override the digital divide with additional clickthroughs from DevOps. Nanotechnology immersion along the information highway.</p>
                    </div>
                    <div class="testi-information">
                        <div class="testi-name">Jessica Alba</div>
                        <span class="testi-title">Manager</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Testimonial Section End -->
@endsection

@push('styles')
<link rel="stylesheet" href="{{ asset('css/about.css') }}">
@endpush

@push('scripts')
<script src="{{ asset('js/about.js') }}"></script>
@endpush

