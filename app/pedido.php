<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class pedido extends Model
{
    protected $table = "pedidos";
    protected $fillable = ['fechapedido', 'status', 'archivo', 'fecha_impresion', 'cliente_id'];

    public function cliente()
    {
      return $this belongsTo('pitaya\cliente');
    }
}
