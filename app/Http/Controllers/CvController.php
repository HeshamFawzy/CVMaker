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
        $request->session()->put('name', $request->input('name'));
        $request->session()->put('job', $request->input('job'));
        $request->session()->put('date', $request->input('date'));
        $request->session()->put('address', $request->input('address'));
        $request->session()->put('mobile', $request->input('mobile'));
        $request->session()->put('email', $request->input('email'));
        $request->session()->put('linkedin', $request->input('linkedin'));
        
        return view('profile');
    }

    public function profilep(Request $request)
    {
        $validatedData = $request->validate([
            'profile' => 'required',
        ]);
        $request->session()->put('profile', $request->input('profile'));
        
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
        $request->session()->put('school', $request->input('school'));
        $request->session()->put('fschool', $request->input('fschool'));
        $request->session()->put('tschool', $request->input('tschool'));
        $request->session()->put('collage', $request->input('collage'));
        $request->session()->put('fcollage', $request->input('fcollage'));
        $request->session()->put('tcollage', $request->input('tcollage'));
        
        return view('experience');
    }

    public function experiencep(Request $request)
    {

        $arrData[] = array( 
            "workplace"		=> $request['workplace'], 
            "role"		=> $request['role'],
            "fw"		=> $request['fw'],
            "tw"		=> $request['tw'],			
        );
        $request->session()->put('work', $arrData[0]);
        return redirect()->route('cv');
    }

    public function cv()
    {
        $image = session()->get('image');

        $name = session()->get('name');
        $job = session()->get('job');
        $date = session()->get('date');
        $address = session()->get('address');
        $mobile = session()->get('mobile');
        $email = session()->get('email');
        $linkedin = session()->get('linkedin');

        $profile = session()->get('profile');

        $school = session()->get('school');
        $fschool = session()->get('fschool');
        $tschool =  session()->get('tschool');
        $collage =  session()->get('collage');
        $fcollage =  session()->get('fcollage');
        $tcollage  =  session()->get('tcollage');

        $work  =  session()->get('work');
        //dd($image);

        $data = [
            'image' => $image,
            'name' => $name,
            'job' => $job,
            'date' => $date,
            'address' => $address,
            'mobile' => $mobile,
            'email' => $email,
            'linkedin' => $linkedin,
            'profile' => $profile,
            'school' => $school,
            'fschool' => $fschool,
            'tschool' =>  $tschool,
            'collage' =>  $collage ,
            'fcollage' =>  $fcollage,
            'tcollage'  =>  $tcollage,

        ];
        return view('cv')->with('data' , $data);
    }
}
