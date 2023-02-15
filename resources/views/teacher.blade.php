@extends('layout')

@section('content')
    <x-navbar.teacher></x-navbar.teacher>

    <section class="bg-light">
        <div class="container py-5">
            <h1 class="display-1 fw-bold py-5">
                Découvrez mes formations destinées aux étudiants et professionnels.
            </h1>
            <p class="lead">
                We built the App Store to make it easy for everyone — from individuals to large teams — to distribute apps in the thriving app economy and successfully run and grow a global business. The App Store empowers you to scale your app distribution worldwide using a variety of business models. And with access to extensive app management tools and marketing resources, you can turn your apps into incredible opportunities. Since Apple launched the App Store in 2008, developers have been paid $260 billion on the App Store.
            </p>
            <div class="row align-items-center my-5 g-5">
                <div class="col-6 col-md-4 col-lg-3">
                    <img src="{{ asset('storage/cesi.png') }}" class="img-fluid" alt="Logo CESI"/>
                </div>
                <div class="col-6 col-md-4 col-lg-3">
                    <img src="{{ asset('storage/nws.svg') }}" class="img-fluid" alt="Logo NWS"/>
                </div>
            </div>
        </div>
    </section>

    <!-- Laravel -->
    <section class="bg-blue text-white py-5">
        <div class="container">
            <div id="laravel" class="row justify-content-center">
                <div class="col-12 col-md-7">
                    <div class="square rounded-5 bg-light p-4 my-4">
                        <img src="{{ asset('storage/laravel.svg') }}" alt="" class="img-fluid w-100">
                    </div>
                    <h2 class="fw-semi-bold display-5 mt-5 mb-3">Formation Laravel</h2>
                    <p class="lead">
                        La formation Laravel est le moyen idéal pour démarrer avec ce framework PHP reconnu
                        à l'international. Vous apprendrez toutes les bases, de l'installation et de la configuration
                        à la création de votre première application Laravel. De plus, vous obtiendrez une expérience
                        pratique avec de nombreux exemples de code pour vous aider tout au long du processus.
                    </p>
                    <p class="lead">
                        Laravel est un framework PHP puissant qui peut vous aider à développer rapidement des applications web personnalisées. Ma formation Laravel vous montrera comment tirer parti de fonctionnalités telles que le templating, le routage, l’ORM Eloquent… pour créer des applications robustes. Vous apprendrez également à utiliser Composer et Artisan CLI pour gérer les dépendances de votre projet et effectuer des tâches courantes.
                    </p>

                    <h3 class="fw-semi-bold mt-5 mb-3">
                        Contenu de ce cours
                    </h3>
                    <ul class="lead">
                        <li class="mb-3">
                            Présentation de Laravel.
                        </li>
                        <li class="mb-3">
                            Installation via Composer (ou via docker).
                        </li>
                        <li class="mb-3">
                            La structure d’un projet Laravel.
                        </li>
                        <li class="mb-3">
                            Les concepts de Laravel, le cycle de vie d'une requête.
                        </li>
                        <li class="mb-3">
                            Mise en pratique des fonctionnalités de Laravel (routes, controllers, views, models,
                            migrations, seeds, factories, etc.) au travers d'un TP.
                        </li>
                    </ul>

                </div>
            </div>
        </div>
    </section>

    <!-- DevOps -->
    <section class="bg-light py-5">
        <div class="container">
            <div id="devops" class="row justify-content-center">
                <div class="col-12 col-md-7">
                    <div class="d-flex flex-row gap-4">
                        <div class="square rounded-5 bg-white p-4 my-4">
                            <img src="{{ asset('storage/github.svg') }}" alt="" class="img-fluid w-100">
                        </div>
                        <div class="square rounded-5 bg-white p-4 my-4">
                            <img src="{{ asset('storage/gitlab.svg') }}" alt="" class="img-fluid w-100">
                        </div>
                        <div class="square rounded-5 bg-white p-4 my-4">
                            <img src="{{ asset('storage/docker.svg') }}" alt="" class="img-fluid w-100">
                        </div>
                        <div class="square rounded-5 bg-white p-4 my-4">
                            <img src="{{ asset('storage/aws.svg') }}" alt="" class="img-fluid w-100">
                        </div>
                        <div class="square rounded-5 bg-white p-4 my-4">
                            <img src="{{ asset('storage/traefik.svg') }}" alt="" class="img-fluid w-100">
                        </div>
                    </div>
                    <h2 class="fw-semi-bold display-5 mt-5 mb-3">Formation DevOps</h2>
                    <p class="lead">
                        La formation Laravel est le moyen idéal pour démarrer avec ce framework PHP reconnu
                        à l'international. Vous apprendrez toutes les bases, de l'installation et de la configuration
                        à la création de votre première application Laravel. De plus, vous obtiendrez une expérience
                        pratique avec de nombreux exemples de code pour vous aider tout au long du processus.
                    </p>
                    <p class="lead">
                        Laravel est un framework PHP puissant qui peut vous aider à développer rapidement des applications web personnalisées. Ma formation Laravel vous montrera comment tirer parti de fonctionnalités telles que le templating, le routage, l’ORM Eloquent… pour créer des applications robustes. Vous apprendrez également à utiliser Composer et Artisan CLI pour gérer les dépendances de votre projet et effectuer des tâches courantes.
                    </p>

                    <h3 class="fw-semi-bold mt-5 mb-3">
                        Contenu de ce cours
                    </h3>
                    <ul class="lead">
                        <li class="mb-3">
                            Présentation de Laravel.
                        </li>
                        <li class="mb-3">
                            Installation via Composer (ou via docker).
                        </li>
                        <li class="mb-3">
                            La structure d’un projet Laravel.
                        </li>
                        <li class="mb-3">
                            Les concepts de Laravel, le cycle de vie d'une requête.
                        </li>
                        <li class="mb-3">
                            Mise en pratique des fonctionnalités de Laravel (routes, controllers, views, models,
                            migrations, seeds, factories, etc.) au travers d'un TP.
                        </li>
                    </ul>

                </div>
            </div>
        </div>
    </section>

    <!-- PHP -->
    <section class="bg-blue text-white py-5">
        <div class="container">
            <div id="php" class="row justify-content-center">
                <div class="col-12 col-md-7">
                    <div class="d-flex flex-row gap-4">
                        <div class="square rounded-5 bg-light p-4 my-4">
                            <img src="{{ asset('storage/php.svg') }}" alt="" class="img-fluid w-100">
                        </div>
                        <div class="square rounded-5 bg-light p-4 my-4">
                            <img src="{{ asset('storage/composer.svg') }}" alt="" class="img-fluid w-100">
                        </div>
                    </div>
                    <h2 class="fw-semi-bold display-5 mt-5 mb-3">Formation PHP</h2>
                    <p class="lead">
                        Que vous souhaitiez apprendre à créer des sites web dynamiques, ce cours est fait pour vous !
                        Dans ce cours, vous apprendrez les bases de la programmation PHP et de la programmation
                        orientée objet (POO). Vous comprendrez également comment utiliser les bibliothèques tierces
                        grâce à Composer. À la fin de ce cours, vous serez capable de créer des scripts PHP simples
                        et de comprendre comment utiliser la POO en PHP.
                    </p>

                    <h3 class="fw-semi-bold mt-5 mb-3">
                        Contenu de ce cours
                    </h3>
                    <ul class="lead">
                        <li class="mb-3">
                            Présentation de PHP.
                        </li>
                        <li class="mb-3">
                            Algorithmie.
                        </li>
                        <li class="mb-3">
                            Les fonctions.
                        </li>
                        <li class="mb-3">
                            La programmation orientée objet.
                        </li>
                        <li class="mb-3">
                            Utiliser une base de données avec la classe PDO.
                        </li>
                        <li class="mb-3">
                            Le pattern MVC.
                        </li>
                        <li class="mb-3">
                            Composer.
                        </li>
                    </ul>

                </div>
            </div>
        </div>
    </section>

    <!-- BDD -->
    <section class="bg-light py-5">
        <div class="container">
            <div id="bdd" class="row justify-content-center">
                <div class="col-12 col-md-7">
                    <div class="d-flex flex-row gap-4">
                        <div class="square rounded-5 bg-white p-4 my-4">
                            <img src="{{ asset('storage/mysql.svg') }}" alt="" class="img-fluid w-100">
                        </div>
                        <div class="square rounded-5 bg-white p-4 my-4">
                            <img src="{{ asset('storage/postgresql.svg') }}" alt="" class="img-fluid w-100">
                        </div>
                    </div>
                    <h2 class="fw-semi-bold display-5 mt-5 mb-3">Formation Base de données</h2>
                    <p class="lead">
                        La formation Laravel est le moyen idéal pour démarrer avec ce framework PHP reconnu
                        à l'international. Vous apprendrez toutes les bases, de l'installation et de la configuration
                        à la création de votre première application Laravel. De plus, vous obtiendrez une expérience
                        pratique avec de nombreux exemples de code pour vous aider tout au long du processus.
                    </p>
                    <p class="lead">
                        Laravel est un framework PHP puissant qui peut vous aider à développer rapidement des applications web personnalisées. Ma formation Laravel vous montrera comment tirer parti de fonctionnalités telles que le templating, le routage, l’ORM Eloquent… pour créer des applications robustes. Vous apprendrez également à utiliser Composer et Artisan CLI pour gérer les dépendances de votre projet et effectuer des tâches courantes.
                    </p>

                    <h3 class="fw-semi-bold mt-5 mb-3">
                        Contenu de ce cours
                    </h3>
                    <ul class="lead">
                        <li class="mb-3">
                            Présentation de Laravel.
                        </li>
                        <li class="mb-3">
                            Installation via Composer (ou via docker).
                        </li>
                        <li class="mb-3">
                            La structure d’un projet Laravel.
                        </li>
                        <li class="mb-3">
                            Les concepts de Laravel, le cycle de vie d'une requête.
                        </li>
                        <li class="mb-3">
                            Mise en pratique des fonctionnalités de Laravel (routes, controllers, views, models,
                            migrations, seeds, factories, etc.) au travers d'un TP.
                        </li>
                    </ul>

                </div>
            </div>
        </div>
    </section>

@endsection
