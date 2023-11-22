@extends('layouts/main')

@section('title')
    Sky Scenic | Suscripción
@endsection

@section('content')
    <main class="d-flex bg-darkblack">
        <section id="subscription-container" class="d-flex flex-column flex-lg-row justify-content-center align-items-center mx-auto gap-4 gap-lg-0">
            <div class="col-8 col-lg-4 mx-auto">
                <div>
                    <h2 class="text-blueultra">Obtené la licencia de las mejores imágenes para usarlas a tu gusto.</h2>
                    <p class="text-light">Las fotografías de este sitio están bajo derechos de autor. Si te interesa, ¡esta suscripción es para que puedas utilizarlas a tu gusto!</p>
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
                        <button class="rounded-pill text-light px-2 bg-blueultra border-blueultra">Comprar suscripción</button>
                    </div>
                </div>
            </div>
        </section>
    </main>
@endsection
