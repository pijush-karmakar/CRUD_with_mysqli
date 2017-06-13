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
	<h1>Add New Notice</h1>
	<form method="post" action="add_notice_process.php">
				<label for="date">Notice Date</label>
				<input type="Date" name="notice_date" placeholder="date">
				<label for="notice">Notice</label>
				<input type="text" name="notice" placeholder="notice">
				<label for="status">Status</label>
				<input type="text" name="status" placeholder="status">
				
				<input type="submit" name="Add Notice" value="Add Notice">	
	</form>
</body>
</html>

<?php else:?>
	<?php	header("Location:login.php");
	?>
<?php endif; ?>
<?php include_once 'footer.php'; ?>