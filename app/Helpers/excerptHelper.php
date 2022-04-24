<?php

if (!function_exists('excerptHelper')) {

    /**
     * description
     *
     * @param
     * @return
     */
    function excerptHelper($full_text , $limit = 200 )

    {

        return str_limit(strip_tags($full_text) ,  $limit );

    }
}
