@extends('layouts.landing')

@section('content')

{{-- baner header start --}}
<section id="home" class="bg-secondary slider_home">
    <div class="container-fluid col-11 content_banner__home">
        <div class="row">
            <div class="col-12 col-md-7 col-lg-7 text-white text-info_banner">
                <h3>CERTIFÍCATE CON LIDERES INTERNACIONALES EN CAPACITACIÓN MINERA</h3>
                <!-- <p>El mercado laboral le solicita que se 
                    encuentre altamente capacitado con las 
                    últimas tecnologías de la información. 
                    Especialízate ahora!
                </p> -->
                <h5>
                <b class="text-success">Lidera exitosamente</b> las diferentes áreas de la <b class="text-success">Actividad Minera</b>
                </h5>                
            </div>

            <div class="col-sm justify-content-center cont-form">
                <div class="col-12 col-md-12 col-lg-9 col-xl-8 align-self-center">
                    <div class="form-banner mdc-elevation--z2">
                        <h2 class="title-form-banner text-secondary text-center">Inscríbete aquí</h2>

                        @if (session('success'))
                        <div class="alert alert-success alert-dismissible fade show" role="alert">
                            {{ session('success') }}
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        @endif
                        @if (session('failed'))
                        <div class="alert alert-danger alert-dismissible fade show" role="alert">
                            {{ session('failed') }}
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        @endif
                        @if (session('warning'))
                        <div class="alert alert-warning alert-dismissible fade show" role="alert">
                            {{ session('warning') }}
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        @endif

                        <form method="POST" name="fomr1" action="{{ route('store') }}" id="frmCliente">
                            @csrf

                            <div class="form-row">
                                <div class="form-group col-12">
                                    <input type="text" class="form-control @error('nombres') is-invalid @enderror"
                                        name="nombres" id="nombres" value="{{ old('nombres') }}" placeholder="Nombres y Apellidos*">
                                    <span class="invalid-feedback" id="nombresError" role="alert"></span>
                                    @error('nombres')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>                            

                                <div class="form-group col-12">
                                    <input type="email" class="form-control @error('email') is-invalid @enderror"
                                        name="email" id="email" value="{{ old('email') }}" placeholder="E-mail*" />
                                    <span class="invalid-feedback" id="emailError" role="alert"></span>
                                    @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>

                                <div class="form-group col-12">
                                    <input type="text" class="form-control pl-7 @error('celular') is-invalid @enderror"
                                        name="celular" id="celular" value="{{ old('celular') }}" placeholder="Celular*">
                                    <span class="invalid-feedback" id="celularError" role="alert"></span>
                                        @error('celular')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror

                                    <!-- <input type="tel" id="celular" placeholder="">
                                    <span id="valid-msg" class="hide">✓ Valid</span>
                                        <span id="error-msg" class="hide"></span> -->
                                </div>                                

                                <div class="form-group col-12">
                                    <input type="text" class="form-control @error('profesion') is-invalid @enderror" name="profesion" 
                                            value="{{ old('profesion') }}" placeholder="Profesión*">
                                    @error('profesion')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div> 

                                <div class="form-group col-12">
                                    <input type="text" class="form-control @error('empresa') is-invalid @enderror" name="empresa" 
                                            value="{{ old('empresa') }}" placeholder="Nombre de empresa">
                                    @error('empresa')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div> 

                                <div class="form-group col-12">
                                    <div class="custom-control custom-checkbox @error('terminos') is-invalid @enderror">
                                        <input type="checkbox" class="custom-control-input" name="terminos" id="terminos"
                                            checked>
                                        <label class="custom-control-label terms-conditions" for="terminos">
                                            <span class="text-dark">Ud. acepta haber leído y aceptado </span>
                                            <a href="#" class="text-secondary" data-toggle="modal" data-target="#modalpoliticas">
                                                la Política de Privacidad.
                                            </a>
                                        </label>
                                    </div>
                                    @error('terminos')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="form-group col-12">
                                    <input name="utm_source" id="utm_source" class="d-none"></input>
                                    <input name="utm_medium" id="utm_medium" class="d-none"></input>
                                    <input name="utm_campaign" id="utm_campaign" class="d-none"></input>
                                    <input name="utm_term" id="utm_term" class="d-none"></input>
                                    <input name="utm_content" id="utm_content" class="d-none"></input>
                                    <input name="procedencia" id="procedencia" class="d-none"></input>
                                </div>
                            </div>
                            <button class="btn btn-send_banner btn-secondary text-subtitulo btn-form mdc-elevation--z2">
                                Registrarme
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
{{-- baner header end --}}


