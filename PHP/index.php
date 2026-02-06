<?php include 'variable.php' ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome</title>
</head>
<body>

    <h1><?php echo "<i>WELCOME</i>" ?></h1>
    <h1><?php echo $fullName; ?></h1>
    <h1><?php echo $course; ?></h1>
    <h1><?php echo $subject ." Description ". $subject_desc; ?></h1>
    <h1><?php echo $contact; ?></h1>
    
    <h1>
    <?php 
    $d = date("D");
    echo "Day is ".$d;
    if($d == "Mon"){
        echo "<br>its Monday";
    }else if($d == "Fri"){
        echo "<br>Its Friday";
    }else {
        echo "have a nice day";
    }

    ?>
    </h1>
</body>
</html>