<nav class="navbar navbar-expand-lg bg-d shadow" data-bs-theme="dark">
  <div class="container-fluid">
    <a class="navbar-brand" href="{{ route('homepage') }}"><i class="bi bi-envelope-fill text-m fs-4"></i></a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav mx-auto">
        <li class="nav-item">
          <a class="nav-link ms-3 ms-md-0" aria-current="page" href="{{ route('homepage') }}">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link mx-3" href="{{ route('article.create') }}">Crea articolo</a>
        </li>
        <li class="nav-item">
          <a class="nav-link ms-3 ms-md-0" href="{{ route('article.index') }}">Tutti gli articoli</a>
        </li>
        <li class="nav-item">
          <a class="nav-link mx-3" href="{{ route('tag.create') }}">Crea tag</a>
        </li>
      </ul>
    </div>
  </div>
</nav>