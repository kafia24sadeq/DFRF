<?php

if (!function_exists('RemoveEntity')) {

    /**
     * description
     *
     * @param
     * @return
     */
    function RemoveEntity($string)
    {
        return  strip_tags(preg_replace("/&#?[a-z0-9]{2,8};/i","",$string));

    }
}
