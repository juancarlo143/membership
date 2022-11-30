<?php
	require_once 'conn.php';
	$username = $_POST['username'];
	if(!isset($_POST['admin_id'])){
		$query = $conn->query("SELECT * FROM `admin` WHERE `username` = '$username'") or die(mysqli_error());
	}else{
		$query = $conn->query("SELECT * FROM `admin` WHERE `username` = '$username' where admin_id !='{$admin_id}'") or die(mysqli_error());
	}
	$validate = $query->num_rows;
	if($validate > 0){
		echo "Success";
	}else{
		echo "Error";
	}