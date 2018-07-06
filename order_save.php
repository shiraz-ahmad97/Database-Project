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
                
                $order_id = $_POST['order_id'];
                $dat = $_POST['dat'];
                $cust_id = $_POST['cust_id'];
                $ho_num = $_POST['ho_num'];
                $cus_area = $_POST['cus_area'];
                $cus_street = $_POST['cus_street'];
                $or_city = $_POST['or_city'];
                $cont = $_POST['cont'];
                $or_type = $_POST['or_type'];
                $out_id = $_POST['out_id'];
                $pro_id = $_POST['pro_id'];
                $ord_id=  $_POST['or_id'];
				 $ordr_id=  $_POST['ordr_id'];
				 
				 
				 $update_name = $_POST['order_idi'];
		$update_idi = $_POST['order_nam'];
		$update_label = $_POST['up_label'];
		
		
                $link = mysqli_connect($db_hostname, $db_username, $db_password, $db_name);

                if(!$link)
                {
                        die("Connection Failed : " . mysqli_error($link) );
                }
                
                if(isset( $_POST['insert_btn'] ) )
                {
                        
                $sql = "INSERT INTO orders (ORDER_ID, ORDER_TYPE,ORDER_DATE,ORDER_HOUSE,ORDER_STREET,ORDER_AREA,ORDER_CITY,ORDER_COUNTRY, CUSTOMER_ID, OUTLET_ID , PRODUCT_ID) 
                        VALUES ('$order_id','$or_type','$dat','$ho_num','$cus_area','$cus_street','$or_city','$cont','$cust_id', '$out_id' , '$pro_id') ";

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
			  
			  
			   if(isset( $_POST['show_btn'] ) )
			   {
				    $sql = "SELECT * FROM orders";
		if($res = mysqli_query($link, $sql)){
			if(mysqli_num_rows($res) > 0){
				echo "<table>";
					echo "<tr>";
						echo "<th>Order_ID</th>";
						echo "<th>Order_type</th>";
						echo "<th>Date</th>";
						echo "<th>House</th>";
						echo "<th>Street</th>";
						echo "<th>Area</th>";
						echo "<th>City</th>";
						echo "<th>Country</th>";
					echo "</tr>";
				while($row = mysqli_fetch_array($res)){
					echo "<tr>";
						echo "<td>" . $row['ORDER_ID'] . "</td>";
						echo "<td>" . $row['ORDER_TYPE'] . "</td>";
						echo "<td>" . $row['ORDER_DATE'] . "</td>";
						echo "<td>" . $row['ORDER_HOUSE'] . "</td>";
						echo "<td>" . $row['ORDER_STREET'] . "</td>";
						echo "<td>" . $row['ORDER_AREA'] . "</td>";
						echo "<td>" . $row['ORDER_CITY'] . "</td>";
						echo "<td>" . $row['ORDER_COUNTRY'] . "</td>";
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
			  
			  
			  
			   if(isset( $_POST['search_btn'] ) )
			   {
			  $sql = "SELECT * FROM orders WHERE ORDER_ID='$ordr_id'";
		if($res = mysqli_query($link, $sql)){
			if(mysqli_num_rows($res) > 0){
				echo "<table>";
					echo "<tr>";
						echo "<th>Order_ID</th>";
						echo "<th>Order_type</th>";
						echo "<th>Date</th>";
						echo "<th>House</th>";
						echo "<th>Street</th>";
						echo "<th>Area</th>";
						echo "<th>City</th>";
						echo "<th>Country</th>";
					echo "</tr>";
				while($row = mysqli_fetch_array($res)){
					echo "<tr>";
						echo "<td>" . $row['ORDER_ID'] . "</td>";
						echo "<td>" . $row['ORDER_TYPE'] . "</td>";
						echo "<td>" . $row['ORDER_DATE'] . "</td>";
						echo "<td>" . $row['ORDER_HOUSE'] . "</td>";
						echo "<td>" . $row['ORDER_STREET'] . "</td>";
						echo "<td>" . $row['ORDER_AREA'] . "</td>";
						echo "<td>" . $row['ORDER_CITY'] . "</td>";
						echo "<td>" . $row['ORDER_COUNTRY'] . "</td>";
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
                $update = "UPDATE orders SET $update_label='$update_name' WHERE ORDER_ID='$update_idi'";
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
        
                $q="DELETE FROM ORDERS WHERE ORDER_ID='$ord_id'"; 
                                
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