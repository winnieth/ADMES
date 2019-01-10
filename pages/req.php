 <li class="dropdown messages-menu">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" id="notify-comet">
                        <i class="fa fa-envelope-o"></i>
                        <span class="label label-success" id="not-count">
                            <?php
                                $count = Delay::find()
                                        ->where(('id') !== 0)
                                        ->orderBy('id')
                                        ->count();  
                                echo "$count";
                            ?>
                        </span>
                    </a>
                    <ul class="dropdown-menu">
                        <li class="header">You have <?php echo "$count" ?> messages</li>
                        <?php
                            $qry = Delay::find()->all();
                            foreach ($qry as $key => $value) 
                            { 
                        ?>
                            <div class="delay-notification">
                            <ul class="menu">
                                <li><a href="index.php?r=delay"><?php echo $value->claimer_name; ?> &nbsp <?php echo $value->company_name; ?></a></li>
                            </ul>
                            </div>
                        <?php  
                            $i = 1;
                            if ($i++ == 4) break;
                            }
                        ?>

                        <li class="footer"><a href="index.php?r=delay">See All Messages</a></li>
                    </ul>
                </li>

                <?php
                 //configurution of server 
	$serve = mysql_connect('localhost', 'root', 'password');
	if (!$serve) { echo 'error' ; }
	$db = mysql_select_db('record', $serve);

		//action to include 
	if($_GET['action'] == 'include') {

		$name = $_GET ['name'];
		$lastname = $_GET['lastname'];

		$SQL = "insert into user (name, lastname) VALUES ('$name', '$lastname')";
		$re = mysql_query($SQL, $serve);
}

		//action list 
	if($_GET['action'] == 'userlist') {
		$SQL = "SELECT * FROM user";
		$re = mysql_query($SQL, $serve);
		$num = mysql_num_rows($re);

    if($num > 0) {

        //view screen
        while ($Line = mysql_fetch_object($re)) {
            echo "<b>Name: </b> {$Line->name} <b><br></b> 
                  <b>Lastname: </b> {$Line->lastname} </br><hr>";
        }
    }
    else {
        echo 'no user recorded';

    }
}
?>


