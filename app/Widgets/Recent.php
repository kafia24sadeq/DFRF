<?php

namespace Systems\Widgets;

use Arrilot\Widgets\AbstractWidget;

use Systems\Post;
use Systems\Video;
use Systems\Image;
use Systems\User;

class Recent extends AbstractWidget
{
    /**
     * The configuration array.
     *
     * @var array
     */
    protected $config = [];

    // public $reloadTimeout = 5;

    /**
     * Treat this method as a controller action.
     * Return view() or other content to display.
     */
    public function run()
    {

        $countPosts = Post::count();
        $countvideos = Video::count();
        $countimages = Image::count();
        $countusers = User::count();

        return view("widgets.recent", compact('countPosts','countvideos', 'countimages', 'countusers'));
    }
}
