<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class cliente extends Model
{
    protected $table = "clientes";
    protected $fillable = ['nombre', 'apellido', 'telefono', 'email'];

    public function User()
    {
      return $this->belongsToMany('pitaya\User');
    }
}
