<?php 
session_start(); 

if($_SESSION['id'] == '' || $_SESSION['id'] == null) {
	echo "<meta http-equiv='refresh' content='30; url=http://" . $_SERVER['HTTP_HOST'] . "/logout.php'>";
	exit;
}

include_once '../functions/profiles.php';

$profile = getProfile();

?>

<!doctype html>
<html lang="en" class="no-js">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<link href='http://fonts.googleapis.com/css?family=PT+Sans:400,700|Merriweather:400italic,400' rel='stylesheet' type='text/css'>

	<link rel="stylesheet" href="css/bootstrap.min.css"> <!-- CSS Bootstrap -->
	<link rel="stylesheet" href="css/reset.css"> <!-- CSS reset -->
	<link rel="stylesheet" href="css/style.css"> <!-- Resource style -->
	<link rel="stylesheet" href="css/loading.css"> <!-- Resource style -->
	<script src="js/modernizr.js"></script> <!-- Modernizr -->
  	
	<title>SmartPIP :: Info Kiosk</title>
</head>
<body>

<meta http-equiv='refresh' content='180; url=http://touchpanel.dev/logout.php'>
