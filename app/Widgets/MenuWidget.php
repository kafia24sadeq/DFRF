<?php

namespace Systems\Widgets;

use Arrilot\Widgets\AbstractWidget;
use Illuminate\Support\Facades\Auth;

class MenuWidget extends AbstractWidget
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
        if (Auth::user()){


        return view("widgets.menu_widget", [
            'config' => $this->config,
        ]);
        }else{
            return "";
        }
    }
}
