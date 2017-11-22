<?php
require 'DBconnection.php';

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}



$nume = $_POST['nume'];
$prenume = $_POST['prenume'];
$username =strtolower( $_POST['username'] );
$email = $_POST['email'];
$gender = $_POST['gender'];
$password = $_POST['password'];

$numele = "";
$emailul = "";
$genderErr = "";
$genderul = "";


if(isset($_POST['submit']))
{
 
$nume = mysqli_real_escape_string($db, $nume);
$prenume = mysqli_real_escape_string($db, $prenume);
$username = mysqli_real_escape_string($db, $username);
$email = mysqli_real_escape_string($db, $email);
$password = mysqli_real_escape_string($db, $password);
$password = md5($password);
$gender = mysqli_real_escape_string($db, $gender);

	if(empty($_POST['nume']))
	{
		echo "Numele e necesar!";
	} else
	{
		$numele = test_input($_POST['nume']);
		if(!preg_match("/^[a-zA-Z ]*$/", $numele))
		{
			echo "Doar litere si spatii acceptate.";
		}
	}


	if(empty($_POST['email']))
	{
		echo "Email necesar!";
	} else
	{
		$emailul = test_input($_POST['email']);
		if(!filter_var($email, FILTER_VALIDATE_EMAIL))
		{
			echo "Adresa de email invalida!";
		}
	}

	if (empty($_POST["gender"])) {
   		 $genderErr = "Gender is required";
  	} else {
    	$genderul = test_input($_POST["gender"]);
  	}

$sql = "SELECT username FROM register WHERE username = '$username'";
$result = mysqli_query($db,$sql);
$check = mysqli_num_rows($result);
 if($check > 0)
 {
 	 header("Location: ../signup.html?info=exista");
 	 die();
 } else {

	$query = mysqli_query($db, "INSERT INTO register (nume,prenume,username,email,password,gender) VALUES('$nume','$prenume','$username','$email','$password','$gender')")  or die("MySQL Error : " . "<br />" . mysqli_error($db)) ;

 
	if($query)
	{
		echo "Thank You! you are now registered.";
 		header("Location: ../index.php");
	}
	else
	{
		echo "Eroare";
	}

	}
}



?>