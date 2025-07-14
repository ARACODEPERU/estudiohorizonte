<div>
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
                                        <img src="{{ asset('storage/'.$ceo[0]->content) }}" alt="icon" style="width: 15px;">
                                    </span>
                                    {{ $ceo[1]->content }}
                                </h4>
                                <h2 class="section-title wow fade-in-bottom" data-wow-delay="400ms">
                                    {{ $ceo[2]->content }}
                                </h2>
                                <p class="mt-20 wow fade-in-bottom" data-wow-delay="500ms">
                                    {{ $ceo[3]->content }}
                                </p>
                                <p class="mt-20 wow fade-in-bottom" data-wow-delay="500ms">
                                    {{ $ceo[4]->content }}
                                </p>
                                <p class="mt-20 wow fade-in-bottom" data-wow-delay="500ms">
                                    {{ $ceo[5]->content }}
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
</div>