<?php

namespace App\Http\Controllers;

use App\Models\individualProfile;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class IndividualProfileCompletionController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke(Request $request)
    {   
        function generateFleetID()
        {
            $generated_fleet_id = mt_rand();
            $generated_fleet_id = $generated_fleet_id;
            if (!empty(DB::table('individual_profiles')->where('fleet_id', $generated_fleet_id)->first(['id']))) {
               return generateFleetID();
            }
            return $generated_fleet_id;
        }


        $profilepicturepath = time(). '-'. $request->firstname.'.'. $request->profilePicture->extension();
        $request->profilePicture->move(public_path('images/profile'), $profilepicturepath);  
        $certificatepath = time(). '-'. $request->firstname.'.'. $request->certificate->extension();
        $request->certificate->move(public_path('images/certs'), $certificatepath);


        $request->validate([
            'dateofbirth' => ['required', 'string', 'max:255'],
            'email' => ['required', 'email', 'max:255'],
            'mobile_number' => ['required'],
            'firstname' => ['required'],
            'lastname' => ['required',],
            'homeaddress' => ['required','max:255'],
            'citiy' => ['required','max:255'],
            'country' => ['required','max:255'],
            'location' => ['required','max:255'],
            'myself' => ['required','max:255'],
            'profession' => ['required','max:255'],
            'experince' => ['required','max:255'],
            'careercommence' => ['required','max:255'],
            'language' => ['required','max:255'],
            'profile_picture' => ['image','mimes:jpg,png','nullable'],
            'certificates' => ['image','mimes:jpg,png,jpeg','nullable'],
        ]);

        $profile_infor = individualProfile::create([
            'date_of_birth' => $request->dateofbirth,
            'mobile_number' => $request->mobile_number,
            'fullname' => $request->firstname . " " . $request->lastname,
            'address' => $request->homeaddress,
            'city' => $request->citiy,
            'country' => $request->country,
            'location' => $request->location,
            'about_me' => $request->myself,
            'professsion' => $request->profession,
            'experince_level' => $request->experince,
            'carrer_commence' => $request->careercommence,
            'languages' => $request->language,
            'school_name' => $request->schoolname,
            'completionyear' => $request->completionyear,
            'profile_picture' => $profilepicturepath,
            'certificates' => $certificatepath,
            'fleet_id' => generateFleetID().$request->lastname,
            'user_id' => Auth::id(),
        ]);

        return redirect()->route('dashboard');
    }
}
