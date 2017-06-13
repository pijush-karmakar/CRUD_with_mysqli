<?php include_once 'header.php'; ?>
<?php if($_SESSION['isLoggedIn']=='yes'): ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<h1>Add New User</h1>
	<form method="post" action="add_user_process.php">
				<label for="email">Email</label>
				<input type="text" name="email" placeholder="email">
				<label for="password">Password</label>
				<input type="text" name="password" placeholder="password">
				<label for="status">Status</label>
				<input type="text" name="status" placeholder="status">
				<label for="role">Role</label>
				<input type="text" name="role" placeholder="role">	
				<input type="submit" name="Add user" value="Add User">	
	</form>
</body>
</html>

<?php else:?>
	<?php	header("Location:login.php");
	?>
<?php endif; ?>
<?php include_once 'footer.php'; ?>