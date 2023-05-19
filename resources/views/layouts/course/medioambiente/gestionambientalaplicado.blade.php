@section('title', 'Certifícate con líderes Internacionales en capacitación minera.')

@extends('layouts.landing')

@section('css')
<style>
    body{
        background-color: #ecf5f8 !important;
    }
</style>
@endsection

@section('content')

{{-- Title curso start--}}
@php
    $textTitulo = "Gestión Ambiental Aplicado a Minería";
@endphp
<script>
    localStorage.setItem("textTituloSend", "{{ $textTitulo }}");
</script>
{{-- Title curso end--}}


{{-- Menu Principal startd --}}
<?php
    $itemsSubmenu = [];
?>
@include('layouts.partials.header',['itemsSubmenu' => $itemsSubmenu])
{{-- Menu Principal end --}}

<div class="container-main container-fluid p-0 m-0 other-color">
    {{-- baner header start --}}
    <section id="home" class="bg-orange slider_home flex-column flex-lg-row">
        <div class="container-fluid col-11 content_banner__home m-auto ml-lg-0 ">
            <div class="row">
                <div class="col-12 col-lg-4 cont-img-poople d-none d-lg-block" data-aos="fade-right">
                    <img src="{{asset('images/icons-generals/medioambiente/banner-people-gestion-ambiental.png')}}" alt="Personal educativo">
                </div>

                <div class="col-12 col-md-7 col-lg-4 col-xl-5 text-white text-info_banner">
                    <h5 class="font-secondary d-none d-md-block" data-aos="zoom-out-right" data-aos-duration="800">
                        PROGRAMA DE ESPECIALIZACIÓN MINERA EN
                    </h5>  
                    <h3 data-aos="fade-up" id="title-curso" class="d-none d-md-block text-uppercase">GESTIÓN AMBIENTAL</h3>
                    <div data-aos="fade-up" class="cont-white d-none d-md-block text-uppercase"><h3 class="text-primary" style="text-shadow: none;">APLICADO A MINERÍA</h3></div>
                    <h3 data-aos="fade-up" id="" class="d-block d-md-none text-uppercase">
                        Programa de GESTIÓN AMBIENTAL APLICADO A MINERÍA
                    </h3>
                </div>
                
                <div class="col-sm justify-content-center cont-form" data-aos="fade-left"  data-aos-duration="800">
                    <div class="col-12 col-md-12 col-lg-12 align-self-center p-0">
                        <?php 
                            $codigoProducto = 9;
                            $cursoEstado = false;
                        ?>
                        @include('layouts.partials.utils.formulario', compact('cursoEstado', 'codigoProducto'))  
                    </div>
                </div>
            </div>
        </div>
    </section>
    {{-- baner header end --}}

    {{-- Porque elegirnos start --}}
    <section id="porqueelegirnos" class="section_porqueelegirnos bg-celeste mb-3 py-4 position-relative">
        <div class="points_profesionals-header d-none d-md-block" data-aos="fade-down" data-aos-duration="1500">
            <img src="{{asset('images/points-bg.png')}}" alt="icono circle">
        </div>
        <div class="container shadow cont-float bg-white col-11 col-md-10 col-lg-10 col-xl-9" data-aos="fade-up" data-aos-anchor-placement="top-bottom">
            <div class="row px-3 px-lg-0">
                <div class="col-12 border-bottom border-primary p-4">
                    <div class="row flex-column flex-lg-row p-4">
                        <div class="col-12 col-lg-4 col-12 col-lg-4 text-center text-lg-left" data-aos="fade-up" data-aos-duration="500">
                            <h2 class="text-primary text-uppercase m-0">¿Por qué elegirnos?</h2>
                        </div>
                        <div class="col-12 col-lg-8 text-center text-lg-left mt-3 mt-lg-0 align-self-center" data-aos="fade-up" data-aos-duration="800">
                            <p class="text-secondary m-0">
                                Nuestros programas están diseñados  para potenciar tus
                                habilidades y cumplir con las exigencias del mercado minero.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="d-none d-lg-flex cont-info" data-aos="fade-up">  
                    <?php
                        $porqueelerginosItems = [
                            [
                                'porqueelegirnosIcon' => 'images/icons-generals/icon-metodologia.png',
                                'porqueelegirnosTitle' => 'METODOLOGÍA LEARNING BY DOING',
                                'porqueelegirnosDescripcion' => 'Aprende practicando. Potenciamos tus capacidades de investigación, análisis y toma de decisiones, para alcanzar un nivel óptimo de aprendizaje.',
                            ],
                            [
                                'porqueelegirnosIcon' => 'images/icons-generals/icon-flexibilidad.png',
                                'porqueelegirnosTitle' => 'FLEXIBILIDAD HORARÍA',
                                'porqueelegirnosDescripcion' => 'Administra tu tiempo de estudios de acuerdo a tu necesidad y exigencia laboral',                                
                            ],
                            [
                                'porqueelegirnosIcon' => 'images/icons-generals/icon-plataforma.png',
                                'porqueelegirnosTitle' => 'PLATAFORMA VIRTUAL',
                                'porqueelegirnosDescripcion' => 'Accede a nuestra plataforma desde cualquier dispositivo con conexión a internet',                                
                            ],
                            [
                                'porqueelegirnosIcon' => 'images/icons-generals/icon-aforo.png',
                                'porqueelegirnosTitle' => 'FORO <br>ALUMNO',
                                'porqueelegirnosDescripcion' => 'Interactúa con los docentes y compañeros, a través de cada sesión en vivo',                                
                            ],
                        ];
                    ?>

                    @foreach($porqueelerginosItems as $item)
                        @include('layouts.partials.utils.porqueelegirnos', $item)
                    @endforeach
                </div>
                <div class="porqueleegrinos-movil d-lg-none col-12">
                    @foreach($porqueelerginosItems as $item)
                        @include('layouts.partials.utils.porqueelegirnos', $item)
                    @endforeach
                </div>           
            </div>
        </div>
        <div class="points_profesionals-footer d-none d-md-block" data-aos="fade-up" data-aos-duration="1500">
            <img src="{{asset('images/points-bg.png')}}" alt="icono circle">
        </div>
    </section>
    {{-- Porque elegirnos end --}}

    {{-- modalidades start --}}
    <section id="especialidades" class="section_profesionales bg-celeste mb-0 mb-lg-3 py-4 position-relative">
        <div class="circle_profesionals-header d-block d-lg-block" data-aos="fade-down-right" data-aos-duration="1500">
            <img src="{{asset('images/circle.png')}}" alt="icono circle">
        </div>
        <div class="container bg-info cont-info py-3 shadow position-relative" data-aos="fade-up">        
            <div class="col-12 p-4 mt-1">
                <h2 class="text-center text-white m-auto text-uppercase">
                    Potencia tus conocimientos y alcanza el éxito en el sector Minero
                </h2>                          
            </div>            
        </div>
        <div class="circle_profesionals-footer d-none d-xl-block " data-aos="fade-down-left" data-aos-duration="1500">
            <img src="{{asset('images/circle.png')}}" alt="icono circle">
        </div>

        <div class="container position-relative" data-aos="fade-up" data-aos-duration="1000" >
            <div class="row col-11 m-auto justify-content-center">
                <a class="waves bg-gray col-6 col-md-4 col-lg py-3 py-lg-5 border-right border-primary collapse-item col-collapse d-flex align-items-center flex-lg-wrap text-decoration-none" aria-expanded="true" data-toggle="collapse" data-target="#collapse1">
                    <div class="col-6 col-lg-5 m-auto">
                        <img src="{{asset('images/icons-generals/icon-objetivogeneral.png')}}" alt="gestion" class="img-fluid">
                    </div>
                    <div class="col-12 text-center text-secondary">
                        <p class="m-0">Objetivo General</p>
                    </div>
                </a>
                <a class="waves bg-gray col-6 col-md-4 col-lg py-3 py-lg-5 border-right border-primary collapse-item collapsed col-collapse d-flex align-items-center flex-lg-wrap text-decoration-none" data-toggle="collapse" data-target="#collapse2">
                    <div class="col-6 col-lg-5 m-auto">
                        <img src="{{asset('images/icons-generals/icon-mallacurricular.png')}}" alt="gestion" class="img-fluid">
                    </div>
                    <div class="col-12 text-center text-secondary">
                        <p class="m-0">Malla Curricular</p>
                    </div>
                </a>
                <a class="waves bg-gray col-6 col-md-4 col-lg py-3 py-lg-5 border-right border-primary collapse-item collapsed col-collapse d-flex align-items-center flex-lg-wrap text-decoration-none" data-toggle="collapse" data-target="#collapse3">
                    <div class="col-6 col-lg-5 m-auto">
                        <img src="{{asset('images/icons-generals/icon-beneficios.png')}}" alt="gestion" class="img-fluid">
                    </div>
                    <div class="col-12 text-center text-secondary">
                        <p class="m-0">Beneficios</p>
                    </div>
                </a>
                <a class="waves bg-gray col-6 col-md-4 col-lg py-3 py-lg-5 collapse-item collapsed col-collapse d-flex align-items-center flex-lg-wrap text-decoration-none" data-toggle="collapse" data-target="#collapse4">
                    <div class="col-6 col-lg-5 m-auto">
                        <img src="{{asset('images/icons-generals/icon-cursosonline.png')}}" alt="gestion" class="img-fluid">
                    </div>
                    <div class="col-12 text-center text-secondary">
                        <p class="m-0">Modalidades</p>
                    </div>
                </a>
            </div>
        </div>


         <div class="container my-5 collpase-container-general" data-aos="zoom-in">
        <div class="collapse show" id="collapse1">
            <div class="row course-item">
                <div class="col-12 mb-4">
                    <div class="col">
                        <div class="row">
                            <div class="col-12 shadow-sm bg-white d-flex pb-3 pt-4 px-auto px-sm-5">
                                <div class=" align-self-center">
                                    <h4 class="text-primary">Objetivo General</h4>
                                    <p class="">
                                        Al finalizar el programa el participante estará en la capacidad de 
                                        diseñar estructuras geomecánicas. Asimismo, podrá aplicar criterios 
                                        y metodologías en el análisis de estabilidad de taludes mediante 
                                        métodos analíticos y numéricos, considerando la modelización de 
                                        taludes rocosos con el uso de software.
                                    </p>

                                    <h4 class="text-primary">Dirigido a:</h4>
                                    <p class="">
                                        Profesionales en ingeniería civil, arquitectos o carreras afines, 
                                        gerentes o jefes de proyectos vinculados a proyectos con estabilidad 
                                        de taludes, que desean profundizar los criterios para escoger, diseñar 
                                        y ejecutar distintas alternativas de sostenimiento.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="collapse" id="collapse2">
            <div class="row course-item">
                <div class="col-12 mb-4">
                    <div class="col">
                        <div class="row">
                            <div class="col-12 shadow-sm bg-white d-flex pb-3 pt-4 px-auto px-sm-5">
                                <div class="align-self-center">
                                    <p class="">
                                        <span class="text-primary font-primary">Módulo I</span> - Evaluación de Impacto Ambiental en Minería
                                    </p>
                                    <p class="">
                                        <span class="text-primary font-primary">Módulo II</span> - Técnicas analítica para estudio de la contaminación, minero – ambiental
                                    </p>
                                    <p class="">
                                        <span class="text-primary font-primary">Módulo III</span> - Suelos y Contaminación
                                    </p>
                                    <p class="">
                                        <span class="text-primary font-primary">Módulo IV</span> - Remediación Ambiental
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="collapse" id="collapse3">
            <div class="row course-item">
                <div class="col-12 mb-4">
                    <div class="col">
                        <div class="row">
                            <div class="col-12 shadow-sm bg-white d-flex pb-3 pt-4 px-auto px-sm-5">
                                <div class=" align-self-center">
                                    <ul>
                                        <li>Staff de consultores de amplia trayectoria académica y empresarial en el sector minero.</li>
                                        <li>Enfoque práctico basado en experiencias reales de aplicación en el sector minero.</li>
                                        <li>Intercambio de conocimientos con profesionales vinculados al rubro minero.</li>
                                        <li>Acceso desde cualquier dispositivo (Tablet, Smartphone, laptop, etc.) y de cualquier parte del mundo.</li>
                                        <li>Acceso ilimitado las 24 horas del día al Campus Virtual.</li>
                                        <li>Otros beneficios</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="collapse" id="collapse4">
            <div class="row course-item">
                <div class="col-12 mb-4">
                    <div class="col">
                        <div class="row">
                            <div class="col-12 shadow-sm bg-white d-flex pb-3 pt-4 px-auto px-sm-5">
                                <div class=" align-self-center">
                                    <h4 class="text-primary">VIRTUAL ASÍNCRONO</h4>
                                    <p class="">
                                        Clases Autodirigidas que te permiten un aprendizaje asertivo.                                        
                                    </p>
                                    <p class="">
                                        El alumno podrá apoyarse en grabaciones y materiales didácticos dentro del Campus, teniendo el apoyo 
                                        y soporte del docente en las sesiones en vivo.                                        
                                    </p>
                                    <h4 class="text-primary">ONLINE</h4>
                                    <p class="">
                                        Clases 100% en vivo, cuenta con un horario definido y permite al alumno interactuar entre el docente 
                                        y sus compañeros, reforzando la parte cognitiva con su participación e intercambio de conocimientos.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>        
    </section>
    {{-- metodologias end --}}


    {{-- Expositores start --}}
    <section id="expositores" class="section_expositores mb-3 pt-0 pb-4">
        <div class="container text-center pt-0 pb-4">
            <h2 class="text-primary">Expositores</h2>
        </div>

        <div class="container" data-aos="fade-up" data-aos-duration="600">
            <div class="col slider-expositores text-center">
                <?php
                    $expositores = [
                        [   
                            'expositorImg' => 'images/expositores/isabel-murillo.png',
                            'expositorName' => 'Mg. Isabel Murillo',
                            'expositorDescription' => 'Magister en Ciencias Ambientales por la universidad Agraria la Molina, Licenciada Geógrafa por 
                            la Pontifica Universidad Católica del Perú. Miembro del Consejo Directivo del Colegio de Geógrafos del Perú. Laboró en 
                            la consultora transnacional canadiense Golder Associates Perú, como Líder del Equipo Socioeconómico y estudios ambientales. 
                            Catedrática en reconocidas universidades de Perú. Investigadora y consultora de empresas reconocidas, Actualmente Asesora 
                            de la Alta Dirección del Servicio Nacional de Certificación Ambiental para las Inversiones Sostenibles (SENACE).',                            
                        ],
                        [   
                            'expositorImg' => 'images/expositores/uriel-sanchez.png',
                            'expositorName' => 'Dr. Uriel Sanchez',
                            'expositorDescription' => 'Master en Gerencia Ambiental de la Universidad de los Andes. Master en Evaluación de Impacto Ambiental 
                            del Instituto de Investigaciones Ecológicas, Málaga. Geólogo de la Universidad de Caldas. Gerente de Control Ambiental Consulting 
                            LTDA y Asesor de Sostenibilidad para MPX Colombia S.A. Ha desempeñado la labor de Director de consorcio DJU y DSQ. Ha sido 
                            consultor del Ministerio de Ambiente, Vivienda y Desarrollo Territorial.',                            
                        ],
                        [   
                            'expositorImg' => 'images/expositores/pierre-foy.png',
                            'expositorName' => 'Dr. Pierre Foy',
                            'expositorDescription' => 'Doctor en derecho de la Pontificia Universidad Católica del Perú, Maestría en Derecho Ambiental por la 
                            Universidad del País Vasco y Egresado de la Maestría de Derecho de la PUCP, con mención en Derecho Constitucional. 
                            Catedrático de la facultad de derecho en importantes universidades en el Perú, Pontificia Universidad Católica del Perú, 
                            Universidad Nacional Agraria, Universidad Particular San Martín de Porres y la Universidad Particular Cayetano Heredia. 
                            Asesor, Investigador y fundador del Instituto de Estudios Ambientales de la PUCP (IDEA-PUCP). Consultor en asuntos jurídicos 
                            ambientales y de los recursos naturales (Banco Mundial, AID). Asesor de la Comisión de Servicios a la Ciudad y Medio Ambiente de la 
                            Municipalidad Metropolitana de Lima.',                            
                        ],
                        [   
                            'expositorImg' => 'images/expositores/horst-weis.png',
                            'expositorName' => 'Mba. Horst Weis',
                            'expositorDescription' => 'Doctor en Minería por la Escuela Superior de Ingenieros de Minas de la Univ. Politécnica de Madrid - España. 
                            M.Sc. en Hidrología General y Aplicada por CEDEX del Ministerio de Fomento de España. Ingeniero de Minas por la Univ. 
                            Nac. Jorge Basadre de Tacna - Perú. Especialista en Evaluación técnico-económica de proyectos mineros, evaluación del impacto 
                            ambiental en minería y obra civil, elaboración de planes de cierre. Elaboró un Estudio de factibilidad para la explotación de 
                            calizas en mina Esperanza SAMPERCEMEX Colombia, Rediseño de la Mina de FCM-FORET (Cámaras y Pilares), Recuperación ambiental de 
                            la Bahía Portman Minera Peñarroya España, Estudios de Impacto Ambiental (EIA), Planes de Cierre y Diseños de Plantas de Tratamiento 
                            de Aguas Acidas - Perú. Consultor en Argentina, Bolivia, Chile, Colombia, Cuba, España, México, Perú',                            
                        ],
                    ];
                ?>

                @foreach($expositores as $expoItems)
                        @include('layouts.partials.utils.expositores', $expoItems)
                @endforeach                           
            </div>
        </div>
    </section>
    {{-- Expositores end --}}
    

    {{-- Medios de Pago start --}}
    <section id="mediodepago" class="section_mediopago mb-0 py-4 position-relative bg-white">
        <div class="points_mediopagos d-none d-md-block" data-aos="zoom-in-left" data-aos-duration="1500">
            <img src="{{asset('images/points-bg.png')}}" alt="icono circle">
        </div>
        <div class="container pt-auto mt-4 pt-lg-5 mt-lg-5">
            @include('layouts.partials.utils.mediopago')          
        </div>
    </section>
    {{-- Medios de Pago end --}}


    {{-- Cursos destacados start --}}
    <section id="cursosdestacados" class="d-none section_cursosdestacado bg-white mb-3 pt-4 pb-5 position-relative">
        <div class="container mb-auto mb-lg-5">
            <div class="col-12 p-4 mt-1">
                <h2 class="text-center text-primary m-auto text-uppercase">
                    Cursos Destacados
                </h2>                          
            </div>
            <div class="col-12 m-auto shadow bg-white cont-info px-auto px-lg-0">
                <div class="row justify-content-center slider-cursosdestacados">
                    <?php
                    $cursosDestacados = [
                            [
                                'destacadosUrl' => '#',
                                'destacadosImg' => 'images/destacados-1.jpg',
                                'destacadosDescription' => 'Gestión Ambiental Aplicado a Minería',
                            ],
                        ];
                    ?>

                    @foreach($cursosDestacados as $destacados)
                        @include('layouts.partials.utils.cursosdestacados', $destacados)
                    @endforeach


                                    
                </div>
            </div>          
        </div>
    </section>
    {{-- Cursos destacados end --}}


    {{-- Clientes start --}}
    <section id="clientes" class="section_clientes mb-0 pt-4 pb-5 position-relative" style="background-color: #ecf5f8;">
        <div class="circle_profesionals-header d-block d-lg-none d-xl-block" data-aos="fade-down-right" data-aos-duration="1500">
            <img src="{{asset('images/circle.png')}}" alt="icono circle">
        </div>
        <div class="container text-center py-4">
            <h2 class=""><span class="font-secondary">Nuestros</span> Clientes</h2>
        </div>

        @include('layouts.partials.utils.clientes')

        <div class="circle_profesionals-footer d-none d-lg-block" data-aos="fade-down-left" data-aos-duration="1000">
            <img src="{{asset('images/circle.png')}}" alt="icono circle">
        </div>

    </section>
    {{-- Clientes end --}}
</div>

@endsection