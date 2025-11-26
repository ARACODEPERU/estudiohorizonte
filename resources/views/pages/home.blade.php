@extends('layouts.webpage')

@section('content')


    <!-- header-area-start -->
    <x-header />
    <!-- /.Main Header -->

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

    {{-- <x-courses-new /> --}}
    <!-- ./ course-section -->


    {{-- <section class="feature-course pt-120 pb-120">
        <div class="container">
            <div class="feature-course-top heading-space">
                <div class="section-heading mb-0">
                    <h4 class="sub-heading wow fade-in-bottom" data-wow-delay="200ms">
                        <span class="heading-icon"><i class="fa-sharp fa-solid fa-bolt"></i></span>Nuevos Ingresos
                    </h4>
                    <h2 class="section-title wow fade-in-bottom" data-wow-delay="400ms">Explora nuestra formación</h2>
                </div>
            </div>
            <div class="course-tab-content tab-content" id="myTabContent-2">
                <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                    <div class="row gy-4 justify-content-center">
                        @foreach ($courses as $item)
                            <div class="col-md-6">
                                <div class="course-item">
                                    <div class="course-thumb-wrap">
                                        <div class="course-thumb">
                                            <span class="offer"
                                                style=" z-index: 999; position: absolute; margin-top: 25px; background: #fff; ">Foro</span>
                                            <a href="{{ route('web_course_description', $item->id) }}">
                                                <img src="{{ asset('storage/' . $item->course->image) }}" alt="course"
                                                    style="width: 100%;">
                                            </a>
                                        </div>
                                    </div>
                                    <div class="course-content">
                                        <h3 class="title" style="font-size: 20px;">
                                            <a
                                                href="{{ route('web_course_description', $item->id) }}">{{ $item->name }}</a>
                                        </h3>
                                    </div>
                                    <div class="bottom-content">
                                        <a href="{{ route('web_course_description', $item->id) }}" class="course-btn">Leer
                                            Más</a>
                                        <a href="https://wa.link/g3i7et" class="ed-primary-btn-2">
                                            <i class="fab fa-whatsapp" aria-hidden="true" style="font-size: 20px;"></i>&nbsp; S/ {{ $item->price }}
                                        </a>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </section> --}}

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
