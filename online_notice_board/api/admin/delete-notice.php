<?php
session_start();
include('./../common/connection.php');
include('./../common/isAdminAuthenticated.php');
$id = $_GET['id'];
mysqli_query( $conn, "delete from notice where notice_id='$id'" );
header( 'location:./../../admin/index.php' );
?>