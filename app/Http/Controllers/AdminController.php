<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\settings;
use App\Service;
use Illuminate\Support\Facades\Validator;
use App\TeamMember;
use App\GalleryPhoto;
use Auth;

class AdminController extends Controller
{
    //
    public function index()
    {
        return view('admin.index');
    }
    public function gallery()
    {
        return view('admin.gallery');
    }
    public function team()
    {
        return view('admin.team');
    }
    public function services()
    {
        return view('admin.services');
    }
    public function settings()
    {
        return view('admin.settings');
    }
    public function appointments()
    {
        return view('admin.appointments');
    }
    public function inbox()
    {
        return view('admin.inbox');
    }

    public function setGeneralSettings(Request $request)
    {
        Settings::updateOrCreate(['name' => 'address'],
                               ['value' => $request['address']]);
        Settings::updateOrCreate(['name' => 'email'],
                              ['value' => $request['email']]);
        Settings::updateOrCreate(['name' => 'phones'],
                               ['value' => $request['phones']]);
        Settings::updateOrCreate(['name' => 'links'],
                               ['value' => $request['links']]);
        Settings::updateOrCreate(['name' => 'fb_link'],
                               ['value' => $request['fb_link']]);
        Settings::updateOrCreate(['name' => 'tw_link'],
                               ['value' => $request['tw_link']]);
        Settings::updateOrCreate(['name' => 'linkedin_link'],
                               ['value' => $request['linkedin_link']]);
        Settings::updateOrCreate(['name' => 'skype_link'],
                               ['value' => $request['skype_link']]);
        return redirect()->back()->with('success', 1);
    }
    public function addService(Request $request)
    {
        Service::create([
          'title' => $request['title'],
          'desc' => $request['description'],
        ]);
        return redirect()->back()->with('success', 1);
    }
    public function addMember(Request $request)
    {
        $validator = Validator::make($request->all(), [
        'prof-img' => 'mimes:jpeg,bmp,png,jpg,svg',
    ]);
        if ($validator->fails()) {
            return redirect()
                      ->back()
                      ->withErrors($validator);
        }
        $file = $request['img'];
        $destinationPath = '../public/uploads/images';
        $extension = $file->getClientOriginalExtension();
        $img_name = Auth::user()->id.'xd'.mt_rand(100000, 10000000).'.'.$extension;
        $file->move($destinationPath, $img_name);
        TeamMember::create([
        'name' => $request['name'],
        'title' => $request['title'],
        'desc' => $request['description'],
        'img_path' => '\uploads\images'.'\\'.$img_name,
        'fb_link' => $request['fb_link'],
        'tw_link' => $request['tw_link'],
        'linkedin_link' => $request['linkedin_link'],
      ]);
        return redirect()->back()->with('success', 1);
    }
    public function addPhotos(Request $request)
    {
        foreach ($request['img'] as $img) {
            $file = $img;
            $destinationPath = '../public/uploads/images';
            $extension = $file->getClientOriginalExtension();
            $img_name = Auth::user()->id.'xd'.mt_rand(100000, 10000000).'.'.$extension;
            $file->move($destinationPath, $img_name);
            GalleryPhoto::create([
          'img_path' => '\uploads\images'.'\\'.$img_name,
        ]);
        }
        return redirect()->back()->with('success', 1);
    }
    public function remove(Request $request)
    {
        $m = TeamMember::find($request['id']);
        $m->delete();
        return redirect()->back()->with('success', 1);
    }
}
