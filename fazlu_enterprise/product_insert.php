<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {//Check it is comming from a form


	
	$mysql_host = "localhost";
    $mysql_username = "aerogear_fazlu";
    $mysql_password = "utilityfazlu240916";
    $mysql_database = "aerogear_bosila";
    
    $u_name = filter_var($_POST["PCOMPANY_NAME"], FILTER_SANITIZE_STRING); //set PHP variables like this so we can use them anywhere in code below
    $u_address = filter_var($_POST["Product_Name"], FILTER_SANITIZE_STRING);
	
    //$u_contact = filter_var($_POST["Company_Contact"], FILTER_SANITIZE_STRING);

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
    
    $statement = $mysqli->prepare("INSERT INTO products (PCOMPANY_NAME, PRODUCT_NAME) VALUES(?, ?)"); //prepare sql insert query
    //bind parameters for markers, where (s = string, i = integer, d = double,  b = blob)
    $statement->bind_param('ss', $u_name, $u_address); //bind values and execute insert query
    
    if($statement->execute()){
        echo $u_address . "!, Data Successfully saved!";
    }else{
        print $mysqli->error; //show mysql error if any
    }
}
 header("Location: products.php");
 exit;

?>

