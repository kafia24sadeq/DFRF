<?php

namespace Systems\Widgets;

use Arrilot\Widgets\AbstractWidget;

class YouitWidget extends AbstractWidget
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
    $contents = file_get_contents('https://s3-ap-southeast-1.amazonaws.com/youit/ads.txt');
    $rand = json_decode($contents, true);
    $ad = $rand['adsArray'];
    $key =  array_rand($ad);
    echo "<div style='margin:30px 0;'><a target='_blank' href='".$ad[$key]['link']."'><img width='100%' src='".$ad[$key]['img']."' /></a></div>";





    return "";

    // return view("widgets.youit_widget", [
    //     'config' => $this->config,
    // ]);
  }
}
