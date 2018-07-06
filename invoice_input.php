<!DOCTYPE html>
<html>
	<head>
		<title> Department </title>

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
			<h3 style="font-family:'Century Gothic'; align=center; font-size: 40px;text-align:center;">Generate Invoice</h3>


		<article>
		
			<div style="background-color:white;">
			
			</div>
			
			<div class="form-col1">
				
			

			 

				<form action="invoice.php" method="post">
				
		
				<h2 style= "font-family:'Century Gothic'; color:black; font-size:25px;"> Enter Customer ID </h2>
					
					  <input type="text" placeholder="Customer ID" name="customer_id" /> 

					 <br />

					 </select> 


					 <input type="submit" name="invoice_btn" class="btn_main" value="Generate Invoice"> 
					
					 
					
			
			

			<div class="clear-style"></div>

		</article>

		</section>

	
		
	</body>
</html>