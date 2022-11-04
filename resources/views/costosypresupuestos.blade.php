@extends('layouts.landing')


@section('css')
    <style>
        .slider_home{
            background-image: url(../images/bg-costosypresupuestos.jpg);
        }
    </style>
@endsection


@section('content')


{{-- Menu internal strat --}}
@include('layouts.partials.header_internal')
{{-- Menu internal end --}}


{{-- baner header start --}}
<section id="home" class="bg-secondary slider_home">
    <div class="container-fluid col-11 content_banner__home">
        <div class="row">
            <div class="col-12 col-md-7 col-lg-7 text-white text-info_banner">
                <h3 data-aos="fade-right" id="title-curso">COSTOS Y PRESUPUESTOS EN MINERÍA SUPERFICIAL Y SUBTERRÁNEA</h3>
                <!-- <p>El mercado laboral le solicita que se 
                    encuentre altamente capacitado con las 
                    últimas tecnologías de la información. 
                    Especialízate ahora!
                </p> -->
                <h5 class="d-none" data-aos="zoom-out-right" data-aos-duration="800">
                    <b class="text-success">Lidera exitosamente</b> las diferentes áreas de la <b class="text-success">Actividad Minera</b>
                </h5>                
            </div>

            <div class="col-sm justify-content-center cont-form" data-aos="fade-left"  data-aos-duration="800">
                <div class="col-12 col-md-12 col-lg-9 col-xl-8 align-self-center">
                    @include('layouts.partials.utils.formulario')
                </div>
            </div>
        </div>
    </div>
</section>
{{-- baner header end --}}


{{-- Diplomado internacional start --}}
<section id="diplomado" class="section_diplomado bg-primary mb-3 py-4">
    <div class="container text-center pt-4 d-none d-md-block d-lg-none">
        <h2 class="text-white line-white"><span class="font-secondary">Diplomado</span> internacional</h2>
    </div>
    <div class="container-fluid p-4 mt-3">
        <div class="col cont-fils">
            <div class="col-12 col-md-6 col-lg-4 cont-img d-none d-md-block img-colum" data-aos="fade-right" data-aos-duration="1000">
                <img src="{{asset('images/diplomado.png')}}" alt="Quienes Somos" class="img p-3">
            </div>
            <div class="col-12 col-md-12 col-lg-7 cont-info" data-aos="zoom-rigth">
                <div class="container text-center pb-4 d-md-none d-lg-block">
                    <h2 class="text-white line-white"><span class="font-secondary">Diplomado</span> internacional</h2>
                </div> 
                <div class="col-12 col-md-6 col-lg-4 cont-img d-block d-md-none">
                    <img src="{{asset('images/diplomado.png')}}" alt="Quienes Somos" class="img p-3">
                </div>              
                <!-- <span class="text-white my-3 long-text">
                Somos especialistas en la formación de profesionales en Minería.
                </span> -->
                <div class="text-white my-3">
                    <!-- <p>
                    Nuestro objetivo es garantizar un servicio de capacitación con conocimientos sólidos y acorde a las necesidades del mercado. 
                    </p> -->

                    <div class="col-12 cont-fils text-center my-4 p-0">
                        <div id="accordion" class="col-12 p-0">

                            <div class="card mb-2">
                                <div class="card-header p-1 rounded" id="one_card">
                                    <h2 class="mb-0">
                                        <button class="col title-header d-flex align-items-center justify-content-between btn btn-link collapsed" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                        OBJETIVO:
                                        <span class="fa-stack fa-sm cont-icon">
                                            <i class="fas fa-circle fa-stack-2x"></i>
                                            <i class="fas fa-stack-1x fa-inverse fa-fa-minus fa-minus"></i>
                                        </span>
                                        </button>
                                    </h2>
                                </div>
                                <div id="collapseOne" class="collapse show" aria-labelledby="one_card" data-parent="#accordion">
                                    <div class="card-body text-primary px-3">
                                        <p>
                                        El participante contará con herramientas para visualizar el panorama integral de la optimización de costos dentro de la industria minera. 
                                        Asimismo, potenciará su criterio sobre los costos de producción en cada etapa del ciclo de vida del proyecto, desde la exploración, desarrollo, operación, hasta el cierre y post cierre. 
                                        Desarrollará habilidades para identificar procesos improductivos y corregirlos y podrá tomar decisiones que generen valor a la empresa, haciéndolo competitiva y productiva.
                                        </p>
                                    </div>
                                </div>
                            </div>

                            <div class="card mb-2">
                                <div class="card-header p-1 rounded" id="two_card">
                                    <h2 class="mb-0">
                                        <button class="col title-header d-flex align-items-center justify-content-between btn btn-link collapsed" data-toggle="collapse" data-target="#collapse_two" aria-expanded="false" aria-controls="collapse_two">
                                        DIRIGIDO A:
                                        <span class="fa-stack fa-sm cont-icon">
                                            <i class="fas fa-circle fa-stack-2x"></i>
                                            <i class="fas fa-plus fa-stack-1x fa-inverse"></i>
                                        </span>
                                        </button>
                                    </h2>
                                </div>
                                <div id="collapse_two" class="collapse" aria-labelledby="two_card" data-parent="#accordion">
                                    <div class="card-body text-primary px-3">
                                        <p>
                                        Profesionales del sector minero que laboran en áreas de producción, planeamiento de minado, 
                                        procesos, geología, entre otros, además a consultores y especialistas en minería. 
                                        Así también, a aquellos profesionales interesados en profundizar sus conocimientos en este 
                                        aspecto crítico de la industria minera.
                                        </p>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                    
                </div>
            </div>
        </div>
    </div>
