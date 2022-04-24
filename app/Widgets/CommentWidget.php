<?php

namespace Systems\Widgets;

use Arrilot\Widgets\AbstractWidget;

class CommentWidget extends AbstractWidget
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
        return view("widgets.comment_widget", [
            'config' => $this->config,
        ]);


//        if ($this->config['comments_status']){
//        }  else {
//            return "";
//        }
//




    }
}