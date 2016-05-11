<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class cita extends Model
{
    protected $table = "citas";
    protected $fillable = ['fecha_solicitud','id_cliente'];

    public function cliente()
    {
      return $this->belongsTo('pitaya\cliente');
    }
}
