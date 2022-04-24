<?php

namespace Systems\Listeners;

use Systems\Events\SomeEvent;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use Systems\UserLog;

use Illuminate\Support\Str;
use Illuminate\Support\Facades\Route;

use ResponseCache;
use Auth;
use Request;


class UserLogs
{
    /**
     * Create the event listener.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     *
     * @param  SomeEvent  $event
     * @return void
     */
    public function handle(SomeEvent $event)
    {
        $userlog = new UserLog( [
            'user'=>Auth::id(),
            'ip'=>Request::ip(),
            'action' => $this->routeClass(),
//            'desc'=>  $event->data['desc'],
//        TODO data
            // 'extra'=>  $event->data['extra'],
        ]);

        $userlog->save();

       /* ResponseCache::flush(); */

    }



    public function routeClass()
    {
        $routeArray = Str::parseCallback(Route::currentRouteAction(), null);
        if (last($routeArray) != null) {
            // Remove 'controller' from the controller name.
            $controller = str_replace('Controller', '', class_basename(head($routeArray)));
            // Take out the method from the action.
            $action = str_replace(['get', 'post', 'patch', 'put', 'delete'], '', last($routeArray));
            return Str::slug($controller . '-' . $action);
        }
        return 'closure';
    }
}
