<?php

$server="localhost:3306";
$user="root";
$password="";
$database="bidup";

$conn=mysqli_connect($server,$user,$password,$database);

if(!$conn){
	die("Hush ! Connection Error !!! .".mysqli_connect_error());
}

echo "Connected Successfully"."<br>";

mysqli_close($conn);

?>