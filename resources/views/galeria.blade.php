@php
    use Illuminate\Support\Str;
@endphp


@extends('layouts.main')

@section('title')
    Sky Scenic | Galería
@endsection

@section('intro')
    <section class="d-flex justify-content-center align-items-center py-5" style="min-height: 600px">
        @auth
            <h2 class="text-light text-center w-50" style="font-size: 4rem; text-shadow: 2px 2px 2px rgba(0,0,0,0.6);">¡Bienvenido
                de nuevo a Sky Scenic <span style="color: #3E74FF;">{{ auth()->user()->username }}</span>!</h2>
        @endauth
        @guest
            <h2 class="text-light text-center w-50" style="font-size: 4rem; text-shadow: 2px 2px 2px rgba(0,0,0,0.6);">¡Bienvenido
                a Sky Scenic!</h2>
        @endguest
    </section>
@endsection

@section('content')
    <main class="d-flex flex-column py-5" style="background-color: #1E1E1E">
        <section class="d-flex flex-column flex-lg-row justify-content-center mx-auto col-10 col-lg-8 text-light">

            <section class="d-flex flex-column col-12 col-lg-9 gap-2">

                <section>
                    <h2 class="fs-4 mb-2" style="color: #3E74FF;">Fotos del día</h2>
                    <div id="daily-main-photo-card" class="rounded-3" style="background-color: #292929;">
                        <img class="w-100 object-fit-cover rounded-top-3" src="./images/303813_1696014980.jpg"
                            alt="">
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

                <section class="d-flex">
                    <div class="row g-2">
                        @foreach ($photos as $photo)
                            <div class="col-4">
                                <div class="rounded-3" style="background-color: #292929;">
                                    <a href="{{ url('/fotos/' . $photo->id) }}" class="text-decoration-none text-light">
                                        <div style="height: 10rem">
                                            <img class="w-100 h-100 object-fit-cover rounded-top-3"
                                                src="./images/{{ $photo->img_path }}"
                                                alt="{{ $photo->plane }} - {{ $photo->airline }}"
                                                title="Foto de {{ $photo->plane }} tomada en {{ $photo->location }}, {{ $photo->country }}">
                                        </div>
                                        <div class="p-4">
                                            <div class="d-flex flex-column justify-content-between align-items-start">
                                                <div class="d-flex w-100 justify-content-between">
                                                    <h5 class="fs-6 fw-normal">{{ $photo->license_plate }}</h5>
                                                    <h5 class="fs-6 fw-normal">Autor</h5>
                                                </div>
                                                <h4 class="fs-6 fw-normal m-0" style="color: #3E74FF;">
                                                    {{ Str::limit($photo->plane, 14, '...') }}
                                                </h4>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </section>


            </section>

            <section class="d-flex flex-column col-12 col-lg-3">
                <h2 class="fs-4 mb-2" style="color: #3E74FF;">Noticias relevantes</h2>
            </section>

        </section>

        <section class="d-flex flex-column mx-auto col-8 py-4">
            <h2 class="fs-5 mb-3 text-light border border-top-0 border-start-0 border-end-0 border-bottom-1 pb-1">Galería
                completa</h2>
            <section class="d-flex text-light">
                <div class="d-flex justify-content-between mx-auto row g-2">
                    @foreach ($photos as $photo)
                        <div class="col-3">
                            <div class="rounded-3" style="background-color: #292929;">
                                <a href="" class="text-decoration-none text-light">
                                    <div style="height: 10rem">
                                        <img class="w-100 h-100 object-fit-cover rounded-top-3"
                                            src="./images/{{ $photo->img_path }}"
                                            alt="{{ $photo->plane }} - {{ $photo->airline }}"
                                            title="Foto de {{ $photo->plane }} tomada en {{ $photo->location }}, {{ $photo->country }}">
                                    </div>
                                    <div class="p-4">
                                        <div class="d-flex flex-column justify-content-between align-items-start">
                                            <div class="d-flex w-100 justify-content-between">
                                                <h5 class="fs-6 fw-normal">{{ $photo->license_plate }}</h5>
                                                <h5 class="fs-6 fw-normal">Autor</h5>
                                            </div>
                                            <h4 class="fs-6 fw-normal m-0" style="color: #3E74FF;">
                                                {{ Str::limit($photo->plane, 14, '...') }}
                                            </h4>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>
                    @endforeach
                </div>
            </section>
        </section>
    </main>
@endsection
