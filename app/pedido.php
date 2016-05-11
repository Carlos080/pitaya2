<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class pedido extends Model
{
    protected $table = "pedidos";
    protected $fillable = ['fechapedido', 'status', 'archivo', 'cliente_id'];

    public function cliente()
    {
      return $this->belongsTo('pitaya\cliente');
    }
}
