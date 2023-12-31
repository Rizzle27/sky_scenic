@extends('layouts.main')

@section('title')
Sky Scenic | {{ $new->title }} by {{ $new->author }}
@endsection

@section('content')
<main class="d-flex bg-darkgray">

    <section id="createForm" class="d-flex flex-column col-10 justify-content-center mx-auto py-5 text-light">
        <div class="d-flex justify-content-between">
            <h1 class="fs-5 text-blueultra">Noticias</h1>
            <p class="fs-5">{{ $new->date }}</p>
        </div>
        <div class="d-flex flex-column gap-4">
            <h2 class="fs-2 text-blueultra">{{ $new->title }}</h2>
            <h2 class="fs-4">{{ $new->subtitle }}</h2>
            <b class="fs-5">Por: {{ $new->author }}</b>
            <img class="col-lg-6" src="{{ asset('images/news/'.$new->img_path) }}" alt="{{ $new->title }} - {{ $new->subtitule }}">
            <p class="fs-5">{{ $new->body }}</p>
        </div>
    </section>
</main>
@endsection
