<?php
    //session_start();
                                                            
    $errors = array();
    //connect to the database
    $db = mysqli_connect('localhost','root', '','registration');

    if (!$db){
        die ("Connection failed: ". mysqli_connect_error());
    }
    //echo "Connected successfully!";


    //if the register button is clicked
    if (isset($_POST['Register'])) {
        $name = mysqli_real_escape_string($db, $_POST['name']);
        $lastname = mysqli_real_escape_string($db, $_POST['lastname']);
        $username = mysqli_real_escape_string($db, $_POST['username']);
        $password = mysdqli_real_escape_string($db, $_POST['password']);
        $utype = mysqli_real_escape_string($db, $_POST['usertype']);

        //errors for empty forms
        if (empty($name)){
        //    array_push($errors, "Name is required"); //add error to errors to array
        //    echo $errors;
            echo "
            <div class='alert alert-danger'>
            Name is <strong>required</strong>.
            </div>
            ";
        }
        if (empty($lastname)){
        //    array_push($errors, "Lastname is required");
        //    echo $errors;
            echo "
            <div class='alert alert-danger'>
            Lastname is <strong>required</strong>.
            </div>
            ";
        
        }
        if (empty($username)){
        //    array_push($errors, "Username is required");
        //    echo $errors;
        
            echo "
            <div class='alert alert-danger'>
            Username is <strong>required</strong>.
            </div>
            ";
        
            }
        if (empty($password)){
        //    array_push($errors, "Password is required");
        //    echo $errors;
        
            echo "
            <div class='alert alert-danger'>
            Password is <strong>required</strong>.
            </div>
            ";
            }
        if (empty($utype)){
        //    array_push($errors, "Usertype is required");
        //    echo $errors;
        
            echo "
            <div class='alert alert-danger'>
            Usertype is <strong>required</strong>.
            </div>
            ";
            }

        if (!empty($name)&&!empty($lastname)&&!empty($username)&&!empty($password)&&!empty($utype)){
            switch ($utype) {
                case 'admin':
                    $utype_id = 1;
                    break;
                case 'area coordinator':
                    $utype_id = 2;
                    break;
                case 'program coordinator':
                    $utype_id = 3;
                    break;
                case 'admin':
                    $utype_id = 4;
                    break;
                default:
                    echo "switch did not work as planned!";
                    break;
            }
    
            //check if username exists
            
            //if there are no errors,save user to database
            if(count($errors)==0) {
    
            // $password=md5($password);
            $sql = "INSERT INTO `users` (`user_id`, `name`, `lastname`, `user`, `pass`,`utype`) 
                    VALUES (NULL, '$name', '$lastname', '$username', '$password','$utype_id')";
                    mysqli_query($db, $sql);
            $_SESSION['username'] = $username;
            $_SESSION['success'] = "You are now logged in";
            //header('location: pr_addac.php');
            }
        
        }
                                                                
    }

?>