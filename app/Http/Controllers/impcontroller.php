<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\cliente;
use App\pedido;
use Carbon\Carbon;
class impcontroller extends Controller
{

    public function index()
    {
      return view('vimp.simpresion');
    }

//Queda pendiente el guardado de imagen- y guradados de datos en la tabla pedidos
    public function store(Request $request)
    {
      //dd($request->all());
      $cliente = new cliente($request->all());
      $cliente->save();

      $pedido = new pedido($request->all());
      //\Storage::disk('local') -> put(\File::get($pedido));
      /*$date=Carbon::now();
      $date = $date->format('y-m-d');
      $pedido -> fechapedido = $date;
      $pedido -> archivo = $request['archivo'];
      $pedido -> status = 'Pediente';
      //$pedido -> id_cliente = 2;//dd($pedido);
      //dd($pedido);
      $pedido -> save();*/
    }
}
