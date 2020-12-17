@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Resultado</h1>
@stop

@section('content')

@stop

@section('css')
    <!--link rel="stylesheet" href="/css/admin_custom.css"-->
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop

@push('js')
<script>
    $(document).ready(function()
    {
        // Read flag from the controller.
        let shouldFire = @json($fire);

        if (shouldFire) {
            Swal.fire('La contraseña es!', shouldFire, 'success');
        }
    });
</script>
@endpush
