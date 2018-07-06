<!DOCTYPE html>
<html>
	<head>
		<title> PPS - Pakistan Postal Service </title>
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link href="./css/mytheme.css" rel="stylesheet">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	</head>
		<style>
			body{
				font: 600 14px/24px "Open Sans", "HelveticaNeue-Light", "Helvetica Neue Light", "Helvetica Neue", Helvetica, Arial, "Lucida Grande", Sans-Serif;
  margin: 12px 0;
			}
				ul {
				list-style-type: none;
				margin: 0;
				padding: 0;
				overflow: hidden;
				background-color: #333;
			}

			li {
				float: left;
			}

			li a {
				display: block;
				color: white;
				text-align: center;
				padding: 29px 16px;
				text-decoration: none;
				font-size:14px;
				font-family:Century Gothic;
				font-weight: bold;
			}

			/* Change the link color to #111 (black) on hover */
			li a:hover {
				background-color: #111;
			}
			
			
			.logo{
				width:170px;
				length:170px;
				margin-top: 5px;
			}
			
			.parallax {
			/* The image used */
			background-image: url("plane.jpg");

			/* Set a specific height */
			min-height: 500px; 

			/* Create the parallax scrolling effect */
			background-attachment: fixed;
			background-position: center;
			background-repeat: no-repeat;
			background-size: cover;
			font-size: 40px;
			font-family:Century Gothic;
			font-weight: bold;
			color:white;
			}
		.button {
		  border-radius: 4px;
		  background-color: #B3022C;
		  border: none;
		  color: #FFFFFF;
		  text-align: center;
		  font-size: 28px;
		  font-family: Century Gothic;
		  padding: 20px;
		  width: 200px;
		  transition: all 0.5s;
		  cursor: pointer;
		  margin-left: 960px;
			margin-top: 200px;
			padding-righ: 30px;
		}

		.button span {
		  cursor: pointer;
		  display: inline-block;
		  position: relative;
		  transition: 0.5s;
		}

		.button span:after {
		  content: '\00bb';
		  position: absolute;
		  opacity: 0;
		  top: 0;
		  right: -20px;
		  transition: 0.5s;
		}

		.button:hover span {
		  padding-right: 25px;
		}

		.button:hover span:after {
		  opacity: 1;
		  right: 0;
		}
		
		.card-container {
		  cursor: pointer;
		  height: 150px;
		  perspective: 600;
		  position: relative;
		  width: 150px;
		}
		.card {
		  height: 100%;
		  position: absolute;
		  transform-style: preserve-3d;
		  transition: all 1s ease-in-out;
		  width: 100%;
		}
		.card:hover {
		  transform: rotateY(180deg);
		}
		.card .side {
		  backface-visibility: hidden;
		  border-radius: 6px;
		  height: 100%;
		  position: absolute;
		  overflow: hidden;
		  width: 100%;
		}
		.card .back {
		  background: #eaeaed;
		  color: #0087cc;
		  line-height: 150px;
		  text-align: center;
		  transform: rotateY(180deg);
		}
		
		.lower_parallax {
			/* The image used */
			background-image: url("truck.jpg");

			/* Set a specific height */
			min-height: 500px; 

			/* Create the parallax scrolling effect */
			background-attachment: fixed;
			background-position: center;
			background-repeat: no-repeat;
			background-size: cover;
			font-size: 40px;
			font-family:Century Gothic;
			font-weight: bold;
			color:white;
			}
		
			.button_lower {
				
		  border-radius: 4px;
		  background-color: #E1E0DB;
		  border: none;
		  color: #FFFFFF;
		  text-align: center;
		  font-size: 28px;
		  font-family: Century Gothic;
		  color: black;
		  padding: 20px;
		  width: 200px;
		  transition: all 0.5s;
		  cursor: pointer;
		  margin-left: 600px;
			margin-top: 50px;
			padding-right: 30px;
		}

		.button_lower span {
		  cursor: pointer;
		  display: inline-block;
		  position: relative;
		  transition: 0.5s;
		}

		.button_lower span:after {
		  content: '\00bb';
		  position: absolute;
		  opacity: 0;
		  top: 0;
		  right: -20px;
		  transition: 0.5s;
		}

		.button_lower:hover span {
		  padding-right: 25px;
		}

		.button_lower:hover span:after {
		  opacity: 1;
		  right: 0;
		}
		
		.div1 {
			width: 350px;
			height: 120px;    
			border: 3px solid grey;
			box-sizing: border-box;
			font-family:Century Gothic;
			font-size: 30px;
			text-align:center;
		}

			
			#box div
			{
			position: absolute;
			height: 250px;
			width: 250px;
			border: 1px solid lightgrey;
			background: rgba(255,200,100,0.8);
			text-align: center;
			font-size: 200px;
			}

			#box
			{
			-webkit-animation-name: animation;
			-webkit-animation-timing-function: ease-in-out;
			-webkit-animation-iteration-count: infinite;
			-webkit-animation-duration: 6s;
			margin:80;
			-webkit-transform-style: preserve-3d;
			-webkit-transform-origin: 125px 125px 0;
			}

			#box .one
			{ 
			-webkit-transform: translateZ(125px);
			}
			#box .two
			{ 
			-webkit-transform: rotateX(-90deg) translateZ(125px);
			}
			#box .three 
			{
			-webkit-transform: rotateY(90deg) rotateX(90deg) translateZ(125px);
			}
			#box .four 
			{
			-webkit-transform: rotateY(180deg) rotateZ(90deg) translateZ(125px);
			}
			#box .five
			{ 
			-webkit-transform: rotateY(-90deg) rotateZ(90deg) translateZ(125px);
			}
			#box .six 
			{
			-webkit-transform: rotateY(90deg) translateZ(125px);
			}

			@-webkit-keyframes animation
			{
			from,to{}
			16% { -webkit-transform: rotateY(-90deg);}
			33% { -webkit-transform: rotateY(-90deg) rotateZ(135deg);}
			50% { -webkit-transform: rotateY(225deg) rotateZ(135deg);}
			66% { -webkit-transform: rotateY(135deg) rotateX(135deg);}
			83% { -webkit-transform: rotateX(135deg);}
			}


			.footer {
				display:block;
				left: 0;
				width: 100%;
				background-color: #0F131E;
				color: white;
				text-align: center;
		
		</style>
		
		
	
	
	<body>
	<ul>
	  <li><img class="logo" src="pps_logo.jpg"></li>
	  <li><a href="">Home</a></li>
	  <li><a href="customersss.php">Customers</a></li>
	  <li><a href="order.php">Orders</a></li>
	  <li><a href="shipment.php">Shipments</a></li>
	   <li><a href="employee.php">Employees</a></li>
	  <li><a href="dept.php">Departments</a></li>
	  <li><a href="supplier.php">Supplier</a></li>
	   <li><a href="product.php">Product</a></li>
	  <li><a href="manager.php">Manager</a></li>
	  <li><a href="outlet.php">Outlet</a></li>
	  <li><a href="customer.php">Customer Service</a></li>
	  <li><a href="report_html.php">Reports</a></li>
	 
	</ul>
		

		<div class="parallax"> <button class="button"><span> <a href="invoice_input.php" style="color:white;">Generate Invoice</a> </span></button> </div>
		
		<div> <h1 style="text-align:center;font-family:Century Gothic;font-size:40px;color:#B3022C;"> ||||||| Businesses we serve |||||||</h1> </div>
		<div class="card-container">
	<div class="card">
    <div class="side"><img src="nissan.jpeg" alt="Ghandhara Nissan Industries" style="width:150px;height:150px;"></div>
    <div class="side back" style="color: white;background-color:black;">Ghandhara Nissan Industries</div>
	</div>
	
	<div class="card" style="margin-left:200px;">
    <div class="side"><img src="netsol.jpg" alt="Ghandhara Nissan Industries" style="width:150px;height:150px;"></div>
    <div class="side back" style="color: white;background-color:black;">Netsol</div>
	</div>
	
		<div class="card" style="margin-left:400px;">
    <div class="side"><img src="sisco.jpg" alt="Ghandhara Nissan Industries" style="width:150px;height:150px;"></div>
    <div class="side back" style="color: white;background-color:black;">Sisco Softwares</div>
	</div>
	
		<div class="card" style="margin-left:600px;">
    <div class="side"><img src="HBL.jpg" alt="Ghandhara Nissan Industries" style="width:150px;height:150px;"></div>
    <div class="side back" style="color: white;background-color:black;">Habib Bank Ltd.</div>
	</div>
	
		<div class="card" style="margin-left:800px;">
    <div class="side"><img src="meezan.png" alt="Ghandhara Nissan Industries" style="width:150px;height:150px;"></div>
    <div class="side back" style="color: white;background-color:black;">Meezan Bank Ltd.</div>
	</div>
	
	<div class="card" style="margin-left:1000px;">
    <div class="side"><img src="abott.png" alt="Ghandhara Nissan Industries" style="width:150px;height:150px;"></div>
    <div class="side back" style="color: white;background-color:black;">Abbott Pharmacy</div>
	</div>
	
	<div class="card" style="margin-left:1200px;">
    <div class="side"><img src="auto.png" alt="Ghandhara Nissan Industries" style="width:150px;height:150px;"></div>
    <div class="side back" style="color: white;background-color:black;">Advance Auto Parts</div>
	</div>
	</div>
	
	
	<br> <br> 
	
	
	<div class="div1" style="margin-left:50px;">2000 Drivers <i class="fa fa-truck" style="font-size:80px;color:#B3022C;"></i> </div>
	
	<div class="div1" style="margin-left:500px;margin-top: -120px;"> <i class="fa fa-building" style="font-size:80px;color:#B3022C;"></i> 25 Locations    Nationwide </div>
	
	<div class="div1" style="margin-left:950px;margin-top: -120px;">  <i class="fa fa-cc-visa" style="font-size:80px;color:#B3022C;"></i> 90,000 Packages in 2018</div>
	
	
	<br> <br>
	

	<div class="lower_parallax"> <!--<button class="button_lower"><span>Our Outlets </span></button> --></div>	
		
		
<div id="view" style="width:350px; height:250px; margin:80px auto 0 auto; margin-left: 100px;">
<div id="box">
<div class="one"><img src="square_1.jpg" style="width: 250px; height:250px;"></div>
<div class="two"><img src="square_5.jpg"style="width: 250px; height:250px;"></div>
<div class="three"><img src="square_3.jpg" style="width: 250px; height:250px;"></div>
<div class="four"><img src="square_4.jpg" style="width: 250px; height:250px;"></div>
<div class="five"><img src="square_2.jpg" style="width: 250px; height:250px;"></div>
<div class="six"><img src="square_6.jpg" style="width: 250px; height:250px;"></div>
</div>

<div style="margin-left: 500px;"> <img src="pps_logo.jpg"> </div>
</div>


	
	</body>
	
</html>