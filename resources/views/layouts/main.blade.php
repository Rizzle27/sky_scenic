<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
    </script>
    <link rel="stylesheet" href="<?= url('styles/styles.css') ?>">
    <script src="<?= url('styles/styles.js') ?>" defer></script>
    <title>@yield('title')</title>
</head>

<body>
    @if (Str::contains(request()->url(), '/admin'))
        @php
            $background = 'https://cdn.jetphotos.com/full/5/764785_1678852953.jpg';
        @endphp
    @elseif (request()->is('noticias'))
        @php
            $background = 'https://cdn.jetphotos.com/full/5/515925_1696167458.jpg';
        @endphp
    @elseif (request()->is('/'))
        @php
            $background = 'https://cdn.jetphotos.com/full/5/856374_1696001896.jpg';
        @endphp
    @else
        @php
            $background = null;
        @endphp
    @endif

    @if ($background != null)
        <img id="background-image" src="<?= $background ?>" alt="SkyScenic background">
    @endif

    <section id="login-section"
        class="flex-column align-items-center justify-content-center position-fixed col-8 col-md-6 col-lg-5 gap-5">
        <div class="col-8">
            <div class="d-flex justify-content-between align-items-center">
                @auth<h3 class="fs-2" style="color: #3E74FF;">Ya estas logueado</h3>@endauth
                @guest<h3 class="fs-2" style="color: #3E74FF;">Iniciar Sesión</h3>@endguest

                <button id="login-close" class="text-light bg-transparent rounded-pill"
                    style="width: 32px; height: 32px; border: 2px solid #3E74FF !important;">X</button>
            </div>
            @auth<p class="fs-4 text-light">¡Bienvenido de nuevo a Sky Scenic {{ auth()->user()->username }}!</p>
            @endauth
            @guest<p class="fs-4 text-light">¡Bienvenido a Sky Scenic!@endguest

        </div>

        <div class="col-8">
            @auth
                <form action="{{ route('auth.logout.process') }}" method="POST">
                    @csrf
                    <button class="hvr-shutter-out-horizontal fs-5 my-3 text-light w-100 rounded-pill py-1 px-3"
                        style="border: 2px solid #3E74FF !important;" type="submit">Cerrar
                        Sesión</button>
                </form>
            @endauth
            @guest
                <form id="login-form" action="{{ route('auth.login.process') }}" method="POST"
                    class="d-flex flex-column gap-4 text-light">
                    @csrf
                    <div>
                        <label class="fs-5 mb-2" for="username">Nombre de usuario</label><br>
                        <input class="text-light w-100 rounded-pill py-2 px-3 bg-transparent"
                            style="border: 2px solid #3E74FF !important;" type="text" id="username" name="username"
                            placeholder="Escriba su nombre de usuario">
                    </div>
                    <div>
                        <label class="fs-5 mb-2" for="password">Contraseña</label><br>
                        <input class="text-light w-100 rounded-pill py-2 px-3 bg-transparent"
                            style="border: 2px solid #3E74FF !important;" type="text" id="password" name="password"
                            placeholder="Escriba su contraseña">
                    </div>
                    <button class="hvr-shutter-out-horizontal fs-5 my-3 text-light w-100 rounded-pill py-1 px-3"
                        style="border: 2px solid #3E74FF !important;" type="submit">Iniciar
                        Sesión</button>
                </form>
            @endguest

            @if (Session::has('loginError'))
                <div class="fs-6 my-3 text-center text-light w-100 rounded-pill py-1 px-3"
                    style="border: 2px solid #ff3e3e !important;">
                    {{ Session::get('loginError') }}
                </div>
            @endif
        </div>

        @guest
            <div class="col-8">
                <p class="text-light m-0">¿Todavía no tenés una cuenta?</p>
                <button class="register-link fw-bold bg-transparent border-0 px-0" style="color: #3E74FF;">Creá una cuenta
                    acá</button>
            </div>
        @endguest
    </section>

    <section id="register-section"
        class="flex-column align-items-center justify-content-center position-fixed col-8 col-md-6 col-lg-5 gap-5">
        <div class="col-8">
            <div class="d-flex justify-content-between align-items-center">
                <h3 class="fs-2" style="color: #3E74FF;">Registrarse</h3>
                <button id="register-close" class="text-light bg-transparent rounded-pill"
                    style="width: 32px; height: 32px; border: 2px solid #3E74FF !important;">X</button>
            </div>
            <p class="fs-4 text-light">Bienvenido de nuevo a Sky Scenic</p>
        </div>

        <div class="col-8">
            <form action="{{ url('/registrar-sesion') }}" method="POST" class="d-flex flex-column gap-4 text-light">
                @csrf
                <div>
                    <label class="fs-5 mb-2" for="username">Nombre de usuario</label><br>
                    <input class="text-light w-100 rounded-pill py-2 px-3 bg-transparent"
                        style="border: 2px solid #3E74FF !important;" type="text" id="username" name="username"
                        placeholder="Escriba su nombre de usuario">
                </div>
                <div>
                    <label class="fs-5 mb-2" for="email">Correo electrónico</label><br>
                    <input class="text-light w-100 rounded-pill py-2 px-3 bg-transparent"
                        style="border: 2px solid #3E74FF !important;" type="text" id="email" name="email"
                        placeholder="Escriba su correo electrónico">
                </div>
                <div>
                    <label class="fs-5 mb-2" for="password">Contraseña</label><br>
                    <input class="text-light w-100 rounded-pill py-2 px-3 bg-transparent"
                        style="border: 2px solid #3E74FF !important;" type="text" id="password" name="password"
                        placeholder="Escriba su contraseña">
                </div>
                <button class="hvr-shutter-out-horizontal fs-5 my-3 text-light w-100 rounded-pill py-1 px-3"
                    style="border: 2px solid #3E74FF !important;" type="submit">Registrarse</button>
            </form>
        </div>

        <div class="col-8">
            <p class="text-light m-0">¿Ya tenés una cuenta?</p>
            <button class="login-link fw-bold bg-transparent border-0 px-0" style="color: #3E74FF;">Iniciá sesión
                acá</button>
        </div>
    </section>

    <section id="nav-container" @if ($background == null) style="background-color: #292929" @endif>
        <nav class="mx-auto d-flex justify-content-between col-10 align-items-center py-4">
            <div style="z-index: 200;">
                <h1 class="rafginsFont fs-3 m-0"><a href={{ url('/') }}
                        class="text-light text-decoration-none">Sky<span style="color: #3E74FF">Scenic</span></a>
                </h1>
            </div>
            <div>
                <ul class="d-flex align-items-center gap-4 m-0 list-unstyled">
                    <li><a href={{ url('/') }}
                            class="hvr-underline-from-left text-light text-decoration-none">Galería</a></li>
                    <li><a href={{ url('/noticias') }}
                            class="hvr-underline-from-left text-light text-decoration-none">Noticias</a></li>

                    @guest
                        <li><button
                                class="register-link hvr-rectangle-in px-2 py-1 rounded-pill text-light text-decoration-none"
                                style="border: 2px solid #3E74FF;">Registrarse</button></li>

                        <li><button
                                class="login-link hvr-rectangle-out px-2 py-1 rounded-pill text-light text-decoration-none bg-transparent"
                                style="border: 2px solid #3E74FF;">Iniciar Sesión</button></li>
                    @endguest
                    @auth
                        <li><a href={{ url('/fotos/subir') }}
                                class="hvr-underline-from-left text-light text-decoration-none">Subir Foto</a></li>

                        @if (auth()->user()->role == 'admin')
                            <li><a href={{ url('/noticias/subir') }}
                                    class="hvr-underline-from-left text-light text-decoration-none">Subir Noticia</a></li>

                            <li><a href={{ url('/admin') }}
                                    class="hvr-underline-from-left text-light text-decoration-none">Admin</a></li>
                        @endif

                        <li><button
                                class="login-link hvr-rectangle-out px-2 py-1 rounded-pill text-light text-decoration-none bg-transparent"
                                style="border: 2px solid #3E74FF;">{{ auth()->user()->username }}</button></li>
                    @endauth

                </ul>
            </div>
        </nav>
        @yield('intro')
    </section>

    @yield('content')

    <footer class="footer d-flex justify-content-center" style="background-color: #3E74FF; min-height: 100px;">
        <section class="d-flex flex-column flex-lg-row text-center justify-content-between align-items-center col-8 gap-4 py-2">
            <div>
                <h3 class="text-light m-0">SkyScenic</h3>
            </div>
            <div>
                <p class="m-0 text-light">©️Portales y Comercio Electrónico | García, Agüero, Stella</p>
            </div>
            <div>
                <ul class="d-flex gap-4 m-0 list-unstyled">
                    <li><a href={{ url('/') }} class="text-light text-decoration-none">Galería</a></li>
                    <li><a href={{ url('/noticias') }} class="text-light text-decoration-none">Noticias</a></li>
                </ul>
            </div>
        </section>
    </footer>
</body>

</html>
