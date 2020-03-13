<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Mail\SendMail;

use Mail;

class MailSendController extends Controller
{
  public function send(){

  $to = [
      [
          'email' => 'meganeno73@gmail.com',
          'name' => 'Test',
      ]
  ];

  Mail::to($to)->send(new SendMail());
  return redirect('admin/todo/');
  }
}
