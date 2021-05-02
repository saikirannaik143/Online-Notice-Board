$(document).ready(function () {
    $.get("./../api/user/get-user-details.php",
        function (data, status) {
            console.log("Data: " + data + "\nStatus: " + status);
            data = JSON.parse(data);
            $('.welcome-user').text(`Welcome ${data[0].name} !`)
        });

    $.get("./../api/user/get-user-notification.php",
        function (data, status) {
            console.log("Data: " + data + "\nStatus: " + status);
            data = JSON.parse(data);
            if (Array.isArray(data) && data.length === 0) return $("#user-notification-table").html(`<p>No records found</p>`);
            var table = `
                <table class="table">
                <tr>
                    <th>ID</th>
                    <th>Email</th>
                    <th>Subject</th>
                    <th>Description</th>
                    <th>Date</th>
                </tr>
            `;
            $.each(data, function (idx, obj) {
                table += ('<tr>');
                table += ('<td>' + obj.notice_id + '</td>');
                table += ('<td>' + obj.user + '</td>');
                table += ('<td>' + obj.subject + '</td>');
                table += ('<td>' + obj.Description + '</td>');
                table += ('<td>' + obj.Date + '</td>');
                table += ('</tr>');
                // table += ('<td><img src="' + obj.ImageURLs.Thumb + '"></td>');
            });
            table += '</table>';
            $("#user-notification-table").html(table);
        });
});