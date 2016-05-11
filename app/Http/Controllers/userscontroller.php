<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class userscontroller extends Controller
{
  public function create()
  {
    //esta seccion aun no esta terminada panel de adminitracion
    return view('admin.users.admin');
  }
}
