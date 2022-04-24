<?php

namespace Systems\Widgets;

use Arrilot\Widgets\AbstractWidget;

class statsWidget extends AbstractWidget
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

        return view("widgets.recent_news", [
            'config' => $this->config,
        ]);
    }
}
