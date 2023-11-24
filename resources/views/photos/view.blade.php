@extends('layouts.main')

@section('title')
    Sky Scenic | {{ $photo->aircraft }} by {{ $photo->author }}
@endsection

@section('content')
    <main class="d-flex flex-column bg-darkblack" style="min-height: 80vh">
        <section class="d-flex flex-column col-12 justify-content-center mx-auto pb-4">
            <div class="d-flex justify-content-center mx-auto w-100 bg-black" style="min-height: 400px;">
                <img class="object-fit-cover col-10 col-lg-8"
                    src="{{ asset('images/photos/copy/' . $photo->img_path_copyright) }}"
                    alt="Foto de {{ $photo->aircraft }} tomada en {{ $photo->location }}, {{ $photo->country }}">
            </div>

            <div id="features" class="d-flex flex-column flex-xl-row col-10 col-lg-8 mx-auto text-light">
                <div class="featureSection d-flex flex-column text-center text-xl-start col-12 col-xl-2">
                    <h5 class="text-blueultra">Aeronave</h5>
                    <p class="m-0">{{ $photo->aircraft }}</p>
                </div>
                <div class="featureSection d-flex flex-column text-center text-xl-start col-12 col-xl-2">
                    <h5 class="text-blueultra">Matrícula</h5>
                    <p class="m-0">{{ $photo->license_plate }}</p>
                </div>
                <div class="featureSection d-flex flex-column text-center text-xl-start col-12 col-xl-2">
                    <h5 class="text-blueultra">Aerolínea</h5>
                    <p class="m-0">{{ $photo->airline }}</p>
                </div>
                <div class="featureSection d-flex flex-column text-center text-xl-start col-12 col-xl-2">
                    <h5 class="text-blueultra">Locación</h5>
                    <p class="m-0">{{ $photo->location }}</p>
                </div>
                <div class="featureSection d-flex flex-column text-center text-xl-start col-12 col-xl-2">
                    <h5 class="text-blueultra">País</h5>
                    <p class="m-0">{{ $photo->country }}</p>
                </div>
                <div class="featureSection d-flex flex-column text-center text-xl-start col-12 col-xl-2">
                    <h5 class="text-blueultra">Fecha</h5>
                    <p class="m-0">{{ $photo->date }}</p>
                </div>
            </div>

            @auth
                @if (auth()->user()->subscribed == true)
                    <div id="download" class="d-flex flex-column flex-xl-row col-10 col-lg-8 mx-auto text-light my-4 my-lg-2">
                        <button class="rounded-pill bg-blueultra text-light border-0 p-2"
                            onclick="imageDownload('{{ asset('images/photos/'.$photo->img_path) }}')">Descargar Imagen</button>
                    </div>
                @endif
            @endauth

        </section>

        @if (count($relatedModelPhotos) > 1)
            <section class="d-flex flex-column col-12 col-md-8 justify-content-center mx-auto py-3 px-2">
                <h2 class="mb-3 fs-4 text-center text-md-start text-blueultra">Disfrutá más de este modelo
                    ({{ $photo->aircraft }})</h2>
                <div class="relatedCard d-flex flex-wrap justify-content-center gap-4 gap-md-2">
                    @foreach ($relatedModelPhotos as $photo)
                        <div class="col-10 col-lg-3">
                            <div class="rounded-3 bg-darkgray">
                                <a href="{{ url('/fotos/' . $photo->id) }}" class="text-decoration-none text-light">
                                    <div class="relatedImageContainer">
                                        <img class="object-fit-cover rounded-top-3"
                                            src="{{ asset('images/photos/copy/' . $photo->img_path_copyright) }}"
                                            alt="{{ $photo->aircraft }} - {{ $photo->airline }}"
                                            title="Foto de {{ $photo->aircraft }} tomada en {{ $photo->location }}, {{ $photo->country }}">
                                    </div>

                                    <div class="d-flex flex-column justify-content-between card-body p-4">

                                        <h3 class="fs-6 fw-normal mb-3 text-blueultra">
                                            {{ Str::limit($photo->aircraft, 18, '...') }}
                                        </h3>
                                        <div class="d-flex w-100 justify-content-between">
                                            <h4 class="fs-6 fw-normal">{{ $photo->license_plate }}</h4>
                                            <h4 class="fs-6 fw-normal">{{ $photo->author }}</h4>
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
                <h2 class="mb-3 fs-4 text-center text-md-start text-blueultra">Disfrutá más de este vehículo
                    ({{ $photo->license_plate }})</h2>
                <div class="relatedCard d-flex flex-wrap justify-content-center gap-4 gap-md-2">
                    @foreach ($relatedRegisterPhotos as $photo)
                        <div class="col-10 col-lg-3">
                            <div class="rounded-3 bg-darkgray">
                                <a href="{{ url('/fotos/' . $photo->id) }}" class="text-decoration-none text-light">
                                    <div class="relatedImageContainer">
                                        <img class="object-fit-cover rounded-top-3"
                                            src="{{ asset('images/photos/copy/' . $photo->img_path_copyright) }}"
                                            alt="{{ $photo->aircraft }} - {{ $photo->airline }}"
                                            title="Foto de {{ $photo->aircraft }} tomada en {{ $photo->location }}, {{ $photo->country }}">
                                    </div>

                                    <div class="d-flex flex-column justify-content-between card-body p-4">

                                        <h3 class="fs-6 fw-normal mb-3 text-blueultra">
                                            {{ Str::limit($photo->aircraft, 18, '...') }}
                                        </h3>
                                        <div class="d-flex w-100 justify-content-between">
                                            <h4 class="fs-6 fw-normal">{{ $photo->license_plate }}</h4>
                                            <h4 class="fs-6 fw-normal">{{ $photo->author }}</h4>
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
                <h2 class="mb-3 fs-4 text-center text-md-start text-blueultra">Disfrutá más de este autor
                    ({{ $photo->author }})</h2>
                <div class="relatedCard d-flex flex-wrap justify-content-center gap-4 gap-md-2">
                    @foreach ($relatedAuthorPhotos as $photo)
                        <div class="col-10 col-lg-3">
                            <div class="rounded-3 bg-darkgray">
                                <a href="{{ url('/fotos/' . $photo->id) }}" class="text-decoration-none text-light">
                                    <div class="relatedImageContainer">
                                        <img class="object-fit-cover rounded-top-3"
                                            src="{{ asset('images/photos/copy/' . $photo->img_path_copyright) }}"
                                            alt="{{ $photo->aircraft }} - {{ $photo->airline }}"
                                            title="Foto de {{ $photo->aircraft }} tomada en {{ $photo->location }}, {{ $photo->country }}">
                                    </div>

                                    <div class="d-flex flex-column justify-content-between card-body p-4">

                                        <h3 class="fs-6 fw-normal mb-3 text-blueultra">
                                            {{ Str::limit($photo->aircraft, 18, '...') }}
                                        </h3>
                                        <div class="d-flex w-100 justify-content-between">
                                            <h4 class="fs-6 fw-normal">{{ $photo->license_plate }}</h4>
                                            <h4 class="fs-6 fw-normal">{{ $photo->author }}</h4>
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
