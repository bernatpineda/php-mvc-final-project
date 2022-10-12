<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $data ["titulos"]; ?></title>
</head>
<body>
    <h2><?php echo $data ["titulos"]; ?></h2>
    <a href="index.php?c=vehiculos&a=nueva">Create</a>
    <br /><br />
    <table border="1" width="80%">
        <thead>
            <tr>
                <th>Name users</th>
                <th>Last name</th>
                <th>Email</th>
                <th colspan='2'>Actions</th>
                <!-- <th>Delete</th> -->
            </tr>
        </thead>
        <tbody>
        <?php foreach($data["vehiculos"] as $dato){
            echo "<tr>";
            echo "<td>" . $dato["name"] . "</td>";
            echo "<td>" . $dato["last_name"] . "</td>";
            echo "<td>" . $dato["email"] . "</td>";
            echo "<td><a href='index.php?c=vehiculos&a=modificar&id=".$dato["id"]."'>Edit</a></td>";
            echo "<td><a href='index.php?c=vehiculos&a=eliminar&id=".$dato["id"]."'>Delete</a></td>";
            echo "</tr>";
        }
        ?>
        </tbody>
    </table>
</body>
</html>