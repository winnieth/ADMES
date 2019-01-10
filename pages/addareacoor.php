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
                <div class="col-sm-2">
                    <img src="default-user.png" class="img-circle" width="100" height="100">
                    <h5>User</h5>
                </div>
                <div class="col-sm">
                    <h2> AACCUP DOCUMENT MANAGEMENT AND EVALUATION SYSTEM</h2>
                    <h4>Program Coordinator</h4>
                </div>    
            </div>
               
            <ul class="nav navbar-top-links navbar-right">
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        <i class="fa fa-envelope fa-fw"></i> <i class="fa fa-caret-down"></i>
                    </a>

                    <ul class="dropdown-menu dropdown-messages">
                        <li>
                            <a href="#">
                                <div>
                                    <strong>coordinator</strong>
                                    <span class="pull-right text-muted">
                                        <em>Yesterday</em>
                                    </span>
                                </div>
                            </a>
                        </li>
                        <li>
                            <a class="text-center" href="#">
                                <strong>Read All Messages</strong>
                                <i class="fa fa-angle-right"></i>
                            </a>
                        </li>
                    </ul>
                    <!-- /.dropdown-messages -->
                </li>
                <!-- /.dropdown -->
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        <i class="fa fa-tasks fa-fw"></i> <i class="fa fa-caret-down"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-tasks">
                     
                        <li class="divider"></li>
                        <li>
                            <a class="text-center" href="#">
                                <strong>See All Tasks</strong>
                                <i class="fa fa-angle-right"></i>
                            </a>
                        </li>
                    </ul>
                    <!-- /.dropdown-tasks -->
                </li>
                <!-- /.dropdown -->
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        <i class="fa fa-bell fa-fw"></i> <i class="fa fa-caret-down"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-alerts">
                     
                        <li class="divider"></li>
                        <li>
                            <a href="#">
                                <div>
                                    <i class="fa fa-tasks fa-fw"></i> New Uploaded File
                                    <span class="pull-right text-muted small">4 minutes ago</span>
                                </div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="#">
                                <div>
                                    <i class="fa fa-upload fa-fw"></i> Request for a File
                                    <span class="pull-right text-muted small">10 minutes ago</span>
                                </div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a class="text-center" href="#">
                                <strong>See All Alerts</strong>
                                <i class="fa fa-angle-right"></i>
                            </a>
                        </li>
                    </ul>
                    <!-- /.dropdown-alerts -->
                </li>
                <!-- /.dropdown -->
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        <i class="fa fa-user fa-fw"></i> <i class="fa fa-caret-down"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-user">
                        <li><a href="#"><i class="fa fa-user fa-fw"></i> User Profile</a>
                        </li>
                        <li><a href="#"><i class="fa fa-gear fa-fw"></i> Settings</a>
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
                                    <a href="pc_areaI.php">Area I</a>
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
                    <div class="input-group custom-search-form">
                                    <input type="text" class="form-control" placeholder="Search...">
                                    <span class="input-group-btn">
                                    <button class="btn btn-default" type="button">
                                        <i class="fa fa-search"></i>
                                    </button>
                                    </span>
                                </div>
                    </div>
                
            </div>
         
          <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <i class="fa fa-user fa-fw">
							</i> Registered Area Coordinators
                            <div class="pull-right">
                                <div class="btn-group" >
                                    <button type="button" class="btn btn-default btn-xs fa fa-plus pull-right" data-Toggle="modal" data-target="#register"
                                            data-backdrop="static"></button>
                                    <!-- The Modal -->
                                    <div class="modal fade" id="register" role="dialog">
                                        <div class="modal-dialog modal-sm">
                                            <div class="modal-content">

                                                <!-- Modal Header -->
                                                <div class="modal-header">
                                                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                                                    <h4 class="modal-title">Register New User</h4>
                                                </div>

                                                <!-- Modal body -->
                                                <div class="modal-body">
                                                    <form role="form" action="tables.php" method="post" >
                                                        <?php include "add_area_c.php"; //adding area coordinator function ?> 
                                                        <div class="input-group">
                                                            <label> Name</label><br>
                                                            <input type="text" name="name" required>
                                                        </div>
                                                        <div class="input-group">
                                                            <label> Lastname</label><br>
                                                            <input type="text" name="lastname" required>
                                                        </div>
                                                        <div class="input-group">
                                                            <label> Username</label><br>
                                                            <input type="text" name="username" required>
                                                        </div>
                                                        <div class="input-group">
                                                            <label> Password</label><br>
                                                            <input type="text" name="password" required>
                                                        </div>
                                                        <div class="input-group">
                                                            <label> Usertype</label><br>
                                                            <select name="usertype" class="custom-select">
                                                                <option class="list-group-item disabled">Choose Usertype</option>
                                                                <?php include('utypeopt.php'); //displaying usertype ?>
                                                            </select>
                                                        </div><hr> &emsp;
                                                        <!--    <div class="input-group">
                                                                <button type="submit" name="Register" class="btn btn-default btn-default pull-left">Register</button>
                                                            </div>
                                                        <!-- <p>Or <a href="login.php">Login</a></p> -->
                                                        <div>
                                                        <button type="submit" name="Register" class="btn btn-success btn-default pull-left "data-Toggle="modal" data-target="#register">
                                                        <span class="glyphicon glyphicon-ok"></span> Register</button>
                                                        <button type="submit" class="btn btn-default btn-default pull-right" data-dismiss="modal">
                                                        <span class="glyphicon glyphicon-remove"></span> Cancel</button>
                                                        </div>
                                                        
                                                    </form>
                                                </div>
                                                
                                                <!-- Modal footer 
                                                <div class="modal-footer">
                                                    
                                                </div>-->

                                            </div>
                                        </div>
                                    </div>  
                                </div>
                            </div>
                        </div>
                    
                            <!-- /.row -->
                        <div class="panel-body">
                             <div class="table-responsive">        
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th>Firstname</th>
                                            <th>Lastname</th>
                                            <th>Username</th>
                                            
                                            <!--    <th>Usertype</th>
                                                <th>Program</th> -->
                                        </tr>
                                    </thead>
                                        <tbody>
                                            <?php

                                                //make connection
                                                $db = mysqli_connect('localhost','root','','registration');

                                                if (!$db){
                                                    die ("Connection failed". mysqli_connect_error());
                                                }
                                                $sql="SELECT * FROM users WHERE utype=2";

                                                $result = mysqli_query($db, $sql);

                                                $rows = mysqli_num_rows($result);


                                                if ($rows){
                                                    while ($usersdata = mysqli_fetch_array($result)){
                                                        echo "<tr>";
                                                        echo "<td>".$usersdata['name']."</td>";
                                                        echo "<td>".$usersdata['lastname']."</td>";
                                                        echo "<td>".$usersdata['user']."</td>";

                                                        $sql2="SELECT * FROM usertype WHERE utype_id='".$usersdata['utype']."'";
                                                        $result2 = mysqli_query($db, $sql2);
                                                        $udtype = mysqli_fetch_array($result2);

                                                        #echo "<td>".$udtype['usertype']."</td>";
                                                        echo "<td><form action='delete_user.php' method='GET' class='pull-right'>
                                                                <button type='submit' name='edit' class='btn btn-default btn-xs glyphicon glyphicon-edit'data-Toggle='modal' data-target='#register'> 
                                                                <button type='submit' name='delete' class='btn btn-default btn-xs glyphicon glyphicon-trash' data-Toggle='modal data-target='#confirmdel'>
                                                                </button></form></td>";
                                                                
                                                        echo "</tr>";
                                                        
                                                    }
                                                }
                                                
                                            ?>

                                            <div class="modal fade" id="confirmdel" role="dialog">
                                                <div class="modal-dialog modal-sm" >
                                                    <div class="modal-content">
                                                    
                                                        <!-- Modal body -->
                                                        <div class="modal-body">
                                                            <span class="label label-warning">Are you sure you want o delete this user?</span>
                                                            <span class="glyphicon glyphicon-ok"></span> Yes</button>
                                                            <button type="submit" class="btn btn-default btn-default pull-right" data-dismiss="modal">
                                                            <span class="glyphicon glyphicon-remove"></span> No</button>
                                                        </div>
                                                          
                                                    </div>
                                                </div>
                                            </div>
                                            <?php ?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>   
                        </div>
                        <!-- /.panel-body -->
                    </div>

                    </div>
                    <!-- /.panel -->
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
