<?php

// Home
Breadcrumbs::register('controlpanel', function($breadcrumbs)
{
    $breadcrumbs->push(trans('admin.controlpanel'), url('admin/controlpanel'));
});

// Home > About
Breadcrumbs::register('posts.index', function($breadcrumbs)
{
    $breadcrumbs->parent('controlpanel');
    $breadcrumbs->push(trans('admin.show').' '.trans('admin.all').' '.trans('admin.posts'), '');
});




//public side
Breadcrumbs::register('home', function($breadcrumbs)
{
    $breadcrumbs->push(trans('public.home'), url('/'));
});


// Home > posts
Breadcrumbs::register('posts', function($breadcrumbs , $post)
{
    $breadcrumbs->parent('home');
    $breadcrumbs->push($post[0]->categories->name, route('posts'));
//    $breadcrumbs->push($post[0]->title, url('posts', $post[0]->id));
});

// Home > posts > post
Breadcrumbs::register('post', function($breadcrumbs , $post)
{
    $breadcrumbs->parent('home');
    $breadcrumbs->push($post->categories->name, route('cat', $post->categories->id));
    $breadcrumbs->push($post->title, url('posts', $post->id));
});


// Home > pages
Breadcrumbs::register('pages', function($breadcrumbs , $page)
{
    $breadcrumbs->parent('home');
    $breadcrumbs->push($page->title, url('/'));
});


// video > videos > video
Breadcrumbs::register('video', function($breadcrumbs , $video)
{
    $breadcrumbs->parent('home');
    $breadcrumbs->push($video->videoCategory->name, route('vcat', $video->videoCategory->id));
    $breadcrumbs->push($video->title, url('video' ,$video->id ));
});


// home > writers
Breadcrumbs::register('writers', function($breadcrumbs )
{
    $breadcrumbs->parent('home');
    $breadcrumbs->push( trans("public.writers"), route('writers'));
});

// home > writers > writer
Breadcrumbs::register('writer', function($breadcrumbs , $writer)
{
    $breadcrumbs->parent('writers');
    $breadcrumbs->push($writer->writers->name, url('writer' , $writer->writers->id ));
});





// Home > Blog > [Category]
Breadcrumbs::register('category', function($breadcrumbs, $category)
{
    $breadcrumbs->parent('blog');
    $breadcrumbs->push($category->title, route('category', $category->id));
});

// Home > Blog > [Category] > [Page]
Breadcrumbs::register('page', function($breadcrumbs, $page)
{
    $breadcrumbs->parent('category', $page->category);
    $breadcrumbs->push($page->title, route('page', $page->id));
});
