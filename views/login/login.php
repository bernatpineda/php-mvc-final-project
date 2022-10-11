
<main class="form-signin w-100 m-auto">
        <form id="login-form" method="POST" action="ini.php?controller=Login&action=Login">  
            
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