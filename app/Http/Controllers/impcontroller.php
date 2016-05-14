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
      $cliente = new cliente($request->all());
      $correo = $cliente->email;/*Aqui se obtiene el correo del usuario ParentIterator
      realizar una comparacion y no alla repeticoion de datos*/

      $consulta = cliente::where('email', $correo)->get(['id','email']);//haciendo la consulta de campos
      //dd($consulta[0]->email);
      if(($consulta->all()) == null)
      {
        $cliente->save();
        $consulta = cliente::where('email', $correo)->get(['id','email']);
        $consulta[0]->email;
      }
      else
      {
        $consulta[0]->id;
      }

      $date=Carbon::now();
      $date = $date->format('y-m-d');

      $pedido = new pedido();
      $pedido->fechapedido = $date;
      //$pedido->status = 'Pediente'; Se deshabilita ya que en la base de datos se indica que sera un campo por defecto.
      $pedido->archivo= $request['archivo'];
      $pedido->cliente_id = $consulta[0]->id;
      $pedido->save();

    }
}
