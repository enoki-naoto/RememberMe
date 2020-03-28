<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Mail\SendMail;

use Mail;

use App\Todo;

use App\User;

class MailSendController extends Controller
{
  public function send(){

  $user = User::find(3);

  Mail::to($user)->send(new SendMail($user));
  return redirect('admin/todo/');
  }
}
