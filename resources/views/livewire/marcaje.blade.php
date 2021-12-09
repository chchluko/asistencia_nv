<div class="card">

    <div class="card-header">
      <h3 class="card-title">Marcajes hoy {{ Carbon\Carbon::now()->format('d/m/Y') }}</h3>
    </div>
    <!-- /.card-header -->
    <div class="card-body">
        <table class="table table-bordered">
            <thead>
              <tr>
                <th>Tipo</th>
                <th>Hora</th>
                <th>Sincronizada a TB</th>
              </tr>
            </thead>
            <tbody>
                @forelse ($data as $item)
                <tr class="text-center">
                    <td>@if ($item->tipo == 1)
                        Entrada
                    @elseif($item->tipo == 2)
                        Salida
                    @endif</td>
                    <td>{{ Carbon\Carbon::parse($item->updated_at)->format('H:i:s') }}</td>
                    <td>@if ($item->flag == 0)
                        Aun no Sincronizada
                        @else
                        Sincronizada en TB
                    @endif</td>
                </tr>
            @empty
            <tr class="text-center">
                <td colspan="4" class="py-3 italic">No hay Marcajes</td>
            </tr>
            @endforelse
            </tbody>
          </table>
    </div>
    <!-- /.card-body -->
    <div class="clearfix card-footer">
        @include('livewire.marcajes.create')
    </div>
  </div>
