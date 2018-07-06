<!DOCTYPE html>
<html>
	<head>
		<title> Department </title>

		<link href="./css/mytheme.css" rel="stylesheet">

	</head>

	<style>
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
<img src="pps_logo.jpg" style="width:200px; length:100px;margin-left:550px;">  
<h3 style="font-family:'Century Gothic'; align=center; font-size: 40px;text-align:center;">Reports</h3>
			

<form action="reports.php" method="post">


<h2 style= "font-family:'Century Gothic'; color:black; font-size:25px;"> Generate Orders Report </h2>
 <input type="submit" name="orders_btn" class="btn_main" value="Generate report"> 
 <br>
 <h2 style= "font-family:'Century Gothic'; color:black; font-size:25px;"> Generate Products Report </h2>
 <input type="submit" name="products_btn" class="btn_main" value="Generate report"> 
 <br>
  <h2 style= "font-family:'Century Gothic'; color:black; font-size:25px;"> Generate International Customer Report </h2>
 <input type="submit" name="customer_btn" class="btn_main" value="Generate report"> 
 
 <h2 style= "font-family:'Century Gothic'; color:black; font-size:25px;"> Generate Complain Report </h2>
 <input type="submit" name="feedback_btn" class="btn_main" value="Generate report"> 
 
 <h2 style= "font-family:'Century Gothic'; color:black; font-size:25px;"> Calculate Average Employees' Salary </h2>
 <input type="submit" name="average_btn" class="btn_main" value="Calculate">


	</body>
	
</html>