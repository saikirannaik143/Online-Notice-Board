<?php
session_start();
include( './../common/connection.php' );
include('./../common/isAdminAuthenticated.php');

$query = "select * from notice";
$sql = mysqli_query( $conn, $query );
$res = array();
while( $row = mysqli_fetch_assoc( $sql ) ) {
    $res[] = $row;
}
echo json_encode( $res );
die();
?>