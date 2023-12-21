<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\CampenModel;

class CampenController extends Controller
{

    public function CampenForm()
    {
        return view('NewNgo/Campen/CampenAdd');
    }

    public function CampenVelidet(Request $request)
    {

        $request->validate(
            [
                'name' => 'required',
                'image' => 'required',
                'about' => 'required',
            ]
        );

        $AddPhoto = new CampenModel();

        $AddPhoto->name = $request->get('name');

        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $imagename = rand(10000, 99999) . '.' . $image->getClientOriginalExtension();

            $image->move(public_path('imagess'), $imagename);
        }
        $AddPhoto->image = $imagename;
        $AddPhoto->about = $request->get('about');


        $AddPhoto->save();

        return redirect('CampenList');
    }

    public function CampenShow()
    {

        $Campen = CampenModel::all();

        return view('NewNgo/Campen/CampenList', compact('Campen'));
    }

    public function deleted($id)
    {

        CampenModel::where('id', $id)->delete();
        return redirect('CampenList');
    }
    
    public function Edit($id)
    {
        $data = CampenModel::where('id', $id)->first();
        return view('NewNgo/Campen//CampenEdit', compact('data'));
    }

    public function Edit1(Request $request, $id)
    {


        $request->validate( 
            [
                'name' => 'required',
                'image' => 'required',
                'about' => 'required',
            ]


        );


        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $imagename = rand(10000, 99999) . '.' . $image->getClientOriginalExtension();

            $image->move(public_path('imagess'), $imagename);
        }
       

        CampenModel::where('id', $id)->update([
            'name' => $request->get('name'),
            'image' => $imagename,
            'about' => $request->get('about'),


        ]);
        return redirect('CampenList');
    }

}
