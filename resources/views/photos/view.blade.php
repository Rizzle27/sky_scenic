@extends('layouts.main')

@section('content')
    <main class="d-flex flex-column">
        <section style="background-color: #000000">
            <div class="col-8 mx-auto">
                <img class="w-100" src="{{ $photo->img_path }}" alt="">
            </div>
        </section>
        <section class="col-8 mx-auto" style="background-color: #fff">
            <h2>hola</h2>
        </section>
    </main>
@endsection
