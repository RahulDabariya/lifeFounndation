<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\PhotoModel;

class Gallery extends Controller
{
    
    public function PhotoShow(){
        $Campen=PhotoModel::select('*')->get();
      return view('Fronted/Gallery/PhotoAdd',compact('Campen'));
     }
}
