@extends('layouts.main')

@section('title')
Sky Scenic | {{ $new->title }} by {{ $new->author }}
@endsection

@section('content')
<main class="d-flex bg-darkgray">

    <section id="createForm" class="d-flex flex-column col-10 justify-content-center mx-auto py-5 text-light">
        <div class="d-flex justify-content-between">
            <h1 class="fs-5">Noticias</h1>
            <p class="fs-5">{{ $new->date }}</p>
        </div>
        <div class="d-flex flex-column gap-4">
            <h2 class="fs-2 text-blueultra">{{ $new->title }}</h2>
            <h2 class="fs-4">{{ $new->subtitle }}</h2>
            <b class="fs-5">Por: {{ $new->author }}</b>
            <img src="{{ $new->img_path }}" alt="{{ $new->title }} - {{ $new->subtitule }}">
            <p class="fs-5">{{ $new->body }}</p>
        </div>

        <form class="d-flex mx-auto w-50" action="{{ url('/admin/noticias/eliminar/' . $new->id) }}" method="POST">
            @csrf
            <button class="hvr-shutter-out-horizontal-red fs-5 my-3 text-light rounded-pill py-1 px-3 w-100 mx-auto my-5 border-warnred" type="submit">Eliminar</button>
        </form>
    </section>
</main>
@endsection
