<?php
// error_reporting(0);
$servername = 'localhost';
$username = 'root';
$password = '';
$db = 'online_notice';

// Create connection
$conn = new mysqli( $servername, $username, $password, $db );

// Check connection
if ( $conn->connect_error )
die( 'Connection failed Err: ' . $conn->connect_error );
?>