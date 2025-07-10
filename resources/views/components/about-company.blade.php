<div>
    <section class="about-section-8 pt-120 pb-120 overflow-hidden">
            <div class="bg-round-shape"></div>
            <div class="container">
                <div class="row about-wrap-8">
                    <div class="col-lg-7">
                        <div class="about-img-wrap-8">
                            <div class="about-img-1"><img src="{{ asset('storage/'.$aboimagen[0]->content) }}" alt="about"></div>
                            <div class="about-img-2"><img src="{{ asset('storage/'.$aboimagen[1]->content) }}" alt="about"></div>
                            <div class="round-shape"></div>
                        </div>
                    </div>
                    <div class="about-content-8">
                        <div class="section-heading mb-30">
                            <h4 class="sub-heading wow fade-in-bottom" data-wow-delay="200ms">
                                <span class="heading-icon">
                                    {{-- <i class="fa-sharp fa-solid fa-bolt"></i> --}}
                                    <img src="{{ asset('themes/webpage/assets/img/favicon.png') }}" alt="icon" style="width: 15px;">
                                </span>
                                {{ $aboheader[0]->content }}
                            </h4>
                            <h2 class="section-title wow fade-in-bottom" data-wow-delay="400ms">
                                {{-- Arquitectura con <span>propósito</span>: descubre nuestra esencia --}}
                                {{ $aboheader[1]->content }}
                            </h2>
                        </div>
                        <div class="about-tab">
                            <ul class="nav nav-tabs" id="myTab" role="tablist">
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link active" id="about-content-tab-1" data-bs-toggle="tab"
                                            data-bs-target="#about-tab-1" type="button" role="tab" aria-controls="home"
                                            aria-selected="true">{{ $abobody[0]->content }}
                                    </button>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link" id="about-content-tab-2" data-bs-toggle="tab"
                                            data-bs-target="#about-tab-2" type="button" role="tab"
                                            aria-controls="profile" aria-selected="false">{{ $abobody[2]->content }}
                                    </button>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link" id="about-content-tab-3" data-bs-toggle="tab"
                                            data-bs-target="#about-tab-3" type="button" role="tab" aria-controls="contact"
                                            aria-selected="false">{{ $abobody[4]->content }}
                                    </button>
                                </li>
                            </ul>
                            <div class="tab-content" id="myTabContent">
                                <div class="tab-pane fade show active" id="about-tab-1" role="tabpanel" aria-labelledby="about-content-tab-1">
                                    <p>{{ $abobody[1]->content }}</p>
                                    {{-- <ul class="about-list">
                                        <li><span>01</span>Quality Content and Expert Instruction</li>
                                        <li><span>02</span>Student Engagement and Retention</li>
                                    </ul> --}}
                                </div>
                                <div class="tab-pane fade" id="about-tab-2" role="tabpanel" aria-labelledby="about-content-tab-2">
                                    <p>
                                        {{ $abobody[3]->content }}
                                    </p>
                                    {{-- <ul class="about-list">
                                        <li><span>01</span>Quality Content and Expert Instruction</li>
                                        <li><span>02</span>Student Engagement and Retention</li>
                                    </ul> --}}
                                </div>
                                <div class="tab-pane fade" id="about-tab-3" role="tabpanel" aria-labelledby="about-content-tab-2">
                                    <ul class="about-list">
                                        <li><span>{{ $abobody[5]->content }}</span>{{ $abobody[6]->content }}</li>
                                        <li><span>{{ $abobody[7]->content }}</span>{{ $abobody[8]->content }}</li>
                                        <li><span>{{ $abobody[9]->content }}</span>{{ $abobody[10]->content }}</li>
                                        <li><span>{{ $abobody[11]->content }}</span>{{ $abobody[12]->content }}</li>
                                        <li><span>{{ $abobody[13]->content }}</span>{{ $abobody[14]->content }}</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    </section>
</div>