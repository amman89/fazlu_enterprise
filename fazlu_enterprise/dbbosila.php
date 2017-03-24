<?php
 //$db = mysqli_connect('localhost','aerogear_fazlu','','bosila')
 $db = mysqli_connect('localhost','aerogear_fazlu','utilityfazlu240916','aerogear_bosila')
 
 or die('Error connecting to MySQL server.');
?>

<html>
 <head>
 </head>
 <body>
 <h1>PHP connect to MySQL</h1>
 
 <?php
//Step2
$query = "SELECT * FROM company";
mysqli_query($db, $query) or die('Error querying database.');
//Step3
$result = mysqli_query($db, $query);
$row = mysqli_fetch_array($result);

while ($row = mysqli_fetch_array($result)) {
 echo $row['ID_COMPANY'] . ' ' . $row['COMPANY_NAME'] . ': ' . $row['COMPANY_ADDRESS'] . ' ' . $row['COMPANY_CONTACT'] .'<br />';
}
//Step 4
mysqli_close($db);
?>
</body>
</html>