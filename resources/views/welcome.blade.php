@extends('layouts.landing')



@section('css')

@endsection

@section('content')

{{-- Menu Principal startd --}}
@include('layouts.partials.header')
{{-- Menu Principal end --}}


{{-- baner header start --}}
<section id="home" class="bg-secondary slider_home">
    <div class="container-fluid col-11 content_banner__home">
        <div class="row">
            <div class="col-12 col-md-7 col-lg-7 text-white text-info_banner">
                <h3 data-aos="fade-right" id="title-curso">CERTIFÍCATE CON LIDERES INTERNACIONALES EN CAPACITACIÓN MINERA</h3>
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


{{-- Quienes Somos start --}}
<section id="quienessomos" class="section_quienessomos bg-primary mb-3 py-4">
    <div class="container text-center pt-4 d-none d-md-block d-lg-none">
        <h2 class="text-white line-white"><span class="font-secondary">¿Quiénes</span> somos?</h2>
    </div> 
    <div class="container-fluid p-4 mt-3">
        <div class="col cont-fils">
            <div class="col-12 col-md-6 col-lg-4 cont-img d-none d-md-block img-colum" data-aos="fade-right" data-aos-duration="1000">
                <img src="{{asset('images/quienes_somos.png')}}" alt="Quienes Somos" class="img p-3">
            </div>
            <div class="col-12 col-md-12 col-lg-7 cont-info" data-aos="zoom-rigth">
                <div class="container text-center pb-4 d-md-none d-lg-block">
                    <h2 class="text-white line-white"><span class="font-secondary">¿Quiénes</span> somos?</h2>
                </div> 
                <div class="col-12 col-md-6 col-lg-4 cont-img d-block d-md-none">
                    <img src="{{asset('images/quienes_somos.png')}}" alt="Quienes Somos" class="img p-3">
                </div>              
                <span class="text-white my-3 long-text">
                Somos especialistas en la formación de profesionales en Minería.
                </span>
                <div class="text-white my-3">
                    <p>
                    Nuestro objetivo es garantizar un servicio de capacitación con conocimientos sólidos y acorde a las necesidades del mercado. 
                    </p>

                    <div class="col-12 cont-fils text-center my-4">
                        <div class="col-5 col-md-2 img-icons mb-3 mb-md-0">
                            <img src="{{asset('images/icon_certificacion.png')}}" alt="logo quienes somos" class="img">
                        </div>
                        <div class="col-12 col-md-10 col-lg-10 align-self-center">
                            <p class="m-0">
                                <span class="font-primary">CERTIFICACIÓN INTERNACIONAL.</span>
                                Recibirás el Diploma, certificado de estudios y constancia de notas emitidos por Mining Alati.
                            </p>
                        </div>
                    </div>
                    <div class="col-12 cont-fils text-center my-4">
                        <div class="col-5 col-md-2 img-icons mb-3 mb-md-0">
                            <img src="{{asset('images/icon_accesomulti.png')}}" alt="logo quienes somos" class="img">
                        </div>
                        <div class="col-12 col-md-10 col-lg-10 align-self-center">
                            <p class="m-0">
                                <span class="font-primary">ACCESO CONTINUO Y MULTIDISPOSITIVO.</span>
                                Podrás acceder las 24 horas del día al Campus Virtual, desde cualquier móvil, pc, tablet, etc.
                            </p>
                        </div>
                    </div>
                    <div class="col-12 cont-fils text-center my-4">
                        <div class="col-5 col-md-2 img-icons mb-3 mb-md-0">
                            <img src="{{asset('images/icon_asesoriaacad.png')}}" alt="logo quienes somos" class="img">
                        </div>
                        <div class="col-12 col-md-10 col-lg-10 align-self-center">
                            <p class="m-0">
                                <span class="font-primary">ASESORÍA ACADÉMICA.</span>
                                Acompañamiento constante para que inicies, desarrolles y culmines tu programa satisfactoriamente.
                            </p>
                        </div>
                    </div>
                    <div class="col-12 cont-fils text-center my-4">
                        <div class="col-5 col-md-2 img-icons mb-3 mb-md-0">
                            <img src="{{asset('images/icon_software.png')}}" alt="logo quienes somos" class="img">
                        </div>
                        <div class="col-12 col-md-10 col-lg-10 align-self-center">
                            <p class="m-0">
                                <span class="font-primary">USO E INTERPRETACIÓN DE SOFTWARE</span>
                                Nuestros programas especializados incluyen el uso e interpretación de softwares.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
{{-- Quienes Somos end --}}


{{-- Cursos start --}}
<section id="programas" class="section_cursos mb-3 py-4">
    <div class="container text-center py-4">
        <h2 class="text-primary line-primary"><span class="font-secondary">Cursos</span> destacados</h2>
    </div>
    <div class="container py-4" style=" overflow: hidden;">
        <div class="col-12 cont-fils">
            
            <div class="col-12 col-md-4 col-lg-3 curos_1" data-aos="fade-left" data-aos-duration="300">
                <figure class="cont-img_cursos">
                    <img src="{{asset('images/curso_1.png')}}" alt="Costos y Presupuestos en Minería Superficial y Subterránea" class="img">
                    <figcaption class="info-curso">
                        <h2>
                        Costos y Presupuestos en Minería Superficial y Subterránea
                        </h2>
                    </figcaption>
                    <a href="{{route('costosypresupuestos')}}" class="waves"></a>
                </figure>                 
            </div>

            <div class="col-12 col-md-4 col-lg-3 curos_1" data-aos="fade-right" data-aos-duration="300">
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

            <div class="col-12 col-md-4 col-lg-3 curos_1" data-aos="fade-left" data-aos-duration="300">
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

            <div class="col-12 col-md-4 col-lg-3 curos_1" data-aos="fade-right" data-aos-duration="300">
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

            <div class="col-12 col-md-4 col-lg-3 curos_1" data-aos="fade-left" data-aos-duration="300">
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
            
            <div class="col-12 col-md-4 col-lg-3 curos_1" data-aos="fade-right" data-aos-duration="300">
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

            <div class="col-12 col-md-4 col-lg-3 curos_1" data-aos="fade-left" data-aos-duration="300">
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

            <div class="col-12 col-md-4 col-lg-3 curos_1" data-aos="fade-right" data-aos-duration="300">
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


{{-- Porque elegirnos start --}}
<section id="porqueelegirnos" class="section_porqueelegirnos bg-primary mb-3 py-4">
    <div class="container text-center py-4">
        <h2 class="text-white line-white"><span class="font-secondary">¿Por qué</span> elegirnos?</h2>
    </div>
    <div class="container-fluid px-4 px-md-5" data-aos="fade-up" data-aos-duration="550">
        <div class="col-12 cont-fils cont-degrade mb-4">
            <div class="col-12 col-md-6 col-lg-3 cont-icons py-3">
                <div class="icon-img pb-3">
                    <img src="{{asset('images/icon_100k.png')}}" alt="+100k estudiantes de todo el mundo" class="img">
                </div>                    
                <h3 class="text-white text-center">+7200 Alumnos certificados laborando</h3>
                <p class="text-white text-center">Respaldan nuestro compromiso por la educación.</p>
            </div>
            <div class="col-12 col-md-6 col-lg-3 cont-icons py-3">
                <div class="icon-img pb-3">
                    <img src="{{asset('images/icon_empresas.png')}}" alt="+100k estudiantes de todo el mundo" class="img">
                </div>                    
                <h3 class="text-white text-center">+2000 empresas mineras</h3>
                <p class="text-white text-center">Confían en nosotros.</p>
            </div>
            <div class="col-12 col-md-6 col-lg-3 cont-icons py-3">
                <div class="icon-img pb-3">
                    <img src="{{asset('images/icon_9anios.png')}}" alt="+100k estudiantes de todo el mundo" class="img">
                </div>                    
                <h3 class="text-white text-center">+9 años de experiencia y calidad</h3>
                <p class="text-white text-center">Brindando excelencia en nuestros servicios.</p>
            </div>
            <div class="col-12 col-md-6 col-lg-3 cont-icons py-3">
                <div class="icon-img pb-3">
                    <img src="{{asset('images/icon_convenio_inter.png')}}" alt="+100k estudiantes de todo el mundo" class="img">
                </div>                    
                <h3 class="text-white text-center">Convenios internacionales</h3>
                <p class="text-white text-center">con la UPC de España y UC de Ecuador.</p>
            </div>
        </div>
    </div>
