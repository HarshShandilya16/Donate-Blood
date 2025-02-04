<!DOCTYPE html>

<head>
<title>Save Life-Donate Blood</title>
<meta charset="utf-8">

<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="description" content="Blood Donation Website">
<meta name="author" content="Harsh Shandilya">

<link rel="stylesheet" href="css/styles.css">


<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">


<link rel="stylesheet" href="css/custom.css">

<link href="https://fonts.googleapis.com/css?family=Roboto:400,700" rel="stylesheet">



</head>



<?php 

include 'config.php';
session_start();
if(isset($_SESSION['user_id']) && !empty($_SESSION['user_id'])){
    include 'usernav.php';
}else{
    include 'navigation.php';
}

?>