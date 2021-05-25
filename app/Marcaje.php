<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Marcaje extends Model
{
    protected $fillable = ['tipo', 'comentario','user_id','flag'];
}
