@extends('app')

@section('title')
    Parcours
@endsection

@section('content')
    <h1 class="mb-5">Parcours</h1>

    <p class="text-justify">
        Diplômée depuis 2018, mon parcours universitaire fût varié de la France au Canada (York, Toronto) où j'ai pu
        développer des connaissances dans les domaines de la psychologie et de la neuropsychologie cliniques. Ce
        parcours varié m'a également permis de vivre des expériences personnelles qui me permettent aujourd'hui d'être
        une professionnelle où les notions de partage, de tolérance et d'acceptation me qualifient amplement.
    </p>

    <p class="text-justify">
        Au début de ma carrière, j'ai travaillé au sein de différents EHPADs dans le secteur de la Marne, des Ardennes
        puis de la Bourgogne. Spécialisée dans les troubles neurodégénératifs, et ayant une affection particulière
        auprès de ce type de public, j'ai développé des compétences pour accompagner les personnes âgées <b>face aux
            difficultés émotionnelles et/ou cognitives liées à l'âge ou à la maladie</b>.
    </p>

    <p class="text-justify">
        Je travaille actuellement dans un Foyer d'Accueil Médicalisé auprès de personnes en <b>situation de handicap, de
            naissance ou ayant vécu un accident de la vie</b> (accidents, tentatives de suicide...). J'accompagne ces
        personnes
        sur des problématiques personnelles, sur leurs projets individualisés, j'effectue des bilans neuropsychologiques
        et j'anime des groupes de parole à divers thèmes (sexualité, autonomie, inclusion, handicap et vie
        quotidienne...).
    </p>

    <p class="text-justify mb-5">
        Je me suis lancée en tant que Psychologue-Neuropsychologue-Psychothérapeute à domicile afin de rendre ma
        profession et mes compétences plus accessibles, et vous permettant d'être au sein d'un cadre où vous vous
        sentirez le plus à l'aise : <b>chez vous</b>.
    </p>

    <a href="{{ route('pricing') }}">
        <button type="button" class="btn btn-success">
            Consulter mes prestations
        </button>
    </a>
@endsection
