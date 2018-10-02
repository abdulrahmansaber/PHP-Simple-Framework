<?php

  Class Sanitization {

    public static function san_string($string)
    {
      $var = filter_var($string, FILTER_SANIZTIZE_STRING);
      return $var;
    }

    public static function san_int($string)
    {
      $var = filter_var($string, FILTER_SANIZTIZE_NUMBER_INT);
      return $var;
    }

    public static function san_email($string)
    {
      $var = filter_var($string, FILTER_SANIZTIZE_EMAIL);
      return $var;
    }

    public static function san_characters($string)
    {
      $var = filter_var($string, FILTER_SANITIZE_FULL_SPECIAL_CHARS);
      return $var;
    }

    public static function san_url($string)
    {
      $var = filter_var($string, FILTER_SANITIZE_URL);
      return $var;
    }

  }
