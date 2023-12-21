<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\CampenModel;

class CampenDetalis extends Controller
{
    
    public function showDetails($id)
    {
        $Campen = CampenModel::find($id);

        return view('Fronted/CampenDetali', compact('Campen'));
    }

    public function showCampen($id)
    {
        $Campen = CampenModel::find($id);

        return view('Fronted/hrader', compact('Campen'));
    }


}
