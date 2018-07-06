<!DOCTYPE html>
<html>
<head>
<style>



</style>
</head>
<body>

<img src="pps_logo.jpg" style="width:200px; length:100px;"> 
<img src="qr_code.png" style="width:100px; length:100px; margin-left:250px;">   

<?php
		
	
			
		
		$db_hostname = "localhost";
		$db_username = "root";
		$db_password = "";	
		$db_name = "shiraz_db";

		$cus_id=$_POST['customer_id'];
		

		$link = mysqli_connect($db_hostname, $db_username, $db_password, $db_name);

		if(!$link)
		{
			die("Connection Failed : " . mysqli_error($link) );
		}
		
		
		if(isset( $_POST['invoice_btn'] ) )
		{
			$sql = "SELECT ORDER_ID,ORDER_TYPE,ORDER_DATE, ORDER_HOUSE, ORDER_STREET,ORDER_AREA, ORDER_CITY, ORDER_COUNTRY,OUTLET_ID FROM orders WHERE CUSTOMER_ID='$cus_id'";
			$run=mysqli_query($link,$sql);
			while($row=mysqli_fetch_assoc($run)){
				echo "<h4>ORDER_ID:".$row['ORDER_ID']."&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp
				OUTLET_ID:".$row['OUTLET_ID']."&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp DATE:".$row['ORDER_DATE']." <br><br>
			ORDER_ADDRESS:".$row['ORDER_AREA']." <br> CITY:".$row['ORDER_CITY']." <br> COUNTRY:".$row['ORDER_COUNTRY']." <br> PRICE:".$row."</h4>";
			}
			
			
		}
		
?>		

<img src="sign.jpg" style="width:600px; length:100px;"> 

</body>

</html>
		
		