<?php 
        include('connectdb.php');

		$id = $_POST['edit']; 
		$query = "UPDATE * FROM `users`";
		$result = $db -> query($query);
		if ($result->num_rows>0){
			foreach($result as $row){ 
			
			$lastname = $row['lastname'];
			$firstname = $row['firstname'];
			$middlename = $row['middlename'];
			$birthdate = $row['birthdate'];
			$civilstatus = $row['civilstatus'];
			$gender = $row['gender'];
			$course = $row['course'];
			$level = $row['level'];
			}
			
		}
		
		
		
?>