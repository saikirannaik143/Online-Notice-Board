$(document).ready(function () {
    $("#submit").click(function (e) {
        e.preventDefault();
        const email = $('#email').val();
        const username = $('#username').val();
        const password = $('#password').val();
        const confirmPassword = $('#confirmPassword').val();
        const mobile = $('#mobile').val();
        const gender = $('input[name=gender]:checked', '#myForm').val();
        $.post("api/user/get-user-registration.php",
            {
                username,
                email,
                password,
                confirmPassword,
                mobile,
                gender,
            },
            function (data, status) {
                console.log("Data: " + data + "\nStatus: " + status);
                alert(data);
            });
    });
});