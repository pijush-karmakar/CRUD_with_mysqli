<?php include_once 'header.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<link rel="stylesheet" href="style.css">
</head>
<body>
	<form action="process.php" method="post"> 
		<label for="email">UserName/ Email:</label>
		<input type="text" class="info" name="email" placeholder="Email"><br>
		<label for="password">Password</label>
		<input type="password" class="info" name="password" placeholder="Password"><br>
		<input type="submit"  name="Login" value="LogIn">	
	</form>
</body>
</html>
