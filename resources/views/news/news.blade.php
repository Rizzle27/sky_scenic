<?php

?>
@extends('layouts.main')

@section('title')
    Sky Scenic | Noticias
@endsection

@section('intro')
    <section class="d-flex justify-content-center align-items-center py-5" style="min-height: 300px">
        <h2 class="text-light text-center d-text-shadow fs-1">Novedades y
            Noticias Recientes</h2>
    </section>
@endsection

@section('content')
    <main class="d-flex flex-column py-5 bg-darkblack">
        <section
            class="d-flex flex-column justify-content-center mx-auto col-12 col-md-10 text-light px-2 px-md-0 py-5 gap-3">

            <h1 class="fs-5">Noticias</h1>
            <div class="newsCardContainer w-100">
                @foreach ($news as $new)
                    <div class="newCard rounded-3 w-100 bg-darkgray">
                        <a href="{{ url('/noticias/' . $new->id) }}" class="text-decoration-none text-light">
                            <div class="d-flex flex-column justify-content-between gap-2 py-3 px-4">
                                <h2 class="fs-4 fw-normal mb-0 text-blueultra">
                                    {{ $new->title }}
                                </h2>
                                <div class="d-flex w-100 justify-content-between">
                                    <h3 class="fs-6 fw-normal  mb-0">{{ $new->subtitle }}</h3>
                                </div>
                            </div>
                            <img class="w-100 p-2" src="{{ asset('images/news/'.$new->img_path) }}" alt="{{ $new->title }} - {{ $new->subtitle }}" style="border-radius: 12px">
                        </a>
                    </div>
                @endforeach
            </div>

        </section>
    </main>
@endsection
