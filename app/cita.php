<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class cita extends Model
{
    protected $table = "citas";
    protected $fillable = ['fecha_cita', 'hora_cita', 'fecha_solicitud', 'cliente_id'];

    public function cliente()
    {
      return this->belongsTo('pitaya\cliente');
    }
}
