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
        $validatedData = $request->validate([
            'image' => 'required',
        ]);

        $image = $request->file('image');
        $extension = $image->getClientOriginalExtension();
        Storage::disk('public')->put($image->getFilename().'.'.$extension,  File::get($image));
        $request->session()->put('image', $image->getFilename().'.'.$extension);
        
        return view('personalinformation');
    }

    public function personalinformationp(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required',
            'job' => 'required',
            'date' => 'required',
            'address' => 'required',
            'mobile' => 'required',
            'email' => 'required',
            'linkedin' => 'required',
        ]);
        $request->session()->put('name', $request->file('name'));
        $request->session()->put('job', $request->file('job'));
        $request->session()->put('date', $request->file('date'));
        $request->session()->put('address', $request->file('address'));
        $request->session()->put('mobile', $request->file('mobile'));
        $request->session()->put('email', $request->file('email'));
        $request->session()->put('linkedin', $request->file('linkedin'));
        
        return view('profile');
    }

    public function profilep(Request $request)
    {
        $validatedData = $request->validate([
            'profile' => 'required',
        ]);
        $request->session()->put('profile', $request->file('profile'));
        
        return view('education');
    }

    public function educationp(Request $request)
    {
        $validatedData = $request->validate([
            'school' => 'required',
            'fschool' => 'required',
            'tschool' => 'required',
            'collage' => 'required',
            'fcollage' => 'required',
            'tcollage' => 'required',
        ]);
        $request->session()->put('school', $request->file('school'));
        $request->session()->put('fschool', $request->file('fschool'));
        $request->session()->put('tschool', $request->file('tschool'));
        $request->session()->put('collage', $request->file('collage'));
        $request->session()->put('fcollage', $request->file('fcollage'));
        $request->session()->put('tcollage', $request->file('tcollage'));
        
        return view('experience');
    }

    public function experiencep(Request $request)
    {
        $validatedData = $request->validate([
            'school' => 'required',
            'collage' => 'required',
        ]);
        $request->session()->put('school', $request->file('school'));
        $request->session()->put('collage', $request->file('collage'));
        
        return view('experience');
    }
}
