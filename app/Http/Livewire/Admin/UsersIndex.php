<?php

namespace App\Http\Livewire\Admin;

use App\User;
use Livewire\Component;
use Livewire\WithPagination;

class UsersIndex extends Component
{
    use WithPagination;
    protected $paginationTheme = "bootstrap";
    public $search;

    public function render()
    {
        $users = User::where('name', 'like', '%' . $this->search . '%')
            ->paginate(10);
        return view('livewire.admin.users-index', compact('users'));
    }

    public function limpiar_page()
    {
        $this->reset('page');
    }
}
