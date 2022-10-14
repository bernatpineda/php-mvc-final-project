<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
</head>

<body>
    <a href="">Logout</a>
    <h1>Welcome to the Gym, <?php echo $this->data ?></h1>
    <div class="list-group">
        <a class="list-group-item list-group-item-action" href="?controller=Member&action=getAllMembers">Member Controller</a>
        <a class="list-group-item list-group-item-action" href="?controller=Sport&action=getAllSports">Sports Controller</a>
    </div>
</body>

</html>
