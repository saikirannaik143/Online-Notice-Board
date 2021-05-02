<?php
session_start();
require( './../common/connection.php' );
extract( $_POST );
$query = "select * from user where email='$email'";
$sql = mysqli_query( $conn, $query );
$records = mysqli_num_rows( $sql );

if ( $records ) {
    $err = 'This user already exists';
} else if ( $password != $confirmPassword ) {
    $err = 'Password not matched with Confirm Password !!';
} else {
    $pass = md5( $password );
    $query = "insert into user(`name`, `email`, `pass`, `mobile`,`gender`,`regid`) values('$username','$email','$password',$mobile,'$gender',0)";
    mysqli_query( $conn, $query );
    $err = 'Registration successfull !!';
}
echo $err;
die();
?>