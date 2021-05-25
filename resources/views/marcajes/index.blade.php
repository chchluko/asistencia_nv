@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Checar</h1>
@stop

@section('content')
    @can('Checar')
        @livewire('marcaje')
    @endcan
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> window.addEventListener('swal',function(e){
        Swal.fire(e.detail);
    }); </script>
@stop
