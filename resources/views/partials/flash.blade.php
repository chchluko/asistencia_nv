@if ($errors->has('buscarpor'))
<div class="alert alert-info alert-dismissible">
  <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
  <h5><i class="icon fas fa-exclamation-triangle"></i> Resultado!</h5>
  {{ $errors->first('buscarpor') }}
</div>
@endif
@if (session()->has('alert'))
<div class="alert alert-warning alert-dismissible">
  <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
  <h5><i class="icon fas fa-exclamation-triangle"></i> Confidencial!</h5>
  {{ session('alert') }}
</div>
@endif
@if (session()->has('info'))
<div class="alert alert-success alert-dismissible">
<button type="button" class="close" data-dismiss="info" aria-hidden="true">&times;</button>
<h5><i class="icon fas fa-exclamation-triangle"></i> Listo!</h5>
{{ session('info') }}
</div>
@endif
@if (session()->has('success'))
<div class="alert alert-success alert-dismissible">
<button type="button" class="close" data-dismiss="success" aria-hidden="true">&times;</button>
<h5><i class="icon fas fa-exclamation-triangle"></i> Aviso!</h5>
{{ session('success') }}
</div>
@endif
