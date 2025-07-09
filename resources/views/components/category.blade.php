<div>
    <section class="category-section pt-80 pb-120">
        <div class="container">
            <div class="row">
                <div class="col-md-2"></div>
                <div class="col-md-8">
                    <div class="section-heading text-center">
                        <h4 class="sub-heading wow fade-in-bottom" data-wow-delay="200ms">
                            <span class="heading-icon">
                                {{-- <i class="fa-sharp fa-solid fa-bolt"></i> --}}
                                <img src="{{ asset('themes/webpage/assets/img/favicon.png') }}" alt="icon"
                                    style="width: 15px;">
                            </span>
                            {{ $catheader[0]->content }}
                        </h4>
                        <h2 class="section-title wow fade-in-bottom" data-wow-delay="400ms">
                            {{ $catheader[1]->content }}
                        </h2>
                    </div>
                </div>
                <div class="col-md-2"></div>
            </div>
            <div class="row gy-xl-0 gy-4 justify-content-center wow fade-in-bottom" data-wow-delay="500ms">
                <div class="col-xl-2 col-lg-3 col-md-4">
                    <div class="cat-item text-center">
                        <div class="shape">
                            <img
                                src="{{ asset('themes/webpage/assets/img/new-update/shapes/category-shape-1.png') }}"
                                alt="shape">
                        </div>
                        <div class="icon">
                            <img src="{{ asset('storage/'.$catbody[0]->content) }}"
                                alt="icon">
                        </div>
                        <h3 class="title">{{ $catbody[1]->content }}</h3>
                        {{-- <span>15 Courses</span> --}}
                    </div>
                </div>
                <div class="col-xl-2 col-lg-3 col-md-4">
                    <div class="cat-item text-center">
                        <div class="shape">
                            <img
                                src="{{ asset('themes/webpage/assets/img/new-update/shapes/category-shape-1.png') }}"
                                alt="shape">
                        </div>
                        <div class="icon">
                            <img src="{{ asset('storage/'.$catbody[2]->content) }}"
                                alt="icon">
                        </div>
                        <h3 class="title">{{ $catbody[3]->content }}</h3>
                        {{-- <span>15 Courses</span> --}}
                    </div>
                </div>
                <div class="col-xl-2 col-lg-3 col-md-4">
                    <div class="cat-item text-center">
                        <div class="shape">
                            <img
                                src="{{ asset('themes/webpage/assets/img/new-update/shapes/category-shape-1.png') }}"
                                alt="shape">
                        </div>
                        <div class="icon">
                            <img src="{{ asset('storage/'.$catbody[4]->content) }}"
                                alt="icon">
                        </div>
                        <h3 class="title">{{ $catbody[5]->content }}</h3>
                        {{-- <span>15 Courses</span> --}}
                    </div>
                </div>
                <div class="col-xl-2 col-lg-3 col-md-4">
                    <div class="cat-item text-center">
                        <div class="shape">
                            <img
                                src="{{ asset('themes/webpage/assets/img/new-update/shapes/category-shape-1.png') }}"
                                alt="shape">
                        </div>
                        <div class="icon">
                            <img src="{{ asset('storage/'.$catbody[6]->content) }}"
                                alt="icon">
                        </div>
                        <h3 class="title">{{ $catbody[7]->content }}</h3>
                        {{-- <span>15 Courses</span> --}}
                    </div>
                </div>
                <div class="col-xl-2 col-lg-3 col-md-4">
                    <div class="cat-item text-center">
                        <div class="shape">
                            <img
                                src="{{ asset('themes/webpage/assets/img/new-update/shapes/category-shape-1.png') }}"
                                alt="shape">
                        </div>
                        <div class="icon">
                            <img src="{{ asset('storage/'.$catbody[8]->content) }}"
                                alt="icon">
                        </div>
                        <h3 class="title">{{ $catbody[9]->content }}</h3>
                        {{-- <span>15 Courses</span> --}}
                    </div>
                </div>
                <div class="col-xl-2 col-lg-3 col-md-4">
                    <div class="cat-item text-center">
                        <div class="shape">
                            <img
                                src="{{ asset('themes/webpage/assets/img/new-update/shapes/category-shape-1.png') }}"
                                alt="shape">
                        </div>
                        <div class="icon">
                            <img src="{{ asset('storage/'.$catbody[10]->content) }}"
                                alt="icon">
                        </div>
                        <h3 class="title">{{ $catbody[11]->content }}</h3>
                        {{-- <span>15 Courses</span> --}}
                    </div>
                </div>
            </div>
            <div class="cat-btn text-center mt-40 wow fade-in-bottom" data-wow-delay="500ms">
                <a href="{{ route('web_courses') }}" class="ed-primary-btn">Formación Continua</a>
            </div>
        </div>
    </section>
</div>
