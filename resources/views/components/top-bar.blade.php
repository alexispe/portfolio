<nav class="navbar navbar-top navbar-expand-lg navbar-{{ $theme }} @if($sticky) sticky-top @endif">
    <div class="container">
        <a class="d-none d-lg-block mr-xl-5" href="{{ route('home') }}">
            @if($theme === 'light')
                <img src="{{ asset('storage/logo-transparent.png') }}" alt="Alexis Petit" height="31">
            @else
                <img src="{{ asset('storage/logo-white-transparent.png') }}" alt="Alexis Petit" height="31">
            @endif
        </a>

        <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link fw-light fs-6" href="{{ route('devweb') }}">Développement Web</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link fw-light fs-6" href="{{ route('devops') }}">DevOps</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link fw-light fs-6" href="{{ route('teacher') }}">Formateur</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link fw-light fs-6 pe-0" href="{{ route('posts.index') }}">Blog</a>
                </li>
            </ul>
        </div>
    </div>
</nav>
