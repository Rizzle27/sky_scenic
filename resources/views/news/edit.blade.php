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
    <main class="d-flex bg-darkgray">

        @if (session()->has('status') && isset(session('status')['message']))
            <div id="status-message" class="position-absolute alert text-light bg-blueultra status-message-position">
                {{ session('status')['message'] }}
            </div>
        @endif

        @if ($errors->any())
            <div id="error-message" class="position-absolute alert text-light bg-danger status-message-position">
                <p class="m-0">Hubo un error en el formulario. Por favor, haga una revisión y vuelva a intentar.</p>
            </div>
        @endif

        <section id="createForm" class="d-flex flex-column col-10 justify-content-center mx-auto py-5">
            <form class="d-flex flex-column text-light gap-4" action="{{ url('/admin/noticias/editar/' . $new->id) }}"
                method="POST" enctype="multipart/form-data">
                @csrf
                <h1 class="fs-4">Noticias</h1>
                <div class="d-flex flex-column gap-4">
                    <div class="d-flex flex-column">
                        <label for="title" class="fs-2 text-blueultra">Título de la noticia</label>
                        <textarea class="fs-3 bg-transparent p-1 text-blueultra" id="title" name="title"
                            placeholder="Título de la noticia">{{ old('title', $new->title) }}</textarea>
                        @error('title')
                            <p class="text-danger">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="d-flex flex-column">
                        <label for="subtitle" class="fs-5 text-light">Subtítulo de la noticia</label>
                        <textarea class="fs-5 text-light bg-transparent p-1" id="subtitle" name="subtitle"
                            placeholder="Subtítulo de la noticia">{{ old('subtitle', $new->subtitle) }}</textarea>
                        @error('subtitle')
                            <p class="text-danger">{{ $message }}</p>
                        @enderror
                    </div>

                    <div class="d-flex flex-column col-lg-6">
                        <label for="img_path" class="fs-5 text-light">Foto de la noticia</label>
                        <input type="file" class="form-control" name="img_path" onchange="loadFile(event)" />

                        <p class="py-2">Subí la foto de la noticia</p>

                        <img id="img_path_output" class="w-100 pb-3">

                        @error('img_path')
                            <p class="text-danger">{{ $message }}</p>
                        @enderror
                    </div>

                    <div class="d-flex flex-column">
                        <label for="body" class="fs-5 text-light">Cuerpo de la noticia</label>
                        <textarea class="fs-5 text-light bg-transparent p-1" rows="10" id="body" name="body"
                            placeholder="Cuerpo de la noticia">{{ old('body', $new->body) }}</textarea>
                        @error('body')
                            <p class="text-danger">{{ $message }}</p>
                        @enderror
                    </div>
                    <input type="text" name="author" id="author" value="{{ auth()->user()->username }}" hidden>
                </div>

                <button
                    class="hvr-shutter-out-horizontal fs-5 my-3 text-light rounded-pill py-1 px-3 w-50 mx-auto my-4 border-blueultra"
                    type="submit">Publicar</button>
            </form>
        </section>
    </main>
@endsection
