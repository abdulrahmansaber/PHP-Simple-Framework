<?php

  function load($path, $extension, $type) {
    $files = glob($path . '/*' . $extension);
    if ($type == 'css') {
      foreach ($files as $file) {
        echo "<link rel='stylesheet' href='$file'>\n";
      }
    }
    if ($type == 'js') {
      foreach ($files as $file) {
        echo "<script src='$file'></script> \n";
      }
    }
  }

?>
