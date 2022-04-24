<?php

namespace Systems\Http\Controllers\Admin;

use Illuminate\Http\Request;

use Systems\Category;
use Systems\Scopes\OrderScope;

use Systems\Http\Requests;
use Systems\Http\Controllers\Controller;

use Systems\Post;
use Systems\Video;
use Systems\Image;
use Systems\Page;
use Systems\User;

class TrashController extends Controller
{
  public function index(){
    $posts = Post::withoutGlobalScope(OrderScope::class)->where('status',  2)->get();
    $videos = Video::withoutGlobalScope(OrderScope::class)->where('status', 2)->get();
    $images = Image::withoutGlobalScope(OrderScope::class)->where('status',  2)->get();
    $pages = Page::withoutGlobalScope(OrderScope::class)->where('status',  2)->get();
    $cat = Category::withoutGlobalScope(OrderScope::class)->where('status',  2)->get();
    $user = User::withoutGlobalScope(OrderScope::class)->where('status',  2)->get();





    return view('admin.trash.index',compact('posts','videos','images',"pages", 'cat', 'user'));
  }
}
