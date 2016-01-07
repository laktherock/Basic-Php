<?php 
 include 'connection.php'; 
 $conn= connection();
 	if(!empty($_GET['id'])){
 		$id=$_GET['id'];
 		$sql="DELETE FROM student WHERE id= $id";
 		if(mysqli_query($conn,$sql)){
 			echo "record deleted successfully";
 			header('location:view.php');
 			exit;
 		}
 		else{
 			echo "sorry unable to delete record".mysql_error($conn);
 		}
 	}
 	else{
 		echo "failed";
 	}
 
 mysqli_close($conn);

 ?>
