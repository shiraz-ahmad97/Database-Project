
<!DOCTYPE html>
<html>
	<head>
		<title> Employees </title>

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


.submit_btn {
				
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
		#date{
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
			<h3 style="font-family:'Century Gothic'; align=center; font-size: 40px;text-align:center;"> Employees</h3>
<img src="customer_service.png" style="width:600px; length:500px;margin-left:600px;margin-top:100px;">  

		<article>
		
			<div style="background-color:white;">
			
			</div>
			
			<div class="form-col1">
				
			

			 

				<form action="employee_save.php" method="post" style="margin-left: 200px;margin-top:-400px;">
				
		
				<h2 style= "font-family:'Century Gothic'; color:black; font-size:25px;"> Add a new employee </h2>
					
					  <input type="text" placeholder="Employee ID" name="employee_id" /> 

					    <input type="text" placeholder="Employee Name" name="employee_name"/> 
						 <br />
						<input type="text" placeholder="Employee Phone" name="employee_phone"/> 
						<input type="text" placeholder="Employee email" name="employee_email"/>
							<br>
							<input type="text" placeholder="House Number" name="house_number"/> 
							<input type="text" placeholder="Street" name="employee_street"/> 
							<br>
							<input type="text" placeholder="Area" name="employee_area"/> 
							<input type="text" placeholder="City" name="employee_city"/> 
							<br>
							<input type="text" placeholder="Employee salary" name="employee_sal"/> 
							<input type="text" placeholder="Employee commission" name="employee_com"/> 
							<br>
							<input id="date" type="date" placeholder="Hiredate" name="employee_hiredate"/> 
							<input type="text" placeholder="Employee manager" name="employee_man"/> 
							<br>
							<input type="text" placeholder="Outlet ID" name="employee_out"/> 
							<input type="text" placeholder="Department ID" name="employee_dept"/> 

					</select>

					 <br />

					 
					 </select> 


					 <input type="submit" name="insert_btn" class="btn_main" value="Insert"> 
					 <br>
					 <input type="submit" name="show_btn" class="btn_main" value="Show all data"> 
					
					 
					<h2 style= "font-family:'Century Gothic'; color:black; font-size:25px;">Search an employee</h2>
					  <input type="text" placeholder="Employee ID" name="employee_id" />
					<br>
					 <input type="submit" name="search_btn" class="btn_main" value="Search"> 
					
					
				<h2 style= "font-family:'Century Gothic'; color:black; font-size:25px;">Update employee details</h2>
					 	  <input type="text" placeholder="Employee ID" name="employee_id" />
					<br>
					 <input type="submit" name="update_btn" class="btn_main" value="Update"> 
					 
					  <h2 style= "font-family:'Century Gothic'; color:black; font-size:25px;">Delete an employee</h2>
						  <input type="text" placeholder="Employee ID" name="employee_id" />
					   <br>
					   <input type="submit" name="delete_btn" class="btn_main" value="Delete"> 
					 
					 </form>
			
			</div>
			
			

			<div class="clear-style"></div>

		</article>

		</section>

	
		
	</body>
</html>