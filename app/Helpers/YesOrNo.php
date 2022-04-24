<?php

if (!function_exists('YesOrNo')) {

    /**
     * description
     *
     * @param
     * @return
     */
    function YesOrNo($value)
    {
        if ($value){
            return "<span class='label label-success' >".trans("admin.yes")."</span>";
        }else{
            return "<span class='label label-danger' >".trans("admin.no")."</span>";

        }
    }
}
