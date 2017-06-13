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
	
	<?php 	

			$query = "DELETE FROM users WHERE user_id={$user_id}";

		$result = $conn->query($query);

		if($result){
			echo "<div class='succes'>";

			echo "<h3>Successful</h3>";
			echo '<a class="del-notice" href="duser.php">'."Show all user</a>";

			echo "</div>";
		}  
		else
			echo "Can't delete";


	?>

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