@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
<h1>Cuentas de Correo Electronico</h1>
@stop
@section('content')
<div class="card card-primary">
    <div class="card-header">
      <h3 class="card-title">Edicion de cuenta de correo</h3>
    </div>
    <!-- /.card-header -->

    @if ($errors->any())
        <div class="errors alert alert-info alert-dismissible">
            <h5><i class="icon fas fa-info"></i> Aviso!</h5>
            Por favor corrige los siguientes errores.
        </div>
    @endif
    <div class="card-body">
        <div class="col-md-3 col-sm-6 col-12">
            <div class="info-box">
              <span class="info-box-icon bg-info"><i class="far fa-envelope"></i></span>

              <div class="info-box-content">
                <span class="info-box-text">{{ $email->email }}</span>
                <span class="info-box-number">{{ $email->nomina }}</span>
              </div>
              <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
          </div>
          <form action="{{ route('emails.update',$email->id) }}" method="POST">
            @csrf
            @method('PUT')

                <input type="hidden" name="id" value="{{ $email->id }}">
                <input type="hidden" name="tipo" value="UpdatePassaword">

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
                  <div class="form-group">
                      <label>Motivo de la actualización </label>
                      <textarea class="form-control {{ $errors->has('motivo') ? 'field-error' : '' }}" rows="3" name="motivo" placeholder="Especifiqu el motivo por el cual necesita la contraseña ...">{{ old('motivo') }}</textarea>
                        @if ($errors->has('motivo'))
                            <span class="error-message">{{ $errors->first('motivo') }}</span>
                        @endif
                  </div>
    </div>
    <!-- /.card-body -->
    <div class="card-footer clearfix">
        <button type="submit" class="btn btn-info">Actualizar</button>
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