</section>
{{-- Porque elegirnos end --}}


{{-- Testimonios start --}}
<section id="testimonios" class="section_testimonios mb-3 py-4">
    <div class="container text-center py-4">
        <h2 class="text-primary line-primary"><span class="font-secondary">Nuestros estudiantes</span> nos recomiendan</h2>
    </div>

    <div class="container-fluid px-4" data-aos="fade-up" data-aos-duration="600">
        <div class="col-12 cont-fils text-center slider-testimonios" >

            <div class="col-11 col-md-10 col-lg-11 m-2 p-3 cont-shadow bg-white rounded">
                <div class="col-12 mb-3">
                    <i class="fas fa-star text-warning text-shadow"></i>
                    <i class="fas fa-star text-warning text-shadow"></i>
                    <i class="fas fa-star text-warning text-shadow"></i>
                    <i class="fas fa-star text-warning text-shadow"></i>
                    <i class="fas fa-star text-warning text-shadow"></i>
                </div>
                <div class="cont-texto">
                    <div class="text-info_testimonio">
                        <p>
                        Me ha gustado interactuar con profesionales de otras nacionalidades y que nos cuenten sus experiencias,
                        esas son cosas que nos nutren y nos muestran que la minería peruana está a la vanguardia.                       
                        </p>
                    </div>
                    <div class="row cont-profile">
                        <div class="col-4">
                            <img src="{{asset('images/profile_testimonio_1.png')}}" alt="testimonio de PAÚL CAJAHUANCA" class="img rounded-circle">
                        </div>
                        <div class="col-8 name-profile">
                            <h4>
                            Ing. Paúl Cajahuanca
                            </h4>                            
                             Jefe de proyectos                            
                        </div>                        
                    </div>
                </div>
            </div>

            <div class="col-11 col-md-10 col-lg-11 m-2 p-3 cont-shadow bg-white rounded">
                <div class="col-12 mb-3">
                    <i class="fas fa-star text-warning text-shadow"></i>
                    <i class="fas fa-star text-warning text-shadow"></i>
                    <i class="fas fa-star text-warning text-shadow"></i>
                    <i class="fas fa-star text-warning text-shadow"></i>
                    <i class="fas fa-star text-warning text-shadow"></i>
                </div>
                <div class="cont-texto">
                    <div class="text-info_testimonio">
                        <p>
                        Gracias al diplomado pude complementar y aprender más acerca de geomecánica, 
                        las clases son buenas y el material de apoyo también. Lo recomiendo totalmente. 
                        Muy agradecido de Mining Alati.                        
                        </p>
                    </div>
                    <div class="row cont-profile">
                        <div class="col-4">
                            <img src="{{asset('images/profile_testimonio_2.png')}}" alt="testimonio de Victor Silva" class="img rounded-circle">
                        </div>
                        <div class="col-8 name-profile">
                            <h4>
                            Ing. Victor Silva
                            </h4>
                            Ing. de modelamiento
                        </div>                        
                    </div>
                </div>
            </div>

            <div class="col-11 col-md-10 col-lg-11 m-2 p-3 cont-shadow bg-white rounded">
                <div class="col-12 mb-3">
                    <i class="fas fa-star text-warning text-shadow"></i>
                    <i class="fas fa-star text-warning text-shadow"></i>
                    <i class="fas fa-star text-warning text-shadow"></i>
                    <i class="fas fa-star text-warning text-shadow"></i>
                    <i class="fas fa-star text-warning text-shadow"></i>
                </div>
                <div class="cont-texto">
                    <div class="text-info_testimonio">
                        <p>
                        Cumplió mis expectativas, el Ing. Carlos (Expositor) tiene mucha experiencia y 
                        sabe compartir sus conocimientos.                        
                        </p>
                    </div>
                    <div class="row cont-profile">
                        <div class="col-4">
                            <img src="{{asset('images/profile_testimonio_3.png')}}" alt="testimonio de Julian Alvares" class="img rounded-circle">
                        </div>
                        <div class="col-8 name-profile">
                            <h4>
                            Julian Alvares
                            </h4>
                            Cliente
                        </div>                        
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>
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