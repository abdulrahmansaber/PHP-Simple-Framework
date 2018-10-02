<?php

  # Create object of Configuration Class
  $config = new Configuration();

  # Get Connection Default Options
  $options = $config->default_connection_options();

  # Try to Connect
  try {
    # Your Connection options goes here || >>> ## root -> username | NULL -> password
    $config->config('root', '', $options);
    global $conn;
    $conn = new PDO( // Create connection
      $config->dsn,
      $config->username,
      $config->password,
      $config->options
    );
  } catch (PDOException $e) { # Refused to connection
    echo $e->getMessage();
  }
