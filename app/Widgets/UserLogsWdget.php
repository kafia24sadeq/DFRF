<?php

namespace Systems\Widgets;

use Arrilot\Widgets\AbstractWidget;

class UserLogsWdget extends AbstractWidget
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


        return view("widgets.user_logs_wdget", [
            'config' => $this->config,
        ]);
    }
}
