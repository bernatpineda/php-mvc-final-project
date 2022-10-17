<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sport Dashboard</title>
</head>
<body>
    <h1>Sport Dashboard</h1>
    <a href="?controller=Sport&action=createSport">Create</a>
    <a id="home" class="btn btn-secondary" href="./">Back</a>

    <br /><br />
    <table border="1" width="80%">
        <thead>
            <tr>
                <th>Id</th>
                <th>Sports</th>
                <th>Enrolled members</th>
                <th colspan='2'>Actions</th>
                
            </tr>
        </thead>
        <tbody>
        <?php foreach($sports as $sport){
            echo "<tr>";
            echo "<td>" . $sport["id"] . "</td>";
            echo "<td>" . $sport["sport"] . "</td>";

            echo "<td>" . $sport["enrrolled_members"] . "</td>";
            echo "<td><a class='btn btn-secondary' href='?controller=Sport&action=getSport&id=" . $sport["id"] ."'>Edit</a></td>";
            echo "<td><a class='btn btn-danger' href='?controller=Sport&action=deleteSport&id=" . $sport["id"] . "'>Delete</a></td>";

            echo "</tr>";
        }
        ?>
        </tbody>
    </table>
</body>
</html>

<?php
// print_r($sports);
?>