<?php

if ($_POST){

  $expected = array('name', 'email', 'message');
  $validation = array(
    'name'    => 'Please provide your full name',
    'email'   => 'Please provide your valid email address',
    'message' => 'Please write your message'
  );
  $errors = array();
  $output = array();

  foreach($expected as $key){

    if (array_key_exists($key, $_POST)) {

      if (empty($_POST[$key])) {

        $errors[$key] = $validation[$key];

      } else {

        $output[$key] = $_POST[$key];
      }

    } else {
      $errors[$key] = $validation[$key];
    }


  }

  if (!empty($errors)) {
    $array = array('error' => true, 'fields' => $errors);

  } else {
    $message = '<h3>Thank you for submitting the form.</h3>';
    $array = array('error' => false, 'message' => $message);
  }

  echo json_encode($array);


}
