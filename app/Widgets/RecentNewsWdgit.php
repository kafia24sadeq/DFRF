<?php

namespace Systems\Widgets;

use Arrilot\Widgets\AbstractWidget;

use Systems\Post;

class RecentNewsWdgit extends AbstractWidget
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
        $posts = Post::news()->take(10)->get();
        return view("widgets.recent_news_wdgit", compact('posts'));
    }
}
