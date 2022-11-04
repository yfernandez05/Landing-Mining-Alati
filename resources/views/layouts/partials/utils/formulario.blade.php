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
                <input type="tel" class="form-control @error('celular') is-invalid @enderror"
                    name="celular" id="celular">
                <span class="invalid-feedback cel-alert-erro" id="celularError" role="alert"></span>
                @error('celular')
                <span class="invalid-feedback cel-alert-erro" role="alert" id="cel-alert-erro">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
                <span id="valid-msg" class="hide text-success">✓ Valido</span>
                <span id="error-msg" class="hide text"></span>                    
                
                

                <!-- <input type="tel" id="celular" placeholder="">
                <span id="valid-msg" class="hide">✓ Valid</span>
                    <span id="error-msg" class="hide"></span> -->
                    
            </div>                                

            <div class="form-group col-12">
                <input type="text" class="form-control @error('profesion') is-invalid @enderror" name="profesion" id="profesion" 
                        value="{{ old('profesion') }}" placeholder="Profesión*">
                <span class="invalid-feedback" id="profesionError" role="alert"></span>
                @error('profesion')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
            </div> 

            <div class="form-group col-12">
                <input type="text" class="form-control @error('empresa') is-invalid @enderror" name="empresa" id="empresa"
                        value="{{ old('empresa') }}" placeholder="Empresa donde labora*">
                <span class="invalid-feedback" id="empresaError" role="alert"></span>
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
            <!-- extras inputs aditionals -->
            <div class="form-group col-12">
                <input name="utm_source" id="utm_source" class="d-none"></input>
                <input name="utm_medium" id="utm_medium" class="d-none"></input>
                <input name="utm_campaign" id="utm_campaign" class="d-none"></input>
                <input name="utm_term" id="utm_term" class="d-none"></input>
                <input name="utm_content" id="utm_content" class="d-none"></input>
                <input name="procedencia" id="procedencia" class="d-none"></input>
                <input name="origen" id="origen" class="d-none"></input>
                <input name="carrera" id="inputCarrera" class="d-none"></input>
                <input id="country" type="text" class="d-none" name="country">
            </div>
        </div>
        <button class="btn btn-send_banner btn-secondary text-subtitulo btn-form mdc-elevation--z2" id="send-form">
            Registrarme
        </button>
    </form>
</div>


