<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Member</title>
</head>
<body>
    <?php 
    if (isset($this->data[0]["id"])) {
        echo "<h1>Member ".$this->data[0]["id"]."</h1>";
    } else {
        echo "<h1>New member</h1>";
    }
    
    if ($this->action == "getMember" && (!isset($this->data) || !$this->data || sizeof($this->data) == 0)) {
        echo "<p>The employee does not exists!</p>";
    } else if (isset($error)) {
        echo "<p>$error</p>";
    }

    // para hacer el select de sport
    require_once CONTROLLERS . "SportController.php";  
    $sportController = new SportController();
    $sports = $sportController->getAllSports();
    // echo '$sport = ';
    // echo "<pre>";
    // print_r($sports);
    // echo "</pre>";
    ?>

    <form action="index.php?controller=Member&action=<?php echo isset($this->data[0]['id']) ? "updateMember" : "createMember" ?>" method="post">
        
        <input type="hidden" name="id" value="<?php echo isset($this->data[0]['id']) ? $this->data[0]['id'] : null ?>">
        <?php //echo "input hidden: ".$this->data[0]['id']; ?>

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
            <input required type="text" value="<?php echo isset($this->data[0]['email']) ? $this->data[0]['email'] : null ?>" 
                class="form-control" id="email" name="email" aria-describedby="lastnameHelp" placeholder="Email"
            >
        </div>  

        <div class="form-group">
            <label for="sport">Sport Din</label>
            <select name="sport_id" class="form-control" id="sport" required>
                <option value="">Please Select</option>
                
                <?php
                foreach ($sports as $sport) {
                    ?>
                    <option value="<?= $sport["id"] ?>" <?= isset($this->data[0]['sport_id']) && $this->data[0]['sport_id'] == $sport["id"] ? 'selected' : null; ?> ><?= $sport["sport"] ?></option>
                    <?php
                }
                ?>

            </select>
        </div>

        <button type="submit" class="btn btn-primary">Submit</button>
        <a id="return" class="btn btn-secondary" href="<?php echo "?controller=Member&action=getAllMembers"; ?>">Return</a>

    </form>
</body>
</html>

