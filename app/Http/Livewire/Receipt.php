<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Receipt as AppReceipt;
use Illuminate\Support\Facades\Auth;
use Carbon\Carbon;

class Receipt extends Component
{
    public $tipo, $comentario,$finicio,$ffin,$nomina;

    public function render()
    {
        return view('livewire.receipt');
    }

    public function updated($field)
    {
        $this->validate(['nomina' => 'min:2']);
    }

    public function store()
    {
        $rules = [
            'tipo' => 'required',
            'nomina' => 'required',
            'finicio' => 'required',
            'ffin' => 'required',
        ];

        $messages = [
            'tipo.required' => 'El campo Tipo de justificante es Obligatorio',
            'nomina.required' => 'El Número de Nómina es Obligatorio',
            'finicio.required' => 'La fecha de inicio del justificante es Obligatoria',
            'ffin.required' => 'La fecha de fin del justificante es Obligatoria',
        ];

        $this->validate($rules,$messages);

        AppReceipt::create([
            'tipo' => $this->tipo,
            'comentario' => $this->comentario,
            'nomina' => $this->nomina,
            'finicio' => $this->finicio,
            'ffin' => $this->ffin,
            'flag' => 0,
            'user_id' => Auth::id()
        ]);
        //session()->flash('message', "¡Justificante Agregado correctamente! para el Número de Nómina: $this->nomina");
        $this->showAlert();
        $this->resetInput();
    }

    public function showAlert()
    {
        $this->dispatchBrowserEvent('swal', [
            'title' => ' Justificante Guardado correctamente!',
            'timer'=>5000,
            'type'=> 'success',
            //'toast'=>true,
            //'position'=>'top-right'
        ]);
    }

    private function resetInput()
    {
        $this->tipo = null;
        $this->comentario = null;
        $this->nomina = null;
        $this->finicio = null;
        $this->ffin = null;
    }

}
