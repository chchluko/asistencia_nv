<?php

namespace App\Http\Controllers;

use App\Marcaje;
use Illuminate\Http\Request;

class MarcajeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('marcajes.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Marcaje  $marcaje
     * @return \Illuminate\Http\Response
     */
    public function show(Marcaje $marcaje)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Marcaje  $marcaje
     * @return \Illuminate\Http\Response
     */
    public function edit(Marcaje $marcaje)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Marcaje  $marcaje
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Marcaje $marcaje)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Marcaje  $marcaje
     * @return \Illuminate\Http\Response
     */
    public function destroy(Marcaje $marcaje)
    {
        //
    }
}
