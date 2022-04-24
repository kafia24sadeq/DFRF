<?php

namespace Systems\Widgets;

use Arrilot\Widgets\AbstractWidget;
use Systems\Post;

class NewsTicker extends AbstractWidget
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

        $posts = Post::news()->take(4)->get();
        return view("widgets.news_ticker", [
            'config' => $this->config, 'posts' => $posts
        ]);
    }
}