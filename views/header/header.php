<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="assets/css/header.css">
</head>
<body>
    <header>
        <img src="" alt="">
        <nav>
            <ul>
                <li><a href="">Home</a></li>
                <li><a href="">About us</a></li>
                <li><a href="">Services</a></li>
                <li><a href="">Gallery</a></li>
                <li><a href="">Contact</a></li>
                <!-- <form method="post" action="../src/library/loginController.php?action=logout">
							<input type="submit" class="btn btn-outline-dark me-2" value="Logout" name="logout" />
						</form> -->
                            <div class="mt-5 d-grid gap-2 d-md-flex justify-content-md-end">
        <a class="btn btn-outline-success me-md-4" href="?controller=Login&action=closeSession">Logout</a>
    </div>

            </ul>
        </nav>
    </header>
</body>
</html>