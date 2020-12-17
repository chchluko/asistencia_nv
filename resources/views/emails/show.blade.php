@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Consulta de contraseña del correo</h1>
@stop

@section('content')
    <div class="card card-primary">
        <div class="card-header">
          <h3 class="card-title">Llene los datos que se solicitan</h3>
        </div>
        <!-- /.card-header -->

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
              <form method="POST" action="{{ route('trackingemails.store') }}">
                @csrf
                    <!-- input states -->
                    <div class="form-group">
                        <label>Motivo de la consulta </label>
                        <textarea class="form-control" rows="3" name="motivo" placeholder="Especifique el motivo por el cual necesita la contraseña ..."></textarea>
                    </div>
                    <input type="hidden" name="id" value="{{ $email->id }}">
                    <input type="hidden" name="tipo" value="GetPassword">
        </div>
        <!-- /.card-body -->
        <div class="card-footer clearfix">
            <button type="submit" class="btn btn-info">Consultar</button>
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

