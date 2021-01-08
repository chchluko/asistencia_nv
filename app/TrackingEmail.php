<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TrackingEmail extends Model
{
    //

    public function user()
    {
        return $this->belongsTo('App\User');
    }

    public function email()
    {
        return $this->belongsTo('App\Email');
    }
}
