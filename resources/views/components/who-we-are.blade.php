<div>
    <section class="about-feature pt-120 pb-120">
            <div class="container">
                <div class="section-heading text-center">
                    <h4 class="sub-heading wow fade-in-bottom" data-wow-delay="200ms">
                        <span class="heading-icon">
                            {{-- <i class="fa-sharp fa-solid fa-bolt"></i> --}}
                            <img src="{{ asset('themes/webpage/assets/img/favicon.png') }}" alt="icon" style="width: 15px;">
                        </span>
                        {{ $who[0]->content }}
                    </h4>
                    <h2 class="section-title wow fade-in-bottom" data-wow-delay="400ms">
                        {{ $who[1]->content }}
                    </h2>
                </div>
                <div class="row gy-lg-0 gy-5">
                    <div class="col-lg-4 col-md-6">
                        <div class="about-feature-card">
                            <div class="icon"><img src="{{ asset('storage/'.$who[2]->content) }}" alt="icon"></div>
                            <div class="content">
                                <h3 class="title">{{ $who[3]->content }}</h3>
                                <p>
                                    {{ $who[4]->content }}
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="about-feature-card">
                            <div class="icon"><img src="{{ asset('storage/'.$who[5]->content) }}" alt="icon"></div>
                            <div class="content">
                                <h3 class="title">{{ $who[6]->content }}</h3>
                                <p>
                                    {{ $who[7]->content }}
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="about-feature-card">
                            <div class="icon"><img src="{{ asset('storage/'.$who[8]->content) }}" alt="icon"></div>
                            <div class="content">
                                <h3 class="title">{{ $who[9]->content }}</h3>
                                <p>
                                    {{ $who[10]->content }}
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
</div>