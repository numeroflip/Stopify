<?php
include("includes/config.php");
include("includes/classes/Artist.php");
include("includes/classes/Album.php");

if(isset($_SESSION['userLoggedIn'])) {
	$userLoggedIn = $_SESSION['userLoggedIn'];
}
else {
	header("Location: register.php");
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:200,300,400,600,700&display=swap" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="includes/assets/css/index.css">
    <title>Welcome to Stopify</title>
</head>
<body>
    <div class="main-container">
        <div class="top-container">
            <!-- ---------------------SIDEBAR------------------------ -->
            <?php include("includes/sidebar.php") ?>

            <div class="main-content-container">
                <main class="main-content">
                  