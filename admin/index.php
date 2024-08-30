<?php include "./libs/load.php" ?>

<?php
// We need to use sessions, so you should always start sessions using the below code.
session_start();
// If the user is not logged in redirect to the login page...
if (!isset($_SESSION['loggedin'])) {
	header('Location: sign_in.php');
	exit;
 } 
?>

<?php

// echo $_SESSION['name'];

 load_template('header');

 load_template('navbar');


 load_template('dashboard');

 load_template('table');


 load_template('footer');



?>