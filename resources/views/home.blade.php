@extends('layouts.app')

@section('title', 'Home Page')

@section('content')
<!-- Slider Start -->
<div class="rs-slider slider-style1">
    <div class="slider slider-slide-1">
        <div class="slider-item">
            <div class="container custom13">
                <div class="slider-inner">
                    <div class="content-part">
								    <span class="sl-subtitle wow fadeInDown">
								    	<img class="sl-icons" src="{{asset('assets/images/slider/style1/shapes/icons3.png')}}" alt="Images">
								   		Construction Business
									</span>
                        <h1 class="sl-title wow fadeInLeft">
                            We build something<br>
                            new and consistent.<br>
                        </h1>
                        <p class="sl-desc wow fadeInLeft2">
                            No matter where or what you want to build, we mobilize the right experts<br>
                            to drive value and realize your project consistent goals.
                        </p>
                        <div class="slider-bottom wow fadeinup">
                            <a class="readon more" href="{{ route('about') }}">Discover More</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="animation-wrap">
                <div class="animate-style one">
                    <img class="wow spine" src="{{asset('assets/images/slider/style1/shapes/icons1.png')}}" alt="Images">
                </div>
                <div class="animate-style two">
                    <img class="wow spine" src="{{asset('assets/images/slider/style1/shapes/icons2.png')}}" alt="Images">
                </div>
                <div class="animate-style three">
                    <img class="wow spine" src="{{asset('assets/images/slider/style1/shapes/icons2.png')}}" alt="Images">
                </div>
            </div>
        </div>
        <div class="slider-item slide-bg2">
            <div class="container custom13">
                <div class="slider-inner">
                    <div class="content-part">
								    <span class="sl-subtitle wow fadeInDown">
								    	<img class="sl-icons" src="{{asset('assets/images/slider/style1/shapes/icons3.png')}}" alt="Images">
								   		Construction Business
									</span>
                        <h1 class="sl-title wow fadeInLeft">
                            We build something<br>
                            new and consistent.<br>
                        </h1>
                        <p class="sl-desc wow fadeInLeft2">
                            No matter where or what you want to build, we mobilize the right experts<br>
                            to drive value and realize your project consistent goals.
                        </p>
                        <div class="slider-bottom wow fadeinup">
                            <a class="readon more" href="contact.html">Discover More</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="animation-wrap">
                <div class="animate-style one">
                    <img class="wow spine" src="{{asset('assets/images/slider/style1/shapes/icons1.png')}}" alt="Images">
                </div>
                <div class="animate-style two">
                    <img class="wow spine" src="{{asset('assets/images/slider/style1/shapes/icons2.png')}}" alt="Images">
                </div>
                <div class="animate-style three">
                    <img class="wow spine" src="{{asset('assets/images/slider/style1/shapes/icons2.png')}}" alt="Images">
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Slider End -->
<!-- About Start -->
<div class="rs-about about-style1 bg5 pt-120 pb-120 md-pt-80 md-pb-80">
    <div class="container">
        <div class="row y-middle">
            <div class="col-lg-6 md-mb-50">
                <div class="images-part">
                    <img src="{{asset('assets/images/about/about-2-1.png')}}" alt="About">
                </div>
            </div>
            <div class="col-lg-6 pl-40 md-pl-15 pr-50 md-pr-15">
                <div class="sec-title">
								<span class="sub-text sub-text2">
									About Us
								</span>
                    <h2 class="title pb-20">
                        Making your vision come true at the basics.
                    </h2>
                    <p class="desc pb-20">
                    At our company, we focus on construction projects within existing buildings. Our expertise lies in interior renovations,
                     room expansions, and structural improvements aimed at enhancing both functionality and visual appeal. Whether you're considering remodeling existing spaces or implementing significant structural changes, our team is committed to providing customized,
                     top-tier solutions aligned with your requirements.
                    </p>
                    <h4 class="small-title pb-15">
                        We are world best construction & building<br>
                        company projects including
                    </h4>
                    <div class="row">
                        <div class="col-lg-5 col-md-5">
                            <ul class="check-lists2">
                                <li>Commercial</li>
                                <li>Residential</li>
                                <li>Educational</li>
                            </ul>
                        </div>
                        <div class="col-lg-5 col-md-5">
                            <ul class="check-lists2">
                                <li>Hospital</li>
                                <li>Bridge & Road</li>
                                <li>Oil/Gas/Mining</li>
                            </ul>
                        </div>
                    </div>
                    <div class="btn-part mt-28">
                        <a class="readon more know" href="about.html">Know more</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>
<!-- About End --><!-- About End -->

<!-- Services Start -->
<div id="rs-services" class="rs-services services-style3 bg5 pt-120 pb-120 md-pt-70 md-pb-80">
				<<div class="container">
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


