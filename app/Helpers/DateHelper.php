<?php

use Carbon\Carbon;

if (!function_exists('date')) {

    /**
     * description
     *
     * @param
     * @return
     */
    function date($date)
    {
        $carbon =new Carbon($date);
        $day =$carbon->day;

        $date = \Carbon\Carbon::setLocale('ar_YE');
//        $date = Carbon::parse($dat)->formatLocalized('%b %Y');


        return $date;
    }


}
