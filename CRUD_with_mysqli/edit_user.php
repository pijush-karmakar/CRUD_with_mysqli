<?php include_once 'header.php'; ?>
<?php if($_SESSION['isLoggedIn']=='yes'): ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<link rel="stylesheet" href="style.css">
</head>
<body>
	<?php if (isset($_REQUEST['user_id'])): ?>
	<?php $user_id = $_REQUEST['user_id']; 

	$query = "SELECT email,status,role FROM users WHERE user_id ={$user_id}";

	$result = $conn->query($query);

	if($result->num_rows == 1) : ?>
		<?php while($row =$result->fetch_assoc()) : ?>
	<h1>Edit  User</h1>
	<form method="post" action="edit_user_process.php">
				<label for="email">Email</label>
				<input type="text" name="email" value="<?php echo $row['email']; ?>">
				<label for="status">Status</label>
				<input type="text" name="status" value="<?php echo $row['status']; ?>">
				<label for="role">Role</label>
				<input type="text" name="role" value="<?php echo $row['role']; ?>">	
				<input type="hidden" name="user_id" value="<?php echo $user_id; ?>">
				<input type="submit" name="Edit user" class="pull-left" value="Update">	
				<input type="reset" name="reset" value="Reset" class="reset pull-right">
	</form>
	<?php endwhile; ?>
	<?php endif; ?>
	<?php else: ?>
		<h1>Please Go back and select a proper user</h1>
		<a href="duser.php">Go to select user</a>
	<?php endif;  ?>
</body>
</html>

<?php else:?>
	<?php	header("Location:login.php");
	?>
<?php endif; ?>
<?php include_once 'footer.php'; ?>