<?php
session_start();
include( '../common/connection.php' );
extract( $_POST );

if ( $newPassword == '' || $confirmPassword == '' || $currentPassword == '' )
$err = 'Please enter all the details';
else {
    $currentPassword = md5( $currentPassword );
    $email = $_SESSION['admin'];
    $query = "select * from admin where pass='$currentPassword' and email='$email'";
    $sql = mysqli_query( $conn, $query );
    $r = mysqli_num_rows( $sql );
    if ( $r == true ) {
        if ( $newPassword == $confirmPassword ) {
            $newPassword = md5( $newPassword );
            $sql = mysqli_query( $conn, "update admin set pass='$newPassword' where email='$email'" );
            $err = 'Password updated !!';
        } else {
            $err = 'New  password not matched with Confirm Password !!';
        }
    } else {
        $err = 'Invalid Old Password !!';
    }
}
echo $err;
die();

?>