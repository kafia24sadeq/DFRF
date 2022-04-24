<?php
use Systems\Post;
if (!function_exists('PostCount')) {

    /**
     * description
     *
     * @param
     * @return
     */
    function PostCount($id)


    {

        $post =  Post::find($id);
            $data = array(
                'count'=> $post->count+1,
            );

        $post->update($data);

    }
}
