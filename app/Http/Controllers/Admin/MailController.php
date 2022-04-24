<?php

namespace Systems\Http\Controllers\Admin;

use Illuminate\Http\Request;

use Systems\Http\Requests;
use Systems\Http\Controllers\Controller;

use Systems\Events\SomeEvent;


use Systems\Mail;


class MailController extends Controller
{
    public function index()
    {
      $mails = Mail::orderBy('id','desc')->paginate(15);

      return view('admin.mail.index', compact('mails'));
    }

    public function show($id)
    {
      $mail = Mail::find($id);

      $mail->update(['status'=>0]);

      event(new SomeEvent(['desc'=>$mail->name]));

      return view('admin.mail.show', compact('mail'));

    }

}
