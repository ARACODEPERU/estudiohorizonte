<div>
    <section class="video-section pt-120 pb-120">
            <div class="round-shape"></div>
            <div class="container">
                <div class="section-heading text-center">
                    <h4 class="sub-heading wow fade-in-bottom" data-wow-delay="200ms">
                        <span class="heading-icon">
                            {{-- <i class="fa-sharp fa-solid fa-bolt"></i> --}}
                            <img src="{{ asset('themes/webpage/assets/img/favicon.png') }}" alt="icon" style="width: 15px;">
                        </span>
                        {{ $videofree[0]->content }}
                    </h4>
                    <h2 class="section-title wow fade-in-bottom" data-wow-delay="400ms">
                        {{ $videofree[1]->content }}
                    </h2>
                </div>
                <div class="video-wrap wow fade-in-bottom" data-wow-delay="500ms" style="margin-top: -20px;">
                    <div class="shapes">
                        <div class="shape-1"></div>
                    </div>
                    <div class="video-img">
                        {!! $videofree[2]->content !!}
                    </div>
                    {{-- <div class="video-items">
                        <div class="video-item">
                            <div class="icon"><img src="themes/webpage/assets/img/new-update/icon/video-icon-1.png" alt="video"></div>
                            <h4 class="title">Audio Classes</h4>
                        </div>
                        <div class="video-item">
                            <div class="icon"><img src="themes/webpage/assets/img/new-update/icon/video-icon-2.png" alt="video"></div>
                            <h4 class="title">Audio Recording</h4>
                        </div>
                        <div class="video-item">
                            <div class="icon"><img src="themes/webpage/assets/img/new-update/icon/video-icon-3.png" alt="video"></div>
                            <h4 class="title">Recorded Classes</h4>
                        </div>
                        <div class="video-item">
                            <div class="icon"><img src="themes/webpage/assets/img/new-update/icon/video-icon-4.png" alt="video"></div>
                            <h4 class="title">Support Available</h4>
                        </div>
                    </div> --}}
                </div>
            </div>
    </section>
</div>