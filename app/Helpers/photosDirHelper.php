<?php

if (!function_exists('PhotosDir')) {

  /**
  * description
  *
  * @param
  * @return
  */
  function PhotosDir($image , $thumb = false ,   $options =array())
  {
    $width = isset($options[0]) ?  $options[0]: 250;
    $height = isset($options[1]) ? $options[1]: 150;
    $mode = isset($options[2]) ? $options[2]: 'c' ;
    if ($thumb) {
        return    Croppa::url(PhotosDir($image) ,$width , $height , $mode);

    }

    return '/photos/'.$image;

  }
}
