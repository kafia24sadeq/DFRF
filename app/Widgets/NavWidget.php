<?php

namespace Systems\Widgets;

use Arrilot\Widgets\AbstractWidget;

use Systems\Category ;

class NavWidget extends AbstractWidget
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

        $categories = Category::where("menushow", 1)->get();

        return view("widgets.nav_widget", [
            'config' => $this->config, 'categories' => $categories ,
        ]);
    }
}
