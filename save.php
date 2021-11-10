<?php
	include 'db_connection.php';
	$artikl=$_POST['artikl'];
	$io=$_POST['io'];
	$nio=$_POST['nio'];
	$name=$_POST['name'];
  
	$sql = "INSERT INTO `parts`( `id`, `io`, `nio`, `name`) 
	VALUES ('$artikl','$io','$nio','$name')";
	if (mysqli_query($conn, $sql)) {
		echo json_encode(array("statusCode"=>200));
	} 
	else {
		echo json_encode(array("statusCode"=>201));
	}
	mysqli_close($conn);
?>