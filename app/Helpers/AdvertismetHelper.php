<?php
use Systems\Advertisement;

if (!function_exists('AdvertismetHelper')) {

    /**
     * description
     *
     * @param
     * @return
     */
    function AdvertismetHelper()
    {

        $ads = Advertisement::all();


        foreach ($ads as $ad){
            View::share("$ad->area" , $ad->content);
        }

    }
}
