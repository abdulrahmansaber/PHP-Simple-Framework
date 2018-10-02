<?php

  class Validation {

   /** is_empty()
    * Check if $target is empty or not
    * @return boolean
    * Return true if target empty
    */
    public function is_empty($target)
    {
      if (empty($target)) {
        return true;
      }
    }

   /** maxlen()
    * Check if letters less than $max_len
    * @return boolean
    */
    public function maxlen($target, $max_len)
    {
      if (strlen($target) >= $max_len) {
        return true;
      }
    }

    /** minlen()
     * Check if letters less than $max_len
     * @return boolean
     */
     public function minlen($target, $min_len)
     {
       if (strlen($target) <= $min_len) {
         return true;
       }
     }


  }
