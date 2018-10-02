<?php

  class Configuration {

    public $dsn, $username, $password, $options;

    /** dsn_connection() Method
     * @return string
     * Return Data Source name {dsn}
     */
    public function dsn_connection($host, $db)
    {
      $dsn = "mysql:host=$host;dbname=$db";
      $this->dsn = $dsn;
      return $dsn;
    }

    /** default_connection_options() Method
     * @return array
     * Put your connection options here
     * The default connection options goes here
     * Customizie it as you need ( add, edit, remove )
     */
    public function default_connection_options()
    {
      $options = [
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
        PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8'
      ];
      return $options;
    }

    /** config() Method
     * @return null
     * Customize connection informations
     */
    public function config($username, $password, $options)
    {
      $options = $this->default_connection_options();
      $this->dsn = $this->dsn_connection('localhost', 'team');
      $this->username = $username;
      $this->password = $password;
    }

  }
