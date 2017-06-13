<?php include_once 'header.php'; ?>
<?php if($_SESSION['isLoggedIn']=='yes'): ?>	
	<?php 

		if(isset($_POST['notice_date']) &&  isset($_POST['status']) && isset($_POST['notice']) ){

			$notice_date = $_POST['notice_date'];
			$notice_id = $_POST['notice_id'];
			$status =  $_POST['status'];
			$notice = $_POST['notice'];

			$querynotice = "SELECT notice FROM notices WHERE notice_id='{$notice_id}'";

			$noticeresult = $conn->query($querynotice);

			if($noticeresult->num_rows == 1)
			{


			$query = "UPDATE notices SET notice_date='{$notice_date}',status={$status},notice='{$notice}' WHERE notice_id={$notice_id}";


			//var_dump($query); die();
			$result = $conn->query($query);
			//var_dump($result); die();
					if($result){
						

						header("Location: dnotice.php");
					}

						

					
					else{
						header("Location: edit_notice.php?notice_id={$notice_id}");	
					}
			}
			else{
						
						echo "Already exists";
						echo '<a href="edit_notice.php?notice_id='.$notice_id.'">Go back to Add Notice Again</a>';	
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