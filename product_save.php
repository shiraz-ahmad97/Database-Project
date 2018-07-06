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

		$product_id=$_POST['product_id'];
		$product_name=$_POST['product_name'];
		$product_quantity=$_POST['product_quantity'];
		$product_price=$_POST['product_price'];
		$product_supplier=$_POST['supplier_id'];
		//$pro_id=$_POST['pro_id'];
		
		
		
		$update_name = $_POST['prod_idi'];
		$update_idi = $_POST['prod_nam'];
		$update_label = $_POST['up_label'];

		$link = mysqli_connect($db_hostname, $db_username, $db_password, $db_name);

		if(!$link)
		{
			die("Connection Failed : " . mysqli_error($link) );
		}
		
		
		
		if(isset( $_POST['submit_btn'] ) )
		{
			
		$sql = "INSERT INTO product (PRODUCT_ID, PRODUCT_NAME,PRODUCT_QUANTITY,PRODECT_PRICE,SUPPLIER_ID) 
			VALUES ('$product_id','$product_name','$product_quantity','$product_price','$product_supplier') ";

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
		$sql = "SELECT * FROM product"; 
		if($res = mysqli_query($link, $sql)){
			if(mysqli_num_rows($res) > 0){
				echo "<table>";
					echo "<tr>";
						echo "<th>Product_ID</th>";
						echo "<th>Product_name</th>";
						echo "<th>Product_quantity</th>";
						echo "<th>Product_price</th>";
						echo "<th>Supplier_ID</th>";
						
					echo "</tr>";
				while($row = mysqli_fetch_array($res)){
					echo "<tr>";
						echo "<td>" . $row['PRODUCT_ID'] . "</td>";
						echo "<td>" . $row['PRODUCT_NAME'] . "</td>";
						echo "<td>" . $row['PRODUCT_QUANTITY'] . "</td>";
						echo "<td>" . $row['PRODECT_PRICE'] . "</td>";
						echo "<td>" . $row['SUPPLIER_ID'] . "</td>";
						
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
			$sql = "SELECT * FROM product WHERE PRODUCT_ID='$pro_id'";
		if($res = mysqli_query($link, $sql)){
			if(mysqli_num_rows($res) > 0){
				echo "<table>";
					echo "<tr>";
						echo "<th>Product_ID</th>";
						echo "<th>Product_name</th>";
						echo "<th>Product_quantity</th>";
						echo "<th>Product_price</th>";
						echo "<th>Supplier_ID</th>";
						
					echo "</tr>";
				while($row = mysqli_fetch_array($res)){
					echo "<tr>";
						echo "<td>" . $row['PRODUCT_ID'] . "</td>";
						echo "<td>" . $row['PRODUCT_NAME'] . "</td>";
						echo "<td>" . $row['PRODUCT_QUANTITY'] . "</td>";
						echo "<td>" . $row['PRODECT_PRICE'] . "</td>";
						echo "<td>" . $row['SUPPLIER_ID'] . "</td>";
						
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
		$update = "UPDATE product SET $update_label='$update_name' WHERE PRODUCT_ID='$update_idi'";
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
	
		$q="DELETE FROM department WHERE PRODUCT_ID='$product_id'"; 
				
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