@extends('layouts.main')

@section('title')
    Sky Scenic | {{ $photo->aircraft }} by {{ $photo->author }}
@endsection

@section('content')
    <main class="d-flex flex-column" style="background-color: #1E1E1E">
        <section class="d-flex flex-column col-12 justify-content-center mx-auto">
            <div class="d-flex justify-content-center mx-auto w-100" style="min-height: 400px; background-color: #000;">
                <img class="object-fit-cover col-12 col-md-10 col-lg-8" src="{{ $photo->img_path }}"
                    alt="Foto de {{ $photo->aircraft }} tomada en {{ $photo->location }}, {{ $photo->country }}">
            </div>

            <div id="features" class="d-flex flex-column flex-xl-row col-12 col-md-10 col-lg-8 mx-auto text-light">
                <div class="featureSection d-flex flex-column text-center text-xl-start col-12 col-xl-2">
                    <h5 style="color: #3E74FF">Aeronave</h5>
                    <p class="m-0">{{ $photo->aircraft }}</p>
                </div>
                <div class="featureSection d-flex flex-column text-center text-xl-start col-12 col-xl-2">
                    <h5 style="color: #3E74FF">Matrícula</h5>
                    <p class="m-0">{{ $photo->license_plate }}</p>
                </div>
                <div class="featureSection d-flex flex-column text-center text-xl-start col-12 col-xl-2">
                    <h5 style="color: #3E74FF">Aerolínea</h5>
                    <p class="m-0">{{ $photo->airline }}</p>
                </div>
                <div class="featureSection d-flex flex-column text-center text-xl-start col-12 col-xl-2">
                    <h5 style="color: #3E74FF">Locación</h5>
                    <p class="m-0">{{ $photo->location }}</p>
                </div>
                <div class="featureSection d-flex flex-column text-center text-xl-start col-12 col-xl-2">
                    <h5 style="color: #3E74FF">País</h5>
                    <p class="m-0">{{ $photo->country }}</p>
                </div>
                <div class="featureSection d-flex flex-column text-center text-xl-start col-12 col-xl-2">
                    <h5 style="color: #3E74FF">Fecha</h5>
                    <p class="m-0">{{ $photo->date }}</p>
                </div>
            </div>
        </section>

        @if (count($relatedModelPhotos) > 1)
            <section class="d-flex flex-column col-12 col-md-8 justify-content-center mx-auto py-3 px-2">
                <h2 class="mb-3 fs-4 text-center text-md-start" style="color: #3E74FF;">Disfrutá más de este modelo
                    ({{ $photo->aircraft }})</h2>
                <div class="relatedCard d-flex flex-wrap justify-content-center gap-4 gap-md-2">
                    @foreach ($relatedModelPhotos as $photo)
                        <div class="col-10 col-lg-3">
                            <div class="rounded-3" style="background-color: #292929;">
                                <a href="{{ url('/fotos/' . $photo->id) }}" class="text-decoration-none text-light">
                                    <div style="height: 200px">
                                        <img class="object-fit-cover rounded-top-3"
                                            style="width: 100%; height: 100%; object-fit: cover;"
                                            src="{{ $photo->img_path }}"
                                            alt="{{ $photo->aircraft }} - {{ $photo->airline }}"
                                            title="Foto de {{ $photo->aircraft }} tomada en {{ $photo->location }}, {{ $photo->country }}">
                                    </div>

                                    <div class="d-flex flex-column justify-content-between card-body p-4">

                                        <h4 class="fs-6 fw-normal mb-3" style="color: #3E74FF;">
                                            {{ Str::limit($photo->aircraft, 18, '...') }}
                                        </h4>
                                        <div class="d-flex w-100 justify-content-between">
                                            <h5 class="fs-6 fw-normal">{{ $photo->license_plate }}</h5>
                                            <h5 class="fs-6 fw-normal">{{ $photo->author }}</h5>
                                        </div>

                                    </div>
                                </a>
                            </div>
                        </div>
                    @endforeach
                </div>
            </section>
        @endif

        @if (count($relatedRegisterPhotos) > 1)
            <section class="d-flex flex-column col-12 col-md-8 justify-content-center mx-auto py-3 px-2">
                <h2 class="mb-3 fs-4 text-center text-md-start" style="color: #3E74FF;">Disfrutá más de este vehículo
                    ({{ $photo->license_plate }})</h2>
                <div class="relatedCard d-flex flex-wrap justify-content-center gap-4 gap-md-2">
                    @foreach ($relatedRegisterPhotos as $photo)
                        <div class="col-10 col-lg-3">
                            <div class="rounded-3" style="background-color: #292929;">
                                <a href="{{ url('/fotos/' . $photo->id) }}" class="text-decoration-none text-light">
                                    <div style="height: 200px">
                                        <img class="object-fit-cover rounded-top-3"
                                            style="width: 100%; height: 100%; object-fit: cover;"
                                            src="{{ $photo->img_path }}"
                                            alt="{{ $photo->aircraft }} - {{ $photo->airline }}"
                                            title="Foto de {{ $photo->aircraft }} tomada en {{ $photo->location }}, {{ $photo->country }}">
                                    </div>

                                    <div class="d-flex flex-column justify-content-between card-body p-4">

                                        <h4 class="fs-6 fw-normal mb-3" style="color: #3E74FF;">
                                            {{ Str::limit($photo->aircraft, 18, '...') }}
                                        </h4>
                                        <div class="d-flex w-100 justify-content-between">
                                            <h5 class="fs-6 fw-normal">{{ $photo->license_plate }}</h5>
                                            <h5 class="fs-6 fw-normal">{{ $photo->author }}</h5>
                                        </div>

                                    </div>
                                </a>
                            </div>
                        </div>
                    @endforeach
                </div>
            </section>
        @endif

        @if (count($relatedAuthorPhotos) > 1)
            <section class="d-flex flex-column col-12 col-md-8 justify-content-center mx-auto py-3 px-2">
                <h2 class="mb-3 fs-4 text-center text-md-start" style="color: #3E74FF;">Disfrutá más de este autor
                    ({{ $photo->author }})</h2>
                <div class="relatedCard d-flex flex-wrap justify-content-center gap-4 gap-md-2">
                    @foreach ($relatedAuthorPhotos as $photo)
                        <div class="col-10 col-lg-3">
                            <div class="rounded-3" style="background-color: #292929;">
                                <a href="{{ url('/fotos/' . $photo->id) }}" class="text-decoration-none text-light">
                                    <div style="height: 200px">
                                        <img class="object-fit-cover rounded-top-3"
                                            style="width: 100%; height: 100%; object-fit: cover;"
                                            src="{{ $photo->img_path }}"
                                            alt="{{ $photo->aircraft }} - {{ $photo->airline }}"
                                            title="Foto de {{ $photo->aircraft }} tomada en {{ $photo->location }}, {{ $photo->country }}">
                                    </div>

                                    <div class="d-flex flex-column justify-content-between card-body p-4">

                                        <h4 class="fs-6 fw-normal mb-3" style="color: #3E74FF;">
                                            {{ Str::limit($photo->aircraft, 18, '...') }}
                                        </h4>
                                        <div class="d-flex w-100 justify-content-between">
                                            <h5 class="fs-6 fw-normal">{{ $photo->license_plate }}</h5>
                                            <h5 class="fs-6 fw-normal">{{ $photo->author }}</h5>
                                        </div>

                                    </div>
                                </a>
                            </div>
                        </div>
                    @endforeach
                </div>
            </section>
        @endif
    </main>
@endsection
