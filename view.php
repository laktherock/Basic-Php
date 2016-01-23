<?php
include 'connection.php';
require 'class/class.php';
$conn=connection();

$sel=new student;
$s3lect= $sel->details("",$conn);
//echo "<pre>";
//print_r($s3lect);

if(!empty($s3lect)){
?>

	<html>
	<head>
	<style type="text/css">
	table{
		border: 3px solid #43c51a;
		padding: 12px;
		margin: 30px;
		}
	tr{
		border: 3px solid #43c51a;
	}
	</style>
	</head>
	<body>
		<h2>Table details</h2>
	<table>
	<tr>
		<th>Id</th>
		<th>Name</th>
		<th>Age</th>
		<th>Degination</th>
		<th colspan="2">actions</th>
	</tr>
<?php
		/*foreach($s3lect as $s3lect_val){
			echo "<tr>";
			echo "<td>".$s3lect_val['id']."</td>";
			echo "<td>".$s3lect_val['name']."</td>";
			echo "<td>".$s3lect_val['age']."</td>";
			echo "<td>".$s3lect_val['designation']."</td>";
			echo "</tr>";

		}
		*/

		foreach($s3lect as $s3lect_val){
?>
			<tr>
			<td><?php echo $s3lect_val['id'];?></td>
			<td><?php echo $s3lect_val['name'];?></td>
			<td><?php echo $s3lect_val['age'];?></td>
			<td><?php echo $s3lect_val['designation'];?></td>
			<td><a href="update.php?id=<?php echo $s3lect_val['id'];?>">Edit</a></td>
			<td><a href="delete.php?id=<?php echo $s3lect_val['id'];?>">Delete</a></td>
			</tr>
<?
		}


?>


	</table>
	</body>
	</html>

<?
}
else{
	echo "No results in the table";
}

 ?>
