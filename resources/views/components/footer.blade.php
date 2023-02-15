<footer class="bg-dark text-light">
    <div class="container py-5">
        <div class="row">
            <div class="col-md-6 col-lg-3">
                <p class="text-white fw-semi-bold">A propos</p>
                <p class="fw-light">
                    Je suis un développeur web freelance basé à Paris. Je travaille principalement avec le framework Laravel et le CMS WordPress.
                </p>
            </div>
            <div class="col-md-6 col-lg-3">
                <p class="text-white fw-semi-bold">Mes services</p>
                <ul class="fw-light list-unstyled">
                    <li class="mb-1">
                        <a href="{{ route('devweb') }}#laravel" class="text-white-50 text-decoration-none">Développement Laravel</a>
                    </li>
                    <li class="mb-1">
                        <a href="{{ route('devweb') }}#sylius" class="text-white-50 text-decoration-none">Développement Sylius</a>
                    </li>
                    <li class="mb-1">
                        <a href="{{ route('devweb') }}#optimisation" class="text-white-50 text-decoration-none">Optimisation des performances</a>
                    </li>
                    <li class="mb-1">
                        <a href="{{ route('devops') }}" class="text-white-50 text-decoration-none">CI/CD</a>
                    </li>
                    <li class="mb-1">
                        <a href="{{ route('teacher') }}" class="text-white-50 text-decoration-none">Formations</a>
                    </li>
                </ul>

                <p class="text-white fw-semi-bold mt-3">Projets</p>
                <ul class="fw-light list-unstyled">
                    @foreach($projects as $project)
                        <li class="mb-1">
                            <a href="{{ route('project.show', $project) }}" class="text-white-50 text-decoration-none">{{ $project->title }}</a>
                        </li>
                    @endforeach
                </ul>
            </div>
            <div class="col-md-6 col-lg-3">
                <p class="text-white fw-semi-bold">Articles</p>
                <ul class="fw-light list-unstyled">
                    @foreach($posts as $post)
                        <li class="mb-3">
                            <a href="{{ route('posts.show', $post) }}" class="text-white-50 text-decoration-none">{{ $post->title }}</a>
                        </li>
                    @endforeach
                </ul>
            </div>
            <div class="col-md-6 col-lg-3">
                <p class="text-white fw-semi-bold">Réseaux</p>
                <ul class="fw-light list-unstyled">
                    <li class="mb-3">
                        <a href="https://github.com/alexispe" class="text-white-50 text-decoration-none" target="_blank">GitHub</a>
                    </li>
                    <li class="mb-3">
                        <a href="https://www.linkedin.com/in/alexispe/" class="text-white-50 text-decoration-none" target="_blank">LinkedIn</a>
                    </li>
                    <li class="mb-3">
                        <a href="https://www.malt.fr/profile/alexispetit" class="text-white-50 text-decoration-none" target="_blank">Malt</a>
                    </li>
                    <li class="mb-3">
                        <a href="https://bento.me/alexis" class="text-white-50 text-decoration-none" target="_blank">Bento</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</footer>
