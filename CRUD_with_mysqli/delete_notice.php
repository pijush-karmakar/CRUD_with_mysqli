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

	<h1 style="color:#fff; background-color:#E86F67;">Deleting a Notice</h1>

	<div class="delete">
		 <a class="btn btn-danger" href="delete_notice_process.php?notice_id=<?php echo $notice_id; ?>">Yes</a>
		 <a class="btn btn-danger" href="dnotice.php">No</a>
	</div>
	
	<?php else: ?>
		<h1>Please Go back and select a notice to delete</h1>
		<a href="dnotic.php">Go to select notice</a>
	<?php endif;  ?>
</body>
</html>

<?php else:?>
	<?php	header("Location:login.php");
	?>
<?php endif; ?>
<?php include_once 'footer.php'; ?>