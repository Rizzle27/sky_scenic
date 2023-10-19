<?php
use Illuminate\Support\ViewErrorBag;

/** @var ViewErrorBag $errors */
/** @var News $new */

?>

@extends('layouts.main')

@section('title')
    Sky Scenic | Editar Noticia
@endsection

@section('content')
    <main class="d-flex" style="background-color: #292929">

        @if (session()->has('status') && isset(session('status')['message']))
            <div id="status-message" class="position-absolute alert text-light"
                style="background-color: #3E74FF; left: 40px; z-index: 200;">
                {{ session('status')['message'] }}
            </div>
        @endif

        @if ($errors->any())
            <div id="error-message" class="position-absolute alert text-light bg-danger" style="left: 40px; z-index: 200;">
                <p class="m-0">Hubo un error en el formulario. Por favor, haga una revisión y vuelva a intentar.</p>
            </div>
        @endif

        <section id="createForm" class="d-flex flex-column col-10 justify-content-center mx-auto py-5">
            <form class="d-flex flex-column text-light gap-4" action="{{ url('/admin/noticias/editar/' . $new->id) }}" method="POST">
                @csrf
                <h2 class="fs-4">Noticias</h2>
                <div class="d-flex flex-column gap-4">
                    <div class="d-flex flex-column">
                        <textarea class="fs-3 bg-transparent p-1" id="title" name="title" placeholder="Título de la noticia"
                            style="color: #3E74FF">{{ old('title', $new->title) }}</textarea>
                        @error('title')
                            <p class="text-danger">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="d-flex flex-column">
                        <textarea class="fs-5 text-light bg-transparent p-1" id="subtitle" name="subtitle"
                            placeholder="Subtítulo de la noticia">{{ old('subtitle', $new->subtitle) }}</textarea>
                            @error('subtitle')
                                <p class="text-danger">{{ $message }}</p>
                            @enderror
                    </div>
                    <div>
                        <input class="fs-5 text-light bg-transparent p-1" type="date" id="date" name="date"
                            placeholder="Fecha de la noticia" style="border: 0" value="{{ old('date', $new->date) }}">
                            @error('date')
                                <p class="text-danger">{{ $message }}</p>
                            @enderror
                    </div>

                    <div class="d-flex justify-content-center" style="background-color: #000; min-height: 200px;">
                        <div class="position-absolute w-50 d-flex flex-column justify-center mx-auto">
                            <input class="text-dark rounded-pill py-2 px-3 bg-transparent"
                                style="border: 2px solid #3E74FF; margin-top: 2rem; background-color: #ffffff !important; box-shadow: 4px 3px 5px 0px rgba(0,0,0,0.75);"
                                type="text" id="img_path" name="img_path" placeholder="Insertá acá la URL de tu foto" value="{{ old('img_path', $new->img_path) }}">
                            @error('img_path')
                                <p class="text-danger text-center">{{ $message }}</p>
                            @enderror
                        </div>
                        <img class="object-fit-cover w-100" id="img_path_value" src="{{ old('img_path', $new->img_path) }}" alt="">
                    </div>

                    <div class="d-flex flex-column">
                        <textarea class="fs-5 text-light bg-transparent p-1" rows="10" id="body" name="body"
                            placeholder="Cuerpo de la noticia">{{ old('body', $new->body) }}</textarea>
                            @error('body')
                                <p class="text-danger">{{ $message }}</p>
                            @enderror
                    </div>
                    <input type="text" name="author" id="author" value="{{ auth()->user()->username }}" hidden>
                </div>

                <button class="hvr-shutter-out-horizontal fs-5 my-3 text-light rounded-pill py-1 px-3 w-50 mx-auto my-4"
                    style="border: 2px solid #3E74FF;" type="submit">Publicar</button>
            </form>
        </section>
    </main>
@endsection

<script>
    document.addEventListener('DOMContentLoaded', function() {
        const imgInput = document.getElementById('img_path');
        const imgOutput = document.getElementById('img_path_value');

        imgInput.addEventListener('input', function() {
            imgOutput.src = imgInput.value;
        });
    });

    setTimeout(function() {
        var statusMessage = document.getElementById('status-message');
        if (statusMessage) {
            statusMessage.style.display = 'none';
        }
    }, 5000);

    setTimeout(function() {
        var errorMessage = document.getElementById('error-message');
        if (errorMessage) {
            errorMessage.style.display = 'none';
        }
    }, 5000);
</script>
