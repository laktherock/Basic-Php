<?php
require 'connection.php'; 
$conn= connection();

 		if(!empty($_POST)){

 			$id=$_POST['id'];
 			$name=$_POST['name'];
 			$age=$_POST['age'];
 			$designation=$_POST['designation'];

 				$db=mysqli_select_db($conn,"lakshmi");
 					$sql="insert into student (id,name,age,designation) values($id,'".$name."',$age,'".$designation."')";
 				if(mysqli_query($conn, $sql)){
 					echo "inserted successfully";
 					header('location:view.php');
 				}
 				else{
 					echo "not inserted properly".mysqli_error($conn);
 				}
 				mysqli_close($conn);
 		}
 		else{
 			echo "failed";
 		}
 
?>