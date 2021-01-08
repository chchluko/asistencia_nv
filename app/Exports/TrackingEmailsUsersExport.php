<?php

namespace App\Exports;

use App\TrackingEmail;
use Carbon\Carbon;
use Maatwebsite\Excel\Concerns\FromQuery;
use Maatwebsite\Excel\Concerns\Exportable;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\WithMapping;

class TrackingEmailsUsersExport implements FromQuery, WithMapping, WithHeadings
{
    use Exportable;

    public function forUser(int $user)
    {
        $this->user = $user;
        return $this;
    }

    public function query()
    {
        return TrackingEmail::query()
        ->where('user_id',$this->user);
    }

    public function map($registros) : array {
        return [
            $registros->id,
            $registros->accion,
            $registros->motivo,
            $registros->email->email,
            $registros->user->name,
            Carbon::parse($registros->updated_at)->format('d/m/Y H:i:s'),
            Carbon::parse($registros->created_at)->format('d/m/Y H:i:s'),
        ] ;
    }

    public function headings() : array {
        return [
           '#',
           'Accion',
           'Motivo',
           'Correo',
           'Usuario',
           'Creado',
           'Actualizado'
        ] ;
    }
}
