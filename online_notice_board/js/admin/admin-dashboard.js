$(document).ready(function () {
    $.get("./../api/admin/get-all-notification.php",
        function (data, status) {
            console.log("Data: " + data + "\nStatus: " + status);
            data = JSON.parse(data);
            if (Array.isArray(data) && data.length === 0) return $("#admin-notification-table").html(`<p>No records found</p>`);
            var table = `
                <table class="table">
                <tr>
                    <th>Id</th>
                    <th>Subject</th>
                    <th>Details</th>
                    <th>User</th>
                    <th>Date</th>
                    <th>Delete</th>
                </tr>
            `;
            $.each(data, function (idx, obj) {
                table += ('<tr>');
                table += ('<td>' + obj.notice_id + '</td>');
                table += ('<td>' + obj.subject + '</td>');
                table += ('<td>' + obj.Description + '</td>');
                table += ('<td>' + obj.user + '</td>');
                table += ('<td>' + obj.Date + '</td>');
                table += (`<td onclick="deleteNotice(${obj.notice_id})"> X Delete</td>`);
                table += ('</tr>');
            });
            table += '</table>';
            $("#admin-notification-table").html(table);
        });

    deleteNotice = (id) => {
        if (confirm("You want to delete this record ?")) {
            window.location.href = "./../api/admin/delete-notice.php?id=" + id;
        }
    }
});