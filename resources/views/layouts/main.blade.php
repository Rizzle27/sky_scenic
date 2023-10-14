<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

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
    <section id="login-section" class="flex-column align-items-center justify-content-center position-fixed col-5 gap-5">
        <div class="col-8">
            <div class="d-flex justify-content-between align-items-center">
                <h3 class="fs-2" style="color: #3E74FF;">Iniciar Sesión</h3>
                <button id="login-close" class="text-light bg-transparent rounded-pill" style="width: 32px; height: 32px; border: 2px solid #3E74FF !important;">X</button>
            </div>
            <p class="fs-4 text-light">Bienvenido de nuevo a Sky Scenic</p>
        </div>

        <div class="col-8">
            <form action="" class="d-flex flex-column gap-4 text-light">
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
        </div>

        <div class="col-8">
            <p class="text-light m-0">¿Todavía no tenés una cuenta?</p>
            <a href="#" class="fw-bold" style="color: #3E74FF;">Creá una cuenta acá</a>
        </div>
    </section>

    <section id="register-section" class="flex-column align-items-center justify-content-center position-fixed col-5 gap-5">
        <div class="col-8">
            <div class="d-flex justify-content-between align-items-center">
                <h3 class="fs-2" style="color: #3E74FF;">Registrarse</h3>
                <button id="register-close" class="text-light bg-transparent rounded-pill" style="width: 32px; height: 32px; border: 2px solid #3E74FF !important;">X</button>
            </div>
            <p class="fs-4 text-light">Bienvenido de nuevo a Sky Scenic</p>
        </div>

        <div class="col-8">
            <form action="" class="d-flex flex-column gap-4 text-light">
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
                    style="border: 2px solid #3E74FF !important;" type="submit">Registrarse</button>
            </form>
        </div>

        <div class="col-8">
            <p class="text-light m-0">¿Ya tenés una cuenta?</p>
            <a href="#" class="fw-bold" style="color: #3E74FF;">Iniciá sesión acá</a>
        </div>
    </section>

    <section id="main-nav-container">
        <nav class="mx-auto d-flex justify-content-between col-10 align-items-center py-4">
            <div style="z-index: 200;">
                <h1 class="rafginsFont fs-3 m-0"><a href={{ url('/') }} class="text-light text-decoration-none">Sky
                        Scenic</a>
                </h1>
            </div>
            <div>
                <ul class="d-flex align-items-center gap-4 m-0 list-unstyled">
                    <li><a href={{ url('/') }} class="hvr-underline-from-left text-light text-decoration-none">Galería</a></li>
                    <li><a href={{ url('/noticias') }} class="hvr-underline-from-left text-light text-decoration-none">Noticias</a></li>

                    <li><button id="register-link" class="hvr-rectangle-in px-2 py-1 rounded-pill text-light text-decoration-none" style="border: 2px solid #3E74FF;">Registrarse</button></li>

                    <li><button id="login-link" class="hvr-rectangle-out px-2 py-1 rounded-pill text-light text-decoration-none bg-transparent" style="border: 2px solid #3E74FF;">Iniciar Sesión</button></li>
                </ul>
            </div>
        </nav>
        @yield('intro')
    </section>
    <main class="d-flex flex-column text-center py-5" style="background-color: #1E1E1E">
        @yield('content')
    </main>

    <footer class="footer d-flex justify-content-center" style="background-color: #3E74FF; min-height: 100px;">
        <section class="d-flex justify-content-between align-items-center col-8">
            <div>
                <h3 class="text-light m-0">Sky Scenic</h3>
            </div>
            <div>
                <p class="m-0 text-light">©️Portales y Comercio Electrónico | García, Agüero, Stella</p>
            </div>
            <div>
                <ul class="d-flex gap-4 m-0 list-unstyled">
                    <li><a href={{ url('/') }} class="text-light text-decoration-none">Galería</a></li>
                    <li><a href={{ url('/') }} class="text-light text-decoration-none">Noticias</a></li>
                </ul>
            </div>
        </section>
    </footer>
</body>

</html>
