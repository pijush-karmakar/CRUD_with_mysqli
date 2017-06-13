<?php include_once 'header.php'; ?>
<?php if($_SESSION['isLoggedIn']=='yes'): ?>	
	<?php 

		if(isset($_POST['email']) && isset($_POST['password']) && isset($_POST['status']) && isset($_POST['role']) ){

			$email = $_POST['email'];
			$password = $_POST['password'];
			$status =  $_POST['status'];
			$role = $_POST['role'];

			$queryemail = "SELECT email FROM users WHERE email='{$email}'";

			$emailresult = $conn->query($queryemail);

			if($emailresult->num_rows == 0)
			{


			$query = "INSERT INTO users (email,password,status,role) VALUES('$email',md5('{$password}'),$status,'$role')";


			//var_dump($query); die();
			$result = $conn->query($query);
			//var_dump($result); die();
					if($result){
						

						header("Location: duser.php");
					}

						

					
					else{
						header("Location: add_user.php");	
					}
			}
			else{
						
						echo "Already exists";
						echo '<a href="add_user.php">'."Go back to Add User Again</a>";	
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