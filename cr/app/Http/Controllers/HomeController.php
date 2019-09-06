<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Car;
use Mail;
use Session;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */


    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('main.welcome');
    }

     public function getCars()
    {
             $cars = Car:: orderBy('id','desc')->paginate(5);
        return view('main.allcars',compact('cars'));
    }

      public function getAbout()
    {
        return view('main.about');
    }
     public function getServices()
    {
        return view('main.services');
    }

     public function getContact()
    {
        return view('main.contact');
    }


     public function postContact(Request $request)
    {
        $this->validate($request,[
            'email'=>'required|email',
            'subject' => 'min:3',

    ]);

        $data=array(
            'email' =>$request->email,
            'name' => $request->name,
            'subject' => $request->subject,
            'bmessage' => $request->bmessage
             );
        Mail::send('main.emails.contact',$data, function($message) use ($data){

            $message->from($data['email']);
            $message->to('awaisali11159@gmail.com');
            $message->subject($data['subject']);

        });
        Session::flash('success','Mail Has Been Sent Successfully');

 return redirect()->route('home');
    }
 
}
