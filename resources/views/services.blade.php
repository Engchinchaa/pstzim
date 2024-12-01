@extends('layouts.app')

@section('title', 'Services Us Page')

@section('content')
<!-- Slider Start -->
<!-- Breadcrumbs Start -->
<div class="rs-breadcrumbs img2">
    <div class="container">
        <div class="breadcrumbs-inner">
            <h1 class="page-title">
                Services
            </h1>
            <span class="sub-text">We are committed to providing the best quality of service</span>
            <ul class="breadcrumbs-area">
                <li title="Go to konstruk">
                    <a href="{{ route('home') }}">Home</a>
                </li>
                <li>Services Style 1</li>
            </ul>
        </div>
    </div>
</div>
<!-- Breadcrumbs End -->
<!-- Services Start -->
<div id="rs-services" class="rs-services services-style3 bg5 pt-120 pb-120 md-pt-70 md-pb-80">
    <div class="container">
        <div class="sec-title2 text-center mb-65 md-mb-45">
            <span class="sub-title">Valued Services</span>
            <h2 class="title pb-25">
                Our experts offer a full range<br>
                contracting services
            </h2>
            <div class="heading-border-line"></div>
        </div>
        <div class="row">
            <div class="col-lg-6 col-md-6 mb-60">
                <div class="services-item">
                    <div class="services-icon">
                        <img src="assets/images/services/style3/ser-icon1.png" alt="Services">
                    </div>
                    <div class="services-text">
                        <h2 class="title"><a href="{{ route('planning') }}">Planning and Designing</a></h2>
                        <p class="services-txt">
                            This stage involves conceptualizing the project, determining its purpose, and creating initial designs.
                            Architects and engineers work together to create blueprints, structural plans, and other necessary documents.
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-md-6 mb-60">
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
            <div class="col-lg-6 col-md-6 mb-60">
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
            <div class="col-lg-6 col-md-6 md-mb-60">
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
            <div class="col-lg-6 col-md-6 sm-mb-60">
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
            <div class="col-lg-6 col-md-6">
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
<!-- endeng -->
<!-- Services End -->
@endsection

@push('styles')
<link rel="stylesheet" href="{{ asset('css/about.css') }}">
@endpush

@push('scripts')
<script src="{{ asset('js/about.js') }}"></script>
@endpush

