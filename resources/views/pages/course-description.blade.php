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
                    <h1 class="title">Título del curso</h1>
                    <h4 class="sub-title">
                        <a class="home" href="index.html">Home </a>
                        <span class="icon">/</span>
                        <a class="inner-page" href="course-details.html"> 
                            Descripción del Curso
                        </a>
                    </h4>
                </div>
            </div>
        </section>
        <!-- ./ page-header -->

        <section class="course-details pt-60 pb-120">
            <div class="container">
                <div class="row">
                    <div class="col-xl-9 col-lg-12">
                        <div class="course-details-content">
                            <div class="course-details-img">
                                <img src="themes/webpage/assets/img/service/course-details-img.png" alt="course">
                            </div>
                            <div class="details-inner">
                                {{-- <ul class="details-meta">
                                    <li>Best Seller</li>
                                    <li>Latest</li>
                                </ul> --}}
                                {{-- <h2 class="title">User Experience Design Essentials - Adobe XD UI UX De1sign <br> Course For Limted Time</h2> --}}
                                <ul class="course-details-list">
                                    <li><img src="themes/webpage/assets/img/service/course-details-author.png" alt="author"><span>Instructor:</span> Kevin Perry</li>
                                    <li><i class="fa-solid fa-tags"></i>Categoria</li>
                                    {{-- <li><i class="fa-light fa-calendar"></i>04 April, 2022</li>
                                    <li class="review-wrap">
                                        <ul>
                                            <li><i class="fa-sharp fa-regular fa-star"></i></li>
                                            <li><i class="fa-sharp fa-regular fa-star"></i></li>
                                            <li><i class="fa-sharp fa-regular fa-star"></i></li>
                                            <li><i class="fa-sharp fa-regular fa-star"></i></li>
                                            <li><i class="fa-sharp fa-regular fa-star"></i></li>
                                        </ul>
                                        (4.88)
                                    </li> --}}
                                </ul>
                            </div>
                            <div class="course-details-tab">
                                <ul class="nav nav-tabs" id="myTab" role="tablist">
                                    <li class="nav-item" role="presentation">
                                        <button class="nav-link active" id="home-tab" data-bs-toggle="tab" data-bs-target="#home" type="button" role="tab" aria-controls="home" aria-selected="true">
                                            <i class="fa fa-bookmark"></i>Presentación
                                        </button>
                                    </li>
                                    <li class="nav-item" role="presentation">
                                        <button class="nav-link" id="profile-tab" data-bs-toggle="tab" data-bs-target="#profile" type="button" role="tab" aria-controls="profile" aria-selected="false">
                                            <i class="fa fa-book"></i>Malla Curricular
                                        </button>
                                    </li>
                                    <li class="nav-item" role="presentation">
                                        <button class="nav-link" id="contact-tab" data-bs-toggle="tab" data-bs-target="#contact" type="button" role="tab" aria-controls="contact" aria-selected="false">
                                            <i class="fa fa-star"></i>Beneficios
                                        </button>
                                    </li>
                                    <li class="nav-item" role="presentation">
                                        <button class="nav-link" id="contact-tab-2" data-bs-toggle="tab" data-bs-target="#contact-2" type="button" role="tab" aria-controls="contact-2" aria-selected="false">
                                            <i class="fa fa-user"></i>Plana Docente
                                        </button>
                                    </li>
                                </ul>
                                <div class="tab-content" id="myTabContent">
                                    <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                                        <div class="tab-overview">
                                            <h3 class="title">Presentación</h3>
                                            <p class="mb-30">Rapidiously develop parallel e-markets via worldwide paradigms. Quickly synergize cutting-edge scenarios and professional results. Assertively deliver cross-media results before client-centric results. Uniquely initiate intuitive communities through process-centric internal or "organic" sources. Energistically reinvent distinctive value via parallel services.
                                                Phosfluorescently deploy extensive paradigms vis-a-vis cross-unit manufactured products. Uniquely coordinate impactful services whereas team building e-services. Globally grow multimedia based benefits vis-a-vis client-based niches.
                                            </p>
                                            <p class="mb-40">Professionally expedite synergistic technology without out-of-the-box human capital. Enthusiastically coordinate state of the art leadership after professional manufactured products. Distinctively enhance future-proof e-services whereas functionalized partnerships. Quickly streamline focused paradigms via orthogonal "outside the box" thinking. Rapidiously administrate 2.0 total linkage for cross-platform channels.</p>
                                            <h3 class="title">What Will You Learn?</h3>
                                            <p class="mb-0">Quickly synergize cutting-edge scenarios and professional results. Assertively deliver cross-media results before client-centric results. Uniquely initiate intuitive communities through process-centric internal or "organic" sources. Energistically reinvent distinctive value via parallel services extensive paradigms cross-unit manufactured products.</p>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                                        <div class="curriculam-area">
                                            <div class="accordion" id="accordionExample">
                                                <div class="accordion-item">
                                                    <h2 class="accordion-header" id="headingOne">
                                                        <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                                            Foundations of Fluent English Speaking
                                                        </button>
                                                    </h2>
                                                    <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                                                        <div class="accordion-body">
                                                            <ul class="curri-list">
                                                                <li><span><i class="fa-regular fa-video"></i>  Mastering Pronunciation and Intonation</span> <span>54.23 <i class="fa-regular fa-unlock"></i></span></li>
                                                                <li><span><i class="fa-regular fa-video"></i>  Building a Strong Vocabulary for Everyday Communication</span> <span>45.05 <i class="fa-regular fa-unlock"></i></span></li>
                                                                <li><span><i class="fa-regular fa-file-contract"></i>  Understanding Basic Sentence Structure and Grammar</span> <span>1.6hr <i class="fa-regular fa-lock"></i></span></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            <div class="accordion-item">
                                                <h2 class="accordion-header" id="headingTwo">
                                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                                        User Research Techniques
                                                    </button>
                                                </h2>
                                                <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                                                    <div class="accordion-body">
                                                        <ul class="curri-list">
                                                            <li><span><i class="fa-regular fa-video"></i>  Mastering Pronunciation and Intonation</span> <span>54.23 <i class="fa-regular fa-unlock"></i></span></li>
                                                            <li><span><i class="fa-regular fa-video"></i>  Building a Strong Vocabulary for Everyday Communication</span> <span>45.05 <i class="fa-regular fa-unlock"></i></span></li>
                                                            <li><span><i class="fa-regular fa-file-contract"></i>  Understanding Basic Sentence Structure and Grammar</span> <span>1.6hr <i class="fa-regular fa-lock"></i></span></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="accordion-item">
                                                <h2 class="accordion-header" id="headingThree">
                                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                                        Coursed Key Features
                                                    </button>
                                                </h2>
                                                <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                                                    <div class="accordion-body">
                                                        <ul class="curri-list">
                                                            <li><span><i class="fa-regular fa-video"></i>  Mastering Pronunciation and Intonation</span> <span>54.23 <i class="fa-regular fa-unlock"></i></span></li>
                                                            <li><span><i class="fa-regular fa-video"></i>  Building a Strong Vocabulary for Everyday Communication</span> <span>45.05 <i class="fa-regular fa-unlock"></i></span></li>
                                                            <li><span><i class="fa-regular fa-file-contract"></i>  Understanding Basic Sentence Structure and Grammar</span> <span>1.6hr <i class="fa-regular fa-lock"></i></span></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">
                                        <div class="row team-wrap-2 gy-lg-0 gy-4 justify-content-center">
                                            <div class="col-lg-4 col-md-6">
                                                <div class="team-item-3 team-item-5">
                                                    <div class="team-thumb">
                                                        <div class="shape"><img src="themes/webpage/assets/img/shapes/team-shape-3.png" alt="team"></div>
                                                        <div class="team-men">
                                                            <img src="themes/webpage/assets/img/team/team-men-1.png" alt="team">
                                                        </div>
                                                    </div>
                                                    <div class="team-content">
                                                        <h3 class="title"><a href="team-details.html">Mason D. Logan</a></h3>
                                                        <span>IT Trainier</span>
                                                        <ul class="social-list">
                                                            <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                                            <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                                                            <li><a href="#"><i class="fab fa-behance"></i></a></li>
                                                            <li><a href="#"><i class="fab fa-pinterest-p"></i></a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-4 col-md-6">
                                                <div class="team-item-3 team-item-5">
                                                    <div class="team-thumb">
                                                        <div class="shape"><img src="themes/webpage/assets/img/shapes/team-shape-3.png" alt="team"></div>
                                                        <div class="team-men">
                                                            <img src="themes/webpage/assets/img/team/team-men-2.png" alt="team">
                                                        </div>
                                                    </div>
                                                    <div class="team-content">
                                                        <h3 class="title"><a href="team-details.html">Scarlett Hannah</a></h3>
                                                        <span>IT Trainier</span>
                                                        <ul class="social-list">
                                                            <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                                            <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                                                            <li><a href="#"><i class="fab fa-behance"></i></a></li>
                                                            <li><a href="#"><i class="fab fa-pinterest-p"></i></a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-4 col-md-6">
                                                <div class="team-item-3 team-item-5">
                                                    <div class="team-thumb">
                                                        <div class="shape"><img src="themes/webpage/assets/img/shapes/team-shape-3.png" alt="team"></div>
                                                        <div class="team-men">
                                                            <img src="themes/webpage/assets/img/team/team-men-3.png" alt="team">
                                                        </div>
                                                    </div>
                                                    <div class="team-content">
                                                        <h3 class="title"><a href="team-details.html">Chloe Smith</a></h3>
                                                        <span>IT Trainier</span>
                                                        <ul class="social-list">
                                                            <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                                            <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                                                            <li><a href="#"><i class="fab fa-behance"></i></a></li>
                                                            <li><a href="#"><i class="fab fa-pinterest-p"></i></a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="contact-2" role="tabpanel" aria-labelledby="contact-tab-2">
                                        <div class="reviewr-wrap">
                                            <div class="review-list">
                                                <div class="review-item">
                                                    <div class="review-thumb">
                                                        <img src="themes/webpage/assets/img/shop/review-list-1.jpg" alt="img">
                                                    </div>
                                                    <div class="content">
                                                        <div class="content-top">
                                                            <h4 class="name">Eleanor Fant <span>06 March, 2023</span></h4>
                                                            <ul class="review">
                                                                <li><i class="fa-sharp fa-solid fa-star"></i></li>
                                                                <li><i class="fa-sharp fa-solid fa-star"></i></li>
                                                                <li><i class="fa-sharp fa-solid fa-star"></i></li>
                                                                <li><i class="fa-sharp fa-solid fa-star"></i></li>
                                                                <li><i class="fa-sharp fa-solid fa-star"></i></li>
                                                            </ul>
                                                        </div>
                                                        <p>Mauris non dignissim purus, ac commodo diam. Donec sit amet lacinia nulla. Aliquam quis purus in justo pulvinar tempor.</p>
                                                    </div>
                                                </div>
                                                <div class="review-item">
                                                    <div class="review-thumb">
                                                        <img src="themes/webpage/assets/img/shop/review-list-2.jpg" alt="img">
                                                    </div>
                                                    <div class="content">
                                                        <div class="content-top">
                                                            <h4 class="name">Haliey White <span>06 March, 2023</span></h4>
                                                            <ul class="review">
                                                                <li><i class="fa-sharp fa-solid fa-star"></i></li>
                                                                <li><i class="fa-sharp fa-solid fa-star"></i></li>
                                                                <li><i class="fa-sharp fa-solid fa-star"></i></li>
                                                                <li><i class="fa-sharp fa-solid fa-star"></i></li>
                                                                <li><i class="fa-sharp fa-solid fa-star"></i></li>
                                                            </ul>
                                                        </div>
                                                        <p>Designed very similarly to the nearly double priced Galaxy tab S6, with the only removal being.Mauris non dignissim purus, ac commodo diam. Donec sit amet lacinia nulla. Aliquam quis purus in justo pulvinar tempor.</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-12">
                        <div class="course-sidebar price-box">
                            <h4 class="price">
                                $90.00 
                                {{-- <span>25% off</span> --}}
                            </h4>
                            <a href="" class="ed-primary-btn">
                                <i class="fab fa-whatsapp" aria-hidden="true" style="font-size: 18px;"></i>
                                &nbsp; Comprar
                            </a>
                            {{-- <a href="cart.html" class="ed-primary-btn buy-btn">Buy Now</a> --}}
                        </div>
                        <div class="course-sidebar sticky-widget">
                            {{-- <h4 class="sidebar-title">Course Information</h4>
                            <ul class="course-sidebar-list">
                                <li><i class="fa-regular fa-house-chimney"></i>Instructor: <span>Kevin Perry</span></li>
                                <li><i class="fa-regular fa-book"></i>Lessons: <span>8</span></li>
                                <li><i class="fa-regular fa-clock"></i>Duration: <span>15h 30m 36s</span></li>
                                <li><i class="fa-regular fa-tag"></i>Course level: <span>Beginners</span></li>
                                <li><i class="fa-regular fa-globe"></i>Language: <span>English</span></li>
                                <li><i class="fa-regular fa-puzzle-piece"></i>Quizzes: <span>04</span></li>
                            </ul>
                            <div class="share-btn">
                                <button class="ed-primary-btn"><i class="fa-regular fa-share-nodes"></i>Share This Course</button>
                            </div> --}}
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <x-footer />
        <!-- ./ footer-section -->

@stop