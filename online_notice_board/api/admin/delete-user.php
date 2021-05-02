<?php
session_start();
include('./../common/connection.php');
include('./../common/isAdminAuthenticated.php');
$userId = $_GET['id'];
mysqli_query( $conn, "delete from user where id='$userId'" );
header( 'location:./../../admin/manage-users.php' );
?>