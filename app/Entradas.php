<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Entradas extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
      'tarifas_id','id_veiculos','entra','sai'
    ];
}
