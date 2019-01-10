<?php
//mag add ug program coordinator

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
        $password = mysqli_real_escape_string($db, $_POST['password']);
        $utype = mysqli_real_escape_string($db, $_POST['usertype']);
        $area = mysqli_real_escape_string($db, $_POST['area']);
        $program = mysqli_real_escape_string($db, $_POST['program']);

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

        if (!empty($name)&&!empty($lastname)&&!empty($username)&&!empty($password)&&!empty($utype)&&!empty($program)){
            switch ($utype) {
                case 'Admin':
                    $utype_id = 1;
                    break;
                case 'Program Coordinator':
                    $utype_id = 2;
                    break;
                case 'Area Coordinator':
                    $utype_id = 3;
                    break;
                case 'Accreditor':
                    $utype_id = 4;
                    break;
                default:
                    echo "switch did not work as planned!";
                    break;
            }
    
            //check if username exists
            
            //if there are no errors,save user to database
            if(($utype==4)) {
    
            // $password=md5($password);
            $sql = "INSERT INTO `users` (`user_id`, `name`, `lastname`, `user`, `pass`,`utype`,`has_area`,`area_id`,`program_id`) 
                    VALUES (NULL, '$name', '$lastname', '$username', '$password','$utype','1','$area','$program')";
            $result = mysqli_query($db, $sql);
            $_SESSION['username'] = $username;
            $_SESSION['success'] = "You are now logged in";
            echo "<br>".$sql;
            echo $result;
            //header('location: add_prog.php');
            }

            else{
    
                // $password=md5($password);
                $sql = "INSERT INTO `users` (`user_id`, `name`, `lastname`, `user`, `pass`,`utype`,`program_id`) 
                        VALUES (NULL, '$name', '$lastname', '$username', '$password','$utype','$program')";
                        mysqli_query($db, $sql);
                $_SESSION['username'] = $username;
                $_SESSION['success'] = "You are now logged in";
                header('location: add_prog.php');
                }
        
        }
                                                                 
    }
    else{
        header('location: add_prog.php');
    }

?>
