<?php

namespace Systems\Widgets;

use Arrilot\Widgets\AbstractWidget;
use Carbon\Carbon;
use Systems\Post;
use Systems\PollOption;
use Systems\Poll;


class PollsRead extends AbstractWidget
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
        $model = PollsQuestions::where('status' , 0 )->orderBy("id" , "DESC")->get()->first();

        if (count($model)<1){
            return "";
        }

        $options = PollOption::where('poll_id' , $model->id )->get()->toArray();
//

        return view("widgets.polls", [
            'config' => $this->config, 'model'=> $model, 'options'=> $options
        ]);
    }
}