<?php
session_start();
include( './../common/connection.php' );
extract( $_POST );
if ( $email == '' || $password == '' ) {
    $err = 'fill all the fileds first';
} else {
    $pass = md5( $password );
    $query = "select * from admin where user='$email' and pass='$password'";
    $sql = mysqli_query( $conn, $query );
    $records = mysqli_num_rows( $sql );
    if ( $records ) {
        $_SESSION['admin'] = $email;
        $err = 0;
    } else {
        $err = 'Invalid login details';
    }
    echo $err;
    die();
}
?>