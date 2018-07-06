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

	
		
		$link = mysqli_connect($db_hostname, $db_username, $db_password, $db_name);

		if(!$link)
		{
			die("Connection Failed : " . mysqli_error($link) );
		}
		
		if(isset( $_POST['orders_btn'] ) )
		{
			$sql = "SELECT ORDER_ID,ORDER_DATE FROM orders GROUP BY ORDER_DATE";
		if($res = mysqli_query($link, $sql)){
			if(mysqli_num_rows($res) > 0){
				echo "<table>";
					echo "<tr>";
						echo "<th>Order_ID</th>";
						echo "<th>Order_DATE</th>";
					echo "</tr>";
				while($row = mysqli_fetch_array($res)){
					echo "<tr>";
						echo "<td>" . $row['ORDER_ID'] . "</td>";
						echo "<td>" . $row['ORDER_DATE'] . "</td>";
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
		
		if(isset( $_POST['customer_btn'] ) )
		{
			$sql = "SELECT ORDER_COUNTRY,ORDER_CITY,ORDER_TYPE FROM orders WHERE ORDER_TYPE='International'";
		if($res = mysqli_query($link, $sql)){
			if(mysqli_num_rows($res) > 0){
				echo "<table>";
					echo "<tr>";
						echo "<th>Country</th>";
						echo "<th>City</th>";
						echo "<th>Order_Type</th>";
						
					echo "</tr>";
				while($row = mysqli_fetch_array($res)){
					echo "<tr>";
						echo "<td>" . $row['ORDER_COUNTRY'] . "</td>";
						echo "<td>" . $row['ORDER_CITY'] . "</td>";
						echo "<td>" . $row['ORDER_TYPE'] . "</td>";
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
		
		if(isset( $_POST['products_btn'] ) )
		{
			$sql = "SELECT PRODUCT_NAME,PRODUCT_QUANTITY FROM product GROUP BY PRODUCT_ID";
		if($res = mysqli_query($link, $sql)){
			if(mysqli_num_rows($res) > 0){
				echo "<table>";
					echo "<tr>";
						echo "<th>Product_name</th>";
						echo "<th>Quantity</th>";
					echo "</tr>";
				while($row = mysqli_fetch_array($res)){
					echo "<tr>";
						echo "<td>" . $row['PRODUCT_NAME'] . "</td>";
						echo "<td>" . $row['PRODUCT_QUANTITY'] . "</td>";
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
		
		
		if(isset( $_POST['feedback_btn'] ) )
		{
			$sql = "SELECT Customer_ID,Feedback,Feedback_Type FROM customer_service WHERE Feedback_Type='Complain'";
		if($res = mysqli_query($link, $sql)){
			if(mysqli_num_rows($res) > 0){
				echo "<table>";
					echo "<tr>";
						echo "<th>Customer_ID</th>";
						echo "<th>Feedback</th>";
						echo "<th>Feedback_Type</th>";
						
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
		
		if(isset( $_POST['average_btn'] ) )
		{
			$sql = "SELECT DEPARTMENT_ID, avg(EMP_SALARY) FROM EMP";
		if($res = mysqli_query($link, $sql)){
			if(mysqli_num_rows($res) > 0){
				echo "<table>";
					echo "<tr>";
						echo "<th>DEPARTMENT_ID</th>";
						echo "<th>AVERAGE SALARY</th>";
						
					echo "</tr>";
				while($row = mysqli_fetch_array($res)){
					echo "<tr>";
						echo "<td>" . $row['DEPARTMENT_ID'] . "</td>";
						echo "<td>" . $row['EMP_SALARY'] . "</td>";
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
		
		
?>


</body>
</html>