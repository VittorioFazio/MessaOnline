<!-- Navigation -->
<nav class="navbar navbar-expand-lg navbar-dark bg-dark static-top">
    <div class="container">
      <a class="navbar-brand" href="#">
        <img src="https://placeholder.pics/svg/150x50/888888/EEE/Logo" alt="..." height="36">
      </a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav ms-auto">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="#">Home</a>
          </li>
          {{-- Auth ritorna true se utente loggato, se no null. Invertito con ! --}}
          @guest
          <li class="nav-item">
            <a class="nav-link" href="{{route('login')}}">Login</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{route('register')}}">Register</a>
          </li>
          @endguest

          @auth
          <li class="nav-item">
            <a class="nav-link" href="{{route('videogames.index')}}">Index Videogiochi</a>
          </li>
          <li class="nav-item">
          <li class="nav-item">
            <a class="nav-link" href="{{route('videogames.create')}}">Inserisci videogioco</a>
          </li>
          <li class="nav-item">
            {{-- con Auth recupero anche i dati dell'utente --}}
            <a class="nav-link" href="#">Benvenuto {{Auth::user()->name}}</a>
          </li>
          <li class="nav-item">
            {{-- <a class="nav-link" href="{{route('logout')}}">Logout</a> --}}
            <form action="{{route('logout')}}" method="POST">
              @csrf
              <button class="nav-link">Logout</button>
            </form>
          </li>
          @endauth
        </ul>
      </div>
    </div>
  </nav>
  
  <!-- Page Content -->
  <div class="container">
    <h1 class="mt-4">Logo Nav by Start Bootstrap</h1>
    <p>The logo in the navbar is now a default Bootstrap feature in Bootstrap! Make sure to set the height
      of the logo within the HTML or using CSS. For best results, use an SVG image as your logo.</p>
  </div>