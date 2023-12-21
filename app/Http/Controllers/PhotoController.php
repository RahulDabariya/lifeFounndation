<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\PhotoModel;

class PhotoController extends Controller
{
    public function AddPhoto()
    {
        return view('NewNgo/Photos/PhotoAdd');
    }


    public function PhotoValidet(Request $request)
    {

        $request->validate(
            [
                'image' => 'required',
                'heading' => 'required',
                'about' => 'required',
            ]
        );

        $AddPhoto = new PhotoModel();
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $imagename = rand(10000, 99999) . '.' . $image->getClientOriginalExtension();

            $image->move(public_path('imagess'), $imagename);
        }
        $AddPhoto->image = $imagename;

        $AddPhoto->heading = $request->get('heading');
        $AddPhoto->about = $request->get('about');


        $AddPhoto->save();

        return redirect('PhotoList');
    }



    public function Lists()
    {

        $photo = PhotoModel::all();

        return view('NewNgo/Photos/PhotoList', compact('photo'));
    }

    public function deletes($id){

        PhotoModel::where('id', $id)->delete();
        return redirect('PhotoList');

    }
}
