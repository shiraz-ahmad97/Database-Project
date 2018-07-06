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

		$mang_id=$_POST['manager_id'];
		$mang_name=$_POST['manager_name'];
		$mang_phone=$_POST['manager_phone'];
		$mang_branch=$_POST['outlet_branch'];
		$mang_email=$_POST['manager_email'];
		$mang_street=$_POST['manager_street'];
		$mang_area=$_POST['manager_area'];
		$mang_city=$_POST['manager_city'];
		$manager_id=$_POST['mang_id'];
		
		
		$update_name = $_POST['manager_idi'];
		$update_idi = $_POST['manager_nam'];
		$update_label = $_POST['up_label'];

		$link = mysqli_connect($db_hostname, $db_username, $db_password, $db_name);

		if(!$link)
		{
			die("Connection Failed : " . mysqli_error($link) );
		}
		
		
		
		if(isset( $_POST['submit_btn'] ) )
		{
			
		$sql = "INSERT INTO manager (MANAGER_ID, MANAGER_NAME,MANAGER_PHONE,OUTLET_ID,MANAGER_HOUSE_NO,MANAGER_STREET,MANAGER_AREA,MANAGER_CITY) 
			VALUES ('$mang_id','$mang_name','$mang_phone','$mang_branch','$mang_email','$mang_street','$mang_area','$mang_city') ";

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
		$sql = "SELECT * FROM manager";
		if($res = mysqli_query($link, $sql)){
			if(mysqli_num_rows($res) > 0){
				echo "<table>";
					echo "<tr>";
						echo "<th>Manager_ID</th>";
						echo "<th>Manager_name</th>";
						echo "<th>Manager_phone</th>";
						echo "<th>Manager_outlet_id</th>";
						echo "<th>Manager_House_No</th>";
						echo "<th>Manager_street</th>";
						echo "<th>Manager_area</th>";
						echo "<th>Manager_city</th>";
						
					echo "</tr>";
				while($row = mysqli_fetch_array($res)){
					echo "<tr>";
						echo "<td>" . $row['MANAGER_ID'] . "</td>";
						echo "<td>" . $row['MANAGER_NAME'] . "</td>";
						echo "<td>" . $row['MANAGER_PHONE'] . "</td>";
						echo "<td>" . $row['OUTLET_ID'] . "</td>";
						echo "<td>" . $row['MANAGER_HOUSE_NO'] . "</td>";
						echo "<td>" . $row['MANAGER_STREET'] . "</td>";
						echo "<td>" . $row['MANAGER_AREA'] . "</td>";
						echo "<td>" . $row['MANAGER_CITY'] . "</td>";
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
		$sql = "SELECT * FROM manager WHERE MANAGER_ID='$manager_id'";
		if($res = mysqli_query($link, $sql)){
			if(mysqli_num_rows($res) > 0){
				echo "<table>";
					echo "<tr>";
						echo "<th>Manager_ID</th>";
						echo "<th>Manager_name</th>";
						echo "<th>Manager_phone</th>";
						echo "<th>Manager_outlet_id</th>";
						echo "<th>Manager_House_No</th>";
						echo "<th>Manager_street</th>";
						echo "<th>Manager_area</th>";
						echo "<th>Manager_city</th>";
						
					echo "</tr>";
				while($row = mysqli_fetch_array($res)){
					echo "<tr>";
						echo "<td>" . $row['MANAGER_ID'] . "</td>";
						echo "<td>" . $row['MANAGER_NAME'] . "</td>";
						echo "<td>" . $row['MANAGER_PHONE'] . "</td>";
						echo "<td>" . $row['OUTLET_ID'] . "</td>";
						echo "<td>" . $row['MANAGER_HOUSE_NO'] . "</td>";
						echo "<td>" . $row['MANAGER_STREET'] . "</td>";
						echo "<td>" . $row['MANAGER_AREA'] . "</td>";
						echo "<td>" . $row['MANAGER_CITY'] . "</td>";
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
		$update = "UPDATE manager SET $update_label='$update_name' WHERE MANAGER_ID='$update_idi'";
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
	

	 if( isset( $_POST['delete_btn'] ) )
	  {
	
		$q="DELETE FROM manager WHERE MANAGER_ID='$mang_id'"; 
				
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