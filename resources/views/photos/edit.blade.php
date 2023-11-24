<?php
use Illuminate\Support\ViewErrorBag;

/** @var ViewErrorBag $errors */
/** @var Photo $photo */

?>

@extends('layouts.main')

@section('title')
    Sky Scenic | Editar Foto
@endsection

@section('content')
    <main class="d-flex bg-darkgray"">

        @if ($errors->any())
            <div id="error-message" class="position-absolute alert text-light bg-danger status-message-position">
                <p class="m-0">Hubo un error en el formulario. Por favor, haga una revisión y vuelva a intentar.</p>
            </div>
        @endif

        <section id="createForm" class="d-flex flex-column col-12 justify-content-center mx-auto gap-4 pb-4">
            <form action="{{ url('/fotos/editar/' . $photo->id) }}" method="POST" enctype="multipart/form-data"
                class="d-flex flex-column text-light">
                @csrf
                <div class="d-flex flex-column flex-lg-row justify-content-between py-3 col-8 mx-auto">
                    <div class="d-flex flex-column col-12 col-lg-5">
                        <label for="img_path_copyright" style="display: block; margin-bottom: 5px;">Foto con marca de
                            agua</label>
                        <input type="file" class="form-control" name="img_path_copyright"
                            onchange="loadFileCopy(event)" />

                        <img id="img_path_copyright_output" class="w-100 py-3"
                            src="{{ old('img_path_copyright', asset('images/photos/copy/' . $photo->img_path_copyright)) }}">

                        @error('img_path_copyright')
                            <p class="text-danger text-center">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="d-flex flex-column col-12 col-lg-5">
                        <label for="img_path" style="display: block; margin-bottom: 5px;">Foto sin marca de agua</label>
                        <input type="file" class="form-control" name="img_path" onchange="loadFile(event)" />

                        <img id="img_path_output" class="w-100 py-3"
                            src="{{ old('img_path', asset('images/photos/' . $photo->img_path)) }}">

                        @error('img_path')
                            <p class="text-danger text-center">{{ $message }}</p>
                        @enderror
                    </div>
                </div>

                <div id="features" class="d-flex flex-row col-8 mx-auto">
                    <div class="featureSection d-flex flex-column col-2">
                        <label for="aircraft" class="text-blueultra">Aeronave</label>
                        <textarea class="text-light bg-transparent" rows="2" id="aircraft" name="aircraft"
                            placeholder="Nombre de la aeronave">{{ old('aircraft', $photo->aircraft) }}</textarea>
                        @error('aircraft')
                            <p class="text-danger">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="featureSection d-flex flex-column col-2">
                        <label for="license_plate" class="text-blueultra">Mtrícula</label>
                        <textarea class="text-light bg-transparent" rows="2" id="license_plate" name="license_plate"
                            placeholder="Matrícula de la aeronave">{{ old('license_plate', $photo->license_plate) }}</textarea>
                        @error('license_plate')
                            <p class="text-danger">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="featureSection d-flex flex-column col-2">
                        <label for="airline" class="text-blueultra">Aerolínea</label>
                        <textarea class="text-light bg-transparent" rows="2" id="airline" name="airline"
                            placeholder="Nombre de la aerolínea de la aeronave">{{ old('airline', $photo->airline) }}</textarea>
                        @error('airline')
                            <p class="text-danger">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="featureSection d-flex flex-column col-2">
                        <label for="location" class="text-blueultra">Locación</label>
                        <textarea class="text-light bg-transparent" rows="2" id="location" name="location"
                            placeholder="Ubicación de la foto">{{ old('location', $photo->location) }}</textarea>
                        @error('location')
                            <p class="text-danger">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="featureSection d-flex flex-column col-2">
                        <label for="country" class="text-blueultra">País</label>
                        <textarea class="text-light bg-transparent" rows="2" id="country" name="country" placeholder="País de la foto">{{ old('country', $photo->country) }}</textarea>
                        @error('country')
                            <p class="text-danger">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="featureSection d-flex flex-column col-2">
                        <label for="date" class="text-blueultra">Fecha</label>
                        <input class="text-light bg-transparent" type="date" id="date" name="date"
                            placeholder="Fecha de la foto" value="{{ old('date', $photo->date) }}">
                        @error('date')
                            <p class="text-danger">{{ $message }}</p>
                        @enderror
                    </div>
                    <input type="text" id="author" name="author" value="{{ auth()->user()->username }}" hidden>
                </div>

                <button class="hvr-shutter-out-horizontal fs-5 my-3 text-light rounded-pill py-1 px-3 w-50 mx-auto my-5"
                    style="border: 2px solid #3E74FF;" type="submit">Editar</button>
            </form>
        </section>
    </main>
@endsection
