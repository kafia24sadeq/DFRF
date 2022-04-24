<?php

namespace Systems\Widgets;

use Arrilot\Widgets\AbstractWidget;
use Systems\Announcement;
use Systems\Post;


class BreakingWidget extends AbstractWidget
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
        $now = time();

        $break = Announcement::take(1)->get()->first();

        if ($now  < ((60*$break->period)+(strtotime($break->created_at))) ){
            return view("widgets.breaking_widget", [
                'config' => $this->config, 'break'=>$break
            ]);
        }

    }
}