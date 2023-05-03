@section('title', 'Certifícate con líderes Internacionales en capacitación minera.')

@extends('layouts.landing')

@section('css')

@endsection

@section('content')

{{-- Menu Principal startd --}}
@include('layouts.partials.header')
{{-- Menu Principal end --}}

<div class="container-main container-fluid p-0 m-0">
    {{-- baner header start --}}
    <section id="home" class="bg-primary slider_home flex-column flex-lg-row">
        <div class="container-fluid col-11 content_banner__home m-auto ml-lg-0 ">
            <div class="row">
                <div class="col-12 col-lg-4 cont-img-poople d-none d-lg-block" data-aos="fade-right">
                    <img src="{{asset('images/banner-general-people.png')}}" alt="Personal educativo">
                </div>

                <div class="col-12 col-md-7 col-lg-4 col-xl-5 text-white text-info_banner">
                    <h3 data-aos="fade-up" id="title-curso">CONSTRUYE TU FUTURO PROFESIONAL</h3>
                    <div data-aos="fade-up" class="cont-white d-none d-lg-block"><h3 class="text-primary" style="text-shadow: none;">CON LOS MEJORES</h3></div>
                    <h5 class="font-secondary d-none d-lg-block" data-aos="zoom-out-right" data-aos-duration="800">
                        Contamos con programas internacionales
                        en Minería a tu medida
                    </h5>                
                </div>

                <div class="col-sm justify-content-center cont-form" data-aos="fade-left"  data-aos-duration="800">
                    <div class="col-12 col-md-12 col-lg-12 align-self-center p-0">
                        @include('layouts.partials.utils.formulario')
                    </div>
                </div>
            </div>
        </div>
    </section>
    {{-- baner header end --}}

    {{-- Porque elegirnos start --}}
    <section id="porqueelegirnos" class="section_porqueelegirnos bg-white mb-3 py-4 position-relative">
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
                                'porqueelegirnosIcon' => 'images/icons-generals/icon-accesocontinuo.png',
                                'porqueelegirnosTitle' => 'ACCESO <br>CONTINUO Y MULTIDISPOSITIVO',
                                'porqueelegirnosDescripcion' => 'Podrás acceder las 24 horas del día al Campus Virtual, desde cualquier móvil, pc, tablet, etc.',
                            ],
                            [
                                'porqueelegirnosIcon' => 'images/icons-generals/icon-Internacionalizacion.png',
                                'porqueelegirnosTitle' => 'INTERNACIO-<br>NALIZACIÓN',
                                'porqueelegirnosDescripcion' => 'Conocerás y dominarás estrategias aplicadas como solución a problemáticas presentadas en unidades mineras de los países más representativos de Latinoamérica.',                                
                            ],
                            [
                                'porqueelegirnosIcon' => 'images/icons-generals/icon-asesoriaacademica.png',
                                'porqueelegirnosTitle' => 'ASESORÍA ACADÉMICA',
                                'porqueelegirnosDescripcion' => 'Acompañamiento constante para que inicies, desarrolles y culmines tu programa satisfactoriamente.',                                
                            ],
                            [
                                'porqueelegirnosIcon' => 'images/icons-generals/icon-enfoqueintegral.png',
                                'porqueelegirnosTitle' => 'ENFOQUE INTEGRAL',
                                'porqueelegirnosDescripcion' => 'Contenido del programa orientado a porenciar tus conocimientos técnicos y habilidades blandas, acorde a las competencias actuales de un profesional del sector.',                                
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

    {{-- Profesionales de exito start --}}
    <section id="especialidades" class="section_profesionales bg-white mb-3 py-4 position-relative">
        <div class="circle_profesionals-header d-block d-lg-block" data-aos="fade-down-right" data-aos-duration="1500">
            <img src="{{asset('images/circle.png')}}" alt="icono circle">
        </div>
        <div class="container bg-info cont-info py-5 shadow position-relative" data-aos="fade-up">        
            <div class="co-12 p-4 mt-5">
                <h2 class="text-primary text-center text-uppercase p-2 bg-white m-auto">
                    Formamos profesionales de éxito
                </h2>            
            </div>
            <div class="col-12 col-lg-8 m-auto mb-5">
                <p class="mt-2 text-center text-white ">
                    Conoce todos nuestros programas especializados en Gestión, Geología,
                    Minería, Metalúrgia, Seguridad Minera, Medio Ambiente y Responabilidad Social.
                </p>
            </div>
        </div>
        <div class="circle_profesionals-footer d-none d-xl-block " data-aos="fade-down-left" data-aos-duration="1500">
            <img src="{{asset('images/circle.png')}}" alt="icono circle">
        </div>

        <div class="container-fluid position-relative" data-aos="fade-up" data-aos-duration="1000" >
            <div class="row justify-content-center">
                <a class="waves bg-gray col-6 col-md-4 col-lg py-3 py-lg-5 border-right border-primary collapse-item col-collapse d-flex align-items-center flex-lg-wrap text-decoration-none" data-toggle="collapse" data-target="#collapse1">
                    <div class="col-6 col-lg-7 m-auto">
                        <img src="{{asset('images/icons-generals/icon-gestion.png')}}" alt="gestion" class="img-fluid">
                    </div>
                    <div class="col-12 text-center text-secondary">
                        <p class="m-0">Gestión</p>
                    </div>
                </a>
                <a class="waves bg-gray col-6 col-md-4 col-lg py-3 py-lg-5 border-right border-primary collapse-item collapsed col-collapse d-flex align-items-center flex-lg-wrap text-decoration-none" data-toggle="collapse" data-target="#collapse2">
                    <div class="col-6 col-lg-7 m-auto">
                        <img src="{{asset('images/icons-generals/icon-geologia.png')}}" alt="gestion" class="img-fluid">
                    </div>
                    <div class="col-12 text-center text-secondary">
                        <p class="m-0">Geología</p>
                    </div>
                </a>
                <a class="waves bg-gray col-6 col-md-4 col-lg py-3 py-lg-5 border-right border-primary collapse-item collapsed col-collapse d-flex align-items-center flex-lg-wrap text-decoration-none" href="{{route('planeamientominado')}}">
                    <div class="col-6 col-lg-7 m-auto">
                        <img src="{{asset('images/icons-generals/icon-mineria.png')}}" alt="gestion" class="img-fluid">
                    </div>
                    <div class="col-12 text-center text-secondary">
                        <p class="m-0">Minería</p>
                    </div>
                </a>
                <a class="waves bg-gray col-6 col-md-4 col-lg py-3 py-lg-5 border-right border-primary collapse-item collapsed col-collapse d-flex align-items-center flex-lg-wrap text-decoration-none" data-toggle="collapse" data-target="#collapse4">
                    <div class="col-6 col-lg-7 m-auto">
                        <img src="{{asset('images/icons-generals/icon-metalurgia.png')}}" alt="gestion" class="img-fluid">
                    </div>
                    <div class="col-12 text-center text-secondary">
                        <p class="m-0">Metalurgia</p>
                    </div>
                </a>
                <a class="waves bg-gray col-6 col-md-4 col-lg py-3 py-lg-5 border-right border-primary collapse-item collapsed col-collapse d-flex align-items-center flex-lg-wrap text-decoration-none" data-toggle="collapse" data-target="#collapse5">
                    <div class="col-6 col-lg-7 m-auto">
                        <img src="{{asset('images/icons-generals/icon-seguridadminera.png')}}" alt="gestion" class="img-fluid">
                    </div>
                    <div class="col-12 text-center text-secondary">
                        <p class="m-0">Seguridad Minera</p>
                    </div>
                </a>
                <a class="waves bg-gray col-6 col-md-4 col-lg py-3 py-lg-5 border-right border-primary collapse-item collapsed col-collapse d-flex align-items-center flex-lg-wrap text-decoration-none" data-toggle="collapse" data-target="#collapse6">
                    <div class="col-6 col-lg-7 m-auto">
                        <img src="{{asset('images/icons-generals/icon-medioambiente.png')}}" alt="gestion" class="img-fluid">
                    </div>
                    <div class="col-12 text-center text-secondary">
                        <p class="m-0">Medio Ambiente</p>
                    </div>
                </a>
                <a class="waves bg-gray col-6 col-md-4 col-lg py-3 py-lg-5 collapse-item collapsed col-collapse d-flex align-items-center flex-lg-wrap text-decoration-none" data-toggle="collapse" data-target="#collapse7">
                    <div class="col-6 col-lg-7 m-auto">
                        <img src="{{asset('images/icons-generals/icon-responsabilidadsocial.png')}}" alt="gestion" class="img-fluid">
                    </div>
                    <div class="col-12 text-center text-secondary">
                        <p class="m-0">Responsabilidad Social</p>
                    </div>
                </a>           
            </div>
        </div>

        <!-- <div class="container my-5 collpase-container-general" data-aos="zoom-in">
            <div class="collapse show" id="collapse1">
                <div class="row course-item">

                </div>
            </div>

            <div class="collapse" id="collapse2">
                <div class="row course-item">                
                </div>
            </div>

            <div class="collapse" id="collapse3">
                <div class="row course-item">
                    <?php
                        $courses = [
                            [
                                'courseLabel' => 'PEM-ADV',
                                'courseIcon' => 'images/icons-generals/icon-gestion.png',
                                'courseDescription' => 'Planeamiento de Minado Superficial y Subterránea',
                                'courseUrl' => route('planeamientominado'),
                            ],
                        ];
                    ?>

                    @foreach($courses as $course)
                        @include('layouts.partials.utils.curse', $course)
                    @endforeach
                </div>
            </div>

            <div class="collapse" id="collapse4">
                <div class="row course-item">

                </div>
            </div>
        </div> -->
        
    </section>
    {{-- Profesionales de exito end --}}


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