{{-- Quienes Somos start --}}
<section id="quienessomos" class="section_quienessomos bg-primary mb-3 py-4">
    <div class="container text-center pt-4 d-none d-md-block d-lg-none">
        <h2 class="text-white line-white"><span class="font-secondary">Quiénes</span> somos</h2>
    </div> 
    <div class="container-fluid p-4 mt-3">
        <div class="col cont-fils">
            <div class="col-12 col-md-6 col-lg-4 cont-img d-none d-md-block img-colum">
                <img src="{{asset('images/quienes_somos.png')}}" alt="Quienes Somos" class="img p-3">
            </div>
            <div class="col-12 col-md-12 col-lg-7 cont-info ">
                <div class="container text-center pb-4 d-md-none d-lg-block">
                    <h2 class="text-white line-white"><span class="font-secondary">Quiénes</span> somos</h2>
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
                            <img src="{{asset('images/icon_convenio_inter.png')}}" alt="logo quienes somos" class="img">
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
                            <img src="{{asset('images/icon_100k.png')}}" alt="logo quienes somos" class="img">
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
                            <img src="{{asset('images/icon_9anios.png')}}" alt="logo quienes somos" class="img">
                        </div>
                        <div class="col-12 col-md-10 col-lg-10 align-self-center">
                            <p class="m-0">
                                <span class="font-primary">ASESORÍA ACADÉMICA.</span>
                                Acompañamiento constante para que inicies, desarrolles y culmines tu programa satisfactoriamente.
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
        <h2 class="text-primary line-primary"><span class="font-secondary">Nuestros cursos</span> especializados</h2>
    </div>
    <div class="container-fluid p-4 ">
        <div class="col-12 cont-fils">
            <div class="col-12 col-md-3 col-lg-4 curos_1 ">
                <figure class="cont-img_cursos">
                    <img src="{{asset('images/curso_1.png')}}" alt="Seguridad y Salud En El Trabajo ISO 45001" class="img">
                    <figcaption class="info-curso">
                        <h2>
                        Seguridad y Salud En El Trabajo ISO 45001
                        </h2>
                    </figcaption>
                    <a href="#!" class="waves"></a>
                </figure>                 
            </div>

            <div class="col-12 col-md-3 col-lg-4 curos_1 ">
                <figure class="cont-img_cursos">
                    <img src="{{asset('images/curso_2.png')}}" alt="Gestión Estratégica de Finanzas Costos y Análisis Gerencial" class="img">
                    <figcaption class="info-curso">
                        <h2>
                        Gestión Estratégica de Finanzas Costos y Análisis Gerencial
                        </h2>
                    </figcaption>
                    <a href="#!" class="waves"></a>
                </figure>                 
            </div>

            <div class="col-12 col-md-3 col-lg-4 curos_1 ">
                <figure class="cont-img_cursos">
                    <img src="{{asset('images/curso_3.png')}}" alt="Supply Chain Management Aplicado a Minería" class="img">
                    <figcaption class="info-curso">
                        <h2>
                        Supply Chain Management Aplicado a Minería
                        </h2>
                    </figcaption>
                    <a href="#!" class="waves"></a>
                </figure>                 
            </div>

            <div class="col-12 col-md-3 col-lg-4 curos_1 ">
                <figure class="cont-img_cursos">
                    <img src="{{asset('images/curso_4.png')}}" alt="Gestión de la Seguridad" class="img">
                    <figcaption class="info-curso">
                        <h2>
                        Gestión de la Seguridad
                        </h2>
                    </figcaption>
                    <a href="#!" class="waves"></a>
                </figure>                 
            </div>

            <div class="col-12 col-md-3 col-lg-4 curos_1 ">
                <figure class="cont-img_cursos">
                    <img src="{{asset('images/curso_5.png')}}" alt="Identificación de Peligros, Evaluación de Riesgos y Medidas de Control (IPERC)" class="img">
                    <figcaption class="info-curso">
                        <h2>
                            Identificación de Peligros, Evaluación de Riesgos y Medidas de Control (IPERC)
                        </h2>
                    </figcaption>
                    <a href="#!" class="waves"></a>
                </figure>                 
            </div>

            <div class="col-12 col-md-3 col-lg-4 curos_1 ">
                <figure class="cont-img_cursos">
                    <img src="{{asset('images/curso_6.png')}}" alt="Higiene Ocupacional Disposición de Residuos Sólidos" class="img">
                    <figcaption class="info-curso">
                        <h2>
                        Higiene Ocupacional Disposición de Residuos Sólidos
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
    <div class="container-fluid px-4 px-md-5">
        <div class="col-12 cont-fils cont-degrade">
            <div class="col-12 col-md-6 col-lg-6 cont-icons py-3">
                <div class="icon-img pb-3">
                    <img src="{{asset('images/icon_100k.png')}}" alt="+100k estudiantes de todo el mundo" class="img">
                </div>                    
                <h3 class="text-white text-center">+7200 Alumnos certificados laborando</h3>
                <p class="text-white text-center">Respaldan nuestro compromiso por la educación</p>
            </div>
            <div class="col-12 col-md-6 col-lg-6 cont-icons py-3">
                <div class="icon-img pb-3">
                    <img src="{{asset('images/icon_9anios.png')}}" alt="+100k estudiantes de todo el mundo" class="img">
                </div>                    
                <h3 class="text-white text-center">+2000 empresas mineras</h3>
                <p class="text-white text-center">Confían en nosotros</p>
            </div>
            <div class="col-12 col-md-6 col-lg-6 cont-icons py-3">
                <div class="icon-img pb-3">
                    <img src="{{asset('images/icon_9anios.png')}}" alt="+100k estudiantes de todo el mundo" class="img">
                </div>                    
                <h3 class="text-white text-center">+9 años de experiencia y calidad</h3>
                <p class="text-white text-center">Brindando excelencia en nuestros servicios</p>
            </div>
            <div class="col-12 col-md-6 col-lg-6 cont-icons py-3">
                <div class="icon-img pb-3">
                    <img src="{{asset('images/icon_convenio_inter.png')}}" alt="+100k estudiantes de todo el mundo" class="img">
                </div>                    
                <h3 class="text-white text-center">Convenios internacionales</h3>
                <p class="text-white text-center">con la UPC de España y UC de Ecuador</p>
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

    <div class="container-fluid px-4">
        <div class="col-12 cont-fils text-center slider-testimonios" >

            <div class="col-11 col-md-10 col-lg-11 m-1 p-3 cont-shadow">
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

            <div class="col-11 col-md-10 col-lg-11 m-1 p-3 cont-shadow">
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

            <div class="col-11 col-md-10 col-lg-11 m-1 p-3 cont-shadow">
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
                            </h3>
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

    <div class="container-fluid px-4 d-flex justify-content-center">
        <div class="slider-clientes col-12 col-md-12 col-lg-10">        
            <div class="col-11 col-md-10 col-lg-11 m-1 p-3">
                <div class="cont-imgs">
                    <div class="img_clientes col-12">
                        <img src="{{asset('images/cliente_1.png')}}" alt="clientes" class="img">
                    </div>                
                </div>
            </div>
            <div class="col-11 col-md-10 col-lg-11 m-1 p-3">
                <div class="cont-imgs">
                    <div class="img_clientes col-12">
                        <img src="{{asset('images/cliente_2.png')}}" alt="clientes" class="img">
                    </div>                
                </div>
            </div>
            <div class="col-11 col-md-10 col-lg-11 m-1 p-3">
                <div class="cont-imgs">
                    <div class="img_clientes col-12">
                        <img src="{{asset('images/cliente_3.png')}}" alt="clientes" class="img">
                    </div>                
                </div>
            </div>
            <div class="col-11 col-md-10 col-lg-11 m-1 p-3">
                <div class="cont-imgs">
                    <div class="img_clientes col-12">
                        <img src="{{asset('images/cliente_4.png')}}" alt="clientes" class="img">
                    </div>                
                </div>
            </div>
            <div class="col-11 col-md-10 col-lg-11 m-1 p-3">
                <div class="cont-imgs">
                    <div class="img_clientes col-12">
                        <img src="{{asset('images/cliente_5.png')}}" alt="clientes" class="img">
                    </div>                
                </div>
            </div>
            <div class="col-11 col-md-10 col-lg-11 m-1 p-3">
                <div class="cont-imgs">
                    <div class="img_clientes col-12">
                        <img src="{{asset('images/cliente_6.png')}}" alt="clientes" class="img">
                    </div>                
                </div>
            </div>
            <div class="col-11 col-md-10 col-lg-11 m-1 p-3">
                <div class="cont-imgs">
                    <div class="img_clientes col-12">
                        <img src="{{asset('images/cliente_7.png')}}" alt="clientes" class="img">
                    </div>                
                </div>
            </div>
            <div class="col-11 col-md-10 col-lg-11 m-1 p-3">
                <div class="cont-imgs">
                    <div class="img_clientes col-12">
                        <img src="{{asset('images/cliente_8.png')}}" alt="clientes" class="img">
                    </div>                
                </div>
            </div>
            <div class="col-11 col-md-10 col-lg-11 m-1 p-3">
                <div class="cont-imgs">
                    <div class="img_clientes col-12">
                        <img src="{{asset('images/cliente_9.png')}}" alt="clientes" class="img">
                    </div>                
                </div>
            </div>
            <div class="col-11 col-md-10 col-lg-11 m-1 p-3">
                <div class="cont-imgs">
                    <div class="img_clientes col-12">
                        <img src="{{asset('images/cliente_10.png')}}" alt="clientes" class="img">
                    </div>                
                </div>
            </div>
            <div class="col-11 col-md-10 col-lg-11 m-1 p-3">
                <div class="cont-imgs">
                    <div class="img_clientes col-12">
                        <img src="{{asset('images/cliente_11.png')}}" alt="clientes" class="img">
                    </div>                
                </div>
            </div>
            <div class="col-11 col-md-10 col-lg-11 m-1 p-3">
                <div class="cont-imgs">
                    <div class="img_clientes col-12">
                        <img src="{{asset('images/cliente_12.png')}}" alt="clientes" class="img">
                    </div>                
                </div>
            </div>
        </div>
    </div>

</section>
{{-- Clientes end --}}


@endsection