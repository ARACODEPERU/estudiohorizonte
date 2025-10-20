<div>

    @php
    $parameters = new \App\Models\Parameter();
    $P000022=$parameters->where('parameter_code', 'P000022')->value('value_default')?? "";
    $cadena_decodificada = htmlspecialchars_decode($P000022, ENT_QUOTES);
    @endphp
    {!! $cadena_decodificada !!}
    <header class="header header-3 header-6 header-7 sticky-active">
            <div class="top-bar" style="background: #1d173d;">
                <div class="container">
                    <div class="top-bar-inner">
                        <div class="top-bar-left">
                            <ul class="top-bar-list">
                                <li>
                                    <i class="fa fa-phone"></i>
                                    {{ $header[1]->content }}
                                </li>
                                <li>
                                    <i class="fa fa-location-dot"></i>
                                    <span>{{ $header[2]->content }}</span>
                                </li>
                                <li><i class="fa fa-clock"></i><span>{{ $header[3]->content }}</span></li>
                            </ul>
                        </div>
                        <div class="top-bar-right">
                            <div class="register-box">
                                <a href="{{ $header[4]->content }}" style="padding: 0px 5px;"><i class="fab fa-facebook-f" aria-hidden="true"></i></a>
                                <a href="{{ $header[5]->content }}" style="padding: 0px 5px;"><i class="fab fa-instagram" aria-hidden="true"></i></a>
                                <a href="{{ $header[6]->content }}" style="padding: 0px 5px;"><i class="fab fa-youtube" aria-hidden="true"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="primary-header">
                <div class="container">
                    <div class="primary-header-inner">
                        <div class="header-logo d-lg-block">
                            <a href="{{ route('index_main') }}">
                                <img src="{{ asset('storage/'.$header[0]->content) }}" alt="Logo">
                            </a>
                        </div>
                        <div class="header-menu-wrap">
                            <div class="mobile-menu-items">
                                <ul class="sub-menu">
                                    <li class="menu-item-has-children active">
                                        <a href="{{ route('index_main') }}">Home</a>
                                    </li>
                                    <li><a href="{{ route('web_about') }}">Nosotros</a></li>
                                    <li><a href="{{ route('web_courses') }}">Formación Continua</a></li>
                                    <li><a href="{{ route('web_contact_us') }}">Contacto</a></li>
                                </ul>
                            </div>
                        </div>
                        <!-- /.header-menu-wrap -->
                        <div class="header-right-wrap">
                            <div class="header-right">
                                {{-- <div class="header-right-icon d-xl-block d-lg-none">
                                    <a href="wishlist.html"><i class="fa-sharp fa-regular fa-heart"></i></a>
                                    <span class="number">0</span>
                                </div>
                                <div class="header-right-icon shop-btn">
                                    <a href="cart.html"><i class="fa-regular fa-cart-shopping"></i></a>
                                    <span class="number">0</span>
                                </div> --}}
                                <a href="https://estudiohorizonte.org/login" class="ed-primary-btn header-btn">Campus Virtual</a>
                                <div class="header-logo d-none d-lg-none">
                                    <a href="">
                                        <img src="{{ asset('themes/webpage/assets/img/logo/logo-1.png') }}" alt="Logo">
                                    </a>
                                </div>
                                <div class="header-right-item d-lg-none d-md-block">
                                    <a href="javascript:void(0)" class="mobile-side-menu-toggle"
                                        ><i class="fa-sharp fa-solid fa-bars"></i
                                    ></a>
                                </div>
                            </div>
                            <!-- /.header-right -->
                        </div>
                    </div>
                    <!-- /.primary-header-inner -->
                </div>
            </div>
    </header>
</div>
