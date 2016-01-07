<?php 
	Class student{
		public function details($id,$conn){

			$res_result=array();

			if(!empty($id)){
				$sql="select id,name,age,designation from student where id=$id";
			}
			else{
				$sql= "select * from student";
			}

			$query=mysqli_query($conn,$sql);
			while($result=mysqli_fetch_array($query,MYSQL_ASSOC)){
				$res_result[]=$result;
			}

			return $res_result;
			

		}
	}
?>