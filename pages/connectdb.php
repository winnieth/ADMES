<?php
    session_start();
  
    $errors = array();
    //connect to the database
    $db = mysqli_connect('localhost','root', '','registration');

    if (!$db){
        die ("Connection failed: ". mysqli_connect_error());
    }
?>