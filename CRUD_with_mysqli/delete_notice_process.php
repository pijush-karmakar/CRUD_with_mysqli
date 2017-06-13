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
	<?php if (isset($_REQUEST['notice_id'])): ?>
	<?php $notice_id = $_REQUEST['notice_id']; ?>
	
	<?php 	

			$query = "DELETE FROM notices WHERE notice_id={$notice_id}";

		$result = $conn->query($query);

		if($result){
			echo "<div class='succes'>";

			echo "<h3>Successful</h3>";
			echo '<a class="del-notice" href="dnotice.php">'."Show all Notice</a>";

			echo "</div>";
		}  

		else
			echo "Can't delete";


	?>

	<?php else: ?>
		<h1>Please Go back and select a notice to delete</h1>
		<a href="dnotice.php">Go to select notice</a>
	<?php endif;  ?>
</body>
</html>

<?php else:?>
	<?php	header("Location:login.php");
	?>
<?php endif; ?>
<?php include_once 'footer.php'; ?>