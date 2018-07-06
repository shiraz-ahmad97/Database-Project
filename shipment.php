
<!DOCTYPE html>
<html>
	<head>
		<title> Shipments </title>

		<link href="./css/mytheme.css" rel="stylesheet">

	</head>

	<style>
		
		
		input[type=text], select {
    width: 12%;
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    border-radius: 10px;
    box-sizing: border-box;
}

.btn_main {
				
		  border-radius: 4px;
		  background-color: #E1E0DB;
		  border: none;
		  color: #FFFFFF;
		  text-align: center;
		  font-size: 15px;
		  
		  font-family: Century Gothic;
		  color: black ;
		  padding: 10px;
		  width: 280px;
		  transition: all 1.5s;
		  cursor: pointer;
			margin-top: 20px;
			padding-right: 10px;
		}

	</style>
<body>
		<section>
		<img src="pps_logo.jpg" style="width:200px; length:100px;margin-left:550px;">  
			<h3 style="font-family:'Century Gothic'; align=center; font-size: 40px;text-align:center;"> Shipments</h3>
<img src="price_table.jpg" style="width:600px; length:500px;margin-left:600px;margin-top:100px;">  

		<article>
		
			<div style="background-color:white;">
			
			</div>
			
			<div class="form-col1">
				
			

			 

				<form action="shipment_save.php" method="post" style="margin-left: 200px;margin-top:-400px;">
				
		
				<h2 style= "font-family:'Century Gothic'; color:black; font-size:25px;"> Add a new shipment </h2>
					
					  <input type="text" placeholder="Shipment ID" name="shipment_id" /> 

					    <input type="text" placeholder="Order ID" name="or_id"/> 
						 <br />
						<input type="text" placeholder="Shipping type" name="ship_type"/> 
						<input type="text" placeholder="Price" name="price"/>
							<br>
							<input type="text" placeholder="Quantity" name="quant"/> 
							<input type="text" placeholder="Weight" name="weight"/>
						 
					</select>

					 <br />

					 
					 </select> 


					 <input type="submit" name="submit_btn" class="btn_main" value="Insert"> 
					
					 
					
					 
					  <h2 style= "font-family:'Century Gothic'; color:black; font-size:25px;">Delete a shipment</h2>
						  <input type="text" placeholder="Shipment ID" name="shipment_id" />
					   <br>
					   <input type="submit" name="delete_btn" class="btn_main" value="Delete"> 
					 
					 </form>
			
			</div>
			
			

			<div class="clear-style"></div>

		</article>

		</section>

	
		
	</body>
</html>