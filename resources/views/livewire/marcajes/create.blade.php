<div class="card card-primary">
    <div class="card-header">
      <h3 class="card-title">Agregar Marcaje</h3>
    </div>
    <!-- /.card-header -->
    <!-- form start -->
      <div class="card-body">
        <div class="form-group">
            {!! Form::Label('tipo', 'Tipo') !!}
            {!! Form::select('tipo', ['0'=>'Seleccione','1'=>'Entrada','2'=>'Salida'], 0, ['class' => 'form-control','wire:model'=>'tipo']) !!}
            @error('tipo')
                <span class="help-block">{{ $message }}</span>
            @enderror
        </div>
        <div class="form-group">
          <label for="comentario">Comentario</label>
          <textarea class="form-control {{ $errors->has('comentario') ? ' border-red-500' : 'border-gray-200' }}" id="comentario" rows="3" name="motivo" wire:model="comentario" placeholder="Datos adicionales..."></textarea>
          @error('comentario')
          <span class="help-block">{{ $message }}</span>
          @enderror
        </div>
      </div>
      <!-- /.card-body -->
      <div class="card-footer">
        <button wire:click="store()" class="btn btn-primary">Agregar Marcaje</button>
      </div>
  </div>
