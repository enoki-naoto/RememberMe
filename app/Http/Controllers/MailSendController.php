<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Mail\SendMail;

use Mail;

use App\Todo;

class MailSendController extends Controller
{
  public function send(){

  $to = [
      [
          'email' => 'meganeno73@gmail.com',
          'name' => 'Test',
      ]
  ];

  $todo = Todo::all();

  Mail::to($to)->send(new SendMail($todo));
  return redirect('admin/todo/');
  }
}
