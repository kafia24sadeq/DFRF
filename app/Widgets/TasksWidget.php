<?php

namespace Systems\Widgets;

use Arrilot\Widgets\AbstractWidget;

use Auth;

use Systems\Task;

class TasksWidget extends AbstractWidget
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
        $tasks = Task::where('state', '1')->where(function($query) {
                /** @var $query Illuminate\Database\Query\Builder  */
                return $query->Where('user', Auth::user()->id)->orWhere('fromuser', Auth::user()->id);
              })->get();
        return view("widgets.tasks_widget", [
            'config' => $this->config,
        ])->with('tasks', $tasks);
    }
}
