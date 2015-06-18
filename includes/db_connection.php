<?php
//1. create database connection
define("DB_SERVER", "localhost");
define("DB_USER", "jeremymcclelland");
define("DB_PASS", "secretpassword");
define("DB_NAME", "widget_corp");

$connection = mysqli_connect(DB_SERVER, DB_USER, DB_PASS, DB_NAME);

//Test if connection occurred.
if(mysqli_connect_errno()) {
	die("Database connection failed: " .
		mysqli_connect_error() .
		" (" . mysqli_connect_errno() . ")"
	);
}
?>