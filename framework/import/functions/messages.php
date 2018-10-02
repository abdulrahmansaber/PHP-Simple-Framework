<?php

  Class Messages {

   /** setHTML() Method
    * Used for adding class, tag, and content
    */
    public static function setHTML($tag, $classes, $content) {
      echo "<$tag class='$classes'><i class='fa fa-exclamation'></i> $content</$tag>";
    }

    # Error Message
    public static function error($msg) // while using materialize and ajax
    {
      echo "<script>M.toast({html: '$msg', classes: 'red lighten-1'});</script>";
    }
    # Error Message
    public static function error_a($msg)
    {
      self::setHTML("div", "alert error", $msg);
    }

    # Success Message
    public static function success($msg) // while using materialize and ajax
    {
      echo "<script>M.toast({html: '$msg', classes: 'green lighten-1'});</script>";
    }
    public static function success_a($msg)
    {
      self::setHTML("div", "alert success", $msg);
    }

    # Warning Message
    public static function warning($msg)
    {
      self::setHTML("div", "alert warning", $msg);
    }

    # Info Message
    public static function info($msg)
    {
      self::setHTML("div", "alert info", $msg);
    }

  }
