@extends('layouts.main')

@section('title')
    Sky Scenic | Subir Foto
@endsection

@section('content')
    <main class="d-flex" style="background-color: #292929">

        @if (session()->has('status') && isset(session('status')['message']))
            <div id="status-message" class="position-absolute alert text-light" style="background-color: #3E74FF; left: 40px;">
                {{ session('status')['message'] }}
            </div>
        @endif

        <section id="createForm" class="d-flex flex-column col-12 justify-content-center mx-auto gap-4 py-3">
            <form class="d-flex flex-column text-light" action="{{ url('/fotos/subir') }}" method="POST">
                @csrf
                <div class="d-flex justify-content-center mx-auto w-100" style="background-color: #000; min-height: 400px;">
                    <input class="position-absolute text-dark w-50 rounded-pill py-2 px-3 bg-transparent"
                        style="border: 2px solid #3E74FF; margin-top: 2rem; background-color: #ffffff !important; box-shadow: 4px 3px 5px 0px rgba(0,0,0,0.75);"
                        type="text" id="img_path" name="img_path" placeholder="Insertá acá la URL de tu foto" required>
                    <img class="object-fit-cover col-8" id="img_path_value" src="" alt="">
                </div>

                <div id="features" class="d-flex flex-row col-8 mx-auto">
                    <div class="featureSection d-flex flex-column col-2">
                        <label for="aircraft" style="color: #3E74FF;">Aeronave</label>
                        <textarea class="text-light bg-transparent" rows="2" id="aircraft" name="aircraft"
                            placeholder="Nombre de la aeronave" required></textarea>
                    </div>
                    <div class="featureSection d-flex flex-column col-2">
                        <label for="license_plate" style="color: #3E74FF;">Mtrícula</label>
                        <textarea class="text-light bg-transparent" rows="2" id="license_plate" name="license_plate"
                            placeholder="Matrícula de la aeronave" required></textarea>
                    </div>
                    <div class="featureSection d-flex flex-column col-2">
                        <label for="airline" style="color: #3E74FF;">Aerolínea</label>
                        <textarea class="text-light bg-transparent" rows="2" id="airline" name="airline"
                            placeholder="Nombre de la aerolínea de la aeronave" required></textarea>
                    </div>
                    <div class="featureSection d-flex flex-column col-2">
                        <label for="location" style="color: #3E74FF;">Locación</label>
                        <textarea class="text-light bg-transparent" rows="2" id="location" name="location"
                            placeholder="Ubicación de la foto" required></textarea>
                    </div>
                    <div class="featureSection d-flex flex-column col-2">
                        <label for="country" style="color: #3E74FF;">País</label>
                        <textarea class="text-light bg-transparent" rows="2" id="country" name="country"
                            placeholder="País de la foto" required></textarea>
                    </div>
                    <div class="featureSection d-flex flex-column col-2">
                        <label for="date" style="color: #3E74FF;">Fecha</label>
                        <input class="text-light bg-transparent" type="date" id="date" name="date"
                            placeholder="Fecha de la foto" required>
                    </div>
                </div>

                <button class="hvr-shutter-out-horizontal fs-5 my-3 text-light rounded-pill py-1 px-3 w-50 mx-auto my-4"
                    style="border: 2px solid #3E74FF;" type="submit">Subir</button>
            </form>
        </section>
    </main>
@endsection

<script>
    document.addEventListener('DOMContentLoaded', function() {
        const imgInput = document.getElementById('img_path');
        const imgOutput = document.getElementById('img_path_value');

        imgInput.addEventListener('input', function() {
            imgOutput.src = imgInput.value;
        });
    });

    setTimeout(function() {
        var statusMessage = document.getElementById('status-message');
        if (statusMessage) {
            statusMessage.style.display = 'none';
        }
    }, 5000);
</script>
