<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sport</title>
</head>
<body>
<?php 
    if (isset($this->data[0]["id"])) {
        echo "<h1>Sport ".$this->data[0]["id"]."</h1>";
    } else {
        echo "<h1>New Sport</h1>";
    }
    
    if ($this->action == "getSports" && (!isset($this->data) || !$this->data || sizeof($this->data) == 0)) {
        echo "<p>The sport does not exists!</p>";
    } else if (isset($error)) {
        echo "<p>$error</p>";
    }
    ?>

    <form action="index.php?controller=Sport&action=<?php echo isset($this->data[0]['id']) ? "updateSport" : "createSport" ?>" method="post">
        
        <input type="hidden" name="id" value="<?php echo isset($this->data[0]['id']) ? $this->data[0]['id'] : null ?>">
        <?php //echo "input hidden: ".$this->data[0]['id']; ?>

        <div class="form-group">
            <label for="name">Sport</label>
            <input required type="text" value="<?php echo isset($this->data[0]['name']) ? $this->data[0]['name'] : null ?>" 
                class="form-control" id="sport" name="sport" aria-describedby="sport" placeholder="Sport"
            >
        </div>


  
        <button type="submit" class="btn btn-primary">Submit</button>
        <a id="return" class="btn btn-secondary" href="<?php echo "?controller=Sport&action=getAllSports"; ?>">Return</a>

    </form>
</body>
</html>