<?php

namespace App\Http\Controllers;

use App\DoctorMessage;
use Illuminate\Http\Request;
use App\Appointment;
use App\ContactMessage;
use App\User;
use App\TeamMember;

class GuestController extends Controller
{
    //
    public function index()
    {
        return view('guest.home')->with(['section' => 'home']);
    }
    public function contact()
    {
        return view('guest.contact')->with(['section' => 'contact']);
    }
    public function gallery()
    {
        return view('guest.gallery')->with(['section' => 'gallery']);
    }
    public function services()
    {
        return view('guest.services')->with(['section' => 'services']);
    }
    public function team()
    {
        return view('guest.team')->with(['section' => 'team']);
    }
    public function about()
    {
        return view('guest.about')->with(['section' => 'about']);
    }
    public function makeAppointment(Request $request)
    {
        Appointment::create([
        'msg' => $request['msg'],
        'first_name' => $request['first_name'],
        'last_name' => $request['last_name'],
        'email' => $request['email'],
        'phone_number' => $request['phone_number'],
        'gender' => $request['gender'],
        'service' => $request['service'],
        'date' => $request['date'],
        'time' => $request['time'],

      ]);
        return redirect()->back()->with('success', 1);
    }
    public function contactUs(Request $request)
    {
        ContactMessage::create([
      'msg' => $request['msg'],
      'name' => $request['name'],
      'email' => $request['email'],
      'phone_number' => $request['phone_number'],
      'subject' => $request['subject'],
    ]);
        return redirect()->back()->with('success', 1);
    }
    public function sendMsg(Request $request)
    {
        DoctorMessage::create([
  'msg' => $request['msg'],
  'first_name' => $request['first_name'],
  'last_name' => $request['last_name'],
    'email' => $request['email'],
  ]);
        return redirect()->back()->with('success', 1);
    }
    public function member($id)
    {
        $doctor = TeamMember::find($id);
        return view('guest.member', compact(['doctor']));
    }
    public function user($id)
    {
        $user = User::find($id);
        return view('guest.profile', compact(['user']));
    }
    public function search(Request $request)
    {
        $results = User::where('name', 'LIKE', '%'.$request['kw'].'%')->get();
        return view('guest.search', compact(['results']));
    }
}