</section>
{{-- Diplomado internacional end --}}


{{-- Metodlogia start--}}
<section id="metodologia" class="section_porqueelegirnos bg-white mb-0 py-4">
    <div class="container text-center py-4">
        <h2 class="text-primary line-primary"><span class="font-secondary">Nuestra</span> metodología</h2>
    </div>
    <div class="container-fluid px-4 mb-3 px-md-5" data-aos="fade-up" data-aos-duration="550">
        <div class="col-12 cont-fils cont-degrade mb-4">

            <div class="col-12 col-md-6 col-lg-4 cont-icons py-3">
                <div class="icon-img pb-3">
                    <img src="{{asset('images/icon_modalidad.png')}}" alt="Modalidad mixta" class="img">
                </div>                    
                <h3 class="text-primary text-center">Modalidad mixta</h3>
                <p class="text-primary text-center">Capacitación asincrónica.<br>
                    +20 horas de capacitación online (en vivo con el docente).</p>
            </div>

            <div class="col-12 col-md-6 col-lg-4 cont-icons py-3">
                <div class="icon-img pb-3">
                    <img src="{{asset('images/icon_foro.png')}}" alt="Foro virtual" class="img">
                </div>                    
                <h3 class="text-primary text-center">Foro virtual</h3>
                <p class="text-primary text-center">Interactúa con los docentes.<br>
                Intercambia información con otros profesionales de Latinoamérica.</p>
            </div>

            <div class="col-12 col-md-6 col-lg-4 cont-icons py-3">
                <div class="icon-img pb-3">
                    <img src="{{asset('images/icon_software.png')}}" alt="Software" class="img">
                </div>                    
                <h3 class="text-primary text-center">Software</h3>
                <p class="text-primary text-center">Aprenderás el manejo y potenciarás la interpretación de los resultados para tomar decisiones rápidas y eficientes en tu gestión</p>
            </div>

        </div>
    </div>
</section>
{{-- Metodlogia end--}}


{{-- Software start --}}
<section id="software" class="section_software bg-secondary py-4">
    <div class="container text-center py-4">
        <h2 class="text-primary line-primary"><span class="font-secondary">Software a</span> tu medida</h2>
    </div>
    <div class="container cont-software mb-3" style=" overflow: hidden;">
        <div class="row">
            <div class="col-6 d-flex justify-content-center" data-aos="fade-zoom-in" data-aos-duration="550">
                <div class="img-people pb-3 col-12 col-md-7">
                    <img src="{{asset('images/software_people_1.png')}}" alt="Software a tu medida" class="img" >
                </div>  
            </div>
            <div class="col-6 pl-1 pr-0 cont_info pb-5" data-aos="fade-left" data-aos-duration="550">
                <div class="col-12 col-md-6 cont-icon-text bg-primary row py-1 px-1">
                    <div class="col p-0 icon-soft">
                        <img src="{{asset('images/icono_software_1.png')}}" alt="Software">
                    </div>
                    <div class="col-10 text-soft">
                        <p class="text-white m-0">I BLAST*</p>    
                    </div>
                           
                </div>
            </div>
        </div>        
    </div>
</section>
{{-- Software end --}}


{{-- Porque elegirnos start --}}
<section id="porqueelegirnos" class="section_porqueelegirnos bg-primary mb-3 py-4">
    <div class="container text-center py-4">
        <h2 class="text-white line-white"><span class="font-secondary">¿Por qué</span> elegirnos?</h2>
    </div>
    <div class="container-fluid px-4 px-md-5" data-aos="fade-up" data-aos-duration="550">
        <div class="col-12 cont-fils cont-degrade mb-4">

            <div class="col-12 col-md-6 col-lg-4 cont-icons py-3">
                <div class="icon-img pb-3">
                    <img src="{{asset('images/icon_certificacion.png')}}" alt="Certificación internacional" class="img">
                </div>                    
                <h3 class="text-white text-center">Certificación internacional.</h3>
                <p class="text-white text-center">Recibirás el Diploma, certificado de estudios y constancia de notas emitidos por Mining Alati.</p>
            </div>

            <div class="col-12 col-md-6 col-lg-4 cont-icons py-3">
                <div class="icon-img pb-3">
                    <img src="{{asset('images/icon_accesomulti.png')}}" alt="Acceso continuo y multidispositivo." class="img">
                </div>                    
                <h3 class="text-white text-center">Acceso continuo y multidispositivo.</h3>
                <p class="text-white text-center">Podrás acceder las 24 horas del día al Campus Virtual, desde cualquier móvil, pc, tablet, etc.</p>
            </div>

            <div class="col-12 col-md-6 col-lg-4 cont-icons py-3">
                <div class="icon-img pb-3">
                    <img src="{{asset('images/icon_asesoriaacad.png')}}" alt="Asesoría académica." class="img">
                </div>                    
                <h3 class="text-white text-center">Asesoría académica.</h3>
                <p class="text-white text-center">Acompañamiento constante para que inicies, desarrolles y culmines tu programa satisfactoriamente.</p>
            </div>

        </div>
    </div>
