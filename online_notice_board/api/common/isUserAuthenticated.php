<?php
$user = $_SESSION['user'];
if ( !isset( $user ) || empty( $user ) ) {
    header( 'location:../index.php' );
}
?>