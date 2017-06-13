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
	<h1>All Users</h1>
	<ul>
	     <li><a   href="dashboard.php">Dashboard</a></li>
		 <li><a  href="add_user.php">Add New Users</a></li>
		 <li><a  href="dnotice.php">Notices</a></li>
         <li><a  href="logout.php" class="log-out">Log Out</a></li>
	</ul>

	<?php 

		$query = "SELECT user_id,email,status,role from users";

		$result = $conn->query($query);
	?>
		<?php	if($result):?>
		<table>
		<tr>
			<th>User ID</th>
			<th>Email</th>
			<th>Status</th>
			<th>Role</th>
			<th>Action</th>
			<th>Action</th>
		</tr>
		<?php  while($row = $result->fetch_assoc()):?>
			<tr>
				<td><?php echo $row['user_id'] ?></td>
				<td><?php echo $row['email'] ?></td>
				<td><?php echo $row['status'] ?></td>
				<td><?php echo $row['role']; ?></td>
				<td><a class="btn btn-primary" href="edit_user.php?user_id=<?php echo $row['user_id'];?>">Edit</a></td>
				<td><a class="btn btn-danger" href="delete_user.php?user_id=<?php echo $row['user_id'];?>">Delete</a></td>
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