<?php

namespace Systems\Widgets;

use Arrilot\Widgets\AbstractWidget;
use Carbon\Carbon;
use Systems\Post;

class MostRead extends AbstractWidget
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
        $most = Post::news()->where("date", ">", \Carbon\Carbon::today()->subDay())->orderby("count", "desc")->take(5)->get();

        return view("widgets.most_read", [
            'config' => $this->config, 'most'=> $most
        ]);
    }
}