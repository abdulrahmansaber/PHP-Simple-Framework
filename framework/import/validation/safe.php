<?php

 /** safe()
  * @return string
  * @author <abdulrahmansaber120@gmail.com> Abdulrahman Saber
  * Return a safe value
  */
  function safe($item)
  {
    $item = trim($item);
    $item = strip_tags($item);
    $item = addslashes($item);
    $item = str_replace('\\', '', $item);
    $item = filter_var($item, FILTER_SANITIZE_STRING);
    return $item;
  }
