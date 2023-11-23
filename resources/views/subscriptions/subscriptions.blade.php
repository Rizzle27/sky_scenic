@extends('layouts/main')

@section('title')
    Sky Scenic | Suscripción
@endsection

@section('content')
    <main class="d-flex bg-darkblack">
        @if (session()->has('status') && isset(session('status')['message']))
            <div id="status-message" class="position-absolute alert text-light bg-blueultra my-5"
                style="left: 40px; z-index: 200;">
                {{ session('status')['message'] }}
            </div>
        @endif
        @auth
            @if (auth()->user()->subscribed == true)
                <section id="subscription-container"
                    class="d-flex flex-column justify-content-center align-items-center mx-auto gap-5">
                    <div class="d-flex flex-column gap-4 col-10 text-center">
                        <h2 class="text-light fs-1">¡Gracias por suscribirte a nuestro servicio <span
                                class="text-blueultra">{{ auth()->user()->username }}</span>!</h2>
                        <p class="text-light">A partir de ahora vas a poder descargar las imágenes sin la marca de agua y con el uso libre para tus proyectos de manera comercial o para uso privado dirigiendote a la foto de tu elección y tocando el botón <span class="text-blueultra">"Descargar Imágen"</span> debajo de la misma.<br>¡Esperamos que disfrutes del servicio!</p>
                    </div>
                    <div class="d-flex flex-column col-10 text-center">
                        <h3 class="text-danger">No quiero más este servicio</h3>
                        <p class="text-light">Si hubo algún inconveniente con el servicio podés cancelar tu suscripción con el botón de abajo.</p>
                        <form method="POST" action="{{ url('/suscripcion') }}">
                            @csrf
                            <button class="rounded-pill text-light px-2 bg-warnred border-0">Cancelar
                                suscripción</button>
                        </form>
                    </div>
                </section>
            @else
                <section id="subscription-container"
                    class="d-flex flex-column flex-lg-row justify-content-center align-items-center mx-auto gap-4 gap-lg-0">
                    <div class="col-8 col-lg-4 mx-auto">
                        <div>
                            <h2 class="text-blueultra">Obtené la licencia de las mejores imágenes para usarlas a tu gusto.</h2>
                            <p class="text-light">Las fotografías de este sitio están bajo derechos de autor. Si te interesa,
                                ¡esta
                                suscripción es para que puedas utilizarlas a tu gusto!</p>
                        </div>
                    </div>
                    <div class="col-8 col-lg-4 mx-auto">
                        <div id="subscription-box" class="p-4 rounded-5">
                            <h3 class="text-blueultra">Suscripción General</h3>
                            <p class="text-light">Con esta suscripción vas a poder:</p>
                            <ul class="text-light">
                                <li>Descargar la cantidad de imágenes que quieras.</li>
                                <li>Descargar las imágenes en la mejor resolución.</li>
                                <li>Utilizarlas para uso personal o comercial.</li>
                            </ul>
                            <div class="d-flex justify-content-between align-items-center">
                                <b class="text-blueultra fs-4">$3840<span class="fs-6 fw-light text-light ms-2">ARS</span></b>
                                <form method="POST" action="{{ url('/suscripcion') }}">
                                    @csrf
                                    <button class="rounded-pill text-light px-2 bg-blueultra border-blueultra">Comprar
                                        suscripción</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </section>
            @endif
        @endauth
    </main>
@endsection

<script>
    setTimeout(function() {
        var statusMessage = document.getElementById('status-message');
        if (statusMessage) {
            statusMessage.style.display = 'none';
        }
    }, 5000);
</script>
