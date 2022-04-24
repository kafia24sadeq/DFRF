<?php
if (!function_exists('CopyRightsYear')) {

    /**
     * Return nav-here if current path begins with this path.
     *
     * @param string $path
     * @return string
     */
    function CopyRightsYear($copyYear)
    {
        $currentYear = date('Y');

        if ($copyYear == $currentYear) {
            return $copyYear;
        } else {
            return "$copyYear - $currentYear";

        }
    }
}
