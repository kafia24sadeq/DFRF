<?php

namespace Systems\Widgets;

use Arrilot\Widgets\AbstractWidget;
use Systems\Scopes\OrderScope;

use Auth;


use Systems\Post;
use Systems\Video;
use Systems\Image;
use Systems\Page;
use Systems\User;
use Systems\Category;


class TrashWidget extends AbstractWidget
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

      if(Auth::user()->can('trash.index')){
        $countPosts = Post::withoutGlobalScope(OrderScope::class)->where('status',  2)->count();
        $countVideos = Video::withoutGlobalScope(OrderScope::class)->where('status', 2)->count();
        $countImages = Image::withoutGlobalScope(OrderScope::class)->where('status',  2)->count();
        $countPages = Page::withoutGlobalScope(OrderScope::class)->where('status',  2)->count();
        $countCategories = Category::withoutGlobalScope(OrderScope::class)->where('status',  2)->count();
        $countUsers = User::withoutGlobalScope(OrderScope::class)->where('status',  2)->count();

          return view("widgets.trash_widget", compact('countPosts','countVideos','countImages','countPages' , "countCategories" , "countUsers"));
      }else{
        return '';
      }

    }
}
