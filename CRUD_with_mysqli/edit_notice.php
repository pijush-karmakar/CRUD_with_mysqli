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
	<?php if (isset($_REQUEST['notice_id'])): ?>
	<?php $notice_id = $_REQUEST['notice_id']; 

	$query = "SELECT notice_date,notice,status FROM notices WHERE notice_id ={$notice_id}";

	$result = $conn->query($query);

	if($result->num_rows == 1) : ?>
		<?php while($row =$result->fetch_assoc()) : ?>
	<h1>Edit  Notice</h1>
	<form method="post" action="edit_notice_process.php">
				<label for="date">Notice Date</label>
				<input type="date" name="notice_date" value="<?php echo $row['notice_date']; ?>">
				<label for="notice">Notice</label>
				<input type="text" name="notice" value="<?php echo $row['notice']; ?>">	
				<label for="status">Status</label>
				<input type="text" name="status" value="<?php echo $row['status']; ?>">
				
				<input type="hidden" name="notice_id" value="<?php echo $notice_id; ?>">
				<input type="submit" name="Edit Notice" value="Update" class="pull-left">

				<input type="reset" name="reset" value="Reset" class="reset pull-right">

	</form>
	<?php endwhile; ?>
	<?php endif; ?>
	<?php else: ?>
		<h1>Please Go back and select a notice</h1>
		<a href="dnotice.php">Go to select notice</a>
	<?php endif;  ?>




</body>
</html>

<?php else:?>
	<?php	header("Location:login.php");
	?>
<?php endif; ?>
<?php include_once 'footer.php'; ?>

