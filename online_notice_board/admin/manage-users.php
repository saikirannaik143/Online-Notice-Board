<?php
session_start();
?>
<!DOCTYPE html>
<html lang='en'>

<head>
    <!-- Required meta tags -->
    <meta charset='utf-8'>
    <meta name='viewport' content='width=device-width, initial-scale=1, shrink-to-fit=no'>

    <!-- Bootstrap CSS -->
    <link rel='stylesheet' href='https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css'>
    <title>Manage Users | Dashboard Admin | Online Notice Board</title>
</head>

<body>
    <? include('header.php')?>
    <div class="container">
        <div class="row">
            <div class="col-12" style="text-align:center">
                <h2 class='welcome-admin'>Welcome Admin !</h2>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <h4>All Users</h4>
                <div id="admin-manage-users-table"></div>
            </div>
        </div>
    </div>
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src='./../js/core/jquery-3.2.1.min.js'></script>
    <script src='./../js/core/popper.min.js'></script>
    <script src='./../js/core/bootstrap.min.js'></script>
    <script src="./../js/admin/admin-manage-user.js"></script>
</body>

</html>