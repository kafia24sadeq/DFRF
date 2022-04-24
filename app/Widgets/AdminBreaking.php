<?php

namespace Systems\Widgets;

use Arrilot\Widgets\AbstractWidget;
use Systems\Announcement;

class AdminBreaking extends AbstractWidget
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

        $break = Announcement::take(1)->get()->first();

        $now = time();
        if ($now  < ((60*$break->period)+(strtotime($break->created_at))) ){
            return view("widgets.admin_breaking", [
                'config' => $this->config, 'model'=>$break
            ]);
        }else{
            return view("widgets.admin_breaking", [
                'config' => $this->config,
            ]);
        }

    }
}