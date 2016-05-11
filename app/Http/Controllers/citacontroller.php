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
        $consulta = cliente::where('email', $correo)->get(['email']);//haciendo la consulta de campos
        //$validacion = ($consulta -> email);
        //dd($consulta);
        //$validacion = new cliente->get();
        //dd($validacion);
        //$cliente->save();

        $validacion = $consulta[0]->email;
        dd($validacion);
/*
      $date=Carbon::now();
      $date = $date->format('y-m-d');

      $cita = new cita();
      $cita -> fecha_solicitud = $date;
      $cita->cliente_id = 5;
      //dd($cita, $cliente);
      $cliente->save();
      $cita->save();
*/
    }
}
