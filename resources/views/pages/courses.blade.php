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
                    <h1 class="title">Formación Continua</h1>
                    <h4 class="sub-title"><a class="home" href="{{ route('index_main') }}">Home </a><span class="icon">/</span><a class="inner-page" href=""> Cursos</a></h4>
                </div>
            </div>
        </section>
        <!-- ./ page-header -->

        <section class="feature-course bg-white pt-120 pb-120">
            {{-- <div class="container">
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
            </div> --}}



            
            <div class="container">
                <div class="feature-course-top heading-space">
                    <div class="section-heading mb-0">
                        <h4 class="sub-heading wow fade-in-bottom" data-wow-delay="200ms">
                            <span class="heading-icon"><i class="fa-sharp fa-solid fa-bolt"></i></span>Nuevos Ingresos
                        </h4>
                        <h2 class="section-title wow fade-in-bottom" data-wow-delay="400ms">
                            𝐈𝐈 𝐅𝐨𝐫𝐨 𝐈𝐧𝐭𝐞𝐫𝐧𝐚𝐜𝐢𝐨𝐧𝐚𝐥 𝐝𝐞 𝐀𝐫𝐪𝐮𝐢𝐭𝐞𝐜𝐭𝐮𝐫𝐚 𝐲 𝐔𝐫𝐛𝐚𝐧𝐢𝐬𝐦𝐨 "𝐒𝐞𝐧𝐭𝐢𝐫 𝐥𝐚 𝐀𝐫𝐪𝐮𝐢𝐭𝐞𝐜𝐭𝐮𝐫𝐚"
                        </h2>
                    </div>
                </div>
            </div>
            <div class="container" style="margin-top: -30px;">
                <div class="row">
                    <div class="col-xl-9 col-lg-12">
                        <div class="course-details-content">
                            <div class="course-details-img">
                                <img src="themes/webpage/assets/img/courses/course_01.jpg" alt="course" style="width: 100%;">
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
                                        <button class="nav-link active" id="home-tab" data-bs-toggle="tab" data-bs-target="#home" type="button" role="tab" aria-controls="home" aria-selected="true">
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
                                        <button class="nav-link" id="contact-tab-2" data-bs-toggle="tab" data-bs-target="#contact-2" type="button" role="tab" aria-controls="contact-2" aria-selected="false">
                                            <i class="fa fa-user"></i>Plana Docente
                                        </button>
                                    </li>
                                </ul>
                                <div class="tab-content" id="myTabContent">
                                    <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                                        <div class="tab-overview">
                                            <h3 class="title">Presentación:</h3>
                                            <p class="mb-30">
                                                El II Foro Internacional de Arquitectura y Urbanismo, titulado "Sentir la Arquitectura", tiene como objetivo principal 
                                                reunir a expertos y profesionales de la arquitectura y el urbanismo de diferentes partes del mundo para compartir 
                                                conocimientos y experiencias en torno a la promoción y regulación de estas disciplinas.
                                            </p>
                                            <h3 class="title">Objetivo:</h3>
                                            <p class="mb-30">
                                                Reunir a expertos y profesionales de diferentes partes del mundo para compartir conocimientos y experiencias 
                                                que promuevan la reflexión, el debate y la cooperación en torno a la arquitectura y el urbanismo, 
                                                con énfasis en el diseño, innovación, la sostenibilidad y la calidad de vida urbana.
                                            </p>
                                            <h3 class="title">Dirigido:</h3>
                                            <p class="mb-30">
                                                Arquitectos, Docentes universitarios y estudiantes de arquitectura
                                            </p>
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
                                                <div class="review-item">
                                                    <div class="review-thumb">
                                                        <img src="themes/webpage/assets/img/teacher/Luis_Longui.jpg" alt="img">
                                                    </div>
                                                    <div class="content">
                                                        <div class="content-top">
                                                            <h4 class="name"><b>Luis Longui Traverso</b></h4>
                                                        </div>
                                                        <p>
                                                            Arquitecto, Escultor, Escenógrafo y Museógrafo, Hexágono de Oro 2010, Doctor Honoris 
                                                            Causa UANCV 2011, Arquitecto Universidad Ricardo Palma1980, Maestrías Diseño 
                                                            Arquitectónico y Bellas Artes mención en Escultura University of Pennsylvania 1984, 
                                                            Diplomado Animación por Computadora aplicado al diseño Arquitectónico y Paisajista GSD 
                                                            Harvard 1991. Estudios y oficio Juvenal Baracco, BV Doshi, Adele Santos, Marshall 
                                                            Meyers. Catedrático y conferencista internacional.
                                                        </p>
                                                    </div>
                                                </div>
                                                <div class="review-item">
                                                    <div class="review-thumb">
                                                        <img src="themes/webpage/assets/img/teacher/Liliana_Miranda.jpg" alt="img">
                                                    </div>
                                                    <div class="content">
                                                        <div class="content-top">
                                                            <h4 class="name"><b>Liliana Miranda Sara</b></h4>
                                                        </div>
                                                        <p>
                                                            Liliana Miranda es arquitecta, cuenta con maestría y doctorado, combina la 
                                                            investigación científica y docencia académica con la práctica directa en ciudades 
                                                            y barrios trabajando con actores urbanos y nacionales. Es directora ejecutiva del 
                                                            Foro Ciudades para la Vida.
                                                        </p>
                                                        <p>
                                                            
                                                            Ha trabajado con municipalidades peruanas, organismos gubernamentales, empresas y de cooperación 
                                                            internacional a nivel local, nacional e internacional. Ha publicado varios libros y artículos 
                                                            indexados, es articulista en revistas y periódicos en Perú y la región. Es autora líder del AR6 grupo 2 
                                                            del IPCC (2022) y del Informe Especial de Ciudades y Cambio Climático del IPCC (a publicarse 2027).
                                                        </p>
                                                    </div>
                                                </div>
                                                <div class="review-item">
                                                    <div class="review-thumb">
                                                        <img src="themes/webpage/assets/img/teacher/Liliana_Miranda.jpg" alt="img">
                                                    </div>
                                                    <div class="content">
                                                        <div class="content-top">
                                                            <h4 class="name"><b>Cynthia Seinfield Lemling</b></h4>
                                                        </div>
                                                        <p>
                                                            Cynthia Seinfeld es socia fundadora de Seinfeld Arquitectos desde 1994. Ha conformado en tres 
                                                            ocasiones la directiva de la Asociación de Estudios de Arquitectos en el Perú. 
                                                            Se ha desempeñado como docente en la Universidad de Lima y en la actualidad enseña en la 
                                                            Pontifica Universidad Católica del Perú desde el año 2020 como jefa de taller UNO.
                                                        </p>
                                                        <p>
                                                            El interés por aportar en mejorar la calidad de vida y brindar un entorno amigable, seguro y 
                                                            resiliente, la ha llevado a cursar una maestría en ciencias por la UNI con mención en Vivienda 
                                                            habiendo profundizado en el estudio de los espacios comunitarios en vivienda colectiva para 
                                                            lograr un sentido de barrio y pertenencia, asimismo, en soluciones sostenibles para viviendas 
                                                            costeras. Estas investigaciones le están permitiendo aportar en proyectos de vivienda en diversas 
                                                            regiones del país.
                                                        </p>
                                                        <p>
                                                            En la búsqueda de mejores oportunidades para los jóvenes viene desarrollando proyectos 
                                                            educativos y residencias estudiantiles para colegios en comunidades nativas en la 
                                                            selva peruana y para Institutos Técnicos Superiores de Fe y Alegría, proyectos que 
                                                            persiguen sostenibilidad social, cultural y ambiental.
                                                            Ha fundado el Centro Para el Desarrollo de la Vivienda “CEDEVI”, junto a sus social, 
                                                            institución que busca servir como articulador para el desarrollo de viviendas de 
                                                            bajos recursos. Ha sido merecedora de diversos reconocimientos por sus proyectos 
                                                            a nivel nacional e internacional, siendo considerada la Mujer arquitecta 2024 por 
                                                            el Colegio de Arquitectos del Perú.
                                                        </p>
                                                    </div>
                                                </div>
                                                <div class="review-item">
                                                    <div class="review-thumb">
                                                        <img src="themes/webpage/assets/img/teacher/Christopher_Schreier.jpg" alt="img">
                                                    </div>
                                                    <div class="content">
                                                        <div class="content-top">
                                                            <h4 class="name"><b>Christopher Schereier</b></h4>
                                                        </div>
                                                        <p>
                                                            Christopher Schreier es un destacado experto en arquitectura y docencia, con una 
                                                            sólida trayectoria académica y profesional en Perú. Actualmente, ejerce como 
                                                            docente en varias universidades prestigiosas, incluyendo la Universidad Peruana 
                                                            de Ciencias Aplicadas, Universidad de Ciencias y Artes de América Latina y 
                                                            Universidad Ricardo Palma. En su experiencia docente, ha tenido la oportunidad 
                                                            de enseñar en diversas áreas, como investigación arquitectónica, historia, diseño 
                                                            y fotografía. En la Universidad Peruana de Ciencias Aplicadas, es docente 
                                                            dictante en cursos de investigación arquitectónica e historia. En la 
                                                            Universidad de Ciencias y Artes de América Latina, es docente de cursos de 
                                                            investigación, diseño e historia en especialización. También ha sido docente en la 
                                                            Universidad Ricardo Palma, donde ha enseñado cursos de historia y taller de diseño 
                                                            integral.
                                                        </p>
                                                        <p>
                                                            Además, ha tenido una destacada experiencia en la Universidad de Lima, donde ejerció como docente 
                                                            y coordinador del Área Académica de Comunicaciones. Durante su tiempo allí, desarrolló exposiciones, 
                                                            publicaciones y eventos, lo que le permitió combinar su pasión por la arquitectura, el diseño y 
                                                            la comunicación.
                                                        </p>
                                                        <p>
                                                            En cuanto a su formación académica, está cursando un Doctorado en Historia en la 
                                                            Pontificia Universidad Católica del Perú. También tiene una Maestría en Ciencias 
                                                            con Mención en Arquitectura-Historia, Teoría y Crítica de la Universidad Nacional 
                                                            de Ingeniería, y estudios en Fotografía en el Instituto Peruano de Arte y Diseño. 
                                                            Su pregrado en Arquitectura lo obtuvo en la Universidad Ricardo Palma. Con su 
                                                            amplia experiencia en docencia e investigación, aporta significativamente al 
                                                            desarrollo de la arquitectura y el urbanismo en Perú, combinando su pasión por la 
                                                            historia, el diseño y la fotografía en su trabajo académico.
                                                        </p>
                                                    </div>
                                                </div>
                                                <div class="review-item">
                                                    <div class="review-thumb">
                                                        <img src="themes/webpage/assets/img/teacher/Luis_Rodriguez.jpg" alt="img">
                                                    </div>
                                                    <div class="content">
                                                        <div class="content-top">
                                                            <h4 class="name"><b>Luis Rodriguez Rivero</b></h4>
                                                        </div>
                                                        <p>
                                                            Arquitecto y Urbanista. Dentro de la investigación y crítica arquitectónica, 
                                                            interesado en temas que vinculan arquitectura y sociedad en el mundo contemporáneo, 
                                                            tales como la memoria, el miedo, las mentalidades, el neocolonialismo y 
                                                            temas vinculados a las subjetividades y la ideología en general. En el campo del 
                                                            urbanismo, las investigaciones y enfoques destinados a aproximar las decisiones 
                                                            ciudadanas al manejo de la ciudad, buscando nuevas metodologías y enfoques en la 
                                                            planificación o construyendo nuevas herramientas para el trabajo urbano y la toma 
                                                            de decisiones. Esto a nivel territorial, urbano o barrial. En ambos casos la 
                                                            reflexión teórica y crítica está soportada por un trabajo profesional y práctico 
                                                            que permite la confrontación de ideas con la realidad y viceversa.
                                                        </p>
                                                    </div>
                                                </div>
                                                <div class="review-item">
                                                    <div class="review-thumb">
                                                        <img src="themes/webpage/assets/img/teacher/Paolo_Marinelli.jpg" alt="img">
                                                    </div>
                                                    <div class="content">
                                                        <div class="content-top">
                                                            <h4 class="name"><b>Paolo Marinelli</b></h4>
                                                        </div>
                                                        <p>
                                                            Paolo Marinelli es licenciado en Arquitectura por la Pontificia Universidad Católica 
                                                            del Perú, con más de siete años de experiencia en diseño, monitoreo y evaluación de 
                                                            proyectos sociales y urbanos. Ha trabajado como consultor especialista en gobiernos, 
                                                            ONGs y organizaciones de cooperación internacional, promoviendo una arquitectura que 
                                                            no sólo se diseña, sino que demuestra su impacto en la vida de las personas. Su 
                                                            trabajo integra enfoques de medición de impacto, procesos colaborativos y tecnología 
                                                            para fortalecer la toma de decisiones en intervenciones territoriales.
                                                        </p>
                                                    </div>
                                                </div>
                                                <div class="review-item">
                                                    <div class="review-thumb">
                                                        <img src="themes/webpage/assets/img/teacher/Mario_Bragagnini.jpg" alt="img">
                                                    </div>
                                                    <div class="content">
                                                        <div class="content-top">
                                                            <h4 class="name"><b>Mario Bragagnini</b></h4>
                                                        </div>
                                                        <p>
                                                            Arquitecto por la Universidad Ricardo Palma, con trayectoria como docente en 
                                                            educación superior desde el año 1999. Actualmente enseña arquitectura en la 
                                                            Universidad Peruana de Ciencias Aplicadas – UPC y la Universidad de Lima.
                                                        </p>
                                                    </div>
                                                </div>
                                                <div class="review-item">
                                                    <div class="review-thumb">
                                                        <img src="themes/webpage/assets/img/teacher/Enrique_Santillana.jpg" alt="img">
                                                    </div>
                                                    <div class="content">
                                                        <div class="content-top">
                                                            <h4 class="name"><b>Enrique Santillana Ciriani</b></h4>
                                                        </div>
                                                        <p>
                                                            Enrique Santillana Ciriani es arquitecto por la Universidad Ricardo Palma (Lima) 
                                                            y magíster por la Escuela de Arquitectura de Paris-Belleville. Se desempeña como 
                                                            arquitecto en Francia desarrollando proyectos con programas diversos en Europa 
                                                            y África, y como profesor de diseño arquitectónico en la Escuela Nacional Superior 
                                                            de Arquitectura de Paris-Belleville. En Lima desde el 2014 es docente en los ámbitos 
                                                            del diseño, teoría e historia de la arquitectura en la Pontificia Universidad 
                                                            Católica del Perú, en la Universidad de Lima y en la Escuela Isthmus en Panamá. 
                                                            Ejerce su profesión de manera independiente desde el 2015 en su propio estudio 
                                                            ESARQUITECTURA, obteniendo reconocimientos y premios, donde destacan la nominación 
                                                            al Premio de las Américas Mies Crown Hall, en el 2017 por el Complejo Académico de 
                                                            Ciencias Sociales PUCP, y en el 2024 por la ampliación y restructuración del 
                                                            Instituto Francés de Estudios Andinos (IFEA) en Barranco, proyecto ganador del 
                                                            Premio Nacional “Arq. Miguel Rodrigo Mazuré” HEXÁGONO DE ACERO en la XIX Bienal de 
                                                            Arquitectura Peruana 2022, y obra ganadora en la XIII Bienal Iberoamericana de 
                                                            Arquitectura y Urbanismo 2024.
                                                        </p>
                                                    </div>
                                                </div>
                                                <div class="review-item">
                                                    <div class="review-thumb">
                                                        <img src="themes/webpage/assets/img/teacher/Mirko_Llamosa.jpg" alt="img">
                                                    </div>
                                                    <div class="content">
                                                        <div class="content-top">
                                                            <h4 class="name"><b>Mirko Llamosa</b></h4>
                                                        </div>
                                                        <p>
                                                            Mirko Llamosa es arquitecto, profesor e investigador. Socio fundador y director de 
                                                            proyectos en DesigniaLab, oficina enfocada en el desarrollo de proyectos en 
                                                            arquitectura, paisaje y territorio. Es Magíster en Arquitectura y Procesos 
                                                            Proyectuales (MAPP), graduado con honores por la Pontificia Universidad Católica 
                                                            del Perú (PUCP). Arquitecto por la Universidad Particular de Chiclayo, realizó una 
                                                            pasantía en la Facultad de Arquitectura y Urbanismo de la PUCP. Además, es Consultor 
                                                            en Innovación por la Universidad de Salamanca (España) y cuenta con estudios en 
                                                            Investigación por la USAT. 

                                                            Actualmente, se desempeña como profesor a tiempo completo en la Escuela de 
                                                            Arquitectura de la Universidad Peruana Unión, donde lidera el Proyecto de Fin de 
                                                            Carrera. Ha sido profesor invitado y conferencista en universidades de Perú y 
                                                            Latinoamérica, incluyendo Universidades en Cuenca (Ecuador), Monterrey (México), 
                                                            Chiclayo, Trujillo, Lima, Cusco, Juliaca, Arequipa, Moquegua y Tacna. 
                                                            En 2025, publicó el libro "Narrativas Territoriales", una recopilación de 10 
                                                            proyectos de fin de carrera que exploran la pertinencia del proyecto en relación 
                                                            con el territorio. Asimismo, el libro presenta reflexiones críticas y expone la 
                                                            estructura metodológica desarrollada durante el proceso. 

                                                            Ha obtenido diversos reconocimientos, entre los que destacan: Primer puesto en el 
                                                            concurso de arquitectura para el Nuevo Edificio Taller 5 de la Universidad Peruana 
                                                            Unión. Segundo puesto en el concurso de innovación pedagógica INNOVATEACH 2.0. 
                                                            Premio TIL Latinoamérica en la Bienal de Argentina 2015, clasificando entre los 10 
                                                            mejores proyectos latinoamericanos. Nominación al MCHAP Students (Mies Crown Hall 
                                                            Americas Prize) 2016 en el Illinois Institute of Technology con el Proyecto filtro 
                                                            conector. 
                                                            Su campo de interés se centra en el proyecto arquitectónico, la investigación 
                                                            proyectual, el territorio y paisaje (con especial atención al territorio andino), 
                                                            la representación compleja y la innovación pedagógica vinculada al diseño.
                                                        </p>
                                                    </div>
                                                </div>
                                                <div class="review-item">
                                                    <div class="review-thumb">
                                                        <img src="themes/webpage/assets/img/teacher/Jose_Soldevilla.jpg" alt="img">
                                                    </div>
                                                    <div class="content">
                                                        <div class="content-top">
                                                            <h4 class="name"><b>José Soldevilla Saavedra</b></h4>
                                                        </div>
                                                        <p>
                                                            Jose Soldevilla Saavedra es licenciado en Arquitectura por la Pontificia Universidad 
                                                            Católica del Perú (PUCP). Magíster en Urbanismo, con especialidad en transporte y 
                                                            movilidad, por la Escuela de Urbanismo de París. Además, es Magíster en Arquitectura 
                                                            y Proyecto Urbano por la Escuela Nacional Superior de Arquitectura de París La 
                                                            Villette.
                                                            Cuenta con amplia experiencia en planeamiento, gestión y proyectos urbanos, tanto 
                                                            en el sector público como privado, en el Perú y el extranjero. Fue subdirector de 
                                                            Planificación en la Autoridad de Transporte Urbano para Lima y Callao (ATU), y 
                                                            director de Accesibilidad y Movilidad en el Ministerio de Vivienda, Construcción 
                                                            y Saneamiento (MVCS).  Actualmente, es director de la Dirección de Integración de 
                                                            Transporte Urbano y Recaudo de la ATU.
                                                        </p>
                                                    </div>
                                                </div>
                                                <div class="review-item">
                                                    <div class="review-thumb">
                                                        <img src="themes/webpage/assets/img/teacher/Gonzalo_La_Hoz.jpg" alt="img">
                                                    </div>
                                                    <div class="content">
                                                        <div class="content-top">
                                                            <h4 class="name"><b>Gonzalo La Hoz</b></h4>
                                                        </div>
                                                        <p>
                                                            Gonzalo La Hoz es arquitecto por la Universidad Ricardo Palma (URP), donde fue distinguido 
                                                            con el premio a la mejor tesis de grado en 2016. Magíster en Urbanismo y Ciudad por la 
                                                            Universitat Oberta de Catalunya, España. Cofundador de la empresa VOLUMEN Arquitectura, 
                                                            junto con Jan Christian Jahnsen, y actualmente se especializa en el desarrollo de proyectos 
                                                            de retail comercial. Desde 2018 hasta la actualidad, se desempeña como docente de Taller 
                                                            en la Facultad de Arquitectura de la Universidad de Lima.
                                                        </p>
                                                    </div>
                                                </div>
                                                <div class="review-item">
                                                    <div class="review-thumb">
                                                        <img src="themes/webpage/assets/img/teacher/Gonzalo_La_Hoz.jpg" alt="img">
                                                    </div>
                                                    <div class="content">
                                                        <div class="content-top">
                                                            <h4 class="name"><b>Cesar Lee</b></h4>
                                                        </div>
                                                        <p>
                                                            Cesar Lee Polick es un arquitecto con 20 años de experiencia y un sin número de 
                                                            proyectos dentro de su portafolio. Colegiado en el colegio de arquitectos del Perú 
                                                            con el CAP 13394, miembro de la AEA (Asociación de Estudios de Arquitectura) desde el 
                                                            2017 y del DIP (Asociación de Diseñadores de Interiores del Perú) desde el 2023. 
                                                            Se graduó durante el 2005 en la facultad de Arquitectura y Urbanismo - Universidad 
                                                            Ricardo Palma. Fue socio fundador de KinzaStudio, empresa dedicada a la arquitectura 
                                                            comercial, donde trabajó desde el 2006 hasta el 2010. Desde ese año, Cesar, lidera 
                                                            el estudio Lee Arquitectos, el cual se especializa en arquitectura comercial, 
                                                            vivienda e interiores. Actualmente diseña en grandes ciudades como Rio de Janeiro, 
                                                            Sao Paulo, Brasilia, Buenos Aires y Dallas. 

                                                            Cuenta con varios reconocimientos, entre ellos, una mención Honrosa en la I Bienal 
                                                            Internacional de Arquitectura, Diseño y Paisajismo – Dripap - 2016 – 2017 en la 
                                                            categoría Bares y Restaurantes con el restaurante La Verdad de la Milanesa. 
                                                            Mención Honrosa en la II Bienal Internacional de Arquitectura, Diseño y Paisajismo – 
                                                            Dripap - 2017 – 2019 en la categoría Arquitectura de Interior con el bar Lyra. 
                                                            Nominado a Building of the Year Awards 2019 por Archdaily con el bar Lyra. 
                                                            Nominado a los German Design Awards 2022 con el bar Lyra Participación en los 
                                                            Restaurant & Bar Design Awards Londres 2020. Participación en Casacor 2006, 2007, 
                                                            2023 Y 2025. Participación en la primera edición de la CASA DID 2023 Actualmente es 
                                                            director de la AEA y miembro de la junta calificadora del DIP.
                                                        </p>
                                                    </div>
                                                </div>
                                                <div class="review-item">
                                                    <div class="review-thumb">
                                                        <img src="themes/webpage/assets/img/teacher/Alessandra_Calmell.jpg" alt="img">
                                                    </div>
                                                    <div class="content">
                                                        <div class="content-top">
                                                            <h4 class="name"><b>Alessandra Calmell Del Solar</b></h4>
                                                        </div>
                                                        <p>
                                                            Alessandra Calmell del Solar Monasí (Lima, 1984) es arquitecta titulada con mención 
                                                            sobresaliente por la Facultad de Arquitectura y Urbanismo de la Pontificia Universidad 
                                                            Católica del Perú. Recibió una beca para el Magíster de Paisaje y Territorio de la 
                                                            Universidad Diego Portales en Chile. Ha estudiado en el Istituto Universitario Di 
                                                            Architettura Di Venezia, École Polytechnique Fédérale De Lausanne y Georgetown 
                                                            University. Actualmente trabaja como arquitecta independiente en diseño y ejecución 
                                                            de proyectos y es docente auxiliar del Departamento de Arquitectura y la Maestría en 
                                                            Arquitectura y Procesos Proyectuales de la PUCP.
                                                        </p>
                                                    </div>
                                                </div>
                                                <div class="review-item">
                                                    <div class="review-thumb">
                                                        <img src="themes/webpage/assets/img/teacher/Carlos_Zeballos.jpg" alt="img">
                                                    </div>
                                                    <div class="content">
                                                        <div class="content-top">
                                                            <h4 class="name"><b>Carlos Zeballos</b></h4>
                                                        </div>
                                                        <p>
                                                            Carlos Zeballos Velarde cuenta con una destacada formación académica que incluye un PhD en Diseño Urbano y Paisaje por la Universidad de Kioto, Japón. Además, es Magíster en Planificación Urbano Ambiental por la Universidad Nacional de San Agustín (UNSA) de Arequipa y Magíster en Desarrollo Sustentable por la Universidad Nacional de Lanús, Argentina. Su trayectoria académica también incluye un Doctorado Honoris Causa por la Universidad Andina del Cuzco, Perú, y un Postdoctorado en el Instituto para la Investigación sobre la Humanidad y la Naturaleza (RIHN) de Kioto, Japón.

                                                            En su experiencia laboral, Carlos Zeballos Velarde ha ocupado cargos directivos y académicos de gran relevancia. Actualmente, se desempeña como Director Nacional de Asuntos Tecnológicos del Colegio de Arquitectos del Perú y como Director Mundial de la Comisión de Sostenibilidad de la Unión Internacional de Arquitectos (UIA). También ha sido Past Decano de la Facultad de Ingeniería y Computación de la Universidad Católica San Pablo y ha ejercido como docente investigador en la Universidad Nacional de San Agustín (UNSA). Además, ha sido Profesor Principal en la Universidad de Vladivostok, Rusia, y Profesor visitante en universidades de Colombia, México, Estados Unidos e Inglaterra.

                                                            Carlos Zeballos Velarde es autor y coautor de más de 40 artículos científicos publicados en revistas indexadas internacionales y de 10 libros, entre ellos el "Atlas Ambiental de Arequipa", premiado en la Bienal Nacional de Arquitectura de 2022. Ha sido premiado en congresos internacionales y nacionales por sus ponencias y contribuciones en investigación. También ha presentado muestras fotográficas individuales en Arequipa, Lima, Chiclayo y Tacna en Perú, así como en Vladivostok, Rusia, y Kioto, Japón. Ha ganado concursos de fotografía en el Colegio de Arquitectos del Perú, Región Arequipa.

                                                            Entre los reconocimientos que ha recibido Carlos Zeballos Velarde se destacan su certificación como investigador por el Consejo Nacional de Ciencia, Tecnología e Innovación Tecnológica (CONCYTEC) a través del Registro Nacional de Científicos y Tecnólogos (RENACYT). También ha sido premiado con el diploma de honor de Arequipa y por el Colegio de Arquitectos del Perú por sus aportes en investigación.
                                                        </p>
                                                    </div>
                                                </div>
                                                <div class="review-item">
                                                    <div class="review-thumb">
                                                        <img src="themes/webpage/assets/img/teacher/Rudy_Giese.jpg" alt="img">
                                                    </div>
                                                    <div class="content">
                                                        <div class="content-top">
                                                            <h4 class="name"><b>Rudy Giese</b></h4>
                                                        </div>
                                                        <p>
                                                            Licenciado y colegiado en Arquitectura, con maestrías en Docencia Universitaria y Gestión de la Educación y una segunda maestría en Diseño del Paisaje y Territorio. Director Creativo de boom Arquitectos, Docente universitario por más de 25 años, ex Decano fundador de la Facultad de Arquitectura y Diseño de UCAL, investigador asociado en Innovation Academy y director en SINERGIA plataforma educativa. Docente universitario desde hace más de 25 años, conferencista en múltiples eventos académicos a nivel nacional e internacional, speaker en temas de educación, creatividad, innovación y ciudad. Profesor visitante en diferentes universidades, jurado de la XVIII Bienal Nacional de Arquitectura y del premio Calidad Arquitectónica 2019, e Integrante del Consejo Científico de la revista Cuadernos de Arquitectura y Urbanismo, editada por la Pontificia Universidad Católica de Minas Gerais, Brasil. 

                                                            Ha ganado el primer puesto en la categoría Innovación Arquitectónica en la XIX Bienal Nacional de Arquitectura y el premio “Arquitectura para el desarrollo” de la Bienal Internacional de Arquitectura de Lima _ BIALIMA 2021 con el proyecto de la casa de la memoria viva de Nuevo amanecer, así como diferentes concursos nacionales de Arquitectura como el del Mercado Central de Ilo, en Moquegua, el concurso Construye para Crecer del Fondo Mi Vivienda en las ediciones 2015 y 2017, el concurso de Soluciones viales para la ciudad de Chiclayo en Lambayeque, entre otros. Cuenta con proyectos ejecutados en Venezuela, El Salvador, Costa Rica, Estados Unidos y Panamá. Formador incansable de mejores ciudadanos capaces de transformar nuestras ciudades en el lugar que soñamos para vivir.
                                                        </p>
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
                            <i class="fa-solid fa-tags"></i> "Certificado disponible por un costo adicional (opcional)."
                            <h4 class="price">
                                S/ 90.00 
                                {{-- <span>25% off</span> --}}
                            </h4>
                            <a href="" class="ed-primary-btn">
                                <i class="fab fa-whatsapp" aria-hidden="true" style="font-size: 18px;"></i>
                                &nbsp; Adquirir
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
        <!-- ./ course-section -->

        <x-footer />
        <!-- ./ footer-section -->

@stop