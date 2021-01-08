@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
<h1>Tracking Emails</h1>
@stop
@section('content')
    <div class="card">
        <div class="card-header">
            <form class="form" action="{{ route('auditaremail') }}" method="GET">
                <div class="form-group">
                    <div class="input-group input-group-lg">
                        <input type="buscarpor" class="form-control form-control-lg {{ $errors->has('buscarpor') ? 'field-error' : '' }}"
                        placeholder="Nombre" name="buscarpor" value="{{ old('buscarpor') }}">
                        <div class="input-group-append">
                            <button type="submit" class="btn btn-lg btn-default">
                                <i class="fa fa-search"></i>
                            </button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
        <!-- /.card-header -->
        <div class="card-body">
            @include('partials.flash')
            @foreach ($resultado as $correo)
            <table class="table">
                <thead>
                    <th>Nombre</th>
                    <th>Correo</th>
                    <th>Accion</th>
                </thead>
                <tbody>
                        <tr>
                            <td>{{ $correo->name }}</td>
                            <td>{{ $correo->email }}</td>
                            <td>
                                 <a type="link" href="{{ route('trackingreport',$correo->id) }}" class="btn btn-default"><i class="fas fa-download"></i></a>
                            </td>
                        </tr>
                </tbody>
            </table>
            @endforeach
        </div>
        <!-- /.card-body -->
        <div class="card-footer clearfix">

        </div>
      </div>
@stop

@section('css')
    <!--link rel="stylesheet" href="/css/admin_custom.css"-->
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop



