<?php
  $current_date = date("Y-m-d H:i:s");
  $query = "INSERT INTO guestbook SET date = '$current_date'";
  $sql = mysql_query($query) or die(mysql_error());
?>