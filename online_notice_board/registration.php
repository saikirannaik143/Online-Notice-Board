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
    <title>Registration | Online Notice Board</title>
</head>

<body>
    <? include('header.php') ?>
    <div class="container">
        <div class="row">
            <div class="col-6">
                <h2>Registration </h2>
                <form method='post' id="myForm">
                    <div class="form-group">
                        <label for="username">Username</label>
                        <input type="text" class="form-control" id="username" name="username" placeholder="Username">
                    </div>
                    <div class="form-group">
                        <label for="email">Email address</label>
                        <input type="email" class="form-control" id="email" name="email" placeholder="Enter email">
                        <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone
                            else.</small>
                    </div>
                    <div class="form-group">
                        <label for="password">Password</label>
                        <input type="password" class="form-control" id="password" name="password"
                            placeholder="Password">
                    </div>
                    <div class="form-group">
                        <label for="confirmPassword">Confirm Password</label>
                        <input type="password" class="form-control" id="confirmPassword" name="confirmPassword"
                            placeholder="Confirm Password">
                    </div>
                    <div class="form-group">
                        <label for="mobile">Mobile No.</label>
                        <input type="text" class="form-control" id="mobile" name="mobile" placeholder="Mobile No.">
                    </div>
                    <div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="gender" id="gender_male" value="m">
                            <label class="form-check-label" for="gender_male">Male</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="gender" id="gender_female"
                                value="f">
                            <label class="form-check-label" for="gender_female">Female</label>
                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary my-2" id="submit">Submit</button>
                </form>
            </div>
        </div>
    </div>
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src='./js/core/jquery-3.2.1.min.js'></script>
    <script src='./js/core/popper.min.js'></script>
    <script src='./js/core/bootstrap.min.js'></script>
    <script src='./js/user-registration.js'></script>
</body>

</html>