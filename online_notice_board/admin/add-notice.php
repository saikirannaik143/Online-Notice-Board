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
    <? include('header.php') ?>
    <div class="container">
        <div class="row">
            <div class="col-6">
                <h2>Add Notice</h2>
                <form method='post'>
                    <div class="form-group">
                        <label for="subject">Enter Subject</label>
                        <input type="text" class="form-control" placeholder="Enter Subject" name="subject" id="subject">
                    </div>
                    <div class="form-group">
                        <label for="detail">Enter Details</label>
                        <input type="text" class="form-control" placeholder="Enter Details" name="detail" id="detail">
                    </div>
                    <div class="form-group">
                        <label for="detail">Select User</label>
                        <select class="custom-select select-user" multiple="multiple" name="user[]" id="user">
                        </select>
                    </div>
                    <button class="btn btn-primary" id="submit">Add New Notice</button>
                    <button class="btn btn-light" id="reset">Reset</button>
                </form>
            </div>
        </div>
    </div>
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src='./../js/core/jquery-3.2.1.min.js'></script>
    <script src='./../js/core/popper.min.js'></script>
    <script src='./../js/core/bootstrap.min.js'></script>
    <script src="./../js/admin/admin-notice.js"></script>
</body>

</html>