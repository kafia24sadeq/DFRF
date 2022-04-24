<?php
if (!function_exists('MetaTags')) {

    /**
     * description
     *
     * @param
     * @return
     */

    function MetaTags($title , $description , $image , $keywords = " ", $author=" ")
    {





        View::share('metaTitle' , $title);
        View::share('metaDescription' , $description);
        View::share('metaKeywords' , $keywords);
        View::share('metaAuthor' , $author);
        $request = new \Illuminate\Http\Request();
        View::share('metaURL' ,Request::url() );
        View::share('metaImage' ,URL::to('/').PhotosDir($image));



    }
}
