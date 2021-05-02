<?php
session_start();
include( './../common/connection.php' );
extract( $_POST );
if ( $email == '' || $password == '' ) {
    $err = 'fill all the fileds first';
} else {
    $pass = md5( $password );
    $query = "select * from user where email='$email' and pass='$pass'";
    $sql = mysqli_query( $conn, $query );
    $records = mysqli_num_rows( $sql );
    if ( $records ) {
        $_SESSION['user'] = $email;
        $err = 0;
    } else {
        $err = 'Invalid login details';
    }
    echo $err;
    die();
}
?>