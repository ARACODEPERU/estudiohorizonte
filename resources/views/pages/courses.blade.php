@extends('layouts.webpage')

@section('content')


        <!-- header-area-start -->
        <x-header/>
        <!-- /.Main Header -->

        
        <section class="page-header" style="padding: 60px;">
            <div class="bg-img">
                <img src="themes/webpage/assets/img/bg-img/page-header-bg.jpg" alt="bg" style="width: 100%;">
            </div>
            <div class="container">
                <div class="page-header-content">
                    <h1 class="title">Course Page</h1>
                    <h4 class="sub-title"><a class="home" href="index.html">Home </a><span class="icon">/</span><a class="inner-page" href="course.html"> Course Page</a></h4>
                </div>
            </div>
        </section>
        <!-- ./ page-header -->

        <section class="feature-course bg-white pt-120 pb-120">
            <div class="container">
                <div class="section-heading text-center">
                    <h4 class="sub-heading wow fade-in-bottom" data-wow-delay="200ms"><span class="heading-icon"><i class="fa-sharp fa-solid fa-bolt"></i></span>Top Class Courses</h4>
                    <h2 class="section-title wow fade-in-bottom" data-wow-delay="400ms">Explore Featured Courses</h2>
                </div>
                <div class="row gy-4 justify-content-center">
                    <div class="col-xl-4 col-lg-6 col-md-6">
                        <div class="course-item wow fade-in-bottom" data-wow-delay="200ms">
                            <div class="course-thumb-wrap">
                                <div class="course-thumb">
                                    <img src="themes/webpage/assets/img/images/course-img-1.png" alt="course">
                                </div>
                            </div>
                            <div class="course-content">
                                <span class="offer">Skill</span>
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
                    <div class="col-xl-4 col-lg-6 col-md-6">
                        <div class="course-item wow fade-in-bottom" data-wow-delay="400ms">
                            <div class="course-thumb-wrap">
                                <div class="course-thumb">
                                    <img src="themes/webpage/assets/img/images/course-img-2.png" alt="course">
                                </div>
                            </div>
                            <div class="course-content">
                                <span class="offer">Free</span>
                                <h3 class="title"><a href="course-details.html">Cultural Perspectives in Teaching <br>and Learning Environments</a></h3>
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
                    <div class="col-xl-4 col-lg-6 col-md-6">
                        <div class="course-item wow fade-in-bottom" data-wow-delay="500ms">
                            <div class="course-thumb-wrap">
                                <div class="course-thumb">
                                    <img src="themes/webpage/assets/img/images/course-img-3.png" alt="course">
                                </div>
                            </div>
                            <div class="course-content">
                                <span class="offer">Language</span>
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
                    <div class="col-xl-4 col-lg-6 col-md-6">
                        <div class="course-item wow fade-in-bottom" data-wow-delay="200ms">
                            <div class="course-thumb-wrap">
                                <div class="course-thumb">
                                    <img src="themes/webpage/assets/img/images/course-img-4.png" alt="course">
                                </div>
                            </div>
                            <div class="course-content">
                                <span class="offer">Develop</span>
                                <h3 class="title"><a href="course-details.html">React Tutorial Beginners For Skills Building Carrera</a></h3>
                                <ul class="course-list">
                                    <li><i class="fa-light fa-file"></i>Lesson 8</li>
                                    <li><i class="fa-light fa-user"></i>Students 50</li>
                                    <li><i class="fa-light fa-eye"></i>View: 12K</li>
                                </ul>
                                <div class="course-author-box">
                                    <div class="course-author">
                                        <div class="author-img">
                                            <img src="themes/webpage/assets/img/images/course-author-4.png" alt="course">
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
                    <div class="col-xl-4 col-lg-6 col-md-6">
                        <div class="course-item wow fade-in-bottom" data-wow-delay="400ms">
                            <div class="course-thumb-wrap">
                                <div class="course-thumb">
                                    <img src="themes/webpage/assets/img/images/course-img-5.png" alt="course">
                                </div>
                            </div>
                            <div class="course-content">
                                <span class="offer">Management</span>
                                <h3 class="title"><a href="course-details.html">Cultural Perspectives in Teaching <br>and Learning Environments</a></h3>
                                <ul class="course-list">
                                    <li><i class="fa-light fa-file"></i>Lesson 8</li>
                                    <li><i class="fa-light fa-user"></i>Students 50</li>
                                    <li><i class="fa-light fa-eye"></i>View: 12K</li>
                                </ul>
                                <div class="course-author-box">
                                    <div class="course-author">
                                        <div class="author-img">
                                            <img src="themes/webpage/assets/img/images/course-author-5.png" alt="course">
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
                    <div class="col-xl-4 col-lg-6 col-md-6">
                        <div class="course-item wow fade-in-bottom" data-wow-delay="500ms">
                            <div class="course-thumb-wrap">
                                <div class="course-thumb">
                                    <img src="themes/webpage/assets/img/images/course-img-2.png" alt="course">
                                </div>
                            </div>
                            <div class="course-content">
                                <span class="offer">Educational</span>
                                <h3 class="title"><a href="course-details.html">Innovative Instructional Strategies <br>for Enhancing Student</a></h3>
                                <ul class="course-list">
                                    <li><i class="fa-light fa-file"></i>Lesson 8</li>
                                    <li><i class="fa-light fa-user"></i>Students 50</li>
                                    <li><i class="fa-light fa-eye"></i>View: 12K</li>
                                </ul>
                                <div class="course-author-box">
                                    <div class="course-author">
                                        <div class="author-img">
                                            <img src="themes/webpage/assets/img/images/course-author-6.png" alt="course">
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
        </section>
        <!-- ./ course-section -->

        <x-footer />
        <!-- ./ footer-section -->

@stop