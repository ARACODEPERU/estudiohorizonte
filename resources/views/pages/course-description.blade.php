@extends('layouts.webpage')

@section('content')


    <!-- header-area-start -->
    <x-header />
    <!-- /.Main Header -->

    <section class="page-header" style="padding: 60px;">
        <div class="bg-img">
            <img src="{{ asset('themes/webpage/assets/img/bg-img/page-header-bg.jpg') }}" alt="bg" style="width: 100%;">
        </div>
        <div class="container">
            <div class="page-header-content">
                <h1 class="title">{{ $item->name }}</h1>
                <h4 class="sub-title">
                    <a class="home" href="{{ route('index_main') }}">Home </a>
                    <span class="icon">/</span>
                    <a class="inner-page" href="course-details.html">
                        Descripción del programa
                    </a>
                </h4>
            </div>
        </div>
    </section>
    <!-- ./ page-header -->

    <section class="course-details pt-60 pb-120">

        <div class="container" style="margin-top: -30px;">
            <div class="row">
                <div class="col-xl-9 col-lg-12">
                    <div class="course-details-content">
                        <div class="course-details-img">
                            <img src="{{ $item->image }}" alt="course"
                                style="width: 100%;">
                        </div>
                        <div class="details-inner">
                            {{-- <ul class="details-meta">
                                    <li>Best Seller</li>
                                    <li>Latest</li>
                                </ul> --}}
                            {{-- <h2 class="title">User Experience Design Essentials - Adobe XD UI UX De1sign <br> Course For Limted Time</h2> --}}
                            <ul class="course-details-list">
                                {{-- <li><img src="themes/webpage/assets/img/service/course-details-author.png" alt="author"><span>Instructor:</span> Kevin Perry</li> --}}
                                {{-- <i class="fa-solid fa-tags"></i>Categoria</li> --}}
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
                        <div class="course-details-tab" style="margin-top: 5px;">
                            <ul class="nav nav-tabs" id="myTab" role="tablist">
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link active" id="home-tab" data-bs-toggle="tab"
                                        data-bs-target="#home" type="button" role="tab" aria-controls="home"
                                        aria-selected="true">
                                        <i class="fa fa-bookmark"></i>Presentación
                                    </button>
                                </li>
                                {{-- <li class="nav-item" role="presentation">
                                        <button class="nav-link" id="profile-tab" data-bs-toggle="tab" data-bs-target="#profile" type="button" role="tab" aria-controls="profile" aria-selected="false">
                                            <i class="fa fa-book"></i>Malla Curricular
                                        </button>
                                    </li>
                                    <li class="nav-item" role="presentation">
                                        <button class="nav-link" id="contact-tab" data-bs-toggle="tab" data-bs-target="#contact" type="button" role="tab" aria-controls="contact" aria-selected="false">
                                            <i class="fa fa-star"></i>Beneficios
                                        </button>
                                    </li> --}}
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link" id="contact-tab-2" data-bs-toggle="tab"
                                        data-bs-target="#contact-2" type="button" role="tab" aria-controls="contact-2"
                                        aria-selected="false">
                                        <i class="fa fa-user"></i>Plana Docente
                                    </button>
                                </li>
                            </ul>
                            <div class="tab-content" id="myTabContent">
                                <div class="tab-pane fade show active" id="home" role="tabpanel"
                                    aria-labelledby="home-tab">
                                    <div class="tab-overview">
                                        {!! $course->brochure->presentation !!}
                                    </div>
                                </div>
                                {{-- <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
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
                                            
                                        </div>
                                    </div> --}}
                                <div class="tab-pane fade" id="contact-2" role="tabpanel" aria-labelledby="contact-tab-2">
                                    <div class="reviewr-wrap">
                                        <div class="review-list">
                                            @if (count($course->teachers) > 0)
                                                @foreach ($course->teachers as $teach)
                                                    <div class="review-item">
                                                        <div class="review-thumb">
                                                            <img src="{{ asset('storage/' . $teach->teacher->person->image) }}"
                                                                alt="img">
                                                        </div>
                                                        <div class="content">
                                                            <div class="content-top">
                                                                <h4 class="name">
                                                                    <b>{{ $teach->teacher->person->names . ' ' . $teach->teacher->person->father_lastname . ' ' . $teach->teacher->person->mother_lastname }}</b>
                                                                </h4>
                                                            </div>

                                                            @if (count($teach->teacher->person->resumes))
                                                                @foreach ($teach->teacher->person->resumes as $resume)
                                                                    <p>
                                                                        {{ $resume->description }}
                                                                    </p>
                                                                @endforeach
                                                            @endif
                                                        </div>
                                                    </div>
                                                @endforeach
                                            @endif
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-12">
                    <div class="course-sidebar price-box">
                        <i class="fa-solid fa-tags"></i> "Certificado disponible por un costo adicional (opcional)."
                        <h4 class="price">
                            S/ {{ $course->price  }}
                            {{-- <span>25% off</span> --}}
                        </h4>
                        <a href="https://wa.link/g3i7et" class="ed-primary-btn">
                            <i class="fab fa-whatsapp" aria-hidden="true" style="font-size: 18px;"></i>
                            &nbsp; Adquirir
                        </a>
                        {{-- <a href="cart.html" class="ed-primary-btn buy-btn">Buy Now</a> --}}
                    </div>
                    <div class="course-sidebar sticky-widget">
                        <h4 class="sidebar-title">News</h4>
                        <a target="_blank"
                            href="https://arquitectura.pucp.edu.pe/actividades/noticias/docentes-arquitectura-pucp-en-el-2o-simposio-nacional-de-arquitectura-ciudad-y-territorio/?fbclid=IwY2xjawLTyuZleHRuA2FlbQIxMQBicmlkETFkNUg2SlVPVzZtR240S29xAR4wbHGoIlnmquPMGgMX2e2raYDGVdtZQP0zKlVBR2CvFmiWFscyQdJuKv5YXw_aem_8uZZcoAZjUltVuqdFdnK7A">
                            <img src="{{ asset('themes/webpage/assets/img/news.jpeg') }}" alt="">
                        </a>
                        <p>
                            <a target="_blank"
                                href="https://arquitectura.pucp.edu.pe/actividades/noticias/docentes-arquitectura-pucp-en-el-2o-simposio-nacional-de-arquitectura-ciudad-y-territorio/?fbclid=IwY2xjawLTyuZleHRuA2FlbQIxMQBicmlkETFkNUg2SlVPVzZtR240S29xAR4wbHGoIlnmquPMGgMX2e2raYDGVdtZQP0zKlVBR2CvFmiWFscyQdJuKv5YXw_aem_8uZZcoAZjUltVuqdFdnK7A">
                                <b>
                                    Docentes Arquitectura PUCP fueron parte del 2º Simposio Nacional de Arquitectura, Ciudad
                                    y Territorio
                                </b>
                            </a>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <x-footer />
    <!-- ./ footer-section -->

@stop
