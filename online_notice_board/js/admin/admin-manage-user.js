$(document).ready(function () {
    $.get("./../api/admin/get-all-user.php",
        function (data, status) {
            console.log("Data: " + data + "\nStatus: " + status);
            data = JSON.parse(data);
            if (Array.isArray(data) && data.length === 0) return $("#admin-manage-users-table").html(`<p>No records found</p>`);
            var table = `
                <table class="table">
                <tr>
                    <th>Id</th>
                    <th>User Name</th>
                    <th>Email</th>
                    <th>Mobile</th>
                    <th>Gender</th>
                    <th>Delete</th>
                </tr>
            `;
            $.each(data, function (idx, obj) {
                table += ('<tr>');
                table += ('<td>' + obj.id + '</td>');
                table += ('<td>' + obj.name + '</td>');
                table += ('<td>' + obj.email + '</td>');
                table += ('<td>' + obj.mobile + '</td>');
                table += ('<td>' + obj.gender + '</td>');
                table += (`<td onclick="deleteUser(${obj.notice_id})"> X Delete</td>`);
                table += ('</tr>');
            });
            table += '</table>';
            $("#admin-manage-users-table").html(table);
        });

    deleteUser = (id) => {
        if (confirm('You want to delete this user ?')) {
            window.location.href = './../api/admin/delete-user.php?id=' + id;
        }
    }
});