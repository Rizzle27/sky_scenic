<?php

?>
@extends('layouts.main')

@section('title')
    Sky Scenic | Noticias
@endsection

@section('intro')
    <section class="d-flex justify-content-center align-items-center py-5" style="min-height: 600px">
        <h2 class="text-light text-center" style="font-size: 4rem; text-shadow: 2px 2px 2px rgba(0,0,0,0.6);">Novedades y
            Noticias Recientes</h2>
    </section>
@endsection

@section('content')
    <main class="d-flex flex-column py-5" style="background-color: #1E1E1E">
        <section
            class="d-flex flex-column justify-content-center mx-auto col-12 col-md-10 text-light px-2 px-md-0 py-5 gap-3">

            <h2 class="fs-5">Noticias</h2>
            <div class="newsCardContainer w-100">
                @foreach ($news as $new)
                    <div class="newCard rounded-3 w-100" style="background-color: #292929;">
                        <a href="{{ url('/noticias/' . $new->id) }}" class="text-decoration-none text-light">
                            <div class="d-flex flex-column justify-content-between gap-2 py-3 px-4">
                                <h4 class="fs-4 fw-normal mb-0" style="color: #3E74FF;">
                                    {{ $new->title }}
                                </h4>
                                <div class="d-flex w-100 justify-content-between">
                                    <h5 class="fs-6 fw-normal  mb-0">{{ $new->subtitle }}</h5>
                                    {{-- <h5 class="fs-6 fw-normal  mb-0">{{ $new->date }}</h5> --}}
                                </div>
                            </div>
                            <img class="w-100 p-2" src="{{ $new->img_path }}" alt="{{ $new->title }} - {{ $new->subtitle }}" style="border-radius: 12px">
                        </a>
                    </div>
                @endforeach
            </div>

        </section>
    </main>
@endsection
