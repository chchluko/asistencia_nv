@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
<h1>Cuentas de Correo Electronico</h1>
@stop
@section('content')
<div class="card card-primary">
    <div class="card-header">
      <h3 class="card-title">Alta de cuenta de correo</h3>
    </div>
    <!-- /.card-header -->

    @if ($errors->any())
        <div class="errors alert alert-info alert-dismissible">
            <h5><i class="icon fas fa-info"></i> Aviso!</h5>
            Por favor corrige los siguientes errores.
        </div>
    @endif
    <div class="card-body">
          <form action="{{ route('emails.store') }}" method="POST">
            @csrf
                <input type="hidden" name="accion" value="LoadEmail">
                <div class="form-group row">
                    <label for="email" class="col-sm-2 col-form-label">Correo Electronico</label>
                    <div class="col-sm-10">
                      <input type="email" name="email" class="form-control {{ $errors->has('email') ? 'field-error' : '' }}" id="email" placeholder="email" value="{{ old('email') }}">
                      @if ($errors->has('email'))
                        <span class="error-message">{{ $errors->first('email') }}</span>
                      @endif
                    </div>
                  </div>
                <div class="form-group row">
                    <label for="nomina" class="col-sm-2 col-form-label">Nomina</label>
                    <div class="col-sm-10">
                      <input type="number" name="nomina" class="form-control {{ $errors->has('nomina') ? 'field-error' : '' }}" id="nomina" placeholder="Múmero de Nómina" value="{{ old('nomina') }}">
                      @if ($errors->has('nomina'))
                        <span class="error-message">{{ $errors->first('nomina') }}</span>
                      @endif
                    </div>
                </div>
                <div class="form-group row">
                    <label for="password" class="col-sm-2 col-form-label">Contraseña</label>
                    <div class="col-sm-10">
                      <input type="password" name="password" class="form-control {{ $errors->has('password') ? 'field-error' : '' }}" id="password" placeholder="Nuevo password">
                      @if ($errors->has('password'))
                        <span class="error-message">{{ $errors->first('password') }}</span>
                      @endif
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="password_confirmation" class="col-sm-2 col-form-label">Confirmar Contraseña</label>
                    <div class="col-sm-10">
                      <input type="password" name="password_confirmation" class="form-control" id="password_confirmation" placeholder="Escribalo de nuevo">
                    </div>
                  </div>
                  <div class="form-group row">
                    {!! Form::Label('tipo', 'Tipo',['class' => 'col-sm-2 col-form-label']) !!}
                    <div class="col-md-10">
                        {!! Form::select('tipo', $tipo, 0, ['class' => 'form-control']) !!}
                    </div>
                </div>
    </div>
    <!-- /.card-body -->
    <div class="card-footer clearfix">
        <button type="submit" class="btn btn-info">Guardar</button>
        <a type="link" href="{{ url()->previous() }}" class="btn btn-default float-right">Cancelar</a>
    </div>
</form>
  </div>

@stop

@section('css')
    <!--link rel="stylesheet" href="/css/admin_custom.css"-->
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop
