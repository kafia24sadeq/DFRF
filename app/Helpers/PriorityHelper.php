<?php

if (!function_exists('Priority')) {

  /**
  * description
  *
  * @param
  * @return
  */
  function Priority($data , $raw = false)
  {

    if($raw){
      if ($data == 1) {
        return  trans('admin.important') ;

      }elseif ($data == 0) {
        return  trans('admin.normal') ;

      }
    }else{
      if ($data == 1) {
        return  '<span class="label  label-danger">'.trans('admin.important').'</span>' ;

      }elseif ($data == 0) {
        return  '<span class="label label-success">'.trans('admin.normal').'</span>' ;

      }
    }

  }
}
