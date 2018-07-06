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

		
		$out_id 	= $_POST['outp_id'];
		$out_name 	= $_POST['outlet_name'];
		$out_phone	= $_POST['outlet_phone'];	
		$out_branch	= $_POST['outlet_branch'];
		$out_shop	= $_POST['shop_number'];
		$out_city   = $_POST['outlet_city'];

		$update_name = $_POST['outlet_idi'];
		$update_idi = $_POST['outlet_nam'];
		$update_label = $_POST['up_label'];

		
		$db_hostname = "localhost";
		$db_username = "root";
		$db_password = "";	
		$db_name = "shiraz_db";

		$link = mysqli_connect($db_hostname, $db_username, $db_password, $db_name);

		if(!$link)
		{
			die("Connection Failed : " . mysqli_error($link) );
		}
		

		if( isset( $_POST['submit_btn'] ) )
		{
		$sql = "INSERT INTO outlet (outlet_id,outlet_name,outlet_phone,outlet_branch,outlet_shop,outlet_city) 
			VALUES ('$out_id', '$out_name','$out_phone','$out_branch','$out_shop','$out_city') ";

		$result = mysqli_query($link, $sql);

		if(!$result)
		{
			die("Query failed: " . mysqli_error($link) );
		}
		  echo "Data saved";
	}
	
	
	  
	   if( isset( $_POST['show_btn'] ) )
	   {
		   $sql = "SELECT * FROM outlet";
		if($res = mysqli_query($link, $sql)){
			if(mysqli_num_rows($res) > 0){
				echo "<table>";
					echo "<tr>";
						echo "<th>Outlet_ID</th>";
						echo "<th>Outlet_name</th>";
						echo "<th>Outlet_phone</th>";
						echo "<th>Outlet_branch</th>";
						echo "<th>Outlet_shop</th>";
						echo "<th>Outlet_city</th>";
					echo "</tr>";
				while($row = mysqli_fetch_array($res)){
					echo "<tr>";
						echo "<td>" . $row['outlet_id'] . "</td>";
						echo "<td>" . $row['outlet_name'] . "</td>";
						echo "<td>" . $row['outlet_phone'] . "</td>";
						echo "<td>" . $row['outlet_branch'] . "</td>";
						echo "<td>" . $row['outlet_shop'] . "</td>";
						echo "<td>" . $row['outlet_city'] . "</td>";
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

	  
	  
	  
	 if( isset( $_POST['search_btn'] ) )
	 {
		 	$sql = "SELECT * FROM outlet WHERE OUTLET_ID='$out_id'";
		if($res = mysqli_query($link, $sql)){
			if(mysqli_num_rows($res) > 0){
				echo "<table>";
					echo "<tr>";
						echo "<th>Outlet_ID</th>";
						echo "<th>Outlet_name</th>";
						echo "<th>Outlet_phone</th>";
						echo "<th>Outlet_branch</th>";
						echo "<th>Outlet_shop</th>";
						echo "<th>Outlet_city</th>";
					echo "</tr>";
				while($row = mysqli_fetch_array($res)){
					echo "<tr>";
						echo "<td>" . $row['outlet_id'] . "</td>";
						echo "<td>" . $row['outlet_name'] . "</td>";
						echo "<td>" . $row['outlet_phone'] . "</td>";
						echo "<td>" . $row['outlet_branch'] . "</td>";
						echo "<td>" . $row['outlet_shop'] . "</td>";
						echo "<td>" . $row['outlet_city'] . "</td>";
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
		$update = "UPDATE outlet SET $update_label='$update_name' WHERE outlet_id='$update_idi'";
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
	
		$q="DELETE FROM outlet WHERE outlet_id='$out_id'"; 
				
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