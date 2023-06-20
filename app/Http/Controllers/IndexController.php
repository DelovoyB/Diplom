<?php

namespace App\Http\Controllers;

use App\Http\Requests\ContactFormRequest;
use App\Mail\ContactForm;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class IndexController extends Controller
{
    public function index(){
        return view('welcome');
    }

    public function test(){
        return view('test');
    }

    public function contactForm(ContactFormRequest $request) {

        Mail::to("vdirectdanilu@gmail.com")->send(new ContactForm($request->validated()));

        return redirect(route("home"));
    }
}
