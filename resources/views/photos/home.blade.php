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
            <section id="dailyPhotos" class="d-flex flex-column col-12 col-lg-9 gap-2">
                <div>
                    <h2 class="fs-4 mb-2" style="color: #3E74FF;">Fotos del día</h2>
                    <div id="daily-main-photo-card" class="rounded-3" style="background-color: #292929;">
                        <img class="w-100 object-fit-cover rounded-top-3" src="{{ $dailyPhoto->img_path }}" alt="">
                        <div class="p-4">
                            <div class="d-flex justify-content-between align-items-center">
                                <h4 style="color: #3E74FF;">{{ $dailyPhoto->aircraft }}</h4>
                                <h5>{{ $dailyPhoto->license_plate }}</h5>
                            </div>
                            <div class="mt-3">
                                <h5 class="m-0">{{ $dailyPhoto->airline }}</h5>
                                <p class="m-0">{{ $dailyPhoto->date }}</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="d-flex flex-column flex-lg-row justify-content-center mx-auto text-light">
                    <div class="row g-2">
                        @foreach ($randomPhotos as $photo)
                            <div class="col-4">
                                <div class="rounded-3" style="background-color: #292929;">
                                    <a href="{{ url('/fotos/' . $photo->id) }}" class="text-decoration-none text-light">
                                        <div style="height: 200px">
                                            <img class="object-fit-cover rounded-top-3"
                                                style="width: 100%; height: 100%; object-fit: cover;"
                                                src="{{ $photo->img_path }}"
                                                alt="{{ $photo->aircraft }} - {{ $photo->airline }}"
                                                title="Foto de {{ $photo->aircraft }} tomada en {{ $photo->location }}, {{ $photo->country }}">
                                        </div>

                                        <div class="d-flex flex-column justify-content-between card-body p-4">

                                            <h4 class="fs-6 fw-normal mb-3" style="color: #3E74FF;">
                                                {{ Str::limit($photo->aircraft, 18, '...') }}
                                            </h4>
                                            <div class="d-flex w-100 justify-content-between">
                                                <h5 class="fs-6 fw-normal">{{ $photo->license_plate }}</h5>
                                                <h5 class="fs-6 fw-normal">Autor</h5>
                                            </div>

                                        </div>
                                    </a>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </section>

            <section id="news" class="d-flex flex-column col-12 col-lg-3">
                <h2 class="fs-4 mb-2" style="color: #3E74FF;">Noticias relevantes</h2>
            </section>
        </section>

        <section class="d-flex flex-column justify-content-center mx-auto col-10 col-lg-8 text-light py-5">
            <h2 class="fs-4 mb-2" style="color: #3E74FF;">Disfrutá de la galería completa</h2>
            <div class="d-flex flex-column flex-lg-row justify-content-center mx-auto text-light">
                <div class="row g-2">
                    @foreach ($photos as $photo)
                        <div class="col-3">
                            <div class="rounded-3" style="background-color: #292929;">
                                <a href="{{ url('/fotos/' . $photo->id) }}" class="text-decoration-none text-light">
                                    <div style="height: 200px">
                                        <img class="object-fit-cover rounded-top-3"
                                            style="width: 100%; height: 100%; object-fit: cover;"
                                            src="{{ $photo->img_path }}"
                                            alt="{{ $photo->aircraft }} - {{ $photo->airline }}"
                                            title="Foto de {{ $photo->aircraft }} tomada en {{ $photo->location }}, {{ $photo->country }}">
                                    </div>

                                    <div class="d-flex flex-column justify-content-between card-body p-4">

                                        <h4 class="fs-6 fw-normal mb-3" style="color: #3E74FF;">
                                            {{ Str::limit($photo->aircraft, 18, '...') }}
                                        </h4>
                                        <div class="d-flex w-100 justify-content-between">
                                            <h5 class="fs-6 fw-normal">{{ $photo->license_plate }}</h5>
                                            <h5 class="fs-6 fw-normal">Autor</h5>
                                        </div>

                                    </div>
                                </a>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </section>
    </main>
@endsection
