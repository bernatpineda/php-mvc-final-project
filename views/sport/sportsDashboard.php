<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
</head>
<body>
    <h1>Members Dashboard</h1>
    <a href="">Create</a>
    <br /><br />
    <table border="1" width="80%">
        <thead>
            <tr>
                <th>Id</th>
                <th>Enrolled members</th>
                <th>Sports</th>
                <th colspan='2'>Actions</th>
                <th>Delete</th>
            </tr>
        </thead>
        <tbody>
        <?php foreach($gymSport as $sport){
            echo "<tr>";
            echo "<td>" . $sport["id"] . "</td>";
            echo "<td>" . $sport["count(members.id)"] . "</td>";
            echo "<td>" . $sport["sport"] . "</td>";
            echo "<td><a href=?c=vehiculos&a=modificar&id=".$sport["id"]."'>Edit</a></td>";
            echo "<td><a href='?controller=Sport&action=deleteSport&id=" . $sport["id"] . "'>Delete</a></td>";
            echo "</tr>";
        }
        ?>
        </tbody>
    </table>
</body>
</html>