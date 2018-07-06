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

		$cus_id=$_POST['customer_id'];
		$cus_fname=$_POST['customer_first_name'];
		$cus_lname=$_POST['customer_last_name'];
		$cus_phone=$_POST['customer_phone'];
		$cus_email=$_POST['customer_email'];
		$cus_house=$_POST['customer_house'];
		$cus_street=$_POST['customer_street'];
		$cus_city=$_POST['customer_city'];
		$cus_country=$_POST['customer_country'];
		$customer_id=$_POST['cus_id'];
		
		
		$update_name = $_POST['cus_idi'];
		$update_idi = $_POST['cus_nam'];
		$update_label = $_POST['up_label'];

		$link = mysqli_connect($db_hostname, $db_username, $db_password, $db_name);

		if(!$link)
		{
			die("Connection Failed : " . mysqli_error($link) );
		}
		
		
		
		if(isset( $_POST['submit_btn'] ) )
		{
			
		$sql = "INSERT INTO customer (CUSTOMER_ID, CUSTOMER_FNAME,CUSTOMER_LNAME,CUSTOMER_PHONE,CUSTOMER_EMAIL,CUSOTMER_HOUSE,CUSTOMER_STREET,CUSTOMER_CITY,CUSTOMER_COUNTRY) 
			VALUES ('$cus_id','$cus_fname','$cus_lname','$cus_phone','$cus_email','$cus_house','$cus_street','$cus_city','$cus_country') ";

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
			$sql = "SELECT * FROM customer";
		if($res = mysqli_query($link, $sql)){
			if(mysqli_num_rows($res) > 0){
				echo "<table>";
					echo "<tr>";
						echo "<th>Customer_ID</th>";
						echo "<th>Customer_firstname</th>";
						echo "<th>Customer_lastname</th>";
						echo "<th>Customer_phone</th>";
						echo "<th>Customer_email</th>";
						echo "<th>Customer_house</th>";
						echo "<th>Customer_street</th>";
						echo "<th>Customer_city</th>";
						echo "<th>Customer_country</th>";
						
					echo "</tr>";
				while($row = mysqli_fetch_array($res)){
					echo "<tr>";
						echo "<td>" . $row['CUSTOMER_ID'] . "</td>";
						echo "<td>" . $row['CUSTOMER_FNAME'] . "</td>";
						echo "<td>" . $row['CUSTOMER_LNAME'] . "</td>";
						echo "<td>" . $row['CUSTOMER_PHONE'] . "</td>";
						echo "<td>" . $row['CUSTOMER_EMAIL'] . "</td>";
						echo "<td>" . $row['CUSOTMER_HOUSE'] . "</td>";
						echo "<td>" . $row['CUSTOMER_STREET'] . "</td>";
						echo "<td>" . $row['CUSTOMER_CITY'] . "</td>";
						echo "<td>" . $row['CUSTOMER_COUNTRY'] . "</td>";
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
			$sql = "SELECT * FROM customer WHERE CUSTOMER_ID='$customer_id'";
		if($res = mysqli_query($link, $sql)){
			if(mysqli_num_rows($res) > 0){
				echo "<table>";
					echo "<tr>";
						echo "<th>Customer_ID</th>";
						echo "<th>Customer_firstname</th>";
						echo "<th>Customer_lastname</th>";
						echo "<th>Customer_phone</th>";
						echo "<th>Customer_email</th>";
						echo "<th>Customer_house</th>";
						echo "<th>Customer_street</th>";
						echo "<th>Customer_city</th>";
						echo "<th>Customer_country</th>";
						
					echo "</tr>";
				while($row = mysqli_fetch_array($res)){
					echo "<tr>";
						echo "<td>" . $row['CUSTOMER_ID'] . "</td>";
						echo "<td>" . $row['CUSTOMER_FNAME'] . "</td>";
						echo "<td>" . $row['CUSTOMER_LNAME'] . "</td>";
						echo "<td>" . $row['CUSTOMER_PHONE'] . "</td>";
						echo "<td>" . $row['CUSTOMER_EMAIL'] . "</td>";
						echo "<td>" . $row['CUSOTMER_HOUSE'] . "</td>";
						echo "<td>" . $row['CUSTOMER_STREET'] . "</td>";
						echo "<td>" . $row['CUSTOMER_CITY'] . "</td>";
						echo "<td>" . $row['CUSTOMER_COUNTRY'] . "</td>";
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
		$update = "UPDATE customer SET $update_label='$update_name' WHERE CUSTOMER_ID='$update_idi'";
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
	
		$q="DELETE FROM customer WHERE CUSTOMER_ID='$cus_id'"; 
				
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