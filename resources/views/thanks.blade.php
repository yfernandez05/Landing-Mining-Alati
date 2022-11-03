@extends('layouts.landing')

@section('css')
<style>
    footer{
        position: absolute;
    bottom: 0;
    width: 100%;
    }
</style>
@endsection

@section('head')

@endsection


@section('content')

{{--  main-banner start --}}
<header class="main-banner" id="main-banner">
    <div class="container ">
        <div class="row justify-content-between content-main-banner">
            <div class="contenido-banner col-12 col-md-12 mt-5">
                <!-- <div class="d-md-block col-2 mt-5">
                    <img src="{{asset('images\logo.png')}}" alt="Feria" class="img" height="60px">
                </div> -->
                <div class="container col-12 ">
                    <div class="text-banner ">
                        <h2 class="subtitle-banner text-primary">
                            Gracias por registrarte 
                        </h2>
                    </div>
                    <div class="text-banner ">
                        <h2 class="subtitle-banner ">
                            Un asesor(a) especializado se pondrá pronto en contacto contigo. 
                        </h2>
                    </div>
                </div>
                <div class="container">
                    <div class="row">
                        <div class="col-12 text-center text-md-center text-lg-left text-xl-left  pb-5 ">
                         <a class="btn btn-success rounded-pill px-5" href="{{url('/')}}">
                            Ir a inicio
                         </a>                       
                        </div>
                    </div>
                 </div>
            </div>            

        </div>
    </div>
    
    </div>

</header>
{{--  main-banner end --}}

@endsection