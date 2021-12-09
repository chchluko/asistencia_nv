@extends('adminlte::page')

@section('title', 'Asistencia')

@section('content_header')
<h1 class="m-0 text-dark">Bienvenido</h1>
@stop

@section('content')
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                @can('Checar')
                <a type="link" href="{{ route('checar.index') }}" class="btn btn-outline-primary"><i class="fa fa-fingerprint"></i> Checar</a>
                @endcan
                @can('Justificar')
                <a type="link" href="{{ route('justificar.index') }}" class="btn btn-outline-primary"><i class="fa fa-calendar"></i> Justificar</a>
                @endcan
            </div>
        </div>
    </div>
</div>
@stop
