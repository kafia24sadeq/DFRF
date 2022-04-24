<?php

namespace Systems\Widgets;

use Arrilot\Widgets\AbstractWidget;

use Systems\Mail;
use Auth;

class MailWidget extends AbstractWidget
{
  /**
  * The configuration array.
  *
  * @var array
  */
  protected $config = [];



  /**
  * Treat this method as a controller action.
  * Return view() or other content to display.
  */
  public function run()
  {
    if(Auth::user()->can('mail.index')){
      $mails = Mail::where('status', '1')->OrderBy('id','desc')->take(15)->get();
      return view("widgets.mail_widget", compact('mails'));
    }else {
      return "";
    }
  }
}
