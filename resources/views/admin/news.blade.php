<?php

?>
@extends('layouts.main')

@section('title')
Sky Scenic | Noticias Admin
@endsection

@section('intro')
<section class="d-flex justify-content-center align-items-center py-5" style="min-height: 600px">
    <h2 class="text-light text-center d-text-shadow fs-1">Novedades y
        Noticias Recientes | <span class="text-blueultra">Admin</span></h2>
</section>
@endsection

@section('content')
<main class="d-flex flex-column py-5 bg-darkblack">
    @if (session()->has('status') && isset(session('status')['message']))
    <div id="status-message" class="position-absolute alert text-light bg-blueultra" style="left: 40px; z-index: 200;">
        {{ session('status')['message'] }}
    </div>
    @endif
    <section class="d-flex flex-column justify-content-center mx-auto col-12 col-md-10 text-light px-2 px-md-0 py-5 gap-3">

        <h2 class="fs-5">Noticias</h2>
        <div class="newsCardContainer w-100">
            @foreach ($news as $new)
            <div class="newCard rounded-3 w-100 bg-darkgray">
                <a href="{{ url('/noticias/' . $new->id) }}" class="text-decoration-none text-light">
                    <div class="d-flex flex-column justify-content-between gap-2 py-3 px-4">
                        <h4 class="fs-4 fw-normal mb-0 text-blueultra">
                            {{ $new->title }}
                        </h4>
                        <div class="d-flex w-100 justify-content-between">
                            <h5 class="fs-6 fw-normal  mb-0">{{ $new->subtitle }}</h5>
                        </div>
                    </div>
                    <img class="w-100 p-2" src="{{ asset('images/news/'.$new->img_path) }}" alt="{{ $new->title }} - {{ $new->subtitle }}" style="border-radius: 12px">
                </a>
                <div class="d-flex justify-content-around px-2 pb-2 text-center">
                    <a class="col-6 px-3 rounded-start-pill text-light text-decoration-none bg-blueultra" href="{{ url('/admin/noticias/editar/' . $new->id) }}">Editar</a>
                    <a class="col-6 px-3 rounded-end-pill text-light text-decoration-none bg-warnred" href="{{ url('/admin/noticias/eliminar/' . $new->id) }}">Eliminar</a>
                </div>
            </div>
            @endforeach
        </div>

    </section>
</main>
@endsection

<script>
    setTimeout(function() {
        var statusMessage = document.getElementById('status-message');
        if (statusMessage) {
            statusMessage.style.display = 'none';
        }
    }, 5000);
</script>
