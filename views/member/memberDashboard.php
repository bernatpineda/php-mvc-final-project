<!-- NO SE ESTÁ USANDO -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Member Dashboard</title>
</head>
<body>
<div class="container">
        <!-- <h1>Employee's page!</h1>
        </br>

        <?php
        if ($this->action == "getMember" && (!isset($this->data) || !$this->data || sizeof($this->data) == 0)) {
            echo "<p>The employee does not exists!</p>";
        } else if (isset($error)) {
            echo "<p>$error</p>";
        }
        ?>
   -->
    <form class="mb-5 needs-validation" action="index.php?controller=Member&action=<?php echo isset($this->data['id']) ? "updateMember" : "createMember" ?>" method="post">
            <input type="hidden" name="id" value="<?php echo isset($this->data['id']) ? $this->data['id'] : null ?>">
            <?php //echo "id cfa". $this->data["id"]; ?>
            <div class="form-row">
                <div class="col">
                    <div class="form-group">
                        <label for="name">Name</label>
                        <input required type="text" value="<?php echo isset($this->data['name']) ? $this->data['name'] : null ?>" class="form-control" id="name" name="name" aria-describedby="name" placeholder="Enter name">
                    </div>

                </div>
                <div class="col">
                    <div class="form-group">
                        <label for="name">Last Name</label>
                        <input required type="text" value="<?php echo isset($this->data['last_name']) ? $this->data['last_name'] : null ?>" class="form-control" id="lastName" name="last_name" aria-describedby="lastnameHelp" placeholder="Enter last name">
                    </div>
                </div>
            </div>

            <div class="form-row">
                <div class="col">
                    <div class="form-group">
                        <label for="exampleInputEmail1">Email address</label>
                        <input required type="email" value="<?php echo isset($this->data['email']) ? $this->data['email'] : null ?>" class="form-control" id="email" name="email" aria-describedby="emailHelp" placeholder="Enter email">
                        <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
                    </div>
                </div>
                <div class="form-row">
                <div class="col">
                    <!-- <div class="form-group">
                        <label for="name">Password</label>
                        <input required type="text" value="<?php echo isset($this->data['name']) ? $this->data['password'] : null ?>" class="form-control" id="name" name="password" aria-describedby="name" placeholder="Enter name">
                    </div> -->
                <div class="col">
                    <div class="form-group">
                        <label for="sport">Sport</label>
                        <select name="sport_id" class="form-control" id="sport" required>
                            <option value="">Please Select</option>
                            <option value="1" <?php echo isset($this->data['sport_id']) && $this->data['sport_id']  == 1 ? 'selected' : null; ?>>Pilates</option>
                            <option value="2" <?php echo isset($this->data['sport_id']) && $this->data['sport_id']  == 2 ? 'selected' : null; ?>>Powerlifting</option>
                            <option value="3" <?php echo isset($this->data['sport_id']) && $this->data['sport_id']  == 3 ? 'selected' : null; ?>>Padel</option>
                        </select>
                    </div>
                </div>
            </div>
            

           

            <button type="submit" class="btn btn-primary">Submit</button>
            <a id="return" class="btn btn-secondary" href="<?php echo "?controller=Member&action=getAllMembers&action=getAllMembers"; ?>">Return</a>
        </form>
</div>
</body>
</html>