<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\cliente;
use App\cita;
use Carbon\Carbon;

class citacontroller extends Controller
{
      public function index()
      {
        return view('vcita.scita');
      }

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

      $cita = new cita();
      $cita -> fecha_solicitud = $date;
      $cita->cliente_id = $consulta[0]->id;
      $cita->save();

    }
}
