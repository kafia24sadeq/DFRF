<?php

namespace Systems\Widgets;

use Arrilot\Widgets\AbstractWidget;
use Systems\Image;

class PdfWidget extends AbstractWidget
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
        $pdf = Image::where("image_categories_id", "2")->orderBy("id", "desc")->first();

        return view("widgets.pdf_widget", [
            'config' => $this->config, "pdf"=> $pdf
        ]);
    }
}