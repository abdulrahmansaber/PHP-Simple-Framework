<?php

  class Type {

   /** is_email() Method
    * To check if variable is email or not
    * return 0 when it's false
    * Email must be valid
    */
    public static function is_email($str)
    {
      if (filter_var($str, FILTER_VALIDATE_EMAIL) == true) {
        $valid = 1;
        return $valid;
      }  else {
        $valid = 0;
        return $valid;
      }
    }

   /** is_url() Method
    * To check if variable is URL or not
    * return 0 when it's false
    * URL must be valid
    */
    public static function is_url($str)
    {
      if (filter_var($str, FILTER_VALIDATE_URL) == true) {
        $valid = 1;
        return $valid;
      }  else {
        $valid = 0;
        return $valid;
      }
    }

   /** is_number() Method
    * To check if variable is integer or not
    * return 0 when it's false
    * Number must be valid (Only numbers)
    */
    public static function is_number($str)
    {
      if (filter_var($str, FILTER_VALIDATE_INT) == true) {
        $valid = 1;
        return $valid;
      }  else {
        $valid = 0;
        return $valid;
      }
    }

  }
