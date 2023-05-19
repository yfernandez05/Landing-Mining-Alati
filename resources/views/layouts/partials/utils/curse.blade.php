@php
    $backgroundLabel = isset($backgroundLabel) ? $backgroundLabel : 'bg-primary';
    $courseLabel = isset($courseLabel) ? $courseLabel : 'Nombre del curso';
    $courseIcon = isset($courseIcon) ? $courseIcon : 'images/icons-generals/icon-gestion.png';
    $courseDescription = isset($courseDescription) ? $courseDescription : 'Descripción del curso';
    $courseUrl = isset($courseUrl) ? $courseUrl : '#';
@endphp

<div class="col-12 col-lg-4 mb-4">
    <div class="col">
        <div class="row">
            <div class="px-3 py-1 {{$backgroundLabel}} text-white cont-title-course">
                <h5 class="font-secondary text-uppercase m-0">{{ $courseLabel }}</h5>
            </div>
            <a class="shadow d-flex py-3 c-pointer waves text-decoration-none" href="{{ asset($courseUrl) }}">
                <div class="col-3 align-self-center">
                    <img src="{{ asset($courseIcon) }}" alt="Gestión">
                </div>
                <div class="col-8 pr-0 align-self-center">
                    <p class="m-0">
                        {{ $courseDescription }}
                    </p>
                </div>
            </a>
        </div>
    </div>
</div>