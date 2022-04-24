<?php

if (!function_exists('BlockedOrNot')) {

  /**
  * description
  *
  * @param
  * @return
  */
  function BlockedOrNot($data)
  {
    if ($data == 1) {
      return  '<span style="margin-left: 5px;display: inline-block" class="label  label-warning"> </span>' ;

    }elseif ($data == 0) {
      return  '<span style="margin-left: 5px;display: inline-block" class="label label-success"> </span>' ;


    }elseif ($data == 2) {
      return  '<span style="margin-left: 5px;display: inline-block" class="label label-danger"> </span>' ;

    }
  }
}
