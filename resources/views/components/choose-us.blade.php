<div>
    <section class="choose-us pt-120 pb-120">
            <div class="bg-shape" data-background="themes/webpage/assets/img/new-update/shapes/choose-us-bg.png"></div>
            <div class="container">
                <div class="section-heading text-center">
                    <h4 class="sub-heading wow fade-in-bottom" data-wow-delay="200ms">
                        <span class="heading-icon">
                            {{-- <i class="fa-sharp fa-solid fa-bolt"></i> --}}
                            <img src="{{ asset('themes/webpage/assets/img/favicon.png') }}" alt="icon" style="width: 15px;">
                        </span>
                        {{ $reasons[0]->content }}
                    </h4>
                    <h2 class="section-title wow fade-in-bottom" data-wow-delay="400ms">
                        {{ $reasons[1]->content }}
                    </h2>
                </div>
                <div class="row choose-us-wrap gy-lg-0 gy-4 justify-content-center">
                    <div class="line"></div>
                    <div class="col-lg-4 col-md-6">
                        <div class="choose-use-item">
                            <div class="line-shape">
                                <span class="top-round"></span>
                                <span class="bottom-round"></span>
                            </div>
                            <div class="icon"><i class="fa-solid fa-circle-check"></i></div>
                            <div class="content">
                                <h4 class="title">{{ $reasons[2]->content }}</h4>
                                <p class="mb-0">
                                    {{ $reasons[3]->content }}
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="choose-use-item item-2">
                            <div class="line-shape">
                                <span class="top-round"></span>
                                <span class="bottom-round"></span>
                            </div>
                            <div class="icon"><i class="fa-solid fa-circle-check"></i></div>
                            <div class="content">
                                <h4 class="title">{{ $reasons[4]->content }}</h4>
                                <p class="mb-0">
                                    {{ $reasons[5]->content }}
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="choose-use-item">
                            <div class="line-shape">
                                <span class="top-round"></span>
                                <span class="bottom-round"></span>
                            </div>
                            <div class="icon"><i class="fa-solid fa-circle-check"></i></div>
                            <div class="content">
                                <h4 class="title">{{ $reasons[6]->content }}</h4>
                                <p class="mb-0">
                                    {{ $reasons[7]->content }}
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    </section>
</div>