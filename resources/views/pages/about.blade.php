@extends('layouts.webpage')

@section('content')


        <!-- header-area-start -->
        <x-header/>
        <!-- /.Main Header -->

        <section class="page-header" style="padding: 60px;">
            <div class="bg-img">
                <img src="{{ asset('themes/webpage/assets/img/bg-img/page-header-bg.jpg') }}" alt="bg" style="width: 100%;">
            </div>
            <div class="container">
                <div class="page-header-content">
                    <h1 class="title">Sobre Nosotros</h1>
                    <h4 class="sub-title">
                        <a class="home" href="{{ route('index_main') }}">Home </a>
                        <span class="icon">/</span>
                        <a class="inner-page" href="{{ route('web_about') }}"> Nosotros</a>
                    </h4>
                </div>
            </div>
        </section>
        <!-- ./ page-header -->

        <section class="about-section pt-120 pb-120">
            <div class="container">
                <div class="row">
                    <div class="col-xl-4 col-lg-12">
                        <div class="about-img-wrap wow fade-in-left" data-wow-delay="400ms">
                            <img src="{{ asset('themes/webpage/assets/img/Julio_Flores.jpg') }}" alt="CEO">
                        </div>
                    </div>
                    <div class="col-xl-8 col-lg-12">
                        <div class="about-content">
                            <div class="section-heading mb-40">
                                <h4 class="sub-heading wow fade-in-bottom" data-wow-delay="200ms">
                                    <span class="heading-icon">
                                        {{-- <i class="fa-sharp fa-solid fa-bolt"></i> --}}
                                        <img src="{{ asset('themes/webpage/assets/img/favicon.png') }}" alt="icon" style="width: 15px;">
                                    </span>
                                    CEO & Fundador
                                </h4>
                                <h2 class="section-title wow fade-in-bottom" data-wow-delay="400ms">
                                    Arq. JULIO FLORES
                                </h2>
                                <p class="mt-20 wow fade-in-bottom" data-wow-delay="500ms">
                                    Arquitecto con mención sobresaliente, Julio Flores lidera nuestra organización con una sólida trayectoria académica y 
                                    profesional en el sector arquitectura, urbanismo y construcción. Es Magíster en Dirección de la Construcción por la 
                                    Universidad Peruana de Ciencias Aplicadas (UPC), institución donde también se especializó en BIM Management y Lean Construction, 
                                    herramientas clave para la gestión moderna de proyectos constructivos.
                                </p>
                                <p class="mt-20 wow fade-in-bottom" data-wow-delay="500ms">
                                    Su enfoque integral del desarrollo urbano se fortalece con estudios internacionales en Diseño del Paisaje en la Pontificia 
                                    Universidad Católica de Chile (UC), Proyección Urbanística en la Universitat Politècnica de Catalunya (España), 
                                    y Derecho Urbanístico en la Pontificia Universidad Católica del Perú (PUCP).
                                </p>
                                <p class="mt-20 wow fade-in-bottom" data-wow-delay="500ms">
                                    Gracias a su visión estratégica, capacidad de innovación y profundo conocimiento técnico, Julio ha impulsado proyectos de 
                                    alto impacto que integran eficiencia, sostenibilidad y calidad urbana. Su liderazgo inspira al equipo a trabajar con excelencia 
                                    y compromiso en cada etapa del desarrollo arquitectónico.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- ./ about-section -->

        <section class="about-feature pt-120 pb-120">
            <div class="container">
                <div class="section-heading text-center">
                    <h4 class="sub-heading wow fade-in-bottom" data-wow-delay="200ms">
                        <span class="heading-icon">
                            {{-- <i class="fa-sharp fa-solid fa-bolt"></i> --}}
                            <img src="{{ asset('themes/webpage/assets/img/favicon.png') }}" alt="icon" style="width: 15px;">
                        </span>
                        Nuestra Esencia y Visión
                    </h4>
                    <h2 class="section-title wow fade-in-bottom" data-wow-delay="400ms">
                        Quiénes Somos y Qué Nos Mueve
                    </h2>
                </div>
                <div class="row gy-lg-0 gy-5">
                    <div class="col-lg-4 col-md-6">
                        <div class="about-feature-card">
                            <div class="icon"><img src="themes/webpage/assets/img/icon/about-feature-1.png" alt="icon"></div>
                            <div class="content">
                                <h3 class="title">1. Quiénes somos y cómo trabajamos</h3>
                                <p>
                                    <b>Estudio Horizonte</b> es una oficina de diseño, arquitectura, paisaje y territorio que proyecta la ciudad y el territorio a partir 
                                    de la colaboración interdisciplinaria, la participación ciudadana y una comprensión estratégica de las dinámicas sociales, 
                                    infraestructurales y ecológicas. Somos un espacio de encuentro y conversación para explorar, conectar y co-crear en torno al diseño. 
                                    Nuestra aproximación integral combina conocimientos y metodologías sociales, ambientales y técnicas para asegurar la alta calidad en cada uno de nuestros proyectos.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="about-feature-card">
                            <div class="icon"><img src="themes/webpage/assets/img/icon/about-feature-1.png" alt="icon"></div>
                            <div class="content">
                                <h3 class="title">2. Enfoque, especialidad e impacto</h3>
                                <p>
                                    <b>Nuestro enfoque</b> trasciende la creación de espacios físicos: buscamos transformar relaciones, construir confianza, fortalecer la cultura, 
                                    impulsar la innovación y reconectar con la naturaleza. Nos especializamos en arquitectura, proyectos urbanos resilientes, 
                                    mejoramiento de barrios vulnerables e infraestructura sostenible, aplicando una metodología multiescalar e interdisciplinaria que 
                                    ha permitido implementar programas y proyectos en distintas ciudades del Perú y la región.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="about-feature-card">
                            <div class="icon"><img src="themes/webpage/assets/img/icon/about-feature-1.png" alt="icon"></div>
                            <div class="content">
                                <h3 class="title">3. Colaboraciones, reconocimiento y propósito</h3>
                                <p>
                                    <b>Trabajamos junto</b> a entidades públicas, privadas, multilaterales y universidades.
                                    Dirigido por el arquitecto Julio Flores, Estudio Horizonte integra práctica, docencia e investigación para innovar en la vida urbana.
                                    Compartimos conocimiento y fortalecemos el rol del arquitecto en la transformación de las ciudades.
                                    Nuestro propósito: crear espacios sostenibles que fomenten la interacción, el bienestar y una visión renovada del territorio.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- ./ about-feature -->

        {{-- <section class="counter-section">
            <div class="container">
                <div class="row counter-wrap gy-lg-0 gy-5">
                    <div class="col-lg-3 col-md-6">
                        <div class="counter-item item-1 white-content">
                            <h3 class="title"><span class="odometer" data-count="3,192">0</span>+</h3>
                            <p>Successflly Trained</p>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="counter-item white-content">
                            <h3 class="title"><span class="odometer" data-count="15,485">0</span>+</h3>
                            <p>Classes Completed</p>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="counter-item white-content">
                            <h3 class="title"><span class="odometer" data-count="97.55">0</span>%</h3>
                            <p>Satisfaction Rate</p>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="counter-item item-4 white-content">
                            <h3 class="title"><span class="odometer" data-count="97.55">0</span>%</h3>
                            <p>Satisfaction Rate</p>
                        </div>
                    </div>
                </div>
            </div>
        </section> --}}
        <!-- ./ counter-section -->

        {{-- <section class="team-section pt-120 pb-120">
            <div class="container">
                <div class="section-heading text-center">
                    <h4 class="sub-heading wow fade-in-bottom" data-wow-delay="200ms"><span class="heading-icon"><i class="fa-sharp fa-solid fa-bolt"></i></span>Our Instructors</h4>
                    <h2 class="section-title wow fade-in-bottom" data-wow-delay="400ms">Meet Our Expert Instructor</h2>
                </div>
                <div class="row gy-lg-0 gy-4">
                    <div class="col-lg-3 col-md-6">
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
                    <div class="col-lg-3 col-md-6">
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
                    <div class="col-lg-3 col-md-6">
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
                    <div class="col-lg-3 col-md-6">
                        <div class="team-item-3 team-item-5">
                            <div class="team-thumb">
                                <div class="shape"><img src="themes/webpage/assets/img/shapes/team-shape-3.png" alt="team"></div>
                                <div class="team-men">
                                    <img src="themes/webpage/assets/img/team/team-men-4.png" alt="team">
                                </div>
                            </div>
                            <div class="team-content">
                                <h3 class="title"><a href="team-details.html">Madison Chloe</a></h3>
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
        </section> --}}
        <!-- ./ team-section --> 

        <section class="testimonial-section-3 pt-120 pb-120">
            <div class="shapes">
                <div class="shape shape-1"><img src="themes/webpage/assets/img/shapes/testi-shape-3.png" alt="shape"></div>
                <div class="shape shape-2"><img src="themes/webpage/assets/img/shapes/testi-shape-4.png" alt="shape"></div>
            </div>
            <div class="container">
                <div class="row gy-xl-0 gy-5 align-items-center">
                    <div class="col-xl-5 col-lg-12">
                        <div class="testi-left-content white-content">
                            <div class="section-heading mb-20 white-content">
                                <h4 class="sub-heading wow fade-in-bottom" data-wow-delay="200ms">
                                    <span class="heading-icon">
                                        {{-- <i class="fa-sharp fa-solid fa-bolt"></i> --}}
                                        <img src="{{ asset('themes/webpage/assets/img/favicon.png') }}" alt="icon" style="width: 15px;">
                                    </span>
                                    Testimonios
                                </h4>
                                <h2 class="section-title wow fade-in-bottom" data-wow-delay="400ms">
                                    Transformando vidas a través de la educación
                                </h2>
                            </div>
                            <p class="mb-0 wow fade-in-bottom" data-wow-delay="500ms">
                                Cada historia refleja el impacto real de nuestra propuesta educativa. Descubre cómo <b>Estudio Horizonte</b> ha sido parte del crecimiento personal y profesional de nuestros estudiantes.
                            </p>
                        </div>
                    </div>
                    <div class="col-xl-7 col-lg-12">
                        <div class="testi-carousel-wrap-2">
                            <div class="testi-carousel-2 swiper">
                                <div class="swiper-wrapper">
                                    <div class="swiper-slide">
                                        <div class="testi-item-3">
                                            {{-- <h3 class="title">Interactive Learning Experience</h3> --}}
                                            <p>
                                                “ESTUDIO HORIZONTE ha sido fundamental en mi crecimiento profesional. Sus capacitaciones de 
                                                arquitectura y urbanismo han sido dinámicos, innovadores y sobre todo, aplicables a la vida real. 
                                                Me siento afortunado de haber podido aprender de los docentes, muchos de ellos reconocidos profesores 
                                                en universidades prestigiosas como la PUCP, UPC, UNI y ULima.”
                                            </p>
                                            <div class="testi-author">
                                                <div class="testi-author-img">
                                                    <img src="{{ asset('themes/webpage/assets/img/testimonial/Noemi_Aguilar.jpg') }}" alt="testi">
                                                </div>
                                                <h4 class="name">
                                                    Arq. Noemi Aguilar Blas <br>
                                                    <span>Trujillo - Perú</span>
                                                </h4>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="testi-item-3">
                                            {{-- <h3 class="title">Interactive Learning Experience</h3> --}}
                                            <p>
                                                “La capacitación que recibí en ESTUDIO HORIZONTE sobre paisaje y territorio fue clave para 
                                                desarrollar mi proyecto de fin de carrera. La pasión y dedicación de los instructores se nota en cada 
                                                clase. ¡Totalmente recomendado!"
                                            </p>
                                            <div class="testi-author">
                                                <div class="testi-author-img">
                                                    <img src="{{ asset('themes/webpage/assets/img/testimonial/Juan_Atencia.jpg') }}" alt="testi">
                                                </div>
                                                <h4 class="name">
                                                    Arq. Juan Atencia Alvis <br>
                                                    <span>Bogotá - Colombia</span>
                                                </h4>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="testi-item-3">
                                            {{-- <h3 class="title">Interactive Learning Experience</h3> --}}
                                            <p>
                                                "ESTUDIO HORIZONTE no solo te brinda conocimientos técnicos de alta calidad, sino que 
                                                también te inspira a pensar de manera creativa y a cuestionar lo establecido. Ha sido una 
                                                experiencia transformadora para mi carrera y mi perspectiva sobre el diseño y 
                                                la arquitectura."
                                            </p>
                                            <div class="testi-author">
                                                <div class="testi-author-img">
                                                    <img src="{{ asset('themes/webpage/assets/img/testimonial/Hatzumi.jpg') }}" alt="testi">
                                                </div>
                                                <h4 class="name">
                                                    Arq. Hatsumi Cruz Esquivel <br>
                                                    <span>Chimbote - Perú</span>
                                                </h4>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-arrow">
                                <div class="swiper-nav swiper-next"><i class="fa fa-arrow-left"></i></div>
                                <div class="swiper-nav swiper-prev"><i class="fa fa-arrow-right"></i></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- ./ testimonial-section --> 
        
        <section class="video-feature-section pt-120 pb-120">
            <div class="container">
                <div class="section-heading text-center">
                    <h4 class="sub-heading wow fade-in-bottom" data-wow-delay="200ms">
                        <span class="heading-icon">
                            {{-- <i class="fa-sharp fa-solid fa-bolt"></i> --}}
                            <img src="{{ asset('themes/webpage/assets/img/favicon.png') }}" alt="icon" style="width: 15px;">
                        </span>
                        Formación Continua
                    </h4>
                    <h2 class="section-title wow fade-in-bottom" data-wow-delay="400ms">
                        Contenidos formativos diseñados para aprender de forma práctica y dinámica
                    </h2>
                </div>
                <div class="row gy-md-0 gy-4">
                    <div class="col-md-6">
                        <div class="video-feature text-center">
                            <div class="video-thumb">
                                <iframe width="100%" height="350" src="https://www.youtube.com/embed/132pYn0EnQQ" title="Sesión 1 - Julio Calderón Cockburn + Carmen Omonte Miraval + Mariano Quiroga Robles - II SINACT" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                                {{-- <img src="themes/webpage/assets/img/images/video-img-1.png" alt="video">
                                <div class="video-btn">
                                    <a class="video-popup venobox" data-autoplay="true" data-vbtype="video" href="https://youtu.be/JwC-Qx1lJso?feature=shared">
                                        <div class="play-btn">
                                            <i class="fa-sharp fa-solid fa-play"></i>
                                        </div>
                                        <div class="ripple"></div>
                                    </a>
                                </div> --}}
                            </div>
                            <div class="video-content">
                                {{-- <h3 class="title">Sesión 1 - Julio Calderón Cockburn + Carmen Omonte Miraval + Mariano Quiroga Robles - II SINACT</h3> --}}
                                {{-- <p>Appropriately recaptiualize cooperative catalysts change through <br> prospective leadership nvisioneer goal-oriented</p> --}}
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="video-feature text-center">
                            <div class="video-thumb">
                                <iframe width="100%" height="350" src="https://www.youtube.com/embed/vCrPeqIioQ4" title="Sesión 3: Federico Napoli + Simone Censi - II SINACT" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                                {{-- <img src="themes/webpage/assets/img/images/video-img-2.png" alt="video">
                                <div class="video-btn">
                                    <a class="video-popup venobox" data-autoplay="true" data-vbtype="video" href="https://youtu.be/JwC-Qx1lJso?feature=shared">
                                        <div class="play-btn">
                                            <i class="fa-sharp fa-solid fa-play"></i>
                                        </div>
                                        <div class="ripple"></div>
                                    </a>
                                </div> --}}
                            </div>
                            <div class="video-content">
                                {{-- <h3 class="title">Sesión 3: Federico Napoli + Simone Censi - II SINACT</h3> --}}
                                {{-- <p>Appropriately recaptiualize cooperative catalysts change through <br> prospective leadership nvisioneer goal-oriented</p> --}}
                            </div>
                        </div>
                    </div>
                </div>
                <div class="cat-btn text-center mt-40 wow fade-in-bottom" data-wow-delay="500ms">
                    <a target="_blank" href="https://www.youtube.com/@estudiohorizonte" class="ed-primary-btn">Ver más contenido</a>
                </div>
            </div>
        </section>
        <!-- ./ video-section -->

        <x-footer />
        <!-- ./ footer-section -->

@stop