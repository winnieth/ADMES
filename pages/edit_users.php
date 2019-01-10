<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>ADMES</title>

    <!-- Bootstrap Core CSS -->
    <link href="../vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- MetisMenu CSS -->
    <link href="../vendor/metisMenu/metisMenu.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="../dist/css/sb-admin-2.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="../vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>

    <div class="container">
        <div class="row">
            <div class="col-md-4 col-md-offset-4">
            <?php
            include("connectdb.php");
            $GLOBALS['id'] = $_GET['edit'];
            $sql="SELECT * FROM users 
             WHERE user_id=".$id;
            $result=mysqli_query($db,$sql);
            if ($result){
                $data=mysqli_fetch_array($result);

                $name=$data['name'];
                $lname=$data['lastname'];
                $uname=$data['user'];
                $pass=$data['pass'];
                $ut=$data['utype'];
                $pr=$data['program_id'];
            }


            ?>
                <div class="login-panel panel panel-default">
                    <div class="panel-heading">
                        <span class="pull-left">
                        <a href="tables.php"><i class="fa fa-arrow-left"></i></a>
                        </span>
                        <h3 class="panel-title text-center">Update User Info</h3>
                    </div>
                    <div class="panel-body">
                        <form role="form" action="update-prog.php"  method="post">
                            <fieldset>
                                <div class="form-group">
                                    <label>Firstname</label>
                                    <input class="form-control" name="name"  value="<?php echo $name ?>" autofocus>
                                </div>
                                <div class="form-group">
                                    <label>Lastname</label>
                                    <input class="form-control" name="lastname"  value="<?php echo $lname ?>" autofocus>
                                </div>
                                <div class="form-group">
                                    <label>Username</label>
                                    <input class="form-control" name="user"  value="<?php echo $uname ?>" autofocus>
                                </div>
                                <div class="form-group">
                                    <label>Password</label>
                                    <input class="form-control" name="pass"  value="<?php echo $pass ?>" autofocus>
                                </div>

                                <div class="form-group">
                                    <select name="usertype" class="form-control" >
                                        <option class="list-group-item disabled"placeholder="" value="<?php echo $ut?>"><?php echo $ut?></option>
                                        <option value="1" >Administrator</option>
                                        <option value="2" >Program Coordinator</option>
                                        <option value="4" >Accreditor</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <select name="program" class="form-control" >
                                        <option class="list-group-item disabled"placeholder="" value="<?php echo $pr?>"><?php echo $pr?></option>
                                        <?php include('prog.php'); //displaying usertype ?>
                                    </select>
                                </div>
                                <input type="hidden" name="updateid" value="<?php echo $GLOBALS['id']?>">
                                <!-- Change this to a button or input when using this as a form -->
                                <button class="btn btn-lg btn-success btn-block" type="submit" name="update">Update</button>
                            </fieldset>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- jQuery -->
    <script src="../vendor/jquery/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="../vendor/bootstrap/js/bootstrap.min.js"></script>

    <!-- Metis Menu Plugin JavaScript -->
    <script src="../vendor/metisMenu/metisMenu.min.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="../dist/js/sb-admin-2.js"></script>

</body>

</html>
