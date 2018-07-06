<?php
	
				$db_hostname = "localhost";
                $db_username = "root";
                $db_password = "";        
                $db_name = "shiraz_db";
                
                $shipment_id = $_POST['shipment_id'];
                $or_id = $_POST['or_id'];
                $ship_type = $_POST['ship_type'];
                $price = $_POST['price'];
                $quant = $_POST['quant'];
				$wt= $_POST['weight'];
                
                
                $link = mysqli_connect($db_hostname, $db_username, $db_password, $db_name);

                if(!$link)
                {
                        die("Connection Failed : " . mysqli_error($link) );
                }
                
                if(isset( $_POST['submit_btn'] ) )
                {
                        
                $sql = "INSERT INTO shipment (SHIPPING_ID, SHIPPING_TYPE , SHIPPING_PRICE , SHIPPING_QUANTITY , ORDER_ID,Weight) 
                        VALUES ('$shipment_id','$or_id','$ship_type','$price','$quant','$wt')";

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
                
                /*if(isset( $_POST['update_btn']))
        {
                //$update = "UPDATE department SET Department_name='$update_name' WHERE Department_ID='$update_idi'";
                $update = "UPDATE EMP SET $update_label='$update_name' WHERE Department_ID='$update_idi'";
                $up = mysqli_query($link, $update);
                
                if(!$up)
                {
                        die("Query failed: " . mysqli_error($link) );
                }
                else 
                {
                        echo "Record updated successfully.";
                }
        
        
        }*/
        
             if( isset( $_POST['delete_btn'] ) )
          {
        
                $q="DELETE FROM SHIPMENTS WHERE SHIPMENT='$SHIPMENT_ID'"; 
                                
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
                
