<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\CampenModel;



class FrontController extends Controller
{

   public function contactus()
   {

      return view('Fronted/Contact');
   }

   public function Abouts()
   {

      return view('Fronted/About');
   }

   public function Blogs()
   {

      return view('Fronted/Blog');
   }


   public function BlogDetali()
   {

      return view('Fronted/BlogDetali');
   }


   public function Campens()
   {

      return view('Fronted/Campens');
   }

   public function Frontshows()
   {

      $Campen = CampenModel::select('*')->get();
      return view('Fronted/Campens', compact('Campen'));
   }


}
