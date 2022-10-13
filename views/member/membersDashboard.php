<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Members Dashboard</title>
</head>
<body>
    <h1>Members Dashboard</h1>
    <a href="">Create</a>
    <br /><br />
    <table border="1" width="80%">
        <thead>
            <tr>
                <th>Id</th>
                <th>Name users</th>
                <th>Last name</th>
                <th>Email</th>
                <th colspan='2'>Actions</th>
                <!-- <th>Delete</th> -->
            </tr>
        </thead>
        <tbody>
        <?php foreach($gymUser as $member){
            echo "<tr>";
            echo "<td>" . $member["id"] . "</td>";
            echo "<td>" . $member["name"] . "</td>";
            echo "<td>" . $member["last_name"] . "</td>";
            echo "<td>" . $member["email"] . "</td>";
            echo "<td><a class='btn btn-secondary' href='?controller=Member&action=getMember&id=".$member["id"]."'>Edit</a></td>";
            echo "<td><a href=?c=vehiculos&a=eliminar&id=".$member["id"]."'>Delete</a></td>";
            echo "</tr>";
        }
        ?>
        </tbody>
    </table>
</body>
</html>