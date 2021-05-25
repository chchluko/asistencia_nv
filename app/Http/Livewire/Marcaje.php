<?php

namespace App\Http\Livewire;

use Carbon\Carbon;
use Livewire\Component;
use App\Marcaje as AppMarcaje;
use Illuminate\Support\Facades\Auth;

class Marcaje extends Component
{
        public $tipo, $comentario,$data;

        public function render()
        {
            $this->data = AppMarcaje::where('user_id', Auth::id())
            ->whereDate('updated_at',Carbon::now())
            ->get();
            return view('livewire.marcaje');
        }

        public function store()
        {
            $this->validate([
                'tipo' => 'in:1,2',
            ],['in'=>'Debe seleccionar un tipo de marcaje']);

            AppMarcaje::create([
                'tipo' => $this->tipo,
                'comentario' => $this->comentario,
                'flag' => 0,
                'user_id' => Auth::id()
            ]);
            $this->showAlert();
            $this->resetInput();
        }

        public function showAlert()
        {
            $this->dispatchBrowserEvent('swal', [
                'title' => ' Marcaje Guardado correctamente!',
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
        }
}
