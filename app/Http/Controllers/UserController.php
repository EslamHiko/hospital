<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Validator;
use App\Education;
use Auth;

class UserController extends Controller
{
    //
    public function profileView()
    {
        $myProfile = 1;
        return view('user.profile', compact(['myProfile']));
    }
    public function settingsView()
    {
        return view('user.settings');
    }
    public function edit(Request $request)
    {
        Auth::user()->name = $request['name'];
        Auth::user()->birth_date = $request['birth_date'];
        Auth::user()->email = $request['email'];
        Auth::user()->password = bcrypt($request['password']);
        Auth::user()->phone_number = $request['phone_number'];
        Auth::user()->fb_link = $request['fb_link'];
        Auth::user()->tw_link = $request['tw_link'];
        Auth::user()->linkedin_link = $request['linkedin_link'];
        Auth::user()->save();
        if (Auth::user()->Doctor) {
            Auth::user()->Doctor->bio = $request['bio'];
            Auth::user()->Doctor->exp_years = $request['exp_years'];
            Auth::user()->Doctor->office_address = $request['office_address'];
            Auth::user()->Doctor->save();
        }
        return redirect('/profile')->with('success', 1);
    }
    public function uploadImg(Request $request)
    {
        $validator = Validator::make($request->all(), [
          'prof-img' => 'mimes:jpeg,bmp,png,jpg,svg',
      ]);
        if ($validator->fails()) {
            return redirect()
                        ->back()
                        ->withErrors($validator);
        }
        $file = $request['prof-img'];
        $destinationPath = '../public/uploads/images';
        $extension = $file->getClientOriginalExtension();
        $img_name = Auth::user()->id.mt_rand(100000, 10000000).'.'.$extension;
        $file->move($destinationPath, $img_name);
        $user = Auth::user();
        $user->prof_img = '\uploads\images'.'\\'.$img_name;
        $user->save();
        return redirect('/profile')->with('success', 1);
    }
    public function addEducation(Request $request)
    {
        Education::create([
        'user_id' => Auth::user()->id,
        'year' => $request['year'],
        'title' => $request['title'],
        'type' => $request['type'],
        'university' => $request['university'],
      ]);
        return redirect('/profile')->with('success', 1);
    }
}
