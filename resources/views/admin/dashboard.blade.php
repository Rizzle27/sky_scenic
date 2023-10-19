@extends('layouts.main')

@section('title')
Sky Scenic | Admin Dashboard
@endsection

@section('intro')
<section class="d-flex flex-column justify-content-center align-items-center py-5" style="min-height: 400px">
    <h2 class="text-center" style="color: #3E74FF;font-size: 4rem; text-shadow: 2px 2px 2px rgba(0,0,0,0.6);">Panel de
        Administración</h2>
    <p class="text-light fs-5" style="text-shadow: 2px 2px 2px rgba(0,0,0,0.6);">Dashboard del administrador <span style="color: #3E74FF;">{{ auth()->user()->username }}</span></p>
</section>
<section class="d-flex flex-column text-center py-5" style="min-height: 380px">
    <section class="d-flex flex-row justify-content-around mx-auto col-8 gap-5 text-light">

        <section class="text-start col-6 col-xl-4 p-4 rounded-4" style="background-color: #292929; box-shadow: 2px 2px 5px 0px rgba(0,0,0,0.75);">
            <img src="./images/icons/user-pen-alt-1_svgrepo.com.png" height="26" alt="ícono de administración de usuarios">
            <h3 class="mb-3 mt-2" style="color: #3E74FF;">Administrar Usuario</h3>
            <p>Administrar usuarios dentro del sitio.<br>Editar rol de usuario y eliminar.</p>
        </section>
        <section class="text-start col-6 col-xl-4 p-4 rounded-4" style="background-color: #292929; box-shadow: 2px 2px 5px 0px rgba(0,0,0,0.75);">
            <a href="./admin/noticias/" class="text-light text-decoration-none">
                <img src="./images/icons/news_svgrepo.com.png" height="26" alt="ícono de administración de noticias">
                <h3 class="mb-3 mt-2" style="color: #3E74FF;">Administrar Noticias</h3>
                <p>Administrar noticias dentro del sitio.<br>Crear, eliminar y editar.</p>
            </a>
        </section>
    </section>

</section>
@endsection