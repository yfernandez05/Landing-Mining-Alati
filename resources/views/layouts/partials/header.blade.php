<nav class="navbar navbar-expand-lg navbar-light bg-primary" id="menuscroll">
  <!-- Container wrapper -->
  <div class="container">
    <!-- Navbar brand -->
    <a class="navbar-brand me-2" href="{{route(Request::route()->getName())}}">
      <img src="{{asset('images/logo-ligth.png')}}"
        height="40" alt="logo" loading="lazy" style="margin-top: -1px;"/>
    </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
  
    <!-- Collapsible wrapper -->
    <div class="collapse navbar-collapse justify-content-end" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item">
                <a class="nav-link text-white" href="{{route(Request::route()->getName())}}">Inicio</a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-white" href="#quienessomos">Quiénes somos</a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-white" href="#cursos">Cursos</a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-white" href="#porqueelegirnos">¿Por qué elegirnos?</a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-white" href="#testimonios">Testimonios</a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-white" href="#clientes">Nuestros Clientes</a>
            </li>
        </ul>
        <!-- <div class="d-flex align-items-center">
            <button type="button" class="btn btn-link px-3 me-2">Login</button>
            <button type="button" class="btn btn-secondary me-3"> Sign up for free </button>
            <a class="btn btn-dark px-3" href="https://github.com/mdbootstrap/mdb-ui-kit" role="button">
                <i class="fab fa-github"></i>
            </a>
        </div> -->
    </div>
  <!-- Container wrapper -->
</nav>
