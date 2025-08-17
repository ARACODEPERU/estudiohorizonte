@extends('layouts.webpage')

@section('content')


    <!-- header-area-start -->
    <x-header />
    <!-- /.Main Header -->

    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <x-page-header-contact />
    <!-- ./ page-header -->

    <section class="contact-section pt-80 pb-120">
        <div class="container">
            <div class="row gy-lg-0 gy-5">
                <div class="col-lg-7">
                    <div class="blog-contact-form contact-form">
                        <x-contact-block-one />
                        <div class="request-form">
                            <form action="{{ route('apisubscriber') }}" method="post" id="pageContactForm"
                                class="form-horizontal">
                                @csrf
                                <div class="form-group row">
                                    <div class="col-md-6">
                                        <div class="form-item">
                                            <input type="text" id="fullname" name="fullname" class="form-control"
                                                placeholder="Nombre Completo">
                                            <div class="icon"><i class="fa fa-user"></i></div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-item">
                                            <input type="email" id="email" name="email" class="form-control"
                                                placeholder="Correo Eléctronico">
                                            <div class="icon"><i class="fa fa-envelope"></i></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="form-item">
                                        <input type="text" id="phone" name="phone" class="form-control"
                                            placeholder="Teléfono">
                                        <div class="icon"><i class="fa fa-phone"></i></div>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-md-12">
                                        <div class="form-item">
                                            <select name="subject" id="subject"
                                                class="niceSelect select-control form-control">
                                                <option value="Formación Académica">Formación Académica</option>
                                                <option value="Consultoria">Consultoria</option>
                                                <option value="Otros">Otros</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-md-12">
                                        <div class="form-item message-item">
                                            <textarea id="message" name="message" cols="30" rows="5" class="form-control address"
                                                placeholder="Mensaje"></textarea>
                                            <div class="icon"><i class="fab fa-messages"></i></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="submit-btn">
                                    <button id="submitPageContactButton" class="ed-primary-btn" type="submit">Enviar
                                        Mensaje</button>
                                </div>
                            </form>
                            <div id="form-messages" class="alert mt-20"></div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-5 col-md-12">
                    <div class="contact-content">
                        <x-contact-block-two />
                    </div>
                </div>
            </div>
        </div>
        <script>
            let form = document.getElementById('pageContactForm');
            form.addEventListener('submit', function(e) {
                e.preventDefault();

                var formulario = document.getElementById('pageContactForm');
                var formData = new FormData(formulario);

                // Deshabilitar el botón
                var submitButton = document.getElementById('submitPageContactButton');
                submitButton.disabled = true;
                submitButton.style.opacity = 0.25;

                // Crear una nueva solicitud XMLHttpRequest
                var xhr = new XMLHttpRequest();

                // Configurar la solicitud POST al servidor
                xhr.open('POST', "{{ route('apisubscriber') }}", true);

            // Configurar la función de callback para manejar la respuesta
            xhr.onload = function() {
                // Habilitar nuevamente el botón
                submitButton.disabled = false;
                submitButton.style.opacity = 1;
                if (xhr.status === 200) {
                    var response = JSON.parse(xhr.responseText);
                    Swal.fire({
                        icon: 'success',
                        title: 'Enhorabuena',
                        text: response.message,
                        customClass: {
                            container: 'sweet-modal-zindex' // Clase personalizada para controlar el z-index
                        }
                    });
                } else if (xhr.status === 422) {
                    var errorResponse = JSON.parse(xhr.responseText);
                    // Maneja los errores de validación aquí, por ejemplo, mostrando los mensajes de error en algún lugar de tu página.
                    var errorMessages = errorResponse.errors;
                    var errorMessageContainer = document.getElementById('messagePageContact');
                    errorMessageContainer.innerHTML = 'Errores de validación:<br>';
                    for (var field in errorMessages) {
                        if (errorMessages.hasOwnProperty(field)) {
                            errorMessageContainer.innerHTML += field + ': ' + errorMessages[field].join(', ') +
                                '<br>';
                        }
                    } else {
                        console.error('Error en la solicitud: ' + xhr.status);
                    }


                };

                // Enviar la solicitud al servidor
                xhr.send(formData);
            });
        </script>
    </section>
    <!-- ./ contact-section -->

    <x-footer />
    <!-- ./ footer-section -->

@stop
