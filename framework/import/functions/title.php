<?php

  // Setting <title> in HTML by using $title var
  function title()
  {
    global $title;
    if (isset($title)) {
      echo $title;
    } else {
    }
  }
