<div>
    <div class="contact-top">
        <h3 class="title">{{ $block[0]->content }}</h3>
        <p>
            {{ $block[1]->content }}
        </p>
    </div>
    <div class="contact-list">
        <div class="list-item">
            <div class="icon">
                <i class="fa-sharp fa-solid fa-phone"></i>
            </div>
            <div class="content">
                <h4 class="title">Número de teléfono y correo electrónico</h4>
                <span><a href="">{{ $block[2]->content }}</a></span>
                <span><a href="mailto:{{ $block[3]->content }}">{{ $block[3]->content }}</a></span>
            </div>
        </div>
        <div class="list-item">
            <div class="icon">
                <i class="fa-sharp fa-solid fa-location-dot"></i>
            </div>
            <div class="content">
                <h4 class="title">Nuestra dirección de oficina</h4>
                <p>{{ $block[4]->content }}</p>
            </div>
        </div>
        <div class="list-item">
            <div class="icon">
                <i class="fa-sharp fa-solid fa-clock"></i>
            </div>
            <div class="content">
                <h4 class="title">Horario</h4>
                <span>{{ $block[5]->content }}</span>
                <span>{{ $block[6]->content }}</span>
            </div>
        </div>
    </div>
</div>
