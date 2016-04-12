<?php
session_start();
include_once 'connect.php';


$id = (int)$_POST['id'];

$_SESSION['id'] = $id;

header('location: 3/index.php');



?>