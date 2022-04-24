<?php

namespace Systems\Widgets;

use Arrilot\Widgets\AbstractWidget;
use Systems\Post;

class EditorChocieWidget extends AbstractWidget
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
        $posts = Post::where("editor_choice", "1")->take(4)->get();

        return view("widgets.editor_chocie_widget", [
            'config' => $this->config, "posts"=> $posts
        ]);
    }
}