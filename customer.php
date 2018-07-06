
<!DOCTYPE html>
<html>
	<head>
		<title> Customer Service </title>

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
			<h3 style="font-family:'Century Gothic'; align=center; font-size: 40px;text-align:center;">Customer Service</h3>
<img src="customer_service.png" style="width:600px; length:500px;margin-left:600px;margin-top:100px;">  

		<article>
		
			<div style="background-color:white;">
			
			</div>
			
			<div class="form-col1">
				
			

			 

				<form action="customer_save.php" method="post" style="margin-left: 200px;margin-top:-400px;">
				
		
				<h2 style= "font-family:'Century Gothic'; color:black; font-size:25px;"> Add a feedback </h2>
					
					  <input type="text" placeholder="Customer ID" name="cus_id" /> 

					    <input type="text" placeholder="Feedback" name="feedback"/> 
						 <br />
						<label for="feedback_type" style="font-family:Century Gothic; font-size:20px;color:white;margin-left:-100px;">Feedback Type:</label>
					<select id="feedback_type" name="feedback_type">
					  <option value="Suggestion">Suggestion</option>
					  <option value="Complaint">Complaint</option>
					</select>

					 <br />

					 
					 </select> 


					 <input type="submit" name="submit_btn" class="btn_main" value="Insert"> 
					 <br>
					 <input type="submit" name="show_btn" class="btn_main" value="Show all data"> 
					
					 
					<h2 style= "font-family:'Century Gothic'; color:black; font-size:25px;">Search a feedback</h2>
					 <input type="text" placeholder="Customer ID" name="cus_id" />
					<br>
					 <input type="submit" name="search_btn" class="btn_main" value="Search"> 
					
					
					 
					  <h2 style= "font-family:'Century Gothic'; color:black; font-size:25px;">Delete a feedback</h2>
					   <input type="text" placeholder="Customer ID" name="cus_id" />
					   <br>
					   <input type="submit" name="delete_btn" class="btn_main" value="Delete"> 
					 
					 </form>
			
			</div>
			
			

			<div class="clear-style"></div>

		</article>

		</section>

	
		
	</body>
</html>