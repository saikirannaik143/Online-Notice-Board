$(document).ready(function () {
    $("#submit").click(function (e) {
        e.preventDefault();
        const email = $('#email').val();
        const password = $('#password').val();
        $.post("api/user/get-user-login.php",
            {
                email,
                password
            },
            function (data, status) {
                console.log("Data: " + data + "\nStatus: " + status);
                if (data == 0) {
                    window.location.replace("user/index.php");
                } else
                    alert(data);
            });
    });
});