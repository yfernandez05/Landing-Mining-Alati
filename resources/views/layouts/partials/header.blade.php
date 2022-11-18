@section('head')
<!-- Google Tag Manager -->
    <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
    new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
    j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
    'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
    })(window,document,'script','dataLayer','GTM-MGDKT9P');</script>
<!-- End Google Tag Manager -->

@endsection

<nav class="navbar navbar-expand-lg navbar-light bg-white nav-home" id="menuscroll">
  <!-- Container wrapper -->
    <div class="container">
        <!-- Navbar brand -->
        <a class="navbar-brand me-2" href="{{route(Request::route()->getName())}}">
            <img src="{{asset('images/logo.png')}}"
            height="50" alt="logo" loading="lazy" style="margin-top: -1px;"/>
        </a>
        <button class="navbar-toggler collapsed" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="dark-blue-text">
                <i class="fas fa-bars sandwitch_icon"></i>
            </span>
        </button>
    
        <!-- Collapsible wrapper -->
        <div class="navbar-collapse justify-content-end collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item active">
                    <a class="nav-link text-primary" href="{{route(Request::route()->getName())}}">Inicio</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-primary" href="#quienessomos">¿Quiénes somos?</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-primary" href="#programas">Programas</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-primary" href="#porqueelegirnos">¿Por qué elegirnos?</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-primary" href="#testimonios">Testimonios</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-primary" href="#clientes">Nuestros Clientes</a>
                </li>
            </ul>
        </div>
    </div>
  <!-- Container wrapper -->
</nav>
