<?php include_once 'header.php'; ?>
<?php if($_SESSION['isLoggedIn']=='yes'): ?>	
	<?php 

		if(isset($_POST['notice_date']) && isset($_POST['notice']) && isset($_POST['status'])  ){

			$notice_date = $_POST['notice_date'];
			$notice = $_POST['notice'];
			$status =  $_POST['status'];
		   

			$querynotice = "SELECT notice FROM notices WHERE notice='{$notice}'";

			$noticeresult = $conn->query($querynotice);

			if($noticeresult->num_rows == 0)
			{


			$query = "INSERT INTO notices (notice_date,notice,status) VALUES('$notice_date','$notice',$status)";


			//var_dump($query); die();
			$result = $conn->query($query);
			//var_dump($result); die();
					if($result){
						

						header("Location: dnotice.php");
					}

						

					
					else{
						header("Location: add_new_notice.php");	
					}
			}
			else{
						
						echo "Already exists";
						echo '<a href="add_new_notice.php">'."Go back to Add notice Again</a>";	
				}
				
		}
		else
		{
			header("Location: add_new_notice.php");
		}


	 ?>

	 <?php else:?>
	<?php	header("Location:login.php");
	?>
<?php endif; ?>
<?php include_once 'footer.php'; ?>