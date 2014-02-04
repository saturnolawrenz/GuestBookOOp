<?php 
	/**
	* Filename: delete.php
	* Deleting Message
	*/
	include "config.php"; 
	$id = $_GET['id']; 
	MessageDAO::deleteMessage($id);
	echo "<script>alert('Message successfully deleted.');window.location.href='back.php';</script>";
 ?>
