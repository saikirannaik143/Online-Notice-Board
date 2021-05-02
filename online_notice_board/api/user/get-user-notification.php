<?php
session_start();
include( './../common/connection.php' );
include('./../common/isUserAuthenticated.php');

$user = $_SESSION['user'];
$query = "select * from notice where user='$user' ";
$sql = mysqli_query( $conn, $query );
$res = array();
while( $row = mysqli_fetch_assoc( $sql ) ) {
    $res[] = $row;
}
echo json_encode( $res );
die();
?>