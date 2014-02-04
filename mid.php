<?php 
	/*
	* building connection to config.php
	* calling function in MessageDAO.php
	*/
	include "config.php";
	$rows = MessageDAO::getAllMessages();
?>
<html>
	
	<head>
		<title>GuestBook</title>
	</head>
	<body>
	<font face = "Adobe Caslon Pro Bold">Message(s)</font></center>
			<table border = "1"><tr>
			<td style = "padding-left:10px;padding-right:10px;">Name</td>
			<td style = "padding-left:10px;padding-right:10px;">Date Posted</td>
			<td style = "padding-left:10px;padding-right:10px;">Message</td></tr>
			<!-- Calling foreach function for retrieving datas -->
			<?php foreach ($rows as $record): ?>
				<?php if( $record['is_approved']  == ('Y')){ ?>


						<td style = "padding-left:10px;padding-right:10px;"><?=$record['name']?></td><br> 
						<td style = "padding-left:10px;padding-right:10px;"><?=$record['date_posted']?></td>
						<td style = "padding-left:10px;padding-right:10px;"><textarea style ="width:300px;height:50px">


						<?=$record['message']?>


					</textarea></td></tr>
				<?php }else{	}?>


				<?php endforeach;?>
				</table>
				<br>
				<a href="front.php"><input type = "submit" value = "Back"></a>
				<a href="back.php"><input type = "submit" value = "View Message Data"></a><br>	
				
	</body>
</html>

