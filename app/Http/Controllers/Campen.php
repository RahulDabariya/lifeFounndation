<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\CampenModel;

class Campen extends Controller
{
    public function Frontshow(){

        $Campen=CampenModel::select('*')->get();
        return view ('Fronted/index',compact('Campen'));
    }



}
