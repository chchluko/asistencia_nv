@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
<h1>Correo Electronico</h1>
@stop
@section('content')
    <div class="card">
        <div class="card-header">
            <form class="form" action="{{ route('buscarmail') }}" method="GET">
                <div class="form-group">
                    <div class="input-group input-group-lg">
                        <input type="buscarpor" class="form-control form-control-lg {{ $errors->has('buscarpor') ? 'field-error' : '' }}"
                        placeholder="correo@dominio.com" name="buscarpor" value="{{ old('buscarpor') }}">
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
                    <th>Nomina</th>
                    <th>Correo</th>
                    <th>Accion</th>
                </thead>
                <tbody>
                        <tr>
                            <td>{{ $correo->nomina }}</td>
                            <td>{{ $correo->email }}</td>
                            <td>
                                @can('view password')
                                 <a type="link" href="{{ route('emails.show', $correo->id) }}" class="btn btn-default"><i class="fas fa-eye"></i></a>
                                @endcan
                                @can('edit password')
                                 <a type="link" href="{{ route('emails.edit', $correo->id) }}" class="btn btn-default"><i class="fas fa-edit"></i></a>
                                @endcan
                            </td>
                        </tr>
                </tbody>
            </table>
            @endforeach
        </div>
        <!-- /.card-body -->
        <div class="card-footer clearfix">
            @can('create email')
             <a type="link" href="emails/create" class="btn btn-default"><i class="fas fa-plus"></i> Registrar Nuevo Correo</a>
            @endcan
        </div>
      </div>
@stop

@section('css')
    <!--link rel="stylesheet" href="/css/admin_custom.css"-->
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop



