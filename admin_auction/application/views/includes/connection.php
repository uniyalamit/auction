<?php
$connect=mysqli_connect('localhost','root','root','auction');
if(!$connect){
	echo"connection error".mysqli_error();
}
?>