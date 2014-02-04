<?php 
	/*
	* building connection to config.php
	* creating new object
	*/
	include "config.php";
	$id = $_GET['id']; 
	MessageDAO::approveMessage($id);
	echo "<script>alert('Message successfully approved!');window.location.href='back.php';</script>";
 ?>

