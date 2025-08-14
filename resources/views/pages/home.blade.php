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


    <section class="feature-course pt-120 pb-120">
            <div class="container">
                <div class="feature-course-top heading-space">
                    <div class="section-heading mb-0">
                        <h4 class="sub-heading wow fade-in-bottom" data-wow-delay="200ms">
                            <span class="heading-icon"><i class="fa-sharp fa-solid fa-bolt"></i></span>Nuevos Ingresos
                        </h4>
                        <h2 class="section-title wow fade-in-bottom" data-wow-delay="400ms">Explora nuestra formación</h2>
                    </div>
                    {{-- <ul class="course-nav nav nav-tabs mb-40" id="myTab-2" role="tablist">
                        <li class="nav-item" role="presentation">
                            <button class="nav-link active" id="home-tab" data-bs-toggle="tab" data-bs-target="#home" type="button" role="tab"
                                    aria-controls="home" aria-selected="true">All Categories
                            </button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="profile-tab" data-bs-toggle="tab" data-bs-target="#profile" type="button" role="tab"
                                    aria-controls="profile" aria-selected="false">Business
                            </button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="contact-tab" data-bs-toggle="tab" data-bs-target="#contact" type="button" role="tab"
                                    aria-controls="contact" aria-selected="false">Development
                            </button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="contact-tab-2" data-bs-toggle="tab" data-bs-target="#contact-2" type="button" role="tab"
                                    aria-controls="contact-2" aria-selected="false">Marketing
                            </button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="contact-tab-3" data-bs-toggle="tab" data-bs-target="#contact-3" type="button" role="tab"
                                    aria-controls="contact-3" aria-selected="false">Finance
                            </button>
                        </li>
                    </ul> --}}
                </div>
                <div class="course-tab-content tab-content" id="myTabContent-2">
                    <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                        <div class="row gy-4 justify-content-center">
                            @foreach ($courses as $item)
                            <div class="col-md-6">
                                <div class="course-item">
                                    <div class="course-thumb-wrap">
                                        <div class="course-thumb">
                                            <span class="offer" style=" z-index: 999; position: absolute; margin-top: 25px; background: #fff; ">Foro</span>
                                            <a href="{{ route('web_course_description', $item->id) }}">
                                                <img src="{{ asset('storage/'.$item->course->image) }}" alt="course" style="width: 100%;">
                                            </a>
                                        </div>
                                    </div>
                                    <div class="course-content">
                                        <h3 class="title" style="font-size: 20px;">
                                            <a href="{{ route('web_course_description', $item->id) }}">{{ $item->name }}</a>
                                        </h3>
                                        <div class="course-author-box">
                                            <div class="course-author">
                                                <div class="author-img">
                                                    <img src="themes/webpage/assets/img/images/course-author-1.png" alt="course">
                                                </div>
                                                <div class="author-info">
                                                    <a href="">
                                                        <h4 class="name">{{ $item->course->teacher->person->names . ' ' . $item->course->teacher->person->father_lastname }}</h4>
                                                    </a>
                                                    <span>Instructor</span>
                                                </div>
                                            </div>
                                            <ul class="course-review">
                                                <li><span class="price">S/ {{ $item->price }}</span></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="bottom-content">
                                        <a href="{{ route('web_course_description', $item->id) }}" class="course-btn">Leer Más</a>
                                        <a href="https://wa.link/g3i7et" class="ed-primary-btn-2">
                                            <i class="fab fa-whatsapp" aria-hidden="true"></i>&nbsp; Adquirir
                                        </a>
                                    </div>
                                </div>
                            </div>
                            @endforeach
                        </div>
                    </div>
                    {{-- <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                        <div class="row gy-4 justify-content-center">
                            <div class="col-lg-4 col-md-6">
                                <div class="course-item">
                                    <div class="course-thumb-wrap">
                                        <div class="course-thumb">
                                            <img src="themes/webpage/assets/img/images/course-img-1.png" alt="course">
                                        </div>
                                    </div>
                                    <div class="course-content">
                                        <span class="offer">Free</span>
                                        <h3 class="title"><a href="course-details.html">React Tutorial Beginners For Skills Building Carrera</a></h3>
                                        <ul class="course-list">
                                            <li><i class="fa-light fa-file"></i>Lesson 8</li>
                                            <li><i class="fa-light fa-user"></i>Students 50</li>
                                            <li><i class="fa-light fa-eye"></i>View: 12K</li>
                                        </ul>
                                        <div class="course-author-box">
                                            <div class="course-author">
                                                <div class="author-img">
                                                    <img src="themes/webpage/assets/img/images/course-author-1.png" alt="course">
                                                </div>
                                                <div class="author-info">
                                                    <h4 class="name">Kevin Perry</h4>
                                                    <span>Instructor</span>
                                                </div>
                                            </div>
                                            <ul class="course-review">
                                                <li><i class="fa-sharp fa-solid fa-star"></i></li>
                                                <li><i class="fa-sharp fa-solid fa-star"></i></li>
                                                <li><i class="fa-sharp fa-solid fa-star"></i></li>
                                                <li><i class="fa-sharp fa-solid fa-star"></i></li>
                                                <li><i class="fa-sharp fa-solid fa-star"></i></li>
                                                <li class="point">(4.7)</li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="bottom-content">
                                        <span class="price">$59.00</span>
                                        <a href="course-details.html" class="course-btn">View Details</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6">
                                <div class="course-item">
                                    <div class="course-thumb-wrap">
                                        <div class="course-thumb">
                                            <img src="themes/webpage/assets/img/images/course-img-2.png" alt="course">
                                        </div>
                                    </div>
                                    <div class="course-content">
                                        <span class="offer">Free</span>
                                        <h3 class="title"><a href="course-details.html">Cultural Perspectives in Teaching and Learning Environments</a></h3>
                                        <ul class="course-list">
                                            <li><i class="fa-light fa-file"></i>Lesson 8</li>
                                            <li><i class="fa-light fa-user"></i>Students 50</li>
                                            <li><i class="fa-light fa-eye"></i>View: 12K</li>
                                        </ul>
                                        <div class="course-author-box">
                                            <div class="course-author">
                                                <div class="author-img">
                                                    <img src="themes/webpage/assets/img/images/course-author-2.png" alt="course">
                                                </div>
                                                <div class="author-info">
                                                    <h4 class="name">Deniel Ross</h4>
                                                    <span>Instructor</span>
                                                </div>
                                            </div>
                                            <ul class="course-review">
                                                <li><i class="fa-sharp fa-solid fa-star"></i></li>
                                                <li><i class="fa-sharp fa-solid fa-star"></i></li>
                                                <li><i class="fa-sharp fa-solid fa-star"></i></li>
                                                <li><i class="fa-sharp fa-solid fa-star"></i></li>
                                                <li><i class="fa-sharp fa-solid fa-star"></i></li>
                                                <li class="point">(4.7)</li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="bottom-content">
                                        <span class="price">$59.00</span>
                                        <a href="course-details.html" class="course-btn">View Details</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6">
                                <div class="course-item">
                                    <div class="course-thumb-wrap">
                                        <div class="course-thumb">
                                            <img src="themes/webpage/assets/img/images/course-img-3.png" alt="course">
                                        </div>
                                    </div>
                                    <div class="course-content">
                                        <span class="offer">Free</span>
                                        <h3 class="title"><a href="course-details.html">Innovative Instructional Strategies <br>for Enhancing Student</a></h3>
                                        <ul class="course-list">
                                            <li><i class="fa-light fa-file"></i>Lesson 8</li>
                                            <li><i class="fa-light fa-user"></i>Students 50</li>
                                            <li><i class="fa-light fa-eye"></i>View: 12K</li>
                                        </ul>
                                        <div class="course-author-box">
                                            <div class="course-author">
                                                <div class="author-img">
                                                    <img src="themes/webpage/assets/img/images/course-author-3.png" alt="course">
                                                </div>
                                                <div class="author-info">
                                                    <h4 class="name">Andrew klip</h4>
                                                    <span>Instructor</span>
                                                </div>
                                            </div>
                                            <ul class="course-review">
                                                <li><i class="fa-sharp fa-solid fa-star"></i></li>
                                                <li><i class="fa-sharp fa-solid fa-star"></i></li>
                                                <li><i class="fa-sharp fa-solid fa-star"></i></li>
                                                <li><i class="fa-sharp fa-solid fa-star"></i></li>
                                                <li><i class="fa-sharp fa-solid fa-star"></i></li>
                                                <li class="point">(4.7)</li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="bottom-content">
                                        <span class="price">$59.00</span>
                                        <a href="course-details.html" class="course-btn">View Details</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6">
                                <div class="course-item">
                                    <div class="course-thumb-wrap">
                                        <div class="course-thumb">
                                            <img src="themes/webpage/assets/img/new-update/course-img-3.png" alt="course">
                                        </div>
                                    </div>
                                    <div class="course-content">
                                        <span class="offer">Free</span>
                                        <h3 class="title"><a href="course-details.html">Teaching Students to Navigate the Digital World Responsibly</a></h3>
                                        <ul class="course-list">
                                            <li><i class="fa-light fa-file"></i>Lesson 8</li>
                                            <li><i class="fa-light fa-user"></i>Students 50</li>
                                            <li><i class="fa-light fa-eye"></i>View: 12K</li>
                                        </ul>
                                        <div class="course-author-box">
                                            <div class="course-author">
                                                <div class="author-img">
                                                    <img src="themes/webpage/assets/img/service/course-img-12.png" alt="course">
                                                </div>
                                                <div class="author-info">
                                                    <h4 class="name">Kevin Perry</h4>
                                                    <span>Instructor</span>
                                                </div>
                                            </div>
                                            <ul class="course-review">
                                                <li><i class="fa-sharp fa-solid fa-star"></i></li>
                                                <li><i class="fa-sharp fa-solid fa-star"></i></li>
                                                <li><i class="fa-sharp fa-solid fa-star"></i></li>
                                                <li><i class="fa-sharp fa-solid fa-star"></i></li>
                                                <li><i class="fa-sharp fa-solid fa-star"></i></li>
                                                <li class="point">(4.7)</li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="bottom-content">
                                        <span class="price">$59.00</span>
                                        <a href="course-details.html" class="course-btn">View Details</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6">
                                <div class="course-item">
                                    <div class="course-thumb-wrap">
                                        <div class="course-thumb">
                                            <img src="themes/webpage/assets/img/new-update/course-img-4.png" alt="course">
                                        </div>
                                    </div>
                                    <div class="course-content">
                                        <span class="offer">Free</span>
                                        <h3 class="title"><a href="course-details.html">Enhancing Class Communication and Presentation Skills</a></h3>
                                        <ul class="course-list">
                                            <li><i class="fa-light fa-file"></i>Lesson 8</li>
                                            <li><i class="fa-light fa-user"></i>Students 50</li>
                                            <li><i class="fa-light fa-eye"></i>View: 12K</li>
                                        </ul>
                                        <div class="course-author-box">
                                            <div class="course-author">
                                                <div class="author-img">
                                                    <img src="themes/webpage/assets/img/images/author-img-1.png" alt="course">
                                                </div>
                                                <div class="author-info">
                                                    <h4 class="name">Kevin Perry</h4>
                                                    <span>Instructor</span>
                                                </div>
                                            </div>
                                            <ul class="course-review">
                                                <li><i class="fa-sharp fa-solid fa-star"></i></li>
                                                <li><i class="fa-sharp fa-solid fa-star"></i></li>
                                                <li><i class="fa-sharp fa-solid fa-star"></i></li>
                                                <li><i class="fa-sharp fa-solid fa-star"></i></li>
                                                <li><i class="fa-sharp fa-solid fa-star"></i></li>
                                                <li class="point">(4.7)</li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="bottom-content">
                                        <span class="price">$59.00</span>
                                        <a href="course-details.html" class="course-btn">View Details</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6">
                                <div class="course-item">
                                    <div class="course-thumb-wrap">
                                        <div class="course-thumb">
                                            <img src="themes/webpage/assets/img/new-update/course-img-5.png" alt="course">
                                        </div>
                                    </div>
                                    <div class="course-content">
                                        <span class="offer">Free</span>
                                        <h3 class="title"><a href="course-details.html">Analyzing, Evaluating, & Creating Solutions in Everyday Situations</a></h3>
                                        <ul class="course-list">
                                            <li><i class="fa-light fa-file"></i>Lesson 8</li>
                                            <li><i class="fa-light fa-user"></i>Students 50</li>
                                            <li><i class="fa-light fa-eye"></i>View: 12K</li>
                                        </ul>
                                        <div class="course-author-box">
                                            <div class="course-author">
                                                <div class="author-img">
                                                    <img src="themes/webpage/assets/img/images/author-img-1.png" alt="course">
                                                </div>
                                                <div class="author-info">
                                                    <h4 class="name">Kevin Perry</h4>
                                                    <span>Instructor</span>
                                                </div>
                                            </div>
                                            <ul class="course-review">
                                                <li><i class="fa-sharp fa-solid fa-star"></i></li>
                                                <li><i class="fa-sharp fa-solid fa-star"></i></li>
                                                <li><i class="fa-sharp fa-solid fa-star"></i></li>
                                                <li><i class="fa-sharp fa-solid fa-star"></i></li>
                                                <li><i class="fa-sharp fa-solid fa-star"></i></li>
                                                <li class="point">(4.7)</li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="bottom-content">
                                        <span class="price">$59.00</span>
                                        <a href="course-details.html" class="course-btn">View Details</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">
                        <div class="row gy-4 justify-content-center">
                            <div class="col-lg-4 col-md-6">
                                <div class="course-item">
                                    <div class="course-thumb-wrap">
                                        <div class="course-thumb">
                                            <img src="themes/webpage/assets/img/images/course-img-1.png" alt="course">
                                        </div>
                                    </div>
                                    <div class="course-content">
                                        <span class="offer">Free</span>
                                        <h3 class="title"><a href="course-details.html">React Tutorial Beginners For Skills Building Carrera</a></h3>
                                        <ul class="course-list">
                                            <li><i class="fa-light fa-file"></i>Lesson 8</li>
                                            <li><i class="fa-light fa-user"></i>Students 50</li>
                                            <li><i class="fa-light fa-eye"></i>View: 12K</li>
                                        </ul>
                                        <div class="course-author-box">
                                            <div class="course-author">
                                                <div class="author-img">
                                                    <img src="themes/webpage/assets/img/images/course-author-1.png" alt="course">
                                                </div>
                                                <div class="author-info">
                                                    <h4 class="name">Kevin Perry</h4>
                                                    <span>Instructor</span>
                                                </div>
                                            </div>
                                            <ul class="course-review">
                                                <li><i class="fa-sharp fa-solid fa-star"></i></li>
                                                <li><i class="fa-sharp fa-solid fa-star"></i></li>
                                                <li><i class="fa-sharp fa-solid fa-star"></i></li>
                                                <li><i class="fa-sharp fa-solid fa-star"></i></li>
                                                <li><i class="fa-sharp fa-solid fa-star"></i></li>
                                                <li class="point">(4.7)</li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="bottom-content">
                                        <span class="price">$59.00</span>
                                        <a href="course-details.html" class="course-btn">View Details</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6">
                                <div class="course-item">
                                    <div class="course-thumb-wrap">
                                        <div class="course-thumb">
                                            <img src="themes/webpage/assets/img/images/course-img-2.png" alt="course">
                                        </div>
                                    </div>
                                    <div class="course-content">
                                        <span class="offer">Free</span>
                                        <h3 class="title"><a href="course-details.html">Cultural Perspectives in Teaching and Learning Environments</a></h3>
                                        <ul class="course-list">
                                            <li><i class="fa-light fa-file"></i>Lesson 8</li>
                                            <li><i class="fa-light fa-user"></i>Students 50</li>
                                            <li><i class="fa-light fa-eye"></i>View: 12K</li>
                                        </ul>
                                        <div class="course-author-box">
                                            <div class="course-author">
                                                <div class="author-img">
                                                    <img src="themes/webpage/assets/img/images/course-author-2.png" alt="course">
                                                </div>
                                                <div class="author-info">
                                                    <h4 class="name">Deniel Ross</h4>
                                                    <span>Instructor</span>
                                                </div>
                                            </div>
                                            <ul class="course-review">
                                                <li><i class="fa-sharp fa-solid fa-star"></i></li>
                                                <li><i class="fa-sharp fa-solid fa-star"></i></li>
                                                <li><i class="fa-sharp fa-solid fa-star"></i></li>
                                                <li><i class="fa-sharp fa-solid fa-star"></i></li>
                                                <li><i class="fa-sharp fa-solid fa-star"></i></li>
                                                <li class="point">(4.7)</li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="bottom-content">
                                        <span class="price">$59.00</span>
                                        <a href="course-details.html" class="course-btn">View Details</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6">
                                <div class="course-item">
                                    <div class="course-thumb-wrap">
                                        <div class="course-thumb">
                                            <img src="themes/webpage/assets/img/images/course-img-3.png" alt="course">
                                        </div>
                                    </div>
                                    <div class="course-content">
                                        <span class="offer">Free</span>
                                        <h3 class="title"><a href="course-details.html">Innovative Instructional Strategies <br>for Enhancing Student</a></h3>
                                        <ul class="course-list">
                                            <li><i class="fa-light fa-file"></i>Lesson 8</li>
                                            <li><i class="fa-light fa-user"></i>Students 50</li>
                                            <li><i class="fa-light fa-eye"></i>View: 12K</li>
                                        </ul>
                                        <div class="course-author-box">
                                            <div class="course-author">
                                                <div class="author-img">
                                                    <img src="themes/webpage/assets/img/images/course-author-3.png" alt="course">
                                                </div>
                                                <div class="author-info">
                                                    <h4 class="name">Andrew klip</h4>
                                                    <span>Instructor</span>
                                                </div>
                                            </div>
                                            <ul class="course-review">
                                                <li><i class="fa-sharp fa-solid fa-star"></i></li>
                                                <li><i class="fa-sharp fa-solid fa-star"></i></li>
                                                <li><i class="fa-sharp fa-solid fa-star"></i></li>
                                                <li><i class="fa-sharp fa-solid fa-star"></i></li>
                                                <li><i class="fa-sharp fa-solid fa-star"></i></li>
                                                <li class="point">(4.7)</li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="bottom-content">
                                        <span class="price">$59.00</span>
                                        <a href="course-details.html" class="course-btn">View Details</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6">
                                <div class="course-item">
                                    <div class="course-thumb-wrap">
                                        <div class="course-thumb">
                                            <img src="themes/webpage/assets/img/new-update/course-img-3.png" alt="course">
                                        </div>
                                    </div>
                                    <div class="course-content">
                                        <span class="offer">Free</span>
                                        <h3 class="title"><a href="course-details.html">Teaching Students to Navigate the Digital World Responsibly</a></h3>
                                        <ul class="course-list">
                                            <li><i class="fa-light fa-file"></i>Lesson 8</li>
                                            <li><i class="fa-light fa-user"></i>Students 50</li>
                                            <li><i class="fa-light fa-eye"></i>View: 12K</li>
                                        </ul>
                                        <div class="course-author-box">
                                            <div class="course-author">
                                                <div class="author-img">
                                                    <img src="themes/webpage/assets/img/service/course-img-12.png" alt="course">
                                                </div>
                                                <div class="author-info">
                                                    <h4 class="name">Kevin Perry</h4>
                                                    <span>Instructor</span>
                                                </div>
                                            </div>
                                            <ul class="course-review">
                                                <li><i class="fa-sharp fa-solid fa-star"></i></li>
                                                <li><i class="fa-sharp fa-solid fa-star"></i></li>
                                                <li><i class="fa-sharp fa-solid fa-star"></i></li>
                                                <li><i class="fa-sharp fa-solid fa-star"></i></li>
                                                <li><i class="fa-sharp fa-solid fa-star"></i></li>
                                                <li class="point">(4.7)</li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="bottom-content">
                                        <span class="price">$59.00</span>
                                        <a href="course-details.html" class="course-btn">View Details</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6">
                                <div class="course-item">
                                    <div class="course-thumb-wrap">
                                        <div class="course-thumb">
                                            <img src="themes/webpage/assets/img/new-update/course-img-4.png" alt="course">
                                        </div>
                                    </div>
                                    <div class="course-content">
                                        <span class="offer">Free</span>
                                        <h3 class="title"><a href="course-details.html">Enhancing Class Communication and Presentation Skills</a></h3>
                                        <ul class="course-list">
                                            <li><i class="fa-light fa-file"></i>Lesson 8</li>
                                            <li><i class="fa-light fa-user"></i>Students 50</li>
                                            <li><i class="fa-light fa-eye"></i>View: 12K</li>
                                        </ul>
                                        <div class="course-author-box">
                                            <div class="course-author">
                                                <div class="author-img">
                                                    <img src="themes/webpage/assets/img/images/author-img-1.png" alt="course">
                                                </div>
                                                <div class="author-info">
                                                    <h4 class="name">Kevin Perry</h4>
                                                    <span>Instructor</span>
                                                </div>
                                            </div>
                                            <ul class="course-review">
                                                <li><i class="fa-sharp fa-solid fa-star"></i></li>
                                                <li><i class="fa-sharp fa-solid fa-star"></i></li>
                                                <li><i class="fa-sharp fa-solid fa-star"></i></li>
                                                <li><i class="fa-sharp fa-solid fa-star"></i></li>
                                                <li><i class="fa-sharp fa-solid fa-star"></i></li>
                                                <li class="point">(4.7)</li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="bottom-content">
                                        <span class="price">$59.00</span>
                                        <a href="course-details.html" class="course-btn">View Details</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6">
                                <div class="course-item">
                                    <div class="course-thumb-wrap">
                                        <div class="course-thumb">
                                            <img src="themes/webpage/assets/img/new-update/course-img-5.png" alt="course">
                                        </div>
                                    </div>
                                    <div class="course-content">
                                        <span class="offer">Free</span>
                                        <h3 class="title"><a href="course-details.html">Analyzing, Evaluating, & Creating Solutions in Everyday Situations</a></h3>
                                        <ul class="course-list">
                                            <li><i class="fa-light fa-file"></i>Lesson 8</li>
                                            <li><i class="fa-light fa-user"></i>Students 50</li>
                                            <li><i class="fa-light fa-eye"></i>View: 12K</li>
                                        </ul>
                                        <div class="course-author-box">
                                            <div class="course-author">
                                                <div class="author-img">
                                                    <img src="themes/webpage/assets/img/images/author-img-1.png" alt="course">
                                                </div>
                                                <div class="author-info">
                                                    <h4 class="name">Kevin Perry</h4>
                                                    <span>Instructor</span>
                                                </div>
                                            </div>
                                            <ul class="course-review">
                                                <li><i class="fa-sharp fa-solid fa-star"></i></li>
                                                <li><i class="fa-sharp fa-solid fa-star"></i></li>
                                                <li><i class="fa-sharp fa-solid fa-star"></i></li>
                                                <li><i class="fa-sharp fa-solid fa-star"></i></li>
                                                <li><i class="fa-sharp fa-solid fa-star"></i></li>
                                                <li class="point">(4.7)</li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="bottom-content">
                                        <span class="price">$59.00</span>
                                        <a href="course-details.html" class="course-btn">View Details</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="contact-2" role="tabpanel" aria-labelledby="contact-tab-2">
                        <div class="row gy-4 justify-content-center">
                            <div class="col-lg-4 col-md-6">
                                <div class="course-item">
                                    <div class="course-thumb-wrap">
                                        <div class="course-thumb">
                                            <img src="themes/webpage/assets/img/images/course-img-1.png" alt="course">
                                        </div>
                                    </div>
                                    <div class="course-content">
                                        <span class="offer">Free</span>
                                        <h3 class="title"><a href="course-details.html">React Tutorial Beginners For Skills Building Carrera</a></h3>
                                        <ul class="course-list">
                                            <li><i class="fa-light fa-file"></i>Lesson 8</li>
                                            <li><i class="fa-light fa-user"></i>Students 50</li>
                                            <li><i class="fa-light fa-eye"></i>View: 12K</li>
                                        </ul>
                                        <div class="course-author-box">
                                            <div class="course-author">
                                                <div class="author-img">
                                                    <img src="themes/webpage/assets/img/images/course-author-1.png" alt="course">
                                                </div>
                                                <div class="author-info">
                                                    <h4 class="name">Kevin Perry</h4>
                                                    <span>Instructor</span>
                                                </div>
                                            </div>
                                            <ul class="course-review">
                                                <li><i class="fa-sharp fa-solid fa-star"></i></li>
                                                <li><i class="fa-sharp fa-solid fa-star"></i></li>
                                                <li><i class="fa-sharp fa-solid fa-star"></i></li>
                                                <li><i class="fa-sharp fa-solid fa-star"></i></li>
                                                <li><i class="fa-sharp fa-solid fa-star"></i></li>
                                                <li class="point">(4.7)</li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="bottom-content">
                                        <span class="price">$59.00</span>
                                        <a href="course-details.html" class="course-btn">View Details</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6">
                                <div class="course-item">
                                    <div class="course-thumb-wrap">
                                        <div class="course-thumb">
                                            <img src="themes/webpage/assets/img/images/course-img-2.png" alt="course">
                                        </div>
                                    </div>
                                    <div class="course-content">
                                        <span class="offer">Free</span>
                                        <h3 class="title"><a href="course-details.html">Cultural Perspectives in Teaching and Learning Environments</a></h3>
                                        <ul class="course-list">
                                            <li><i class="fa-light fa-file"></i>Lesson 8</li>
                                            <li><i class="fa-light fa-user"></i>Students 50</li>
                                            <li><i class="fa-light fa-eye"></i>View: 12K</li>
                                        </ul>
                                        <div class="course-author-box">
                                            <div class="course-author">
                                                <div class="author-img">
                                                    <img src="themes/webpage/assets/img/images/course-author-2.png" alt="course">
                                                </div>
                                                <div class="author-info">
                                                    <h4 class="name">Deniel Ross</h4>
                                                    <span>Instructor</span>
                                                </div>
                                            </div>
                                            <ul class="course-review">
                                                <li><i class="fa-sharp fa-solid fa-star"></i></li>
                                                <li><i class="fa-sharp fa-solid fa-star"></i></li>
                                                <li><i class="fa-sharp fa-solid fa-star"></i></li>
                                                <li><i class="fa-sharp fa-solid fa-star"></i></li>
                                                <li><i class="fa-sharp fa-solid fa-star"></i></li>
                                                <li class="point">(4.7)</li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="bottom-content">
                                        <span class="price">$59.00</span>
                                        <a href="course-details.html" class="course-btn">View Details</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6">
                                <div class="course-item">
                                    <div class="course-thumb-wrap">
                                        <div class="course-thumb">
                                            <img src="themes/webpage/assets/img/images/course-img-3.png" alt="course">
                                        </div>
                                    </div>
                                    <div class="course-content">
                                        <span class="offer">Free</span>
                                        <h3 class="title"><a href="course-details.html">Innovative Instructional Strategies <br>for Enhancing Student</a></h3>
                                        <ul class="course-list">
                                            <li><i class="fa-light fa-file"></i>Lesson 8</li>
                                            <li><i class="fa-light fa-user"></i>Students 50</li>
                                            <li><i class="fa-light fa-eye"></i>View: 12K</li>
                                        </ul>
                                        <div class="course-author-box">
                                            <div class="course-author">
                                                <div class="author-img">
                                                    <img src="themes/webpage/assets/img/images/course-author-3.png" alt="course">
                                                </div>
                                                <div class="author-info">
                                                    <h4 class="name">Andrew klip</h4>
                                                    <span>Instructor</span>
                                                </div>
                                            </div>
                                            <ul class="course-review">
                                                <li><i class="fa-sharp fa-solid fa-star"></i></li>
                                                <li><i class="fa-sharp fa-solid fa-star"></i></li>
                                                <li><i class="fa-sharp fa-solid fa-star"></i></li>
                                                <li><i class="fa-sharp fa-solid fa-star"></i></li>
                                                <li><i class="fa-sharp fa-solid fa-star"></i></li>
                                                <li class="point">(4.7)</li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="bottom-content">
                                        <span class="price">$59.00</span>
                                        <a href="course-details.html" class="course-btn">View Details</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6">
                                <div class="course-item">
                                    <div class="course-thumb-wrap">
                                        <div class="course-thumb">
                                            <img src="themes/webpage/assets/img/new-update/course-img-3.png" alt="course">
                                        </div>
                                    </div>
                                    <div class="course-content">
                                        <span class="offer">Free</span>
                                        <h3 class="title"><a href="course-details.html">Teaching Students to Navigate the Digital World Responsibly</a></h3>
                                        <ul class="course-list">
                                            <li><i class="fa-light fa-file"></i>Lesson 8</li>
                                            <li><i class="fa-light fa-user"></i>Students 50</li>
                                            <li><i class="fa-light fa-eye"></i>View: 12K</li>
                                        </ul>
                                        <div class="course-author-box">
                                            <div class="course-author">
                                                <div class="author-img">
                                                    <img src="themes/webpage/assets/img/service/course-img-12.png" alt="course">
                                                </div>
                                                <div class="author-info">
                                                    <h4 class="name">Kevin Perry</h4>
                                                    <span>Instructor</span>
                                                </div>
                                            </div>
                                            <ul class="course-review">
                                                <li><i class="fa-sharp fa-solid fa-star"></i></li>
                                                <li><i class="fa-sharp fa-solid fa-star"></i></li>
                                                <li><i class="fa-sharp fa-solid fa-star"></i></li>
                                                <li><i class="fa-sharp fa-solid fa-star"></i></li>
                                                <li><i class="fa-sharp fa-solid fa-star"></i></li>
                                                <li class="point">(4.7)</li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="bottom-content">
                                        <span class="price">$59.00</span>
                                        <a href="course-details.html" class="course-btn">View Details</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6">
                                <div class="course-item">
                                    <div class="course-thumb-wrap">
                                        <div class="course-thumb">
                                            <img src="themes/webpage/assets/img/new-update/course-img-4.png" alt="course">
                                        </div>
                                    </div>
                                    <div class="course-content">
                                        <span class="offer">Free</span>
                                        <h3 class="title"><a href="course-details.html">Enhancing Class Communication and Presentation Skills</a></h3>
                                        <ul class="course-list">
                                            <li><i class="fa-light fa-file"></i>Lesson 8</li>
                                            <li><i class="fa-light fa-user"></i>Students 50</li>
                                            <li><i class="fa-light fa-eye"></i>View: 12K</li>
                                        </ul>
                                        <div class="course-author-box">
                                            <div class="course-author">
                                                <div class="author-img">
                                                    <img src="themes/webpage/assets/img/images/author-img-1.png" alt="course">
                                                </div>
                                                <div class="author-info">
                                                    <h4 class="name">Kevin Perry</h4>
                                                    <span>Instructor</span>
                                                </div>
                                            </div>
                                            <ul class="course-review">
                                                <li><i class="fa-sharp fa-solid fa-star"></i></li>
                                                <li><i class="fa-sharp fa-solid fa-star"></i></li>
                                                <li><i class="fa-sharp fa-solid fa-star"></i></li>
                                                <li><i class="fa-sharp fa-solid fa-star"></i></li>
                                                <li><i class="fa-sharp fa-solid fa-star"></i></li>
                                                <li class="point">(4.7)</li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="bottom-content">
                                        <span class="price">$59.00</span>
                                        <a href="course-details.html" class="course-btn">View Details</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6">
                                <div class="course-item">
                                    <div class="course-thumb-wrap">
                                        <div class="course-thumb">
                                            <img src="themes/webpage/assets/img/new-update/course-img-5.png" alt="course">
                                        </div>
                                    </div>
                                    <div class="course-content">
                                        <span class="offer">Free</span>
                                        <h3 class="title"><a href="course-details.html">Analyzing, Evaluating, & Creating Solutions in Everyday Situations</a></h3>
                                        <ul class="course-list">
                                            <li><i class="fa-light fa-file"></i>Lesson 8</li>
                                            <li><i class="fa-light fa-user"></i>Students 50</li>
                                            <li><i class="fa-light fa-eye"></i>View: 12K</li>
                                        </ul>
                                        <div class="course-author-box">
                                            <div class="course-author">
                                                <div class="author-img">
                                                    <img src="themes/webpage/assets/img/images/author-img-1.png" alt="course">
                                                </div>
                                                <div class="author-info">
                                                    <h4 class="name">Kevin Perry</h4>
                                                    <span>Instructor</span>
                                                </div>
                                            </div>
                                            <ul class="course-review">
                                                <li><i class="fa-sharp fa-solid fa-star"></i></li>
                                                <li><i class="fa-sharp fa-solid fa-star"></i></li>
                                                <li><i class="fa-sharp fa-solid fa-star"></i></li>
                                                <li><i class="fa-sharp fa-solid fa-star"></i></li>
                                                <li><i class="fa-sharp fa-solid fa-star"></i></li>
                                                <li class="point">(4.7)</li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="bottom-content">
                                        <span class="price">$59.00</span>
                                        <a href="course-details.html" class="course-btn">View Details</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="contact-3" role="tabpanel" aria-labelledby="contact-tab-3">
                        <div class="row gy-4 justify-content-center">
                            <div class="col-lg-4 col-md-6">
                                <div class="course-item">
                                    <div class="course-thumb-wrap">
                                        <div class="course-thumb">
                                            <img src="themes/webpage/assets/img/images/course-img-1.png" alt="course">
                                        </div>
                                    </div>
                                    <div class="course-content">
                                        <span class="offer">Free</span>
                                        <h3 class="title"><a href="course-details.html">React Tutorial Beginners For Skills Building Carrera</a></h3>
                                        <ul class="course-list">
                                            <li><i class="fa-light fa-file"></i>Lesson 8</li>
                                            <li><i class="fa-light fa-user"></i>Students 50</li>
                                            <li><i class="fa-light fa-eye"></i>View: 12K</li>
                                        </ul>
                                        <div class="course-author-box">
                                            <div class="course-author">
                                                <div class="author-img">
                                                    <img src="themes/webpage/assets/img/images/course-author-1.png" alt="course">
                                                </div>
                                                <div class="author-info">
                                                    <h4 class="name">Kevin Perry</h4>
                                                    <span>Instructor</span>
                                                </div>
                                            </div>
                                            <ul class="course-review">
                                                <li><i class="fa-sharp fa-solid fa-star"></i></li>
                                                <li><i class="fa-sharp fa-solid fa-star"></i></li>
                                                <li><i class="fa-sharp fa-solid fa-star"></i></li>
                                                <li><i class="fa-sharp fa-solid fa-star"></i></li>
                                                <li><i class="fa-sharp fa-solid fa-star"></i></li>
                                                <li class="point">(4.7)</li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="bottom-content">
                                        <span class="price">$59.00</span>
                                        <a href="course-details.html" class="course-btn">View Details</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6">
                                <div class="course-item">
                                    <div class="course-thumb-wrap">
                                        <div class="course-thumb">
                                            <img src="themes/webpage/assets/img/images/course-img-2.png" alt="course">
                                        </div>
                                    </div>
                                    <div class="course-content">
                                        <span class="offer">Free</span>
                                        <h3 class="title"><a href="course-details.html">Cultural Perspectives in Teaching and Learning Environments</a></h3>
                                        <ul class="course-list">
                                            <li><i class="fa-light fa-file"></i>Lesson 8</li>
                                            <li><i class="fa-light fa-user"></i>Students 50</li>
                                            <li><i class="fa-light fa-eye"></i>View: 12K</li>
                                        </ul>
                                        <div class="course-author-box">
                                            <div class="course-author">
                                                <div class="author-img">
                                                    <img src="themes/webpage/assets/img/images/course-author-2.png" alt="course">
                                                </div>
                                                <div class="author-info">
                                                    <h4 class="name">Deniel Ross</h4>
                                                    <span>Instructor</span>
                                                </div>
                                            </div>
                                            <ul class="course-review">
                                                <li><i class="fa-sharp fa-solid fa-star"></i></li>
                                                <li><i class="fa-sharp fa-solid fa-star"></i></li>
                                                <li><i class="fa-sharp fa-solid fa-star"></i></li>
                                                <li><i class="fa-sharp fa-solid fa-star"></i></li>
                                                <li><i class="fa-sharp fa-solid fa-star"></i></li>
                                                <li class="point">(4.7)</li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="bottom-content">
                                        <span class="price">$59.00</span>
                                        <a href="course-details.html" class="course-btn">View Details</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6">
                                <div class="course-item">
                                    <div class="course-thumb-wrap">
                                        <div class="course-thumb">
                                            <img src="themes/webpage/assets/img/images/course-img-3.png" alt="course">
                                        </div>
                                    </div>
                                    <div class="course-content">
                                        <span class="offer">Free</span>
                                        <h3 class="title"><a href="course-details.html">Innovative Instructional Strategies <br>for Enhancing Student</a></h3>
                                        <ul class="course-list">
                                            <li><i class="fa-light fa-file"></i>Lesson 8</li>
                                            <li><i class="fa-light fa-user"></i>Students 50</li>
                                            <li><i class="fa-light fa-eye"></i>View: 12K</li>
                                        </ul>
                                        <div class="course-author-box">
                                            <div class="course-author">
                                                <div class="author-img">
                                                    <img src="themes/webpage/assets/img/images/course-author-3.png" alt="course">
                                                </div>
                                                <div class="author-info">
                                                    <h4 class="name">Andrew klip</h4>
                                                    <span>Instructor</span>
                                                </div>
                                            </div>
                                            <ul class="course-review">
                                                <li><i class="fa-sharp fa-solid fa-star"></i></li>
                                                <li><i class="fa-sharp fa-solid fa-star"></i></li>
                                                <li><i class="fa-sharp fa-solid fa-star"></i></li>
                                                <li><i class="fa-sharp fa-solid fa-star"></i></li>
                                                <li><i class="fa-sharp fa-solid fa-star"></i></li>
                                                <li class="point">(4.7)</li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="bottom-content">
                                        <span class="price">$59.00</span>
                                        <a href="course-details.html" class="course-btn">View Details</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6">
                                <div class="course-item">
                                    <div class="course-thumb-wrap">
                                        <div class="course-thumb">
                                            <img src="themes/webpage/assets/img/new-update/course-img-3.png" alt="course">
                                        </div>
                                    </div>
                                    <div class="course-content">
                                        <span class="offer">Free</span>
                                        <h3 class="title"><a href="course-details.html">Teaching Students to Navigate the Digital World Responsibly</a></h3>
                                        <ul class="course-list">
                                            <li><i class="fa-light fa-file"></i>Lesson 8</li>
                                            <li><i class="fa-light fa-user"></i>Students 50</li>
                                            <li><i class="fa-light fa-eye"></i>View: 12K</li>
                                        </ul>
                                        <div class="course-author-box">
                                            <div class="course-author">
                                                <div class="author-img">
                                                    <img src="themes/webpage/assets/img/service/course-img-12.png" alt="course">
                                                </div>
                                                <div class="author-info">
                                                    <h4 class="name">Kevin Perry</h4>
                                                    <span>Instructor</span>
                                                </div>
                                            </div>
                                            <ul class="course-review">
                                                <li><i class="fa-sharp fa-solid fa-star"></i></li>
                                                <li><i class="fa-sharp fa-solid fa-star"></i></li>
                                                <li><i class="fa-sharp fa-solid fa-star"></i></li>
                                                <li><i class="fa-sharp fa-solid fa-star"></i></li>
                                                <li><i class="fa-sharp fa-solid fa-star"></i></li>
                                                <li class="point">(4.7)</li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="bottom-content">
                                        <span class="price">$59.00</span>
                                        <a href="course-details.html" class="course-btn">View Details</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6">
                                <div class="course-item">
                                    <div class="course-thumb-wrap">
                                        <div class="course-thumb">
                                            <img src="themes/webpage/assets/img/new-update/course-img-4.png" alt="course">
                                        </div>
                                    </div>
                                    <div class="course-content">
                                        <span class="offer">Free</span>
                                        <h3 class="title"><a href="course-details.html">Enhancing Class Communication and Presentation Skills</a></h3>
                                        <ul class="course-list">
                                            <li><i class="fa-light fa-file"></i>Lesson 8</li>
                                            <li><i class="fa-light fa-user"></i>Students 50</li>
                                            <li><i class="fa-light fa-eye"></i>View: 12K</li>
                                        </ul>
                                        <div class="course-author-box">
                                            <div class="course-author">
                                                <div class="author-img">
                                                    <img src="themes/webpage/assets/img/images/author-img-1.png" alt="course">
                                                </div>
                                                <div class="author-info">
                                                    <h4 class="name">Kevin Perry</h4>
                                                    <span>Instructor</span>
                                                </div>
                                            </div>
                                            <ul class="course-review">
                                                <li><i class="fa-sharp fa-solid fa-star"></i></li>
                                                <li><i class="fa-sharp fa-solid fa-star"></i></li>
                                                <li><i class="fa-sharp fa-solid fa-star"></i></li>
                                                <li><i class="fa-sharp fa-solid fa-star"></i></li>
                                                <li><i class="fa-sharp fa-solid fa-star"></i></li>
                                                <li class="point">(4.7)</li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="bottom-content">
                                        <span class="price">$59.00</span>
                                        <a href="course-details.html" class="course-btn">View Details</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6">
                                <div class="course-item">
                                    <div class="course-thumb-wrap">
                                        <div class="course-thumb">
                                            <img src="themes/webpage/assets/img/new-update/course-img-5.png" alt="course">
                                        </div>
                                    </div>
                                    <div class="course-content">
                                        <span class="offer">Free</span>
                                        <h3 class="title"><a href="course-details.html">Analyzing, Evaluating, & Creating Solutions in Everyday Situations</a></h3>
                                        <ul class="course-list">
                                            <li><i class="fa-light fa-file"></i>Lesson 8</li>
                                            <li><i class="fa-light fa-user"></i>Students 50</li>
                                            <li><i class="fa-light fa-eye"></i>View: 12K</li>
                                        </ul>
                                        <div class="course-author-box">
                                            <div class="course-author">
                                                <div class="author-img">
                                                    <img src="themes/webpage/assets/img/images/author-img-1.png" alt="course">
                                                </div>
                                                <div class="author-info">
                                                    <h4 class="name">Kevin Perry</h4>
                                                    <span>Instructor</span>
                                                </div>
                                            </div>
                                            <ul class="course-review">
                                                <li><i class="fa-sharp fa-solid fa-star"></i></li>
                                                <li><i class="fa-sharp fa-solid fa-star"></i></li>
                                                <li><i class="fa-sharp fa-solid fa-star"></i></li>
                                                <li><i class="fa-sharp fa-solid fa-star"></i></li>
                                                <li><i class="fa-sharp fa-solid fa-star"></i></li>
                                                <li class="point">(4.7)</li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="bottom-content">
                                        <span class="price">$59.00</span>
                                        <a href="course-details.html" class="course-btn">View Details</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div> --}}
                </div>
            </div>
             {{-- REPONER TERMINANDO EL PRIMER CURSO  --}}

    </section>

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