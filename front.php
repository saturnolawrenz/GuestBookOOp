<html>


	<head>
		<title>GuestBook</title>
	</head>
	<body>
		<center><div >
				<form method = "POST" action = "code.php" name = "mailling">
				<div>
				<input type = "text" name = "name" placeholder = "Name">
				</div>
				<div>
				<input type = "text" name = "email"  placeholder = "Email">
				</div>
				<div>
				<textarea name = "message" placeholder = "Write your message here..."></textarea>	
				</div>
				<div>
				<input type = "submit" value = "Send" onclick = "return validate()"></td></tr>
				</form>
				<a href="mid.php">	<input type = "button" value = "Messages" ></a>
				</div>
			</center>
		</div>
		<script>
			function validate(){
				var a=document.forms["mailling"]["name"].value;
				var b=document.forms["mailling"]["email"].value;
				var c=document.forms["mailling"]["message"].value;


				if (a==null || a=="")
				{
					alert("All fields are required!");
					return false;
				}
				if (b==null || b=="")
				{
					alert("All fields are required!");
					return false;
				}
				if (c==null || c=="")
				{
					alert("All fields are required!");
					return false;
				}
	   	    }
   		</script>
		</center>
	</body>
</html>

