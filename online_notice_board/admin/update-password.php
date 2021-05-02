<?php
session_start();
?>
<html>

<head>
    <!-- Required meta tags -->
    <meta charset='utf-8'>
    <meta name='viewport' content='width=device-width, initial-scale=1, shrink-to-fit=no'>

    <!-- Bootstrap CSS -->
    <link rel='stylesheet' href='https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css'>
    <title>Admin | Update Password | Online Notice Board</title>
</head>

<body>
    <? include( 'header.php' ) ?>
    <div class="container">
        <div class="row">
            <div class="col-6">
                <h2>Update Password</h2>
                <form method='post'>
                    <div class="form-group">
                        <label for="currentPassword">Current Password</label>
                        <input type="password" class="form-control" id="currentPassword" placeholder="Current Password"
                            name="currentPassword">
                    </div>
                    <div class="form-group">
                        <label for="newPassword">New Password</label>
                        <input type="password" class="form-control" placeholder="New Password" name="newPassword"
                            id="newPassword">
                    </div>
                    <div class="form-group">
                        <label for="confirmPassword">Confirm Password</label>
                        <input type="password" class="form-control" placeholder="Confirm Password" name="confirmPassword"
                            id="confirmPassword">
                    </div>
                    <button class="btn btn-primary" id="update-password-btn">Submit</button>
                </form>
            </div>
        </div>
    </div>
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src='./../js/core/jquery-3.2.1.min.js'></script>
    <script src='./../js/core/popper.min.js'></script>
    <script src='./../js/core/bootstrap.min.js'></script>
    <script src="./../js/admin/admin-update-password.js"></script>
</body>

</html>