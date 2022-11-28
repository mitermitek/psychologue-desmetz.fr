@extends('app')

@section('title')
    Accueil
@endsection

@section('content')
    <div class="px-0 px-md-5 py-0 pb-md-5 mb-4 bg-light rounded-3">
        <div class="container-fluid py-5">
            <h1 class="display-5 fw-bold">Marie <span class="text-success">DESMETZ</span></h1>
            <p class="col-md-8 fs-4">
                Psychologue Clinicienne spécialisée en Neuropsychologie <span class="text-success fw-bold">&amp;</span>
                Psychothérapeute
            </p>
        </div>

        <div class="row row-cols-1 row-cols-lg-2 align-items-md-stretch">
            <div class="col mb-0 mb-md-4 mb-lg-0">
                <div class="h-100 p-5 text-bg-success rounded-3">
                    <h2>Un peu d'histoire</h2>
                    <p class="text-justify">
                        Diplômée depuis 2018, mon parcours universitaire fût varié de la France au Canada (York,
                        Toronto) où j'ai pu
                        développer des connaissances dans les domaines de la psychologie et de la neuropsychologie
                        cliniques. Ce
                        parcours...
                    </p>
                    <a href="{{ route('career') }}">
                        <button class="btn btn-outline-light" type="button">Afficher mon parcours</button>
                    </a>

                </div>
            </div>
            <div class="col">
                <div class="h-100 p-5 bg-light border rounded-3">
                    <h2>Mes prestations</h2>
                    <p class="text-justify mb-1">
                        Les consultations sont possibles par visio, et je propose un tarif de 30 euros pour 45 minutes de
                        consultation.
                    </p>
                    <p class="text-justify">
                        A savoir que certaines mutuelles remboursent les consultations auprès de
                        Psychologue.
                    </p>
                    <button class="btn btn-outline-secondary" type="button">Voir toutes les prestations</button>
                </div>
            </div>
        </div>
    </div>
@endsection
