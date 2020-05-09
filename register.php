<html>
	<head>
		<title>Registration</title>
	</head>
	<body>
		<form action='register_process.php' method='post'>
				 username:<input type='text' name='user' > 
				 password:<input type='password' name='pass' > 
			     re-enter password:<input type='password' name='repass' > 
			     address:<input type='text' name='address' > 
				 phone:<input type='text' name='phone' > 
				<input type='submit' value='Register'> 
			<input type='hidden' name='h' value='1'>
		</form>
		<a href="index.php" style="width:160px;height:50px;padding:4 20px;border-radius:8px;text-decoration:none;background-color:#ad58b8;text-align:center;">go to home page</a>	
	</body>
</html>