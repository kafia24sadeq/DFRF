<?php

if (!function_exists('ThemeHelper')) {

    /**
     * description
     *
     * @param
     * @return
     */
    function ThemeHelper()
    {
      return '/themes/'.config('cms.theme.active').'/';
    }
}
