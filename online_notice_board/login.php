<?php
session_start();
?>
<html>

<head>
    <!-- Required meta tags -->
    <meta charset='utf-8'>
    <meta name='viewport' content='width=device-width, initial-scale=1, shrink-to-fit=no'>

    <!-- Bootstrap CSS -->
    <link rel='stylesheet' href='./css/bootstrap.min.css'>
    <title>Login | Online Notice Board</title>
</head>

<body>
    <? include( 'header.php' ) ?>
    <div class="container">
        <div class="row">
            <div class="col-6">
                <h2>Login </h2>
                <form method='post'>
                    <div class="form-group">
                        <label for="email">Email address</label>
                        <input type="email" class="form-control" placeholder="Enter email" name="email" id="email">
                        <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone
                            else.</small>
                    </div>
                    <div class="form-group">
                        <label for="password">Password</label>
                        <input type="password" class="form-control" placeholder="Password" name="password"
                            id="password">
                    </div>
                    <button class="btn btn-primary" id="submit">Submit</button>
                </form>
            </div>
        </div>
    </div>
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src='./js/core/jquery-3.2.1.min.js'></script>
    <script src='./js/core/popper.min.js'></script>
    <script src='./js/core/bootstrap.min.js'></script>
    <script src="./js/user-login.js"></script>
</body>

</html>