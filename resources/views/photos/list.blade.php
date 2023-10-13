<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="<?= url('styles/index.css') ?>">
    <title>Galería</title>
</head>
<body>
    <nav class="navbar navbar-expand-lg bg-dark navbar-dark">
        <div class="container-fluid col-8 mx-auto">
          <a class="navbar-brand fs-4" href="#">Sailor Jets</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="./">Inicio</a>
              </li>
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="./galeria">Galería</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="./quienes-somos">Noticias</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="./admin">Admin</a>
              </li>
            </ul>
          </div>
        </div>
      </nav>

      <main class="container col-8 mx-auto py-5">
        <section class="d-flex flex-row gap-3">
            <div class="d-flex flex-column col-8 gap-3">
                <h4>Populares del Día</h4>
                <div id="main-popular">
                    <img class="w-100" src="./images/83424_1662174524.jpg" alt="">
                </div>
                <div id="secondary-popular" class="d-flex justify-content-between">
                    <div class="col-4">
                        <img class="w-100 h-100" src="./images/303813_1696014980.jpg" alt="">
                    </div>
                    <div class="col-4">
                        <img class="w-100 h-100" src="./images/856374_1696001896.jpg" alt="">
                    </div>
                    <div class="col-4">
                        <img class="w-100 h-100" src="./images/518895_1696056866.jpg" alt="">
                    </div>
                </div>
            </div>

            <div class="col-4">
                <h4>Noticias</h4>
                <div>
                    <ul>
                        <li>Noticia 1</li>
                        <li>Noticia 2</li>
                        <li>Noticia 3</li>
                    </ul>
                </div>
            </div>
        </section>
      </main>
      <footer class="footer">

      </footer>
</body>
</html>
