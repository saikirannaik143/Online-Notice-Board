<?php
$admin = $_SESSION['admin'];
if ( !isset( $admin ) || empty( $admin ) )
header( 'location:./../admin/login.php' );
?>