<?php
  global $fields;

  $fields = array(
    'username' => array(
      'db_name'     => 'username',
      'min_letters' => 5,
      'max_letters' => 50,
      'placeholder' => 'Please enter your username',
      'span'        => 'Username cannot be less than 5 letters and more than 50 Letters',
      'error'       => 'Username cannot be empty.'
    ),
    'firstname' => array(
      'db_name'     => 'firstname',
      'min_letters' => 3,
      'max_letters' => 70,
      'placeholder' => 'Enter your Firstname',
      'span'        => 'Your firstname cannot contain characters. 3-70 Letters',
      'error'       => 'Firstname cannot be empty.'

    ),
    'lastname' => array(
      'db_name'     => 'lastname',
      'min_letters' => 3,
      'max_letters' => 70,
      'placeholder' => 'Enter your Lastname',
      'span'        => 'Your Lastname cannot contain characters. 3-70 Letters',
      'error'       => 'Please fill your Lastname'

    ),
    'work' => array(
      'db_name'     => 'work',
      'min_letters' => 7,
      'max_letters' => 80,
      'placeholder' => 'Work title',
      'span'        => 'Your Job Title, 7-80 Letters. Must Contain [@/.]',
      'error'       => 'Please enter your Work, Job Title'
    ),

  );
