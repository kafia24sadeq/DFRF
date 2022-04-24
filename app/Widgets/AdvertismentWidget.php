<?php

namespace Systems\Widgets;

use Arrilot\Widgets\AbstractWidget;

use Systems\Advertisement;

class AdvertismentWidget extends AbstractWidget
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



        return view("widgets.advertisment_widget", [
            'config' => $this->config,
        ]);
    }
}