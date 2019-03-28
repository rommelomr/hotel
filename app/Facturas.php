<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Facturas extends Model
{
    protected $fillable = ['id','id_habitacion','id_huesped','id_user'];
}
