<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactUsFormController extends Controller
{
    public function createForm(Request $request) {
        return view('contact');
      }
    public function ContactUsForm(Request $request) {
        // dd($request)
        // Form validation
        $this->validate($request, [
            'name' => 'required',
            'email' => 'required|email',
            
            'body' => 'required'
         ]);


        //  Send mail to admin
        Mail::send('mail', array(
            'name' => $request->get('name'),
            'email' => $request->get('email'),
            
            'body' => $request->get('body'),
        ), function($body) use ($request){
            $body->from('cphicontactus@evapharma.com');
            $body->to($request->reciever_email, 'Admin')->subject($request->get('email'));
        });

        sleep(6);
        return view('home');
    }

  
}
