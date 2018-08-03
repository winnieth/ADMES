<?php
    session_start();
  
    $errors = array();
    //connect to the database
    $db = mysqli_connect('localhost','root', '','registration');

    if (!$db){
        die ("Connection failed: ". mysqli_connect_error());
    }
    //echo "Connected successfully!";


    //if the register button is clicked
    if (isset($_POST['Register'])) {
        $name = ($_POST['name']);
        $lastname = ($_POST['lastname']);
        $username = ($_POST['username']);
        $password = ($_POST['password']);

        //errors for empty forms
        if (empty($name)){
            array_push($errors, "Name is required"); //add error to errors to array
        }
        if (empty($lastname)){
            array_push($errors, "Lastname is required");
        }if (empty($username)){
            array_push($errors, "Username is required");
        }
        if (empty($password)){
            array_push($errors, "Password is required");
        }

        //if there are no errors,save user to database
        if(count($errors)==0) {
           // $password=md5($password);
            $sql = "INSERT INTO `users` (`user_id`, `name`, `lastname`, `user`, `pass`) 
                        VALUES (NULL, '.$name', '$lastname', '$username', '$password')";
                    mysqli_query($db, $sql);
                    $_SESSION['username'] = $username;
                    $_SESSION['success'] = "You are now logged in";
                    header('location: index.php');
        }
        
    }
    
    if(isset($_POST['Login'])){

        if (empty($username)){
            array_push($errors, "Username is required");
        }
        if (empty($password)){
            array_push($errors, "Password is required");
        }

        if(count($errors)==0) {

            if((mysqli_query("SELECT * FROM users WHERE user == '$username'"))&&(mysqli_query("SELECT * FROM users WHERE pass == '$password'"))){
                header("location: index.php");
            }
            elseif ((mysqli_query("SELECT * FROM users WHERE user == '$username'"))||(mysqli_query("SELECT * FROM users WHERE pass == '$password'"))) {
                array_push($errors, "Username and Password does not match!");
            }
        }
    }

?>
