<?php
ob_start();
session_start();

$conn = new mysqli('localhost', 'root' , '' , 'raahi');
if($conn->connect_error){
	die("connection failed :" .$conn->connect_error);
}

?>