<?php

namespace App\Http\Controllers;
use App\Mail\TestMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
class MailController extends Controller
{
    //
    public function sendEmail(){
        $details = [
            'title' => 'Mail from sameer shah',
            'body' => 'This is for testing purpose'
        ];
        Mail::to("shah71211@gmail.com")->send(new TestMail($details));
        return "Email send";
    }
}
