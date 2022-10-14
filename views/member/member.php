<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Member <?= $this->data[0]["id"]; ?></title>
</head>
<body>
    <h1>Member <?= $this->data[0]["id"]; ?></h1>

    <form action="index.php?controller=Member&action=<?php echo isset($this->data[0]['id']) ? "updateMember" : "createMember" ?>" method="post">
        
        <input type="hidden" name="id" value="<?php echo isset($this->data[0]['id']) ? $this->data[0]['id'] : null ?>">
        <?= "input hidden: ".$this->data[0]['id']; ?>

        <div class="form-group">
            <label for="name">Name</label>
            <input required type="text" value="<?php echo isset($this->data[0]['name']) ? $this->data[0]['name'] : null ?>" 
                class="form-control" id="name" name="name" aria-describedby="name" placeholder="Name"
            >
        </div>


        <div class="form-group">
            <label for="name">Last Name</label>
            <input required type="text" value="<?php echo isset($this->data[0]['last_name']) ? $this->data[0]['last_name'] : null ?>" 
                class="form-control" id="lastName" name="last_name" aria-describedby="lastnameHelp" placeholder="Last name"
            >
        </div>


        <div class="form-group">
            <label for="name">Email</label>
            <input required type="text" value="<?php echo isset($this->data[0]['last_name']) ? $this->data[0]['email'] : null ?>" 
                class="form-control" id="email" name="email" aria-describedby="lastnameHelp" placeholder="Email"
            >
        </div>

        <button type="submit" class="btn btn-primary">Submit</button>
        <!-- <a id="return" class="btn btn-secondary" href="<?php #echo "?controller=Employee&action=getAllEmployees&action=getAllEmployees"; ?>">Return</a> -->

    </form>
</body>
</html>