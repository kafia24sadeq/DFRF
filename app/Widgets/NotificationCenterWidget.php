<?php

namespace Systems\Widgets;

use Arrilot\Widgets\AbstractWidget;
use Illuminate\Support\Facades\Auth;
use Krucas\Settings\Context;
use Krucas\Settings\Facades\Settings;
use Systems\UserLog;

class NotificationCenterWidget extends AbstractWidget
{
    /**
     * The configuration array.
     *
     * @var array
     */
    protected $config = [];
    public $reloadTimeout = 10;


    /**
     * Treat this method as a controller action.
     * Return view() or other content to display.
     */



    public function run()
    {


        if (Auth::user()){



        $userContext1 = new Context(['user' => Auth::user()->id]);
        Settings::context($userContext1)->set('lastnotifcation', UserLog::OrderBy('id','desc')->take(1)->pluck('id'));


        $userValue1 = Settings::context($userContext1)->get('lastnotifcation'); // value1


        $logs = UserLog::OrderBy('id','desc')->take(10)->get();




        return view("widgets.notification_center_widget", [
            'config' => $this->config, "logs"=> $logs, "userValue1" => $userValue1
        ]);
        }else{
            return "";
        }
    }
}
