<?php

  class UploadFile {

    public $file;
    public $allowed_extensions;
    public $max_size;
    public $move_to;
    public $errors = array();

   /** getsize()
    * @return int
    * Gets you back the uploaded file size.
    */
    public function getsize()
    {
      return $_FILES[$this->file]['size'];
    }

   /** set_errors()
    * @return array
    * Gets you back the errors
    */
    public function set_errors()
    {
      if ($_FILES[$this->file]['size'] >= $this->max_size) {
        $this->errors[] = 'Your file is too big. Upload another';
      }

      $getFileExtension = explode('.', $_FILES[$this->file]['name']);
      $getFileExtension = end($getFileExtension);
      $getFileExtension = strtolower($getFileExtension);

      if (!in_array($getFileExtension, $this->allowed_extensions)) {
        $this->errors[] = 'The uploaded file is not allowed, Maybe it\'s dangers to us!';
      }
      foreach ($this->errors as $err) {
        Messages::error_a($err);
      }
    }

   /** move()
    * Complete moving action
    * Just select the dir from $myUploadClass->move_to = 'your directory goes here'
    * @return true;
    */
    public function move()
    {
      if (!empty($this->move_to) && empty($this->errors)) {
        $newFile = $_FILES[$this->file]['name'] . '_' . rand(5, 1000000);
        $result = move_uploaded_file($_FILES[$this->file]['tmp_name'], $this->move_to . $newFile);
        if ($result > 0) {
          return true;
        } else {
          return false;
        }
      }
    }


  }
