<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Storage;

use File;

class CvController extends Controller
{
    public function profilepicture()
    {
        return view('profilepicture');
    }

    public function profilepicturep(Request $request)
    {
        $image = $request->file('image');
        $extension = $image->getClientOriginalExtension();
        Storage::disk('public')->put($image->getFilename().'.'.$extension,  File::get($image));
        $request->session()->put('image', $image->getFilename().'.'.$extension);
        
        return view('personalinformation');
    }
}
