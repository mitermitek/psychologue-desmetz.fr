<nav class="navbar navbar-expand-lg bg-white shadow-sm">
    <div class="container">
        <a class="navbar-brand fw-bold" href="{{ route('welcome') }}">Marie <span class="text-success">DESMETZ</span></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse justify-content-end" id="navbarNavAltMarkup">
            <div class="navbar-nav">
                <a class="nav-link fw-semibold {{ (request()->is('/')) ? 'active' : '' }}" href="{{ route('welcome') }}">Accueil</a>
                <a class="nav-link fw-semibold {{ (request()->is('prestations')) ? 'active' : '' }}" href="{{ route('pricing') }}">Prestations</a>
                <a class="nav-link fw-semibold {{ (request()->is('parcours')) ? 'active' : '' }}" href="{{ route('career') }}">Parcours</a>
                <a class="nav-link fw-semibold {{ (request()->is('contact')) ? 'active' : '' }}" href="{{ route('contact') }}">Contact</a>
            </div>
        </div>
    </div>
</nav>
