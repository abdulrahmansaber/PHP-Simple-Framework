<?php

  function inc_file($file) {
    include($file);
  }

  inc_file('upload.php');

  Class import {

  /** Get Include path
   * $set_include_path the path that 'll be included
   */
   public $set_include_path;
   public function __construct($path)
   {
     $this->set_include_path = $path;
     $this->get_app_files();
   }

  /** inc()
   * include files by include function in php
   */
   public function inc($file)
   {
     include($file . '.php');
   }

  /** require_files() Method
   * @return string
   * Using for include alot of files on a directory!
   * Use Of It:
   * Create New Object of class (GetFiles)
   * Then Run This method and the argument give it your path end with symbol ( / )
   */
    public function require_files($path)
    {
      foreach (glob($path . '*.php') as $file) {
        include($file);
      }
    }

   /**
    * @return array
    * Use for return array of required files
    * Add New Path to Require it
    */
    public function app_files()
    {
      $get_required_path = $this->set_include_path;
      $files = [
        $get_required_path . 'database/',
        $get_required_path . 'functions/',
        $get_required_path . 'validation/',
      ];
      return $files;
    }

   /** import_app_files() Method
    * @return include
    * Inlclude All Important Files That Will Be Use on our work
    */
    public function get_app_files()
    {
      $need_importing = $this->app_files();
      foreach ($need_importing as $import_file) {
        $this->require_files($import_file);
      }
    }

  }
