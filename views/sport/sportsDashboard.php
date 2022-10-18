<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sport Dashboard</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
</head>
<body>
<?php require_once("views/header/header.php") ?>
    <h1>Sports Dashboard</h1>
    <a href="?controller=Sport&action=createSport" class="btn btn-primary">Create</a>
    <a id="home" class="btn btn-dark" href="./">Back</a>

    <br /><br />
    <table class="table table-hover" border="1" width="80%">
        <thead class="table-dark">
            <tr>
                <th>#</th>
                <th>Sports</th>
                <th>Enrolled members</th>
                <th colspan='2'>Actions</th>
            </tr>
        </thead>
        <tbody>
<<<<<<< HEAD
        <?php foreach($sports as $sport) {
=======
        <?php 
        foreach($sports as $sport){
>>>>>>> pau
            echo "<tr>";
            echo "<td>" . $sport["id"] . "</td>";
            echo "<td>" . $sport["sport"] . "</td>";

            echo "<td>" . $sport["enrrolled_members"] . "</td>";
<<<<<<< HEAD
            echo "<td><a class='btn btn-secondary' href='?controller=Sport&action=getSport&id=" . $sport["id"] ."'>Edit</a></td>";
            echo "<td><a class='btn btn-danger' href='?controller=Sport&action=deleteSport&id=" . $sport["id"] . "'>Delete</a></td>";

=======
            echo "<td><a class='btn btn-outline-warning' href='?controller=Sport&action=getSport&id=" . $sport["id"] ."'><i class='bi bi-pencil-fill'></i></a></td>";
            echo "<td><a class='btn btn-outline-danger' href='?controller=Sport&action=deleteSport&id=" . $sport["id"] . "'><i class='bi bi-trash3-fill'></i></a></td>";
>>>>>>> pau
            echo "</tr>";
        }
        ?>
        </tbody>
    </table>
    <?php require_once("views/footer/footer.php") ?>
</body>
</html>


?>