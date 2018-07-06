<!DOCTYPE html>
<html>
<head>
<style>

table {
    border-collapse: collapse;
    width: 100%;
	font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
}

th, td {
    text-align: left;
    padding: 8px;
}

tr:nth-child(even){background-color: #f2f2f2}

th {
    background-color: #4CAF50;
    color: white;
}

</style>
</head>
<body>


<?php
		
	
			
		
		$db_hostname = "localhost";
		$db_username = "root";
		$db_password = "";	
		$db_name = "shiraz_db";

		$department_id=$_POST['dept_id'];
		$department_name=$_POST['dept_name'];
		$update_name = $_POST['dept_idi'];
		$update_idi = $_POST['dept_nam'];
		$update_label = $_POST['up_label'];

		$link = mysqli_connect($db_hostname, $db_username, $db_password, $db_name);

		if(!$link)
		{
			die("Connection Failed : " . mysqli_error($link) );
		}
		
		
		
		if(isset( $_POST['submit_btn'] ) )
		{
			
		$sql = "INSERT INTO department (Department_ID, Department_name) 
			VALUES ('$department_id','$department_name') ";

		$result = mysqli_query($link, $sql);

		if(!$result)
		{
			die("Query failed: " . mysqli_error($link) );
		}
		else
		{
			echo "Data saved";
		}
	}
	
	if(isset( $_POST['show_btn']))
	{
			$sql = "SELECT * FROM department";
		if($res = mysqli_query($link, $sql)){
			if(mysqli_num_rows($res) > 0){
				echo "<table>";
					echo "<tr>";
						echo "<th>Department_ID</th>";
						echo "<th>Department_name</th>";
					echo "</tr>";
				while($row = mysqli_fetch_array($res)){
					echo "<tr>";
						echo "<td>" . $row['Department_ID'] . "</td>";
						echo "<td>" . $row['Department_name'] . "</td>";
					echo "</tr>";
				}
				echo "</table>";
				mysqli_free_result($res);
			} else{
				echo "No Matching records are found.";
			}
		} else{
			echo "ERROR: Could not able to execute $sql. " 
										. mysqli_error($link);
		}
	}
	
	
	
	if(isset( $_POST['search_btn']))
	{
	$sql = "SELECT * FROM department WHERE Department_ID='$department_id'";
		if($res = mysqli_query($link, $sql)){
			if(mysqli_num_rows($res) > 0){
				echo "<table>";
					echo "<tr>";
						echo "<th>Department_ID</th>";
						echo "<th>Department_name</th>";
					echo "</tr>";
				while($row = mysqli_fetch_array($res)){
					echo "<tr>";
						echo "<td>" . $row['Department_ID'] . "</td>";
						echo "<td>" . $row['Department_name'] . "</td>";
					echo "</tr>";
				}
				echo "</table>";
				mysqli_free_result($res);
			} else{
				echo "No Matching records are found.";
			}
		} else{
			echo "ERROR: Could not able to execute $sql. " 
										. mysqli_error($link);
		}
	}
	
	if(isset( $_POST['update_btn']))
	{
		//$update = "UPDATE department SET Department_name='$update_name' WHERE Department_ID='$update_idi'";
		$update = "UPDATE department SET $update_label='$update_name' WHERE Department_ID='$update_idi'";
		$up = mysqli_query($link, $update);
		
		if(!$up)
		{
			die("Query failed: " . mysqli_error($link) );
		}
		else 
		{
			echo "Record updated successfully.";
		}
	
	
	}
	

	 if( isset( $_POST['dlt_btn'] ) )
	  {
	
		$q="DELETE FROM department WHERE Department_ID='$department_id'"; 
				
		$del = mysqli_query($link, $q);

		if(!$del)
		{
			die("Query failed: " . mysqli_error($link) );
		}
		else 
		{
			echo "Data deleted successfully.";
		}	
	}
	

?>


</body>
</html>
