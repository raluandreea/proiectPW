<?php
session_start();
require 'DBconnection.php';

if(isset($_POST['username']) && !empty($_POST['username']) && isset($_POST['password']) && !empty($_POST['password']) )
{
	$username = strtolower($_POST['username']);
	$password = $_POST['password'];

	$sql = "SELECT * FROM register WHERE username = '$username'";
	$result = mysqli_query($db,$sql);
	$row =  mysqli_fetch_assoc($result);
	$hash = $row['password'];

	//decripteaza parola din db si verifica daca e aceeasi cu cea data in chenar
	$password = mysqli_real_escape_string($db, $password);
	$password = md5($password);

	if($password != $hash)
	{
		header("Location: ../login.php?info=gresit");
		die();

	} else {

		$sql = "SELECT * FROM register WHERE username = '$username' AND password = '$hash' ";
		$result = mysqli_query($db,$sql);

		if(!$row =  mysqli_fetch_assoc($result))
		{
			echo 'Parola sau username incorect.';
		} else {
			$_SESSION['id'] = $row['id'];
			$_SESSION['nume'] = $row['nume'];
			$_SESSION['prenume'] = $row['prenume'];
			$_SESSION['username'] = $row['username'];
			$_SESSION['email'] = $row['email'];

		}

		header("Location: ../index.php");
	
	
	}


}
