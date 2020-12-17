<?php

namespace App\Http\Controllers;

use App\Email;
use App\TrackingEmail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Crypt;

class TrackingEmailController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
        $secret = Email::findOrFail($request->id);
        $fire = Crypt::decrypt($secret->password);

        $registro = new TrackingEmail();
        $registro->user_id = Auth::id();
        $registro->email_id = $request->id;
        $registro->accion = $request->tipo;
        $registro->motivo = $request->motivo;
        $registro->save();

        if((auth()->user()->hasPermissionTo('view password top')) && ($secret->email_type_id == 1)) {
            return redirect()->route('emails.index')->with('alert', "La contraseña solicitada es TOP: $fire");
        }
        if((auth()->user()->hasPermissionTo('view password vip')) && ($secret->email_type_id == 2)) {
            return redirect()->route('emails.index')->with('alert', "La contraseña solicitada es VIP: $fire");
        }
        if((auth()->user()->hasPermissionTo('view password')) && ($secret->email_type_id == 3)) {
            return redirect()->route('emails.index')->with('alert', "La contraseña solicitada es COL: $fire");
        }
        return redirect()->route('emails.index')->with('alert', "La contraseña solicitada es confidencial");

    /*
        if ($secret->email_type_id < 3) {
          if ((auth()->user()->hasPermissionTo('view password vip')) && ($secret->email_type_id == 2)) {
                return redirect()->route('emails.index')->with('alert', "La contraseña solicitada es: $fire");
            }
            if ((auth()->user()->hasPermissionTo('view password top')) && ($secret->email_type_id == 1)) {
                return redirect()->route('emails.index')->with('alert', "La contraseña solicitada es: $fire");
            }
        } elseif ((auth()->user()->hasPermissionTo('view password')) && ($secret->email_type_id == 3)) {
            return redirect()->route('emails.index')->with('alert', "La contraseña solicitada es: $fire");
        } else {
            return redirect()->route('emails.index')->with('alert', "La contraseña solicitada es confidencial");
        }*/

        //return view('tracking.show')->with('fire', $fire);  //Con sweet alert


    }

    /**
     * Display the specified resource.
     *
     * @param  \App\TrackingEmail  $trackingEmail
     * @return \Illuminate\Http\Response
     */
    public function show(TrackingEmail $trackingEmail)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\TrackingEmail  $trackingEmail
     * @return \Illuminate\Http\Response
     */
    public function edit(TrackingEmail $trackingEmail)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\TrackingEmail  $trackingEmail
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, TrackingEmail $trackingEmail)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\TrackingEmail  $trackingEmail
     * @return \Illuminate\Http\Response
     */
    public function destroy(TrackingEmail $trackingEmail)
    {
        //
    }
}
