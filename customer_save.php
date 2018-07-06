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

		
		$customer_id 	= $_POST['cus_id'];
		$type 			= 	$_POST['feedback_type'];
		$fb 			= $_POST['feedback'];	
		

		
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
		$sql = "INSERT INTO customer_service (Customer_ID,Feedback,Feedback_Type) 
			VALUES ('$customer_id', '$fb', '$type') ";

		$result = mysqli_query($link, $sql);

		if(!$result)
		{
			die("Query failed: " . mysqli_error($link) );
		}
		  echo "Data saved";
	}
	
	
	   if( isset( $_POST['show_btn'] ) )
	   {
		   	$sql = "SELECT * FROM customer_service";
		if($res = mysqli_query($link, $sql)){
			if(mysqli_num_rows($res) > 0){
				echo "<table>";
					echo "<tr>";
						echo "<th>Customer_ID</th>";
						echo "<th>Feedback</th>";
						echo "<th>Feedback Type</th>";
					echo "</tr>";
				while($row = mysqli_fetch_array($res)){
					echo "<tr>";
						echo "<td>" . $row['Customer_ID'] . "</td>";
						echo "<td>" . $row['Feedback'] . "</td>";
						echo "<td>" . $row['Feedback_Type'] . "</td>";
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
			$sql = "SELECT * FROM customer_service WHERE Customer_ID='$customer_id'";
		if($res = mysqli_query($link, $sql)){
			if(mysqli_num_rows($res) > 0){
				echo "<table>";
					echo "<tr>";
						echo "<th>Customer_ID</th>";
						echo "<th>Feedback</th>";
						echo "<th>Feedback Type</th>";
					echo "</tr>";
				while($row = mysqli_fetch_array($res)){
					echo "<tr>";
						echo "<td>" . $row['Customer_ID'] . "</td>";
						echo "<td>" . $row['Feedback'] . "</td>";
						echo "<td>" . $row['Feedback_Type'] . "</td>";
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
	 
	 
	 	  if( isset( $_POST['delete_btn'] ) )  
	  {
	
		$q="DELETE FROM customer_service WHERE Customer_ID='$customer_id'"; 
				
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