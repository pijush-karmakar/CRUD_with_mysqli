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
	<h1>All Notices</h1>
	<ul>
	   <li><a href="dashboard.php">Dashboard</a></li>
	   <li><a href="duser.php">Users</a></li>
	   <li><a href="add_new_notice.php">Add New Notice</a></li>
       <li><a href="logout.php" class="log-out">Log Out</a></li>

	</ul>
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
			<th>Action</th>
			<th>Action</th>
		</tr>
		<?php  while($row = $result->fetch_assoc()):?>
			<tr>
				<td><?php echo $row['notice_id']; ?></td>
				
				<td><?php echo $row['notice_date']; ?></td>
				<td><?php echo $row['notice']; ?></td>
				<td><?php echo $row['status']; ?></td>
				<td><a class="btn btn-primary" href="edit_notice.php?notice_id=<?php echo $row['notice_id'];?>">Edit</a></td>
				<td><a class="btn btn-danger" href="delete_notice.php?notice_id=<?php echo $row['notice_id'];?>">Delete</a></td>

			</tr>

		<?php endwhile; ?>
		</table>
		<?php else:?> 
		
		<?php 	echo "No user available"  ?>
		<?php endif ?>
		
</body>
</html>


<?php else:?>
	<?php	header("Location:login.php");
	?>
<?php endif; ?>

<?php include_once 'footer.php'; ?>

