<?php 
	/*
	* building connection to cobfig.php
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
			<font face = "Adobe Caslon Pro Bold" >Message Data(s)</font></h3></center>
					<table border = "1">
						<tr><thead>
							<td>ID</h4></td>
							<td> Name</h4></td>
							<td> Email</h4></td>
							<td> Message</h4></td>
							<td> Date Posted</h4></td>
							<td> Approve</h4></td>
							<td> Action</h4></td>
						</thead></tr>
					
					<!-- Calling foreach function for retrieving data -->
					<tr>
					<?php foreach ($rows as $record): ?> 
					<td style = "padding-left:20px;padding-right:20px;"><?=$record['id']?></td>
					<td style = "padding-left:20px;padding-right:20px;"><?=$record['name']?></td>
					<td style = "padding-left:20px;padding-right:20px;"><?=$record['email']?></td>
					<td style = "padding-left:20px;padding-right:20px;"><textarea style = "height:50px;width:100px;margin-left:px"><?=$record['message']?></textarea></td>
					<td style = "padding-left:20px;padding-right:20px;"><?=$record['date_posted']?></td>
					<td style = "padding-left:20px;padding-right:20px;"><?=$record['is_approved']?></td>
					
					<?php if($record['is_approved'] == 'N'){?>


						<td style = "padding-left:20px;padding-right:20px;"><a href="update.php?id=<?=$record['id'];?>"><input type = "button" value = "Approve" style = "padding-left:10px;padding-right:10px;"></a>


					<?php }else{?>


						<td style = "padding-left:20px;padding-right:20px;"><a href="reject.php?id=<?=$record['id'];?>"><input type = "button" value = "Reject" style = "padding-left:10px;padding-right:10px;"></a>


					<?php }?>


						<a href="delete.php?id=<?=$record['id'];?>"><input type = "button" value = "Delete" style = "padding-left:10px;padding-right:10px;"></a>
				</tr>
					<?php endforeach;?>
			</table></table><br>
					<a href="mid.php"><input type = "button" value = "Messages" ></a>
					<a href="front.php"><input type = "button"  value = "Create Message" ></a>
					</table>
	
	</body>
</html>

