@extends('layouts.main')

@section('title')
    Sky Scenic | Uusarios Admin
@endsection

@section('intro')
    <section class="d-flex justify-content-center align-items-center py-5" style="min-height: 300px">
        <h1 class="text-light text-center d-text-shadow fs-1">Usuarios | <span class="text-blueultra">Admin</span></h1>
    </section>
@endsection

@section('content')
    <main class="d-flex flex-column py-5 bg-darkblack" style="min-height: 50vh">
        @if (session()->has('status') && isset(session('status')['message']))
            <div id="status-message" class="position-absolute alert text-light bg-blueultra my-5 status-message-position">
                {{ session('status')['message'] }}
            </div>
        @endif
        @if (session()->has('status') && isset(session('status')['error']))
            <div id="status-error" class="position-absolute alert text-light bg-danger my-5 status-message-position">
                {{ session('status')['error'] }}
            </div>
        @endif
        <section
            class="d-flex flex-column justify-content-center mx-auto col-12 col-md-10 text-light px-2 px-md-0 py-5 gap-3">

            <h2 class="fs-2">Usuario <span class="text-blueultra">{{ $user->username }}</span></h2>
            <ul class="d-flex flex-column gap-4 list-unstyled ms-4">
                <li class="fs-5">ID: {{ $user->id }}</li>
                <li class="fs-5">E-Mail: {{ $user->email }}</li>
                <li class="fs-5">
                    Usuario desde: {{ $user->created_at->format('d/m/Y') }}
                </li>
                <li class="fs-5">
                    @if ($user->role == 'admin')
                        <p class="d-inline bg-blueultra rounded-2 px-2">Admin</p>
                    @else
                        <p class="d-inline bg-danger rounded-2 px-2">Regular</p>
                    @endif
                </li>
                <li class="fs-5">
                    @if ($user->subscribed == true)
                        <p class="d-inline bg-success rounded-2 px-2">Suscrito</p>
                    @else
                        <p class="d-inline bg-danger rounded-2 px-2">No suscrito</p>
                    @endif
                </li>
            </ul>

        </section>
    </main>
@endsection
