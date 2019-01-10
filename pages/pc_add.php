<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>AACCUP DMES</title>

    <!-- Bootstrap Core CSS -->
    <link href="../vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- MetisMenu CSS -->
    <link href="../vendor/metisMenu/metisMenu.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="../dist/css/sb-admin-2.css" rel="stylesheet">

    <!-- Morris Charts CSS 
    <link href="../vendor/morrisjs/morris.css" rel="stylesheet">-->

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

    <div id="wrapper">

            <div class="row">
			<nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
             
                <div class="col-sm-2">
                    <img src="default-user.png" class="img-circle" width="100" height="100">
                    <h5>User
                    <?php session_start();
                     echo "username ".$_SESSION ['username']."<br>";
                     echo "usertype ".$_SESSION ['usertype'] ."<br>";
                     echo "utype ".$_SESSION ['utype'] ."<br>";
                     echo "program ".$_SESSION ['program'] ."<br>";
                     echo "area ".$_SESSION ['area'] ."<br>";
                    ?>
                    </h5>
                </div>
                <div class="col-sm">
                    <h2>AACCUP DOCUMENT MANAGEMENT AND EVALUATION SYSTEM FOR BUKSU</h2>
                   <h4>Program Coordinator</h4>
                </div>    
            </div>
               
            <ul class="nav navbar-top-links navbar-right">
                <li class="dropdown">
                   </a>
                    <!-- /.dropdown-messages -->
                </li>
              
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        <i class="fa fa-user fa-fw"></i> <i class="fa fa-caret-down"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-user">
                        <li><a href="#"><i class="fa fa-user fa-fw"></i> About</a>
                        </li>
                      
                        <li class="divider"></li>
                        <li><a href="logout.php"><i class="fa fa-sign-out fa-fw"></i> Logout</a>
                        </li>
                    </ul>
                    <!-- /.dropdown-user -->
                </li>
                <!-- /.dropdown -->
            </ul>
            <!-- /.navbar-top-links -->

            <div class="navbar-default sidebar" role="navigation">
                <div class="sidebar-nav navbar-collapse">
                    <ul class="nav" id="side-menu">
                        <li>
                            <a href="pc_index.php"><i class="fa fa-dashboard fa-fw"></i> Dashboard</a>
                        </li>
                       
                            <!-- /.nav-second-level -->
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-table fa-fw"></i> Registered Users</a>
                        </li>
                    <!--<li>
                            <a href="#"><i class="fa fa-edit fa-fw"></i> Accreditation Files</a>
                        </li>
                    -->
                        <li>
                            <a href="#"><i class="fa fa-wrench fa-fw"></i> Areas<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="#">Area I</a>
                                </li>
								
                                <li>
                                    <a href="#">Area II</a>
                                </li>
                                <li>
                                    <a href="#">Area III</a>
                                </li>
                                <li>
                                    <a href="#">Area IV</a>
                                </li>
                                <li>
                                    <a href="#">Area V</a>
                                </li>
                                <li>
                                    <a href="#">Area VI</a>
                                </li>
                                <li>
                                    <a href="#">Area VII</a>
                                </li>
                                <li>
                                    <a href="#">Area VIII</a>
                                </li>
                                <li>
                                    <a href="#">Area IX</a>
                                </li>
                                <li>
                                    <a href="#">Area X</a>
                                </li>
                            </ul>
                        </li>
                      </li>
                    </ul>
                </div>
            </div>
        </nav>
        <div id="page-wrapper">
            <div class="row">
                <div class="col-sm-5">
                  
                    </div>
                
            </div>
         
          <div class="row">
                <div class="col-lg-12">
                <div class="block">
                    <hr>
                    <span class="inline-block" >
                    <a href="pr_addac.php">
                        <button type="button" name="back" class="btn btn-default btn-sm" >
                            <span class="glyphicon glyphicon-arrow-left" ></span>
                        </button>
                    </a>
                        <h2>&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;Registered Users > Add User Account</h2>
                    </span>
                    <hr>
                </div>
                <?php 
                    $_SESSION['page']= $_SERVER['PHP_SELF'];
                ?>
            <div class="col-lg-12">
                
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <i class="fa fa-user fa-fw">
							</i> Create User Account
                            <div class="pull-right">

                            </div>
                        </div>
                    
                            <!-- /.row -->
                        <div class="panel-body">
                             <div class="">        
                                <form action="pc_add2.php" method="POST" >
                                    <span class="col-md-6 pull-left" >
                                        
                                    <div class="input-group">
                                        <label> Name</label><br>
                                        <input type="text" name="name" class="form-control"  required>
                                    </div>
                                    <div class="input-group">
                                        <label> Lastname</label><br>
                                        <input type="text" name="lastname" class="form-control"  required>
                                    </div>

                                    </span>
                                    <span class="col-md-6 pull-center" >
                                        <div class="input-group">
                                            <label> Username</label><br>
                                            <input type="text" name="username" class="form-control" required>
                                        </div>
                                        <div class="input-group">
                                            <label> Password</label><br>
                                            <input type="text" name="password" class="form-control" required>
                                        </div>
                                    </span>
                                    <div class="input-group">
                                        <label><br> Area </label><br>
                                        <select name="area" class="custom-select" required>
                                            <option value="">Choose Area</option>
                                            <?php  //displaying area 
                                                include "connectdb.php";
                                                $sql="SELECT * FROM areas ";
                                                $result = mysqli_query($db, $sql);
                                                $rows = mysqli_num_rows($result);

                                                if ($rows){
                                                    while ($atype = mysqli_fetch_array($result)){
                                                        echo "<option value='".$atype['area_id']."'>".$atype['area_name']." - ".$atype['description']."</option>";
                                                    }
                                                }
                                            
                                            ?>
                                        </select>
                                    </div><hr> &emsp;
                                                        <!--    <div class="input-group">
                                                                <button type="submit" name="Register" class="btn btn-default btn-default pull-left">Register</button>
                                                            </div>
                                                        <!-- <p>Or <a href="login.php">Login</a></p> -->
                                    <div>
                                        <input type="hidden" name="usertype" value='3'>
                                       
                                        <button type="submit" name="Register" class="btn btn-success btn-default pull-left ">
                                        <span class="glyphicon glyphicon-ok"></span> Register</button>
                                            <button type="submit" class="btn btn-default btn-default pull-right" data-dismiss="modal">
                                        <span class="glyphicon glyphicon-remove"></span> Cancel</button>
                                    </div>
                                                        
                                </form>
                            </div>   
                        </div>
                        <!-- /.panel-body -->
                    </div>

                    </div>
                    <!-- /.panel -->
                </div>  
            </div>

                    
                </div>
                <!-- /.col-lg-8 -->
                
            </div>
            <!-- /.row -->
        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->

    <!-- jQuery -->
    <script src="../vendor/jquery/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="../vendor/bootstrap/js/bootstrap.min.js"></script>

    <!-- Metis Menu Plugin JavaScript -->
    <script src="../vendor/metisMenu/metisMenu.min.js"></script>

    <!-- Morris Charts JavaScript 
    <script src="../vendor/raphael/raphael.min.js"></script>
    <script src="../vendor/morrisjs/morris.min.js"></script>
    <script src="../data/morris-data.js"></script>-->

    <!-- Custom Theme JavaScript -->
    <script src="../dist/js/sb-admin-2.js"></script>
    <script>
    
    </script>

</body>

</html>
