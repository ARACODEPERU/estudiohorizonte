<div>
    <section class="page-header" style="padding: 60px;">
        <div class="bg-img">
            <img src="{{ asset('storage/' . $pageheader[0]->content) }}" alt="bg" style="width: 100%;">
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
</div>
