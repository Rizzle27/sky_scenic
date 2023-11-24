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

            <h2 class="fs-5">Usuarios</h2>

            <p>Podés alternar entre el rol de los usuarios tocando en el respectivo rol de cual quieras cambiar.</p>

            <table class="table-transparent">
                <thead>
                    <tr>
                        <th class="fs-5 text-light">ID</th>
                        <th class="fs-5 text-light">Usuario</th>
                        <th class="fs-5 text-light">Rol</th>
                        <th class="fs-5 text-light">Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($users as $user)
                        <tr style="height: 3.5rem">
                            <td class="fs-5 text-light">{{ $user->id }}</td>
                            <td class="fs-4 text-blueultra"><a class="text-decoration-none" href="{{ url('/admin/usuarios/' . $user->id) }}">{{ $user->username }}</a></td>
                            <td>
                                <form method="POST" action="{{ url('/admin/usuarios/rol') }}">
                                    @csrf
                                    <input type="hidden" name="id" value="{{ $user->id }}">
                                    <button type="submit" class="btn text-light px-3 py-1 {{ $user->role == 'admin' ? 'bg-blueultra' : 'border-blueultra' }}">
                                        {{ $user->role == 'admin' ? 'Administrador' : 'Usuario/a común' }}
                                    </button>
                                </form>
                            </td>
                            <td>
                                @if ($user->role != 'admin')
                                    <form method="POST" action="{{ url('/admin/usuarios/eliminar') }}">
                                        @csrf
                                        <input type="hidden" name="id" value="{{ $user->id }}">
                                        <button type="submit" class="btn btn-danger px-3 py-1">Eliminar</button>
                                    </form>
                                @endif
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </section>
    </main>
@endsection
