<?php
$host="localhost";
$username="root";
$password="";
$db="mydb";
$conn=mysqli_connect($host,$username,$password,$db);
if(!$conn){
	die("Connection failed: ".mysqli_connect_error());
}
?>