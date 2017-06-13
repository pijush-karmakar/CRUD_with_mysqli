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
	<?php if (isset($_REQUEST['user_id'])): ?>
	<?php $user_id = $_REQUEST['user_id']; ?>

	<h1 style="color:#fff; background-color:#E86F67;">Deleting a User</h1>

	<div class="delete">
		 <a class="btn btn-danger" href="delete_user_process.php?user_id=<?php echo $user_id; ?>">Yes</a>
		 <a class="btn btn-danger" href="duser.php">No</a>
	</div>
	
	<?php else: ?>
		<h1>Please Go back and select a proper user to delete</h1>
		<a href="duser.php">Go to select user</a>
	<?php endif;  ?>
</body>
</html>

<?php else:?>
	<?php	header("Location:login.php");
	?>
<?php endif; ?>
<?php include_once 'footer.php'; ?>