@extends('layouts.webpage')

@section('content')


        <!-- header-area-start -->
        <x-header/>
        <!-- /.Main Header -->

        <div id="popup-search-box">
            <div class="box-inner-wrap d-flex align-items-center">
                <form id="form" action="#" method="get" role="search">
                    <input id="popup-search" type="text" name="s" placeholder="Type keywords here...">
                </form>
                <div class="search-close"><i class="fa-sharp fa-regular fa-xmark"></i></div>
            </div>
        </div>
        <!-- /#popup-search-box -->

        <div class="mobile-side-menu">
            <div class="side-menu-content">
                <div class="side-menu-head">
                    <a href=""><img src="themes/webpage/assets/img/logo/logo-1.png" alt="logo"></a>
                    <button class="mobile-side-menu-close"><i class="fa-regular fa-xmark"></i></button>
                </div>
                <div class="side-menu-wrap"></div>
                <ul class="side-menu-list">
                    <li><i class="fa-light fa-location-dot"></i>Address : <span>Amsterdam, 109-74</span></li>
                    <li><i class="fa-light fa-phone"></i>Phone : <a href="tel:+01569896654">+01 569 896 654</a></li>
                    <li><i class="fa-light fa-envelope"></i>Email : <a href="mailto:info@example.com">info@example.com</a></li>
                </ul>
            </div>
        </div>
        <!-- /.mobile-side-menu -->
        <div class="mobile-side-menu-overlay"></div>

        {{-- <div id="preloader">
            <div class="spinner-logo"><img src="themes/webpage/assets/img/favicon.png" alt="logo"></div>
            <div class="spinner"></div>
        </div> --}}
        <!-- ./ preloader -->

        <x-slider />
        <!-- ./ hero-section -->

        <x-category />
        <!-- ./ category-section -->

        <x-service-promo />
        <!-- ./ service-promo -->

        <x-about-company />
        <!-- ./ about-section -->

        <x-courses-new />
        <!-- ./ course-section -->

        <x-video-free />
        <!-- ./ video-section -->

        {{-- <x-courses-recomendation /> --}}
        <!-- ./ course-section -->

        <x-choose-us />
        <!-- ./ choose-us -->

        <x-join-with-us />
        <!-- ./ content-section -->

        <x-testimonies />
        <!-- ./ testimonial-section -->

        <x-agreements /> 
        <!-- ./ sponsor-section -->

        {{-- <section class="blog-section pt-120 pb-120">
            <div class="container">
                <div class="section-heading text-center">
                    <h4 class="sub-heading wow fade-in-bottom" data-wow-delay="200ms"><span class="heading-icon"><i class="fa-sharp fa-solid fa-bolt"></i></span>News & Blogs</h4>
                    <h2 class="section-title wow fade-in-bottom" data-wow-delay="400ms">Latest News Updates</h2>
                </div>
                <div class="row gy-lg-0 gy-4 justify-content-center post-card-2-wrap">
                    <div class="col-lg-4 col-md-6">
                        <div class="post-card-2 post-card-3 wow fade-in-bottom" data-wow-delay="300ms">
                            <div class="post-thumb">
                                <img src="themes/webpage/assets/img/blog/post-7.png" alt="post">
                            </div>
                            <div class="post-content-wrap">
                                <div class="post-content">
                                    <ul class="post-meta">
                                        <li><i class="fa-sharp fa-regular fa-clock"></i>August 15, 2025</li>
                                        <li><i class="fa-sharp fa-regular fa-folder"></i>Marketing</li>
                                    </ul>
                                    <h3 class="title"><a href="blog-details.html">The Impact of Technology Modern Classrooms Education</a></h3>
                                    <a href="blog-details.html" class="read-more">Read More <i class="fa-regular fa-arrow-right"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="post-card-2 post-card-3 wow fade-in-bottom" data-wow-delay="400ms">
                            <div class="post-thumb">
                                <img src="themes/webpage/assets/img/blog/post-8.png" alt="post">
                            </div>
                            <div class="post-content-wrap">
                                <div class="post-content">
                                    <ul class="post-meta">
                                        <li><i class="fa-sharp fa-regular fa-clock"></i>August 15, 2025</li>
                                        <li><i class="fa-sharp fa-regular fa-folder"></i>Marketing</li>
                                    </ul>
                                    <h3 class="title"><a href="blog-details.html">Strategies for Stress and Preventing Burnout in Education</a></h3>
                                    <a href="blog-details.html" class="read-more">Read More <i class="fa-regular fa-arrow-right"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="post-card-2 post-card-3 wow fade-in-bottom" data-wow-delay="500ms">
                            <div class="post-thumb">
                                <img src="themes/webpage/assets/img/blog/post-9.png" alt="post">
                            </div>
                            <div class="post-content-wrap">
                                <div class="post-content">
                                    <ul class="post-meta">
                                        <li><i class="fa-sharp fa-regular fa-clock"></i>August 15, 2025</li>
                                        <li><i class="fa-sharp fa-regular fa-folder"></i>Marketing</li>
                                    </ul>
                                    <h3 class="title"><a href="blog-details.html">Beyond Standardized Testing to Measure True Student Success</a></h3>
                                    <a href="blog-details.html" class="read-more">Read More <i class="fa-regular fa-arrow-right"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section> --}}
        <!-- ./ blog-section -->

        <x-footer />
        <!-- ./ footer-section -->

@stop