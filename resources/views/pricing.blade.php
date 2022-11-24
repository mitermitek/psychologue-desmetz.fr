@extends('app')

@section('title')
    Prestations
@endsection

@section('content')
    <h1 class="mb-5">Prestations</h1>

    <p class="text-justify mb-3">
        Tous les tarifs des prestations sont à adapter avec un supplément si trajet important adapté au coût actualisé
        de l'essence,
        sauf
        pour les personnes en situation de handicap, chômeurs, bénéficiaires du RSA, sur présentation d'un
        justificatif.
    </p>

    <p class="text-justify mb-3">
        A savoir que certaines mutuelles remboursent les consultations auprès de psychologue.
    </p>

    <p class="text-justify mb-5">
        Pour les établissements médico-sociaux, je propose des formations à destination des professionnels. N'hésitez
        pas à me demander un devis.
    </p>

    <div class="row row-cols-1 row-cols-md-2 row-cols-lg-3 row-cols-xl-4 mb-3 text-center">
        <div class="col">
            <div class="card mb-4 rounded-3 shadow-sm">
                <div class="card-header py-3">
                    <h6 class="my-0 fw-normal">Consultations cliniques</h6>
                </div>
                <div class="card-body">
                    <h1 class="card-title pricing-card-title">30€</h1>
                    <ul class="list-unstyled mt-3 mb-4">
                        <li>45 minutes</li>
                    </ul>
                    <button type="button" class="w-100 btn btn-lg btn-outline-success" data-bs-toggle="modal"
                            data-bs-target="#consultations">
                        Voir les détails
                    </button>
                </div>
            </div>
        </div>

        <div class="col">
            <div class="card mb-4 rounded-3 shadow-sm">
                <div class="card-header py-3">
                    <h6 class="my-0 fw-normal">Bilans neuropsychologiques</h6>
                </div>
                <div class="card-body">
                    <h1 class="card-title pricing-card-title">150€</h1>
                    <ul class="list-unstyled mt-3 mb-4">
                        <li>4 heures</li>
                    </ul>
                    <button type="button" class="w-100 btn btn-lg btn-outline-success" data-bs-toggle="modal"
                            data-bs-target="#bilans">Voir les détails
                    </button>
                </div>
            </div>
        </div>

        <div class="col">
            <div class="card mb-4 rounded-3 shadow-sm">
                <div class="card-header py-3">
                    <h6 class="my-0 fw-normal">Stimulation cognitive</h6>
                </div>
                <div class="card-body">
                    <h1 class="card-title pricing-card-title">30€</h1>
                    <ul class="list-unstyled mt-3 mb-4">
                        <li>45 minutes</li>
                    </ul>
                    <button type="button" class="w-100 btn btn-lg btn-outline-success" data-bs-toggle="modal"
                            data-bs-target="#stimulation">Voir les détails
                    </button>
                </div>
            </div>
        </div>

        <div class="col">
            <div class="card mb-4 rounded-3 shadow-sm">
                <div class="card-header py-3">
                    <h6 class="my-0 fw-normal">Formations professionnelles</h6>
                </div>
                <div class="card-body">
                    <h1 class="card-title pricing-card-title">Devis</h1>
                    <ul class="list-unstyled mt-3 mb-4">
                        <li>Temps à définir</li>
                    </ul>
                    <button type="button" class="w-100 btn btn-lg btn-outline-success" data-bs-toggle="modal"
                            data-bs-target="#formations">Voir les détails
                    </button>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="consultations" tabindex="-1" aria-labelledby="consultationsLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="consultationsLabel">Consultations cliniques</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <p class="text-justify mb-3">
                        Il est possible pour moi d'accompagner des adolescents, adultes et personnes âgées qui souffrent
                        de dépression, d'anxiété, de stress et/ou qui ont besoin d'être accompagnés face à différentes
                        étapes de la vie (deuil, changement de vie professionnel, diagnostics de maladie
                        neurodégénératives...).
                    </p>

                    <p class="text-justify mb-3">
                        Si vous souffrez d'un handicap physique, je peux vous permettre
                        d'échanger sur votre quotidien, vos difficultés face au(x) handicap(s) qui ne permettent pas
                        toujours de sentir inclus dans notre société actuelle.
                    </p>

                    <p class="text-justify mb-5">
                        Je peux également vous accompagner dans votre vie, même si vous ne souffrez pas de troubles
                        cliniques important, vous offrir simplement un espace d'échanges.
                    </p>

                    <ul class="mb-3">
                        <li>Temps : 45 minutes</li>
                        <li>Tarif : 30 euros*</li>
                    </ul>

                    <p class="text-justify">
                        <small>* avec un supplément si trajet important adapté au coût actualisé de l'essence.</small>
                    </p>
                </div>
                <div class="modal-footer">
                    <a href="{{ route('contact') }}">
                        <button type="button" class="btn btn-success" data-bs-dismiss="modal">Me contacter</button>
                    </a>
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fermer</button>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="bilans" tabindex="-1" aria-labelledby="bilansLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="bilansLabel">Bilans neuropsychologiques</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <p class="text-justify mb-3">
                        Possibilité d'effectuer un bilan neuropsychologique adulte afin de terminer vos fonctions
                        cognitives efficientes et déficitaires, et de pouvoir vous orienter au mieux par la suite. Il
                        est important pour moi, dans ce cas, de me mettre en relation avec les autres professionnels qui
                        vous entourent (médecin traitant, gériatre, psychiatre, neurologue...).
                    </p>

                    <p class="text-justify mb-3">
                        Un bilan neuropsychologique, c'est :
                    </p>

                    <ul class="text-justify mb-5">
                        <li>Un « état des lieux » de votre fonctionnement cognitif.</li>
                        <li>Une passation de tests mesurant différentes fonctions : la mémoire, la concentration, les
                            fonctions exécutives...
                        </li>
                        <li>Un bilan rédigé, restitué et expliqué.</li>
                    </ul>

                    <ul class="mb-3">
                        <li>Temps : comptez environ 2h30 de passation, 1h de rédaction et 30-45m de restitution</li>
                        <li>Tarif : environ 150 euros*</li>
                    </ul>

                    <p class="text-justify">
                        <small>* modulable en fonction du temps de passation et de restitution. Supplément si trajet
                            important adapté au coût actualisé de l'essence.</small>
                    </p>
                </div>
                <div class="modal-footer">
                    <a href="{{ route('contact') }}">
                        <button type="button" class="btn btn-success" data-bs-dismiss="modal">Me contacter</button>
                    </a>
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fermer</button>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="stimulation" tabindex="-1" aria-labelledby="stimulationLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="stimulationLabel">Stimulation cognitive</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <p class="text-justify mb-3">
                        Temps dédié aux personnes âgées qui souhaitent maintenir au mieux leurs fonctions cognitives,
                        parfois dans le cadre d'un début de maladie neurodégénérative (maladie d'Alzheimer par exemple).
                    </p>

                    <p class="text-justify mb-3">
                        Ce peut être également un temps pour les personnes ayant subi un AVC ou un traumatisme crânien,
                        ayant déjà récupéré des fonctions cognitives et qui souhaitent les préserver au maximum.
                    </p>

                    <p class="text-justify mb-3">
                        La stimulation cognitive, c'est :
                    </p>

                    <ul class="text-justify mb-5">
                        <li>
                            45 minutes d'exercices travaillant les fonctions cognitives que vous souhaitez : la mémoire,
                            la concentration...
                        </li>
                        <li>
                            Un complément à vos habitudes et exercices quotidiens : la stimulation ne vous permettra pas
                            de « ré-apprendre ». Pour cela, il faudra être orienté vers un Psychologue travaillant la
                            rééducation cognitive.
                        </li>
                    </ul>

                    <ul class="mb-3">
                        <li>Temps : 45 minutes</li>
                        <li>Tarif : 30 euros*</li>
                    </ul>

                    <p class="text-justify">
                        <small>* avec un supplément si trajet important adapté au coût actualisé de l'essence.</small>
                    </p>
                </div>
                <div class="modal-footer">
                    <a href="{{ route('contact') }}">
                        <button type="button" class="btn btn-success" data-bs-dismiss="modal">Me contacter</button>
                    </a>
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fermer</button>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="formations" tabindex="-1" aria-labelledby="formationsLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="formationsLabel">Formations professionnelles</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <p class="text-justify mb-3">
                        Il est possible pour moi de proposer des formations à destination des équipes soignantes sur
                        différentes thématiques telles que :
                    </p>

                    <ul class="text-justify mb-5">
                        <li>
                            Les maladies neurodégénératives (maladie d'Alzheimer, démence vasculaire, parkinsonienne,
                            maladie de Huntington...).
                        </li>
                        <li>
                            Les troubles cognitifs et les troubles du comportement : comment les accompagner au mieux au
                            quotidien ?
                        </li>
                        <li>
                            Les syndromes neurologiques (AVC, traumatisme crânien, syndrome frontal, maladie de
                            Parkinson...).
                        </li>
                        <li>
                            Les troubles psychopathologiques (dépression, trouble anxieux généralisé, trouble
                            bipolaire...).
                        </li>
                    </ul>

                    <ul class="mb-3">
                        <li>Temps : à définir avec vos demandes</li>
                        <li>Tarif : devis à demander</li>
                    </ul>
                </div>
                <div class="modal-footer">
                    <a href="{{ route('contact') }}">
                        <button type="button" class="btn btn-success" data-bs-dismiss="modal">Me contacter</button>
                    </a>
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fermer</button>
                </div>
            </div>
        </div>
    </div>
@endsection
