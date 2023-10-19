@extends('layouts.main')

@section('title')
    Sky Scenic | Eliminar Foto
@endsection

@section('content')
    <main class="d-flex flex-column" style="background-color: #1E1E1E">
        <section class="d-flex flex-column col-12 justify-content-center mx-auto">
            <div class="d-flex justify-content-center mx-auto w-100" style="min-height: 400px; background-color: #000;">
                <img class="object-fit-cover col-12 col-md-10 col-lg-8" src="{{ $photo->img_path }}"
                    alt="Foto de {{ $photo->aircraft }} tomada en {{ $photo->location }}, {{ $photo->country }}">
            </div>

            <div id="features" class="d-flex flex-column flex-xl-row col-12 col-md-10 col-lg-8 mx-auto text-light">
                <div class="featureSection d-flex flex-column text-center text-xl-start col-12 col-xl-2">
                    <h5 style="color: #3E74FF">Aeronave</h5>
                    <p class="m-0">{{ $photo->aircraft }}</p>
                </div>
                <div class="featureSection d-flex flex-column text-center text-xl-start col-12 col-xl-2">
                    <h5 style="color: #3E74FF">Matrícula</h5>
                    <p class="m-0">{{ $photo->license_plate }}</p>
                </div>
                <div class="featureSection d-flex flex-column text-center text-xl-start col-12 col-xl-2">
                    <h5 style="color: #3E74FF">Aerolínea</h5>
                    <p class="m-0">{{ $photo->airline }}</p>
                </div>
                <div class="featureSection d-flex flex-column text-center text-xl-start col-12 col-xl-2">
                    <h5 style="color: #3E74FF">Locación</h5>
                    <p class="m-0">{{ $photo->location }}</p>
                </div>
                <div class="featureSection d-flex flex-column text-center text-xl-start col-12 col-xl-2">
                    <h5 style="color: #3E74FF">País</h5>
                    <p class="m-0">{{ $photo->country }}</p>
                </div>
                <div class="featureSection d-flex flex-column text-center text-xl-start col-12 col-xl-2">
                    <h5 style="color: #3E74FF">Fecha</h5>
                    <p class="m-0">{{ $photo->date }}</p>
                </div>
            </div>

            <form class="d-flex mx-auto w-50" action="{{ url('/fotos/eliminar/' . $photo->id) }}" method="POST">
                @csrf
                <button class="hvr-shutter-out-horizontal-red fs-5 my-3 text-light rounded-pill py-1 px-3 w-100 mx-auto my-5" style="border: 2px solid #ff3e3e;" type="submit">Eliminar</button>
            </form>
        </section>
    </main>
@endsection
