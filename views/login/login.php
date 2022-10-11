<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>

    <main class="form-signin w-100 m-auto">
        <form id="login-form" method="POST" action="ini.php?controller=Login&action=validLogin">      
                <!-- <img class="mb-4" src="./assets/brand/working-vector.ico" alt="" width="72" height="57" /> -->

            <h1 class="h3 mb-3 fw-normal">Please login</h1>
            <?php
                    // include("config/baseConstants.php");
                    // include("validate.php");
            ?>

            <div class="form-floating">
                <input type="email" class="form-control" id="floatingInput" placeholder="name@example.com" name="user-email" required />
                <label for="floatingInput">Email address</label>
            </div>

            <div class="form-floating">
                <input type="password" class="form-control" id="floatingPassword" placeholder="Password" name="user-password" required />
                <label for="floatingPassword">Password</label>
            </div>

            <input class="w-100 btn btn-lg btn-primary" type="submit" value="Login" name="login" />

            <p class="mt-5 mb-3 text-muted">&copy; 2022</p>
        </form>
    </main>

    <!-- <h4>Login</h4>

    <form action="ini.php" method="post">
        <div class="form-floating">
            <input type="email" id="email-input" placeholder="name@example.com" name="user-email" required />
            <label for="email-input"></label>
        </div>

        <div class="form-floating">
            <input type="password" id="password-input" placeholder="Password" name="user-password" required />
            <label for="password-input"></label>
        </div>

        <input class="w-100 btn btn-lg btn-primary" type="submit" value="Login" name="login" />
    </form> -->
</body>
</html>


<!--  tony -->



<?php

// echo "<pre>";
// print_r($this->data);
// echo "</pre>";

// foreach ($this->data as $index => $loginData) {
//     echo "loginData = ";
//     echo "<pre>";
//     print_r($loginData);
//     echo "</pre>";

//     $pwdInput = "r123";
//     $pwdHashedInDb = $loginData["password"];
//     $pwdVerify = password_verify($pwdInput, $pwdHashedInDb);

    // if ($loginData["email"] === "rafanadal@gmail.com" && $loginData["password"] === $pwdInput) {
    //     if ($pwdVerify) {
    //         echo "GO TO MAIN";
    //     }
    // } else {
    //     echo "GO TO LOGIN AGAIN";
    // }
// }