</section>
{{-- Porque elegirnos end --}}


{{-- Cursos start --}}
<section id="programas" class="section_cursos mb-3 py-4">
    <div class="container text-center py-4">
        <h2 class="text-primary line-primary"><span class="font-secondary">Cursos</span> destacados</h2>
    </div>
    <div class="container py-4"  data-aos="fade-up" data-aos-duration="550">
        <div class="col-12 cont-fils internal-cursos" >

            <div class="col-12 col-lg-12 curos_1" >
                <figure class="cont-img_cursos">
                    <img src="{{asset('images/curso_2.png')}}" alt="Planeamiento de Minado y Cálculo de Reservas" class="img">
                    <figcaption class="info-curso">
                        <h2>
                        Planeamiento de Minado y Cálculo de Reservas
                        </h2>
                    </figcaption>
                    <a href="#!" class="waves"></a>
                </figure>                 
            </div>

            <div class="col-12 col-lg-12 curos_1" >
                <figure class="cont-img_cursos">
                    <img src="{{asset('images/curso_3.png')}}" alt="Geoestadística Aplicada a la Estimación de Yacimientos Mineros" class="img">
                    <figcaption class="info-curso">
                        <h2>
                        Geoestadística Aplicada a la Estimación de Yacimientos Mineros
                        </h2>
                    </figcaption>
                    <a href="#!" class="waves"></a>
                </figure>                 
            </div>

            <div class="col-12 col-lg-12 curos_1" >
                <figure class="cont-img_cursos">
                    <img src="{{asset('images/curso_4.png')}}" alt="Plantas de procesamiento de minerales" class="img">
                    <figcaption class="info-curso">
                        <h2>
                        Plantas de procesamiento de minerales
                        </h2>
                    </figcaption>
                    <a href="#!" class="waves"></a>
                </figure>                 
            </div>

            <div class="col-12 col-lg-12 curos_1" >
                <figure class="cont-img_cursos">
                    <img src="{{asset('images/curso_5.png')}}" alt="Hidrogeología Minera Avanzada" class="img">
                    <figcaption class="info-curso">
                        <h2>
                        Hidrogeología Minera Avanzada
                        </h2>
                    </figcaption>
                    <a href="#!" class="waves"></a>
                </figure>                 
            </div>
            
            <div class="col-12 col-lg-12 curos_1" >
                <figure class="cont-img_cursos">
                    <img src="{{asset('images/curso_6.png')}}" alt="Perforación y Voladura en Minería Subterránea" class="img">
                    <figcaption class="info-curso">
                        <h2>
                        Perforación y Voladura en Minería Subterránea
                        </h2>
                    </figcaption>
                    <a href="#!" class="waves"></a>
                </figure>                 
            </div>

            <div class="col-12 col-lg-12 curos_1" >
                <figure class="cont-img_cursos">
                    <img src="{{asset('images/curso_7.png')}}" alt="Ingeniería Geotécnica aplicada a la Minería" class="img">
                    <figcaption class="info-curso">
                        <h2>
                        Ingeniería Geotécnica aplicada a la Minería
                        </h2>
                    </figcaption>
                    <a href="#!" class="waves"></a>
                </figure>                 
            </div>

            <div class="col-12 col-lg-12 curos_1" >
                <figure class="cont-img_cursos">
                    <img src="{{asset('images/curso_8.png')}}" alt="Geomecánica en Minería Subterránea" class="img">
                    <figcaption class="info-curso">
                        <h2>
                        Geomecánica en Minería Subterránea
                        </h2>
                    </figcaption>
                    <a href="#!" class="waves"></a>
                </figure>                 
            </div>

        </div>
    </div>
</section>
{{-- Cursos end --}}


{{-- Testimonios start --}}

{{-- Testimonios end --}}


{{-- Clientes start --}}
<section id="clientes" class="section_clientes mb-3 py-4">
    <div class="container text-center py-4">
        <h2 class="text-primary line-primary"><span class="font-secondary">Nuestros</span> Clientes</h2>
    </div>

    @include('layouts.partials.utils.clientes')

</section>
{{-- Clientes end --}}

@endsection