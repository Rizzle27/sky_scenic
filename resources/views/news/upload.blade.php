<?php
use Illuminate\Support\ViewErrorBag;

/** @var ViewErrorBag $errors */

?>

@extends('layouts.main')

@section('title')
    Sky Scenic | Subir Noticia
@endsection

@section('content')
    <main class="d-flex bg-darkgray">

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
            <form class="d-flex flex-column text-light gap-4" action="{{ url('/noticias/subir') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <h2 class="fs-4">Noticias</h2>
                <div class="d-flex flex-column gap-4">
                    <div class="d-flex flex-column">
                        <textarea class="fs-3 bg-transparent p-1" id="title" name="title" placeholder="Título de la noticia"
                            style="color: #3E74FF">{{ old('title') }}</textarea>
                        @error('title')
                            <p class="text-danger">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="d-flex flex-column">
                        <textarea class="fs-5 text-light bg-transparent p-1" id="subtitle" name="subtitle"
                            placeholder="Subtítulo de la noticia">{{ old('subtitle') }}</textarea>
                        @error('subtitle')
                            <p class="text-danger">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="d-flex flex-column col-lg-6">
                        <input type="file" class="form-control" name="img_path" onchange="loadFile(event)"/>

                        <p class="py-2">Subí la foto de la noticia</p>

                        <img id="img_path_output" class="w-100 pb-3">

                        @error('img_path')
                            <p class="text-danger">{{ $message }}</p>
                        @enderror
                    </div>

                    <div class="d-flex flex-column">
                        <textarea class="fs-5 text-light bg-transparent p-1" rows="10" id="body" name="body"
                            placeholder="Cuerpo de la noticia">{{ old('body') }}</textarea>
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
    var loadFile = function(event) {
        var output = document.getElementById('img_path_output');
        output.src = URL.createObjectURL(event.target.files[0]);
        output.onload = function() {
            URL.revokeObjectURL(output.src)
        }
    };

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
