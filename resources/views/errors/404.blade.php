@extends('adminlte::page')

@section('content')
<!-- Main content -->
    <section class="content">
      <div class="error-page">
        <h2 class="headline text-danger">404</h2>

        <div class="error-content">
          <h3><i class="fas fa-exclamation-triangle text-danger"></i> Oops! La pagina no existe.</h3>

          <p>
            La petición no regreso una pagina conocida.
          </p>

        </div>
      </div>
      <!-- /.error-page -->

    </section>
    <!-- /.content -->

@stop

@section('css')
    <!--link rel="stylesheet" href="/css/admin_custom.css"-->
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop
