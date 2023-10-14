@extends('layouts.main')

@section('title')
    Sky Scenic | Galería
@endsection

@section('intro')
    <section class="d-flex justify-content-center align-items-center py-5" style="min-height: 600px">
        @auth
            <h2 class="text-light" style="font-size: 4rem; text-shadow: 2px 2px 2px rgba(0,0,0,0.6);">¡Bienvenido de nuevo a Sky Scenic {{ auth()->user()->username }}!</h2>
        @endauth
        @guest
            <h2 class="text-light" style="font-size: 4rem; text-shadow: 2px 2px 2px rgba(0,0,0,0.6);">¡Bienvenido a Sky Scenic!</h2>
        @endguest
    </section>
@endsection
@section('content')
    <section class="d-flex flex-row justify-content-center mx-auto col-8 gap-5 text-light">
        <section class="col-8 text-start">
            <h2 class="mb-4" style="color: #3E74FF;">Fotos del día</h2>
            <div id="daily-main-photo-card" class="rounded-3" style="background-color: #292929;">
                <img class="w-100 object-fit-cover rounded-top-3" src="./images/303813_1696014980.jpg" alt="">
                <div class="p-4">
                    <div class="d-flex justify-content-between align-items-center">
                        <h4 style="color: #3E74FF;">Avion 747-800</h4>
                        <h5>Matrícula del avión</h5>
                    </div>
                    <div class="mt-3">
                        <h5 class="m-0">Aerolínea</h5>
                        <p class="m-0">Fecha de la foto</p>
                    </div>
                </div>
            </div>
        </section>
        <section class="col-4 text-start">
            <h2 class="mb-4" style="color: #3E74FF;">Noticias relevantes</h2>
        </section>
    </section>
@endsection
