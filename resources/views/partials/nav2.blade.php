<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container-fluid">
      <a class="navbar-brand" href="#">PowerZone</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="{{ route('local.clientP') }}">Liste des clients</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{ route('local.clientA') }}">liste des attands </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{ route('listerResponsable') }}">liste des Responsables </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{ route('addClient') }}"">Ajouter </a>
          </li>
            <li class="nav-item">
            <a class="nav-link" href="{{ route('logout') }}"">Deconnexion </a>
          </li>
          <li class="nav-item">
            <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
          </li>
        </ul>
        
      </div>
    </div>
  </nav>