<?php
$username = "root";
$password = "";
$hostname = "localhost"; 

//connection to the database
$dbhandle = mysql_connect($hostname, $username, $password) 
 or die("Unable to connect to MySQL");
echo "Connected to MySQL<br>";

//select a database to work with
$selected = mysql_select_db("myphotographer_db",$dbhandle) 
  or die("Could not select myphotographer_db");

//execute the SQL query and return records
// $result = mysql_query("SELECT id, nume,prenume,username,email FROM register");

//fetch tha data from the database 
// while ($row = mysql_fetch_array($result)) {
	//display the results
   // echo "ID:".$row{'id'}."<br>"."Last Name: ".$row{'nume'}."<br>"." First Name: ".$row{'prenume'}."<br>"."Username: ".$row('username')."<br>"." Email: ".$row('email')."<br>";
// }
//close the connection
mysql_close($dbhandle);
?>