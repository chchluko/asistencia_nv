        <div>
            @if (session()->has('message'))
                <div class="alert alert-success">
                    {{ session('message') }}
                </div>
            @endif
        </div>
        <div class="row">
                <div class="form-group col-6">
                    {!! Form::Label('tipo', 'Tipo de justificante') !!}
                    {!! Form::select('tipo', ['0'=>'Seleccione','1'=>'Cuarentena COVID-19',
                    '2'=>'Otra enfermedad',
                    '3'=>'Familiar contagiado',
                    '4'=>'Grupo de riesgo',
                    '5'=>'Embarazo',
                    '6'=>'Cierre temporal de sucursal/Centro de trabajo',
                    '7'=>'Trabajo a distancia',
                    '9'=>'Revisión Preventiva',
                    '10'=>'Caso Confirmado de COVID-19',
                    '11'=>'Lactancia'], 0, ['class' => 'form-control','wire:model'=>'tipo']) !!}
                    @error('tipo')
                        <span class="help-block">{{ $message }}</span>
                    @enderror
                </div>
                <div class="form-group col-6">
                    {!! Form::Label('nomina', 'Número de Nómina') !!}
                    <input class="form-control {{ $errors->has('nomina') ? ' border-red-500' : 'border-gray-200' }}"
             id="nomina" wire:model="nomina" type="number" placeholder="Nomina del colaborador">
                    @error('nomina')
                        <span class="help-block">{{ $message }}</span>
                    @enderror
                </div>
        </div>
        <div class="row">
            <div class="form-group col-6">
            <label for="finicio">Fecha Inicio</label>
            <input class="form-control {{ $errors->has('finicio') ? ' border-red-500' : 'border-gray-200' }}"
            wire:model="finicio" id="finicio" type="date" placeholder="Fecha de incio...">
            @error('finicio')
            <span class="help-block">{{ $message }}</span>
            @enderror
        </div>
        <div class="form-group col-6">
            <label for="ffin">Fecha Fin</label>
            <input class="form-control {{ $errors->has('ffin') ? ' border-red-500' : 'border-gray-200' }}"
             id="ffin" wire:model="ffin" type="date" placeholder="Fecha Fin">
            @error('ffin')
            <span class="help-block">{{ $message }}</span>
            @enderror
        </div>
        </div>



        <div class="form-group">
          <label for="comentario">Comentario</label>
          <textarea class="form-control {{ $errors->has('comentario') ? ' border-red-500' : 'border-gray-200' }}" id="comentario" rows="3" name="motivo" wire:model="comentario" placeholder="Datos adicionales..."></textarea>
          @error('comentario')
          <span class="help-block">{{ $message }}</span>
          @enderror
        </div>

      <!-- /.card-body -->

        <button wire:click="store()" class="btn btn-primary">Guardar justificación</button>





