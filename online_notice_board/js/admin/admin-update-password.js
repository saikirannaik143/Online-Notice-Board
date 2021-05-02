$(document).ready(function () {
    $("#update-password-btn").click(function (e) {
        e.preventDefault();
        const currentPassword = $('#currentPassword').val();
        const newPassword = $('#newPassword').val();
        const confirmPassword = $('#confirmPassword').val();
        $.post("./../api/admin/update-admin-password.php",
            {
                currentPassword,
                newPassword,
                confirmPassword,
            },
            function (data, status) {
                console.log("Data: " + data + "\nStatus: " + status);
                alert(data);
            });
    });
});