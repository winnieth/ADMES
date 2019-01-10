<?php 
// if form is submitted
if(isset($_POST["pname"])){
  // create folder
  mkdir(__DIR__ . $_POST["pname"], 0655); // Creates a folder in this directory named whatever value returned by pname input
  mkdir('C:/xampp/htdocs/aacup/'.DIRECTORY_SEPARATOR.'programs'.
	DIRECTORY_SEPARATOR.'level'.
	DIRECTORY_SEPARATOR.'area'.
	DIRECTORY_SEPARATOR.'parameter', 0775, true);
}
?>
<form method="POST">
  <input type="text" id="pname" name="pname" placeholder="Enter folder name">
  <input type="submit" class="button" value="Create">
</form> 