@php
    use Illuminate\Support\Str;
@endphp


@extends('layouts.main')

@section('title')
    Sky Scenic | Galería
@endsection

@section('intro')
    <section class="d-flex justify-content-center align-items-center py-5" style="min-height: 300px">
        @auth
            <h2 class="text-light text-center w-50 fs-1 d-text-shadow">¡Bienvenido
                de nuevo a Sky Scenic <span class="text-blueultra">{{ auth()->user()->username }}</span>!</h2>
        @endauth
        @guest
            <h2 class="text-light text-center w-50 fs-1 d-text-shadow">¡Bienvenido
                a Sky Scenic!</h2>
        @endguest
    </section>
@endsection

@section('content')
    <main class="d-flex flex-column py-5 bg-darkblack">

        @if (session()->has('status') && isset(session('status')['message']))
            <div id="status-message" class="position-absolute alert text-light bg-blueultra status-message-position">
                {{ session('status')['message'] }}
            </div>
        @endif

        <section
            class="d-flex flex-column flex-lg-row justify-content-center mx-auto col-12 col-md-10 text-light px-2 px-md-0 py-5 gap-3">

            <section id="dailyPhotos" class="d-flex flex-column col-12 col-lg-7 gap-3">

                <div>
                    <h2 class="fs-4 mb-2 text-blueultra">Fotos del día</h2>
                    <div class="mainDailyPhotosCard rounded-3 bg-darkgray">
                        <a href="{{ url('/fotos/' . $dailyPhoto->id) }}" class="text-decoration-none text-light">
                            <img class="w-100 object-fit-cover rounded-top-3" src="{{ asset('images/photos/copy/'. $dailyPhoto->img_path_copyright) }}"
                                alt="" style="max-height: 400px">
                            <div class="p-4">
                                <div class="d-flex justify-content-between align-items-center">
                                    <h3 class="fs-4 text-blueultra">{{ $dailyPhoto->aircraft }}</h3>
                                    <h4 class="fs-5">{{ $dailyPhoto->license_plate }}</h4>
                                </div>
                                <div class="mt-3">
                                    <h4 class="m-0 fs-5">{{ $dailyPhoto->airline }}</h4>
                                    <p class="m-0">{{ $dailyPhoto->date }}</p>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>

                <div class="cardContainer d-flex w-100">
                    @foreach ($randomPhotos as $photo)
                        <div class="d-flex secondaryDailyPhotosCard rounded-3 bg-darkgray"
                            style="overflow: hidden;">
                            <a href="{{ url('/fotos/' . $photo->id) }}" class="text-decoration-none text-light">
                                <img class="w-100 object-fit-cover" src="{{ asset('images/photos/copy/'. $photo->img_path_copyright) }}"
                                    alt="{{ $photo->aircraft }} - {{ $photo->airline }}"
                                    title="Foto de {{ $photo->aircraft }} tomada en {{ $photo->location }}, {{ $photo->country }}">
                                <div class="d-flex flex-column justify-content-between gap-2 py-3 px-4">
                                    <h3 class="fs-6 fw-normal mb-0 text-blueultra">
                                        {{ Str::limit($photo->aircraft, 22, '...') }}
                                    </h3>
                                    <div class="d-flex w-100 justify-content-between">
                                        <h4 class="fs-6 fw-normal  mb-0">{{ $photo->license_plate }}</h4>
                                        <h4 class="fs-6 fw-normal  mb-0">{{ $photo->author }}</h4>
                                    </div>
                                </div>
                            </a>
                        </div>
                    @endforeach
                </div>
            </section>

            <section id="news" class="d-none d-lg-flex flex-column col-12 col-lg-5">
                <h2 class="fs-4 mb-2 text-blueultra">Noticias relevantes</h2>
                <div class="d-flex flex-column gap-2" style="max-height: 980px; overflow-y: scroll;">
                    @foreach ($news as $new)
                        <div class="rounded-3 w-100 bg-darkgray">
                            <ul style="display: none; list-style: none; top: 25px; right: 25px;" class="list-group gap-4 p-3 rounded-2 px-4 position-absolute bg-darkgray">
                                <li class="d-flex align-items-center"><button
                                        class="d-flex align-items-center gap-2 bg-transparent text-light border-0">
                                        <img src="./images/icons/edit-pencil.svg" alt="editar foto"><span>Editar
                                            foto</span></button></li>
                                <li class="d-flex align-items-center"><button
                                        class="d-flex align-items-center gap-2 bg-transparent border-0"><img
                                            src="./images/icons/delete-trash.svg" alt="eliminar foto"><span>Eliminar
                                            foto</span></button></li>
                            </ul>
                            <a href="{{ url('/noticias/' . $new->id) }}" class="text-decoration-none text-light">
                                <div class="d-flex flex-column justify-content-between gap-2 py-3 px-4">
                                    <h3 class="fs-5 fw-normal mb-0 text-blueultra">
                                        {{ $new->title }}
                                    </h3>
                                    <h4 class="fs-6 fw-normal mb-0">{{ $new->subtitle }}</h4>
                                </div>
                            </a>
                        </div>
                    @endforeach
                </div>
            </section>

        </section>

        <section
            class="d-flex flex-column justify-content-center mx-auto col-12 col-md-10 text-light px-2 px-md-0 py-5 gap-3">

            <h2 class="fs-4 m-0 text-blueultra">Disfrutá de la galería completa</h2>
            <div class="cardContainer w-100">
                @foreach ($photos as $photo)
                    <div class="photoCard rounded-3 w-100 bg-darkgray">
                        <div class="optionsCard">
                            <button onclick="showOptions(event)" style="background-color: rgba(0, 0, 0, 0.5);"
                                class="border-0 rounded-pill">
                                <img src="./images/icons/dots-options.svg" alt="abrir opciones">
                            </button>
                        </div>
                        <ul style="display: none; list-style: none; top: 25px; right: 25px;"
                            class="list-group gap-4 p-3 rounded-2 px-4 position-absolute bg-darkgray">
                            <li class="d-flex align-items-center">
                                <a href="{{ url('/fotos/editar/' . $photo->id) }}" class="text-decoration-none d-flex align-items-center gap-2 bg-transparent text-light border-0">
                                    <img src="./images/icons/edit-pencil.svg" alt="editar foto">
                                    <span>Editar foto</span>
                                </a>
                            </li>
                            <li class="d-flex align-items-center">
                                <a href="{{ url('/fotos/eliminar/' . $photo->id ) }}" class="text-decoration-none d-flex align-items-center gap-2 bg-transparent text-light border-0">
                                    <img src="./images/icons/delete-trash.svg" alt="eliminar foto">
                                    <span>Eliminar foto</span>
                                </a>
                            </li>
                        </ul>
                        <a href="{{ url('/fotos/' . $photo->id) }}" class="text-decoration-none text-light">
                            <img class="w-100" src="{{ asset('images/photos/copy/'. $photo->img_path_copyright) }}"
                                alt="{{ $photo->aircraft }} - {{ $photo->airline }}"
                                title="Foto de {{ $photo->aircraft }} tomada en {{ $photo->location }}, {{ $photo->country }}">
                            <div class="d-flex flex-column justify-content-between gap-2 py-3 px-4">
                                <h4 class="fs-6 fw-normal mb-0 text-blueultra">
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
