@extends('layouts.main')

@section('title')
Sky Scenic | Admin Dashboard
@endsection

@section('intro')
<section class="d-flex flex-column justify-content-center align-items-center py-5" style="min-height: 300px">
    <h2 class="text-center text-light d-text-shadow fs-1">Panel de Administración</h2>
    <p class="text-light fs-5 d-text-shadow">Dashboard del administrador <span class="text-blueultra">{{ auth()->user()->username }}</span></p>
</section>
<section class="d-flex flex-column text-center my-5" style="min-height: 380px">
    <section class="d-flex flex-row justify-content-around mx-auto col-8 gap-5 text-light">
        <section class="text-start col-6 col-xl-4 p-4 rounded-4 bg-darkgray d-box-shadow">
            <a href="./admin/usuarios/" class="text-light text-decoration-none">
                <img src="./images/icons/user-pen-alt-1_svgrepo.com.png" height="26" alt="ícono de administración de usuarios">
                <h3 class="mb-3 mt-2 text-blueultra">Administrar Usuarios</h3>
                <p>Administrar usuarios dentro del sitio.<br>Editar rol de usuario y eliminar.</p>
            </a>
        </section>
        <section class="text-start col-6 col-xl-4 p-4 rounded-4 bg-darkgray d-box-shadow">
            <a href="./admin/noticias/" class="text-light text-decoration-none">
                <img src="./images/icons/news_svgrepo.com.png" height="26" alt="ícono de administración de noticias">
                <h3 class="mb-3 mt-2 text-blueultra">Administrar Noticias</h3>
                <p>Administrar noticias dentro del sitio.<br>Crear, eliminar y editar.</p>
            </a>
        </section>
    </section>

</section>
@endsection
