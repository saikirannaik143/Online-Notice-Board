<?php
session_start();
include( './../common/connection.php' );
include( './../common/isAdminAuthenticated.php' );
extract( $_POST );

if ( $detail == '' || $subject == '' || $user == '' ) {
    $err = "Please enter all the details";
} else {
    foreach ( $user as $currUser ) {
        mysqli_query( $conn, "insert into notice(`user`, `subject`, `Description`, `Date`) values('$currUser','$subject','$detail',now())" );
    }
    $err = "Notice added Successfully !";
}
echo $err;
die();
?>