$(document).ready(function () {
    $.get("./../api/admin/get-all-user.php",
        function (data, status) {
            console.log("Data: " + data + "\nStatus: " + status);
            data = JSON.parse(data);
            var option;
            $.each(data, function (idx, { email, name }) {
                option += `<option value="${email}">${name}</option>`;
            });
            $(".select-user").html(option);
        });

    $("#submit").click(function (e) {
        e.preventDefault();
        const detail = $('#detail').val();
        const subject = $('#subject').val();
        const user = $('#user').val();
        $.post("./../api/admin/add-notice.php",
            {
                detail,
                subject,
                user
            },
            function (data, status) {
                console.log("Data: " + data + "\nStatus: " + status);
                alert(data);
            });
    });
});