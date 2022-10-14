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
            <input required type="text" value="<?php echo isset($this->data[0]['last_name']) ? $this->data[0]['email'] : null ?>" 
                class="form-control" id="email" name="email" aria-describedby="lastnameHelp" placeholder="Email"
            >
        </div>

        <div class="form-group">
            <label for="sport">Sport</label>
            <select name="sport_id" class="form-control" id="sport" required>
                <option value="">Please Select</option>
                <option value="1" <?php echo isset($this->data['sport_id']) && $this->data['sport_id']  == 1 ? 'selected' : null; ?>>Pilates</option>
                <option value="2" <?php echo isset($this->data['sport_id']) && $this->data['sport_id']  == 2 ? 'selected' : null; ?>>Powerlifting</option>
                <option value="3" <?php echo isset($this->data['sport_id']) && $this->data['sport_id']  == 3 ? 'selected' : null; ?>>Padel</option>
            </select>
        </div>

        <button type="submit" class="btn btn-primary">Submit</button>
        <a id="return" class="btn btn-secondary" href="<?php echo "?controller=Member&action=getAllMembers&action=getAllMembers"; ?>">Return</a>

    </form>
</body>
</html>