<?php

namespace App\Http\Controllers;

use App\Mail\Contact;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{

    public function index(){

        return view('contact');
    }

    public function sendEmail(Request $request){


        //validate
        $this->validate($request, [
            'name' => 'required',
            'email' => 'required|email|max:255',
            'company' => 'required',
            'phone' =>'required|numeric',
            'message' =>'required|max:500'
        ]);

        $data = [
            'name' =>$request->name,
            'phone' =>$request->phone,
            'company' =>$request->company,
            'email' =>$request->email,
            'message' =>$request->message,
        ];


        //send email

        Mail::to('advisory@fba.co.ke','FBA CONTACT FORM')->send(new Contact($data));

        return response()->json([
            'data' => $data
        ], 200);
    }
}
