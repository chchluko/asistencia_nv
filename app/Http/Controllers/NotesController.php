<?php

namespace App\Http\Controllers;

use App\Note;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Crypt;

class NotesController extends Controller
{
    public function index()
    {
        $notes = \App\Note::all();
     /*   $hola = 'paramore';
        $hellow = 'eyJpdiI6InRzRHhwUXg4TWlJMVpFODRcL3J1QTRRPT0iLCJ2YWx1ZSI6IjhxY3RxdE9iMjBNXC9PTVpUVVNyRWZnPT0iLCJtYWMiOiJiYWIzN2M1M2QyNWRhYzc4ZmU3ZTEzMGFkMmYzYTE0NDFmYzhjZjFiMTcxNmZlMjRlZDIyZTIxNjlkMDA4ZDg3In0=';
        $fuego = Crypt::encrypt($hola);
        $fire = Crypt::decrypt($hellow);
        dd($fire);*/

        return view('notes.index', compact('notes'));

    }

    public function destroy($id)
    {
        $nota = Note::findOrFail($id)->delete();

        return redirect()->back();
    }
}
