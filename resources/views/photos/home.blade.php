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

        <section
            class="d-flex flex-column flex-lg-row justify-content-center mx-auto col-12 col-md-10 text-light px-2 px-md-0 py-5 gap-3">

            <section id="dailyPhotos" class="d-flex flex-column col-12 col-lg-7 gap-3">

                <div>
                    <h2 class="fs-4 mb-2" style="color: #3E74FF;">Fotos del día</h2>
                    <div class="mainDailyPhotosCard rounded-3" style="background-color: #292929;">
                        <a href="{{ url('/fotos/' . $dailyPhoto->id) }}" class="text-decoration-none text-light">
                            <img class="w-100 object-fit-cover rounded-top-3" src="{{ $dailyPhoto->img_path }}"
                                alt="" style="max-height: 400px">
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
                        </a>
                    </div>
                </div>

                <div class="cardContainer d-flex w-100">
                    @foreach ($randomPhotos as $photo)
                        <div class="d-flex secondaryDailyPhotosCard rounded-3"
                            style="background-color: #292929; overflow: hidden;">
                            <a href="{{ url('/fotos/' . $photo->id) }}" class="text-decoration-none text-light">
                                <img class="w-100 object-fit-cover" src="{{ $photo->img_path }}"
                                    alt="{{ $photo->aircraft }} - {{ $photo->airline }}"
                                    title="Foto de {{ $photo->aircraft }} tomada en {{ $photo->location }}, {{ $photo->country }}">
                                <div class="d-flex flex-column justify-content-between gap-2 py-3 px-4">
                                    <h4 class="fs-6 fw-normal mb-0" style="color: #3E74FF;">
                                        {{ Str::limit($photo->aircraft, 22, '...') }}
                                    </h4>
                                    <div class="d-flex w-100 justify-content-between">
                                        <h5 class="fs-6 fw-normal  mb-0">{{ $photo->license_plate }}</h5>
                                        <h5 class="fs-6 fw-normal  mb-0">{{ $photo->author }}</h5>
                                    </div>
                                </div>
                            </a>
                        </div>
                    @endforeach
                </div>
            </section>

            <section id="news" class="d-none d-lg-flex flex-column col-12 col-lg-5">
                <h2 class="fs-4 mb-2" style="color: #3E74FF;">Noticias relevantes</h2>
            </section>

        </section>

        <section
            class="d-flex flex-column justify-content-center mx-auto col-12 col-md-10 text-light px-2 px-md-0 py-5 gap-3">

            <h2 class="fs-4 m-0" style="color: #3E74FF;">Disfrutá de la galería completa</h2>
            <div class="cardContainer w-100">
                @foreach ($photos as $photo)
                    <div class="photoCard rounded-3 w-100" style="background-color: #292929;">
                        <a href="{{ url('/fotos/' . $photo->id) }}" class="text-decoration-none text-light">
                            <img class="w-100" src="{{ $photo->img_path }}"
                                alt="{{ $photo->aircraft }} - {{ $photo->airline }}"
                                title="Foto de {{ $photo->aircraft }} tomada en {{ $photo->location }}, {{ $photo->country }}">
                            <div class="d-flex flex-column justify-content-between gap-2 py-3 px-4">
                                <h4 class="fs-6 fw-normal mb-0" style="color: #3E74FF;">
                                    {{ Str::limit($photo->aircraft, 22, '...') }}
                                </h4>
                                <div class="d-flex w-100 justify-content-between">
                                    <h5 class="fs-6 fw-normal  mb-0">{{ $photo->license_plate }}</h5>
                                    <h5 class="fs-6 fw-normal  mb-0">{{ $photo->author }}</h5>
                                </div>
                            </div>
                        </a>
                    </div>
                @endforeach
            </div>

        </section>
    </main>
@endsection
