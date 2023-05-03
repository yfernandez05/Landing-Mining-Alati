@php
    $porqueelegirnosIcon = $porqueelegirnosIcon ?? 'images/icons-generals/icon-accesocontinuo.png';
    $porqueelegirnosTitle = $porqueelegirnosTitle ?? 'Titulo';
    $porqueelegirnosDescripcion = $porqueelegirnosDescripcion ?? 'Descripción';
@endphp
<div class="col-12 col-lg-3 border-primary py-5 px-4 info-footer-porquelegirnos">
    <div class="col-4 col-lg-6 m-auto">
        <img src="{{ asset($porqueelegirnosIcon) }}" alt="Gestión" class="img-fluid">
    </div>
    <h4 class="text-primary my-3 text-center text-long" style="word-wrap: break-word;">
        {!! html_entity_decode($porqueelegirnosTitle) !!}
    </h4>
    <p class="m-0 text-secondary text-center">
        {{ $porqueelegirnosDescripcion }}
    </p>
</div>
<!-- <div class="col-12 col-lg-3 border-right border-primary py-5 px-4">
    <div class="col-4 col-lg-7 m-auto">
        <img src="{{asset('images/icons-generals/icon-Internacionalizacion.png')}}" alt="Gestión" class="img-fluid">
    </div>
    <h4 class="text-primary my-3 text-center text-long">
        INTERNACIO-<br>NALIZACIÓN
    </h4>
    <p class="m-0 text-secondary text-center">
        <br>
        Conocerás y dominarás
        estrategias aplicadas como
        solución a problemáticas
        presentadas en unidades
        mineras de los países más
        representativos de Latinoamérica.
    </p>
</div>
<div class="col-12 col-lg-3 border-right border-primary py-5 px-4">
    <div class="col-4 col-lg-7 m-auto">
        <img src="{{asset('images/icons-generals/icon-asesoriaacademica.png')}}" alt="Gestión" class="img-fluid">
    </div>
    <h4 class="text-primary my-3 text-center text-long">
        ASESORÍA ACADÉMICA
    </h4>
    <p class="m-0 text-secondary text-center"><br>
        Acompañamiento constante
        para que inicies, desarrolles
        y culmines tu programa
        satisfactoriamente.
    </p>
</div>
<div class="col-12 col-lg-3 py-5 px-4">
    <div class="col-4 col-lg-6 m-auto">
        <img src="{{asset('images/icons-generals/icon-enfoqueintegral.png')}}" alt="Gestión" class="img-fluid">
    </div>
    <h4 class="text-primary my-3 text-center text-long">
        ENFOQUE INTEGRAL
    </h4>
    <p class="m-0 text-secondary text-center"><br>
        Contenido del programa
        orientado a porenciar tus
        conocimientos técnicos y
        habilidades blandas, acorde
        a las competencias actuales
        de un profesional del sector.
    </p>
</div> -->