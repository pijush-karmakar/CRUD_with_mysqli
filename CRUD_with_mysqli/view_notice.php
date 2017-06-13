<?php include_once 'header.php'; ?>


<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<link rel="stylesheet" href="style.css">
</head>
<body>
	<h1>All Notices</h1>
	
	<?php 

		$query = "SELECT * FROM notices";

		$result = $conn->query($query);
	?>
		<?php	if($result):?>
		<table>
		<tr>
			<td>Notice ID</td>
			
			<td>Notice Date</td>
			<td>Notice</td>
			<td>Status</td>
		</tr>
		<?php  while($row = $result->fetch_assoc()):?>
			<tr>
				<td><?php echo $row['notice_id']; ?></td>
				
				<td><?php echo $row['notice_date']; ?></td>
				<td><?php echo $row['notice']; ?></td>
				<td><?php echo $row['status']; ?></td>
			</tr>

		<?php endwhile; ?>
		</table>
		<?php else:?> 
		
		<?php 	echo "No notice available"  ?>
		<?php endif ?>
		
</body>
</html>



<?php include_once 'footer.php'; ?>

