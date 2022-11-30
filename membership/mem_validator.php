<?php
	require_once 'conn.php';
	$firstname = $_POST['firstname'];
	$lastname = $_POST['lastname'];
	if(!isset($_POST['mem_id'])){
	$query = $conn->query("SELECT * FROM `member` WHERE `firstname` = '$firstname' && `lastname` = '$lastname'") or die(mysqli_error());
	}else{
	$query = $conn->query("SELECT * FROM `member` WHERE `firstname` = '$firstname' && `lastname` = '$lastname' and mem_id != '{$mem_id}'") or die(mysqli_error());
	}
	$validate = $query->num_rows;
	if($validate > 0){
		echo "Success";
	}else{
		echo "Error";
	}