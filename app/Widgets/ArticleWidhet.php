<?php

namespace Systems\Widgets;

use Arrilot\Widgets\AbstractWidget;
use Systems\Post;



class ArticleWidhet extends AbstractWidget
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
        $articles = Post::articles()->take(6)->get();
        return view("widgets.article_widhet", [
            'config' => $this->config, "articles"=> $articles
        ]);
    }
}