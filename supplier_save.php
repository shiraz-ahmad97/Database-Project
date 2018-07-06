
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
 
        $supplier_id= $_POST['supplier_id'];
		$supplier_name = $_POST['supplier_name'];
		$supplier_phone = $_POST['supplier_phone'];
		$location = $_POST['location'];
		$supplier_city = $_POST['supplier_city'];
		$outlet_id = $_POST['outlet_id'];
		$manager_id = $_POST['manager_id'];
		$supp_id= $_POST['sup_id'];
		
		
		$link = mysqli_connect($db_hostname, $db_username, $db_password, $db_name);

		if(!$link)
		{
			die("Connection Failed : " . mysqli_error($link) );
		}
		
		if(isset( $_POST['submit_btn'] ) )
		{
		$sql = "insert into supplier (SUPPLIER_ID , SUPPLIER_NAME , SUPPLIER_PHONE , SUPPLIER_LOCATION , SUPPLIER_CITY , OUTLET_ID , MANAGER_ID)
		       VALUES(' $supplier_id','$supplier_name' , '$supplier_phone' , '$location' , '$supplier_city' , '$outlet_id' , '$manager_id')";
		
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
		
			if( isset( $_POST['show_btn'] ) )
			{
				$sql = "SELECT * FROM supplier";
		if($res = mysqli_query($link, $sql)){
			if(mysqli_num_rows($res) > 0){
				echo "<table>";
					echo "<tr>";
						echo "<th>Supplier_ID</th>";
						echo "<th>Supplier_name</th>";
						echo "<th>Supplier_phone</th>";
						echo "<th>Supplier_city</th>";
						echo "<th>Supplier_outlet</th>";
						echo "<th>Supplier_manager</th>";
						
					echo "</tr>";
				while($row = mysqli_fetch_array($res)){
					echo "<tr>";
						echo "<td>" . $row['SUPPLIER_ID'] . "</td>";
						echo "<td>" . $row['SUPPLIER_NAME'] . "</td>";
						echo "<td>" . $row['SUPPLIER_PHONE'] . "</td>";
						echo "<td>" . $row['SUPPLIER_LOCATION'] . "</td>";
						echo "<td>" . $row['SUPPLIER_CITY'] . "</td>";
						echo "<td>" . $row['OUTLET_ID'] . "</td>";
						echo "<td>" . $row['MANAGER_ID'] . "</td>";
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
			$sql = "SELECT * FROM supplier WHERE SUPPLIER_ID='$supp_id'";
		if($res = mysqli_query($link, $sql)){
			if(mysqli_num_rows($res) > 0){
				echo "<table>";
					echo "<tr>";
						echo "<th>Supplier_ID</th>";
						echo "<th>Supplier_name</th>";
						echo "<th>Supplier_phone</th>";
						echo "<th>Supplier_city</th>";
						echo "<th>Supplier_outlet</th>";
						echo "<th>Supplier_manager</th>";
						
					echo "</tr>";
				while($row = mysqli_fetch_array($res)){
					echo "<tr>";
						echo "<td>" . $row['SUPPLIER_ID'] . "</td>";
						echo "<td>" . $row['SUPPLIER_NAME'] . "</td>";
						echo "<td>" . $row['SUPPLIER_PHONE'] . "</td>";
						echo "<td>" . $row['SUPPLIER_LOCATION'] . "</td>";
						echo "<td>" . $row['SUPPLIER_CITY'] . "</td>";
						echo "<td>" . $row['OUTLET_ID'] . "</td>";
						echo "<td>" . $row['MANAGER_ID'] . "</td>";
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
	
		$q="DELETE FROM supplier WHERE SUPPLIER_ID='$supplier_id'"; 
				
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