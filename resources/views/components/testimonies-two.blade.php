<div>
    <section class="testimonial-section-3 pt-120 pb-120">
        <div class="shapes">
            <div class="shape shape-1"><img src="{{ asset('themes/webpage/assets/img/shapes/testi-shape-3.png') }}" alt="shape"></div>
            <div class="shape shape-2"><img src="{{ asset('themes/webpage/assets/img/shapes/testi-shape-4.png') }}" alt="shape"></div>
        </div>
        <div class="container">
            <div class="row gy-xl-0 gy-5 align-items-center">
                <div class="col-xl-5 col-lg-12">
                    <div class="testi-left-content white-content">
                        <div class="section-heading mb-20 white-content">
                            <h4 class="sub-heading wow fade-in-bottom" data-wow-delay="200ms">
                                <span class="heading-icon">
                                    {{-- <i class="fa-sharp fa-solid fa-bolt"></i> --}}
                                    <img src="{{ asset('themes/webpage/assets/img/favicon.png') }}" alt="icon"
                                        style="width: 15px;">
                                </span>
                                {{ $tesheader[0]->content }}
                            </h4>
                            <h2 class="section-title wow fade-in-bottom" data-wow-delay="400ms">
                                {{ $tesheader[1]->content }}
                            </h2>
                        </div>
                        <p class="mb-0 wow fade-in-bottom" data-wow-delay="500ms">
                            {{ $tesheader[2]->content }}
                        </p>
                    </div>
                </div>
                <div class="col-xl-7 col-lg-12">
                    <div class="testi-carousel-wrap-2">
                        <div class="testi-carousel-2 swiper">
                            <div class="swiper-wrapper">
                                @foreach ($tesbody as $k => $tesbo)
                                <div class="swiper-slide">
                                    <div class="testi-item-3">
                                        <p>
                                            {{ $tesbo->item->items[3]->content }}
                                        </p>
                                        <div class="testi-author">
                                            <div class="testi-author-img">
                                                <img src="{{ asset('storage/'.$tesbo->item->items[0]->content) }}"
                                                    alt="testi">
                                            </div>
                                            <h4 class="name">
                                                {{ $tesbo->item->items[1]->content }} <br>
                                                <span>{{ $tesbo->item->items[2]->content }}</span>
                                            </h4>
                                        </div>
                                    </div>
                                </div>
                                @endforeach
                                {{-- <div class="swiper-slide">
                                    <div class="testi-item-3">
                                        <p>
                                            “ESTUDIO HORIZONTE ha sido fundamental en mi crecimiento profesional. Sus
                                            capacitaciones de
                                            arquitectura y urbanismo han sido dinámicos, innovadores y sobre todo,
                                            aplicables a la vida real.
                                            Me siento afortunado de haber podido aprender de los docentes, muchos de
                                            ellos reconocidos profesores
                                            en universidades prestigiosas como la PUCP, UPC, UNI y ULima.”
                                        </p>
                                        <div class="testi-author">
                                            <div class="testi-author-img">
                                                <img src="{{ asset('themes/webpage/assets/img/testimonial/Noemi_Aguilar.jpg') }}"
                                                    alt="testi">
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
                                        <p>
                                            “La capacitación que recibí en ESTUDIO HORIZONTE sobre paisaje y territorio
                                            fue clave para
                                            desarrollar mi proyecto de fin de carrera. La pasión y dedicación de los
                                            instructores se nota en cada
                                            clase. ¡Totalmente recomendado!"
                                        </p>
                                        <div class="testi-author">
                                            <div class="testi-author-img">
                                                <img src="{{ asset('themes/webpage/assets/img/testimonial/Juan_Atencia.jpg') }}"
                                                    alt="testi">
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
                                        <p>
                                            "ESTUDIO HORIZONTE no solo te brinda conocimientos técnicos de alta calidad,
                                            sino que
                                            también te inspira a pensar de manera creativa y a cuestionar lo
                                            establecido. Ha sido una
                                            experiencia transformadora para mi carrera y mi perspectiva sobre el diseño
                                            y
                                            la arquitectura."
                                        </p>
                                        <div class="testi-author">
                                            <div class="testi-author-img">
                                                <img src="{{ asset('themes/webpage/assets/img/testimonial/Hatzumi.jpg') }}"
                                                    alt="testi">
                                            </div>
                                            <h4 class="name">
                                                Arq. Hatsumi Cruz Esquivel <br>
                                                <span>Chimbote - Perú</span>
                                            </h4>
                                        </div>
                                    </div>
                                </div> --}}
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
</div>
