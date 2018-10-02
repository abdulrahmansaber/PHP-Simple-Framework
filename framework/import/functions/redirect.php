<?php

  Class Redirect {

    /** Redirect using PHP
     * @return null
     * For redirecting to anethor place using PHP header()
     * Default redirection time : 0 means immediately
     */
    public static function header($to, $seconds = 0)
    {
      header("REFRESH: $seconds;URL=$to");
    }

    /** Redirect using JavaScript
     * @return null
     * For redirecting with JavaScript
     * Default redirection time : 0 means immediately
     */
    public static function setTimeout($to, $seconds = 0)
    {
      echo "<script>setTimeout(function () { window.location.href = '$to'; }, $seconds);</script>";
    }

  }
