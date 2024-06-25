<?php

namespace App\Http\Controllers\Dashboard;
use App\Mail\ContactUs;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;


class ContactController extends Controller
{
    public function show()
    {
        return view('dashboard.Layout.Contact');
    }


    public function send(){

        $data = request()->validate([
            'name' => 'required|min:3',
            'email' => 'required|email',
            'message' => 'required|min:3',
        ]);
        Mail::to('ahmet.awad@std.hku.edu.tr')->send(new ContactUs($data));

        //dd('sent');
        return redirect()->back()->with('success', 'Your message has been sent successfully!');
    }
}
