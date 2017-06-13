<?php include_once 'header.php'; ?>
	
	<?php 

		if(isset($_POST['email']) && isset($_POST['password'])){

			$email = $_POST['email'];
			$password = $_POST['password'];

			$query = "SELECT user_id,email,password FROM users WHERE email='{$email}' AND password=md5('{$password}')";

			//var_dump($query);
			$result = $conn->query($query);
			//var_dump($result); die();
			if($result->num_rows == 1){
				
				while ($row = $result->fetch_assoc()) {
					$_SESSION['user_id'] = $row['user_id'];
					$_SESSION['isLoggedIn']='yes';
					header("Location: dashboard.php");
				}

				

			}
			else{
				header("Location: login.php");	
			}

		}
		else
		{
			header("Location: login.php");
		}


	 ?>