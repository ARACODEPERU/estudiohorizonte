<div>
    <footer class="footer-section pt-120" 
            {{-- data-background="{{ asset('themes/webpage/assets/img/bg-img/footer-bg.jpg') }}" --}}
            style="background: #000000; background: linear-gradient(0deg,rgba(0, 0, 0, 1) 0%, rgba(4, 18, 19, 1) 35%, rgba(31, 68, 74, 1) 100%);">
            <div class="footer-top-wrap">
                <div class="container">
                    {{-- <div class="footer-top text-center">
                        <h2 class="title">Subscribe Our Newsletter For <br>Latest Updates</h2>
                        <div class="footer-form-wrap">
                            <form action="mail.php" class="footer-form">
                                <div class="form-item">
                                    <input type="text" id="email-2" name="email" class="form-control" placeholder="Enter Your E-mail">
                                </div>
                                <button class="ed-primary-btn">sign up</button>
                            </form>
                        </div>
                    </div> --}}
                    <div class="row footer-wrap">
                        <div class="col-lg-3 col-md-6">
                            <div class="footer-widget">
                                <h3 class="widget-header">¡Póngase en contacto con nosotros!</h3>
                                <p class="mb-30">{{ $footer[0]->content }}</p>
                                <div class="footer-contact">
                                    <span class="number"><i class="fa fa-phone"></i>
                                        <a href="">{{ $footer[1]->content }}</a>
                                    </span>
                                    <a href="mailto:{{ $footer[2]->content }}" class="mail">{{ $footer[2]->content }}</a>
                                </div>
                                <ul class="footer-social">
                                    <li><a href="{{ $footer[3]->content }}"><i class="fab fa-facebook-f"></i></a></li>
                                    <li><a href="{{ $footer[4]->content }}"><i class="fab fa-instagram"></i></a></li>
                                    <li><a href="{{ $footer[5]->content }}"><i class="fab fa-youtube"></i></a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6">
                            <div class="footer-widget widget-2">
                                <h3 class="widget-header">Navegar</h3>
                                <ul class="footer-list">
                                    <li><a href="{{ route('index_main') }}">Home</a></li>
                                    <li><a href="{{ route('web_about') }}">Nosotros</a></li>
                                    <li><a href="{{ route('web_courses') }}">Formación Continua</a></li>
                                    <li><a href="{{ route('web_contact_us') }}">Contacto</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6">
                            <div class="footer-widget widget-2">
                                <h3 class="widget-header">Legal</h3>
                                <ul class="footer-list">
                                    <li><a href="">Calidad</a></li>
                                    <li><a href="{{ route('web_privacy_policies') }}">Privacidad</a></li>
                                    <li><a href="{{ route('web_complaints') }}">Libro de reclamaciones</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6">
                            <div class="footer-widget">
                                <h3 class="widget-header">Últimos Cursos</h3>
                                <div class="sidebar-post mb-20">
                                    <img src="{{ asset('themes/webpage/assets/img/courses/course_01.jpg') }}" alt="post" style="width: 100%; height: auto;">
                                    <div class="post-content">
                                        <h3 class="title">
                                            <a href="{{ route('web_courses') }}">𝐈𝐈 𝐅𝐨𝐫𝐨 𝐈𝐧𝐭𝐞𝐫𝐧𝐚𝐜𝐢𝐨𝐧𝐚𝐥 𝐝𝐞 𝐀𝐫𝐪𝐮𝐢𝐭𝐞𝐜𝐭𝐮𝐫𝐚 𝐲 𝐔𝐫𝐛𝐚𝐧𝐢𝐬𝐦𝐨 "𝐒𝐞𝐧𝐭𝐢𝐫 𝐥𝐚 𝐀𝐫𝐪𝐮𝐢𝐭𝐞𝐜𝐭𝐮𝐫𝐚"</a>
                                        </h3>
                                        <ul class="post-meta">
                                            <li><i class="fa fa-calendar"></i>Foro</li>
                                        </ul>
                                    </div>
                                </div>
                                {{-- <div class="sidebar-post">
                                    <img src="themes/webpage/assets/img/images/footer-post-2.png" alt="post">
                                    <div class="post-content">
                                        <h3 class="title"><a href="#">Título del curso</a></h3>
                                        <ul class="post-meta">
                                            <li><i class="fa fa-calendar"></i>20 April, 2025</li>
                                        </ul>
                                    </div>
                                </div> --}}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="copyright-area">
                <div class="container">
                    <div class="copyright-content">
                        <p>
                            Copyright © 2025 - Todos Los Derechos Reservados a <b>Estudio Horizonte</b>.
                            | Desarrollado por <b><a href="">Aracode Smart Solutions</a></b>
                        </p>
                    </div>
                </div>
            </div>
    </footer>
</div>