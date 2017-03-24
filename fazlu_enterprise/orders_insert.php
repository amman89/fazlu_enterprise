<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {//Check it is comming from a form

    //mysql credentials
    //$mysql_host = "localhost";
    //$mysql_username = "root";
    //$mysql_password = "";
    //$mysql_database = "bosila";
	
	$mysql_host = "localhost";
    $mysql_username = "aerogear_fazlu";
    $mysql_password = "utilityfazlu240916";
    $mysql_database = "aerogear_bosila";
    
	
    $u_product = filter_var($_POST["Orders_Product"], FILTER_SANITIZE_STRING); //set PHP variables like this so we can use them anywhere in code below
	$u_user = filter_var($_POST["Orders_User"], FILTER_SANITIZE_STRING);
	$u_rate = $_POST["Order_Rate"];
	$u_quantity = filter_var($_POST["Order_Quantity"], FILTER_SANITIZE_NUMBER_INT);
	$u_date = $_POST["Order_date"];
	$u_amount = $_POST["Order_Rate"]*$_POST["Order_Quantity"];
	$u_pcode = filter_var($_POST["Order_Number"], FILTER_SANITIZE_NUMBER_INT);
    

    //if (empty($u_name)){
        //die("Please enter Company name");
   // }
    //if (empty($u_address) {
        //die("Please enter Company address");
   // }
        
    //if (empty($u_contact)){
        //die("Please enter Company Contact");
   // }   

    //Open a new connection to the MySQL server
    //see https://www.sanwebe.com/2013/03/basic-php-mysqli-usage for more info
    $mysqli = new mysqli($mysql_host, $mysql_username, $mysql_password, $mysql_database);
    
    //Output any connection error
    if ($mysqli->connect_error) {
        die('Error : ('. $mysqli->connect_errno .') '. $mysqli->connect_error);
    }   
    
    $statement = $mysqli->prepare("INSERT INTO orders (OPRODUCT_NAME, ID_USER,ORATE,OQUANTITY,DATE_ORDER,OAMOUNT,ORDER_NUMBER) 
	                               VALUES(?, ?, ?, ?, ?, ?, ?)"); //prepare sql insert query
    //bind parameters for markers, where (s = string, i = integer, d = double,  b = blob)
    $statement->bind_param('sssssss', $u_product, $u_user,$u_rate,$u_quantity,$u_date,$u_amount,$u_pcode); //bind values and execute insert query
    
    if($statement->execute()){
        echo $u_name . "!, Data Successfully saved!";
    }else{
        print $mysqli->error; //show mysql error if any
    }
}
header("Location: order.php");
exit;

?>

