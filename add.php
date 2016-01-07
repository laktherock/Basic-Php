<?php
require 'connection.php'; 
$conn= connection();

if(!empty($_POST)){

	if(empty($_POST['id'])){
		$error_arr['id']="Empty Id";
	}
	else{
		$id=$_POST['id'];	
	}

	if(empty($_POST['name'])){
		$error_arr['name']="Empty name";
	}
	else{
		$name=$_POST['name'];	
	}

	if(empty($_POST['age'])){
		$error_arr['age']="Empty age";
	}
	else{
		$age=$_POST['age'];	
	}

	if(empty($_POST['designation'])){
		$error_arr['designation']="Empty designation";
	}
	else{
		$designation=$_POST['designation'];	
	}
	
	
	if(empty($error_arr)){
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
		
}
else{
	echo "form not posted";
}
 
?>

<!DOCTYPE html>
<html>
<head>
	<title>Add</title>
</head>
<body>
 <form name="db" method="POST" action="">
 <?php if(!empty($error_arr)){ foreach ($error_arr as $err_value) {
 	echo "<p class style='color:red'>".$err_value."</p>";
 }}?>
 id:<input type="text" name="id" id="id" value="<?php if(!empty($id)){echo $id;}?>"><br>
 name:<input type="text" name="name" id="name" value="<?php if(!empty($name)){echo $name;}?>"><br>
 age:<input type="text" name="age" id="age" value="<?php if(!empty($age)){echo $age;}?>"><br>
 designation:<input type="text" name="designation" id="designation" value="<?php if(!empty($designation)){echo $designation;}?>"><br>
 <input type="submit" name="submit" id="submit" value="submit">
 </form>
</body>
</html>
