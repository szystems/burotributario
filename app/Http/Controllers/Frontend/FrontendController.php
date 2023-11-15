<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Config;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
use App\Mail\Contact;
use Session;
use DB;

class FrontendController extends Controller
{
    public function index()
    {
        $config = Config::first();
        return view('frontend.index', compact('config'));
    }



    public function contact()
    {
        $config = Config::first();
        return view('frontend.contact', compact('config'));
    }

    public function sendcontact(Request $request)
    {
        $name = $request->input('name');
        $email = $request->input('email');
        $subject = $request->input('subject');
        $contact_message = $request->input('contact_message');
        $mail_to = 'info@bocacostacoffee.com';
        $config = Config::first();

        Mail::to($mail_to)->send(new Contact($name,$email,$subject,$contact_message,$mail_to,$config));

        Session::flash('message', 'Thank you for contacting us. We will be in touch soon.');
        Session::flash('alert-class', 'alert-success');

        return view('frontend.contact', compact('config'));
    }

}
