<?php
include 'database/connect.php'; 
include 'views/partials/header.php'; 

$filename = 'home';
if (array_key_exists('page', $_GET) ){
	$filename = $_GET['page'];
}
include 'views/' . $filename . '.php';

include 'views/partials/footer.php';
