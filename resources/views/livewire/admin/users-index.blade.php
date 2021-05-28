<div>
    <div class="card card-primary">
        <div class="card-header">
            <input wire:keydown='limpiar_page' wire:model="search" type="text" class="form-control w-100" placeholder="Escriba un Nombre...">
        </div>
        @if ($users->count())
        <div class="card-body">
            <table class="table">
                <thead>
                    <tr>
                        <th>Id</th>
                        <th>Nombre Completo</th>
                        <th>Número de Nómina</th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($users as $user)
                    <tr>
                        <td>{{ $user->id }}</td>
                        <td>{{ $user->name }}</td>
                        <td>{{ $user->email }}</td>
                        <td width="10px">
                            <a href="{{ route('admin.users.edit',$user) }}" class="btn btn-primary">Editar</a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        <div class="card-foorter">
            {{ $users->links() }}
        </div>
        @else

        <div class="card-body">
            <strong>No hay registros</strong>
        </div>

        @endif

    </div>
</div>