<!-- Counter Start -->
<div class="rs-counter counter-style1 bg2 pt-120 pb-120 md-pt-80 md-pb-80">
    <div class="container">
        <div class="row y-middle">
            <div class="col-lg-6 md-mb-50">
                <div class="sec-title">
								<span class="sub-text yellow-color">
									<img src="assets/images/shape-1.png" alt="Images">
									Number talks
								</span>
                    <h2 class="title white-color pb-20">
                        Konstruk will help you get<br>
                        things complete reality.
                    </h2>
                    <p class="desc desc2 pb-45">
                        Konstruk will help you get things complete reality.
                    </p>
                    <div class="btn-part">
                        <a class="readon more contact" href="contact.html">Contact Now</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="row">
                    <div class="col-xl-6 col-md-6 col-sm-6 mb-30">
                        <div class="rs-counter-list">
                            <div class="count-text">
                                <div class="count-number">
                                    <span class="rs-count">341</span>
                                    <span class="prefix">+</span>
                                </div>
                                <span class="title">  Completed Projects</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6 col-md-6 col-sm-6 mb-30">
                        <div class="rs-counter-list">
                            <div class="count-text">
                                <div class="count-number">
                                    <span class="rs-count">302</span>
                                    <span class="prefix">+</span>
                                </div>
                                <span class="title">Happy Clients</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6 col-md-6 col-sm-6 xs-mb-30">
                        <div class="rs-counter-list">
                            <div class="count-text">
                                <div class="count-number">
                                    <span class="rs-count">153</span>
                                    <span class="prefix">+</span>
                                </div>
                                <span class="title">Qualified Engineers</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6 col-md-6 col-sm-6">
                        <div class="rs-counter-list">
                            <div class="count-text">
                                <div class="count-number">
                                    <span class="rs-count">32</span>
                                    <span class="prefix">+</span>
                                </div>
                                <span class="title">Years Experiance</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Counter End -->
             <!-- Services Start -->

					<div class="rs-project project-style1 gray-bg pt-120 pb-120 md-pt-80 md-pb-80">
			    <div class="container">
                <div class="sec-title text-center mb-35 md-mb-25">
						<span class="sub-text sub-text5">Our Projects</span>
						<h4 class="title pb-20 " style="text-align: center;">
                        committed to delivering exceptional site supervision services that<br> exceed your engineering project's expectations.
						</h4>
					</div>
			        <div class="row">
			            <div class="col-lg-4 col-md-6 mb-30">
			                <div class="project-item">
			                    <div class="project-img">
			                        <a href="projects-single.html"><img src="{{asset('assets/images/project/style1/1.jpg')}}" alt="images"></a>
			                    </div>
			                    <div class="project-content">
			                        <div class="project-inner">
			                            <h3 class="title"><a href="projects-single.html">Capital Teltway Building</a></h3>
			                            <span class="category"><a href="projects-single.html">Architecture</a></span>
			                        </div>
			                        <div class="p-icon"><a href="projects-single.html"><i class="flaticon-next"></i></a></div>
			                    </div>
			                </div>
			            </div>
			            <div class="col-lg-4 col-md-6 mb-30">
			                <div class="project-item">
			                    <div class="project-img">
			                        <a href="projects-single.html"><img src="{{asset('assets/images/project/style1/6.jpg')}}" alt="images"></a>
			                    </div>
			                    <div class="project-content">
			                        <div class="project-inner">
			                            <h3 class="title"><a href="projects-single.html">Ferguson Family YMCA</a></h3>
			                            <span class="category"><a href="projects-single.html">Architecture</a></span>
			                        </div>
			                        <div class="p-icon"><a href="projects-single.html"><i class="flaticon-next"></i></a></div>
			                    </div>
			                </div>
			            </div>
			            <div class="col-lg-4 col-md-6 mb-30">
			               <div class="project-item">
			                   <div class="project-img">
			                       <a href="projects-single.html"><img src="{{asset('assets/images/project/style1/4.jpg')}}" alt="images"></a>
			                   </div>
			                   <div class="project-content">
			                       <div class="project-inner">
			                           <h3 class="title"><a href="projects-single.html">Stone Harbor</a></h3>
			                           <span class="category"><a href="projects-single.html">House & Exterior</a></span>
			                       </div>
			                       <div class="p-icon"><a href="projects-single.html"><i class="flaticon-next"></i></a></div>
			                   </div>
			               </div>
			            </div>
			            <div class="col-lg-4 col-md-6 md-mb-30">
			               <div class="project-item">
			                   <div class="project-img">
			                       <a href="projects-single.html"><img src="{{asset('assets/images/project/style1/7.jpg')}}" alt="images"></a>
			                   </div>
			                   <div class="project-content">
			                       <div class="project-inner">
			                           <h3 class="title"><a href="projects-single.html">Hyatt Regency</a></h3>
			                           <span class="category"><a href="projects-single.html">House & Exterior</a></span>
			                       </div>
			                       <div class="p-icon"><a href="projects-single.html"><i class="flaticon-next"></i></a></div>
			                   </div>
			               </div>
			            </div>
			            <div class="col-lg-4 col-md-6 sm-mb-30">
			                <div class="project-item">
			                    <div class="project-img">
			                        <a href="projects-single.html"><img src="{{asset('assets/images/project/style1/5.jpg')}}" alt="images"></a>
			                    </div>
			                    <div class="project-content">
			                        <div class="project-inner">
			                            <h3 class="title"><a href="projects-single.html">Eisenhower Elementary</a></h3>
			                            <span class="category"><a href="projects-single.html">Interiors</a></span>
			                        </div>
			                        <div class="p-icon"><a href="projects-single.html"><i class="flaticon-next"></i></a></div>
			                    </div>
			                </div>
			            </div>
			            <div class="col-lg-4 col-md-6">
			               	<div class="project-item">
			               	    <div class="project-img">
			               	        <a href="projects-single.html"><img src="{{asset('assets/images/project/style1/3.jpg')}}" alt="images"></a>
			               	    </div>
			               	    <div class="project-content">
			               	        <div class="project-inner">
			               	            <h3 class="title"><a href="projects-single.html">Edison Middle School</a></h3>
			               	            <span class="category"><a href="projects-single.html">Interiors</a></span>
			               	        </div>
			               	        <div class="p-icon"><a href="projects-single.html"><i class="flaticon-next"></i></a></div>
			               	    </div>
			               	</div>
			            </div>
			        </div>
			    </div>
			<!-- Project Section End -->
			</div>
			<!-- Services End -->
@endsection

@push('styles')
    <link rel="stylesheet" href="{{ asset('css/home.css') }}">
@endpush

@push('scripts')
    <script src="{{ asset('js/home.js') }}"></script>
@endpush
