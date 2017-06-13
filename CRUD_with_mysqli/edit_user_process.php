<?php include_once 'header.php'; ?>
<?php if($_SESSION['isLoggedIn']=='yes'): ?>	
	<?php 

		if(isset($_POST['email']) &&  isset($_POST['status']) && isset($_POST['role']) ){

			$email = $_POST['email'];
			$user_id = $_POST['user_id'];
			$status =  $_POST['status'];
			$role = $_POST['role'];

			$queryemail = "SELECT email FROM users WHERE user_id='{$user_id}'";

			$emailresult = $conn->query($queryemail);

			if($emailresult->num_rows == 1)
			{


			$query = "UPDATE users SET email='{$email}',status={$status},role='{$role}' WHERE user_id={$user_id}";


			//var_dump($query); die();
			$result = $conn->query($query);
			//var_dump($result); die();
					if($result){
						

						header("Location: duser.php");
					}

						

					
					else{
						header("Location: edit_user.php?user_id={$user_id}");	
					}
			}
			else{
						
						echo "Already exists";
						echo '<a href="edit_user.php?user_id='.$user_id.'">Go back to Add User Again</a>';	
				}
				
		}
		else
		{
			header("Location: add_user.php");
		}


	 ?>

	 <?php else:?>
	<?php	header("Location:login.php");
	?>
<?php endif; ?>
<?php include_once 'footer.php'; ?>