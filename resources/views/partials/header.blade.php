
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container">
      <a class="navbar-brand" href="#">Tes</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link {{ Request::is('/') ? 'active' : '' }}" aria-current="page" href="{{ url('/') }}">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link {{ Request::is('database') ? 'active' : '' }}" aria-current="page" href="{{ url('/database') }}">Soal database</a>
          </li>
          <li class="nav-item">
            <a class="nav-link {{ Request::is('algoritma') ? 'active' : '' }}" aria-current="page" href="{{ url('/algoritma') }}">Soal algoritma</a>
          </li>

          
        </ul>
      </div>
    </div>
  </nav>