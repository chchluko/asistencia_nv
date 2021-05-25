<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Receipt extends Model
{
    protected $fillable = ['tipo','nomina','finicio','ffin','comentario','user_id','flag'];
}
