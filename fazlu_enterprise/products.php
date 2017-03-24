<!DOCTYPE HTML>
<html>

<?php

//mysql credentials
    $mysql_host = "localhost";
    $mysql_username = "aerogear_fazlu";
    $mysql_password = "utilityfazlu240916";
    $mysql_database = "aerogear_bosila";
	
	$mysqli = new mysqli($mysql_host, $mysql_username, $mysql_password, $mysql_database);
    
    //Output any connection error
    if ($mysqli->connect_error) {
        die('Error : ('. $mysqli->connect_errno .') '. $mysqli->connect_error);
    }  
	


	$sql = "select company_name from company";
	$result = mysqli_query($mysqli ,$sql);


?>



<style type="text/css">
    .container {
        width: 1000px;
        clear: both;
    }
    .container input {
        width: 400%;
        clear: both;
    }
	
	#ul_top_hypers li {
    display: inline;
    } 
	
	

</style>
<head>
        <title>Fazlu Enterprise---Managing Stocks</title>
		<meta http-equiv="content-type" content="text/html; charset=utf-8" />
		<meta name="description" content="" />
		<meta name="keywords" content="" />
		<link href='http://fonts.googleapis.com/css?family=Roboto:400,100,300,700,500,900' rel='stylesheet' type='text/css'>
		<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
		<script src="js/skel.min.js"></script>
		<script src="js/skel-panels.min.js"></script>
		<script src="js/init.js"></script>
		<noscript>
			<link rel="stylesheet" href="css/skel-noscript.css" />
			<link rel="stylesheet" href="css/style.css" />
			<link rel="stylesheet" href="css/style-desktop.css" />
		</noscript>
</head>

   <form method="post" action="product_insert.php">
<body>
        <div id="header">
			<div id="nav-wrapper"> 
			
				<nav id="nav">
					<ul id="ul_top_hypers"><li><a href="home.html"><font color="black"><b>Home</b></a></li>
						<li class="active"><a href="company.php"><font color="black"><b>Company</b></font></a></li>
						<li><a href="products.php"><font color="black"><b>Products</b></a></li>
						<li><a href="user.php"><font color="black"><b>Users</b></a></li>
						<li><a href="stock.php"><font color="black"><b>Stock</b></a></li>
						<li><a href="order.php"><font color="black"><b>Order</b></a></li>
						<li><a href="return.php"><font color="black"><b>Return</b></a></li>
						<li><a href="damage.php"><font color="black"><b>Damage</b></a></li>
						<li><a href="contact.html"><font color="black"><b>Order_Report</b></a></li>
						<li><a href="contact.html"><font color="black"><b>Stock_Report</b></a></li>
					</ul>
				</nav>
			</div>
			
		</div>
		
		<div id="main">
			<div class="container">	
              <div class="row">
                 <div id="sidebar" class="4u">
                   <section>
                   <header>
					  <h2><b>Product Registration</b></h2>
					</header>	
                    <div class="row">
					<section class="6u">					
				<form method="post" action="product_insert.php">
				<p>
                 <label><font color = "white"><b>Select Company Name </b></font> </label> :
                 <select NAME="PCOMPANY_NAME">
                 <?php while ($row = mysqli_fetch_assoc($result)):;?>
		         <option value="<?php echo $row['company_name'];?>"><?php echo $row['company_name'];?></option>
		         <?php endwhile;?>
                 </select>
                </p>
				<label><font color = "white"><b>Product Name</b></font> </label>   : <input type="text" name="Product_Name" placeholder="Enter Product Name" /><br />
				

				<input type="submit" value="Submit" />
				</form>
				    </section>
					</div>
					</section>
					</div>
					</div>
			</div>

		</div>

        <div id="tweet">
			<div class="container">
				<section>
					<blockquote>&ldquo;With Great work come great responsibility and we are willing to give our best effort &rdquo;</blockquote>
				</section>
			</div>
		</div>


		<div id="footer">
			<div class="container">
				<section>
					<header>
						<h2>Get in touch</h2>
						<span class="byline">We are waiting for your kind notification</span>
					</header>
					<ul class="contact">
						<li><a href="#" class="fa fa-twitter"><span>Twitter</span></a></li>
						<li class="active"><a href="https://www.facebook.com/" class="fa fa-facebook"><span>Facebook</span></a></li>
						<li><a href="#" class="fa fa-dribbble"><span>Pinterest</span></a></li>
						<li><a href="#" class="fa fa-tumblr"><span>Google+</span></a></li>
					</ul>
				</section>
			</div>
		</div>

	
		<div id="copyright">
			<div class="container">
				Design & Developed by : <a href="https://www.facebook.com/InjamamulKarim"> Injamamul Karim </a> 
			</div>
		</div>


</body>
</form>
</html>


