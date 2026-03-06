<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Excersice</title>
</head>
<body>
    <?php include 'navbar.php'; ?>  
    
    
    <h1><?php writemsg(); ?></h1>
    <br>

    <?php include 'loop.php'; ?>  
    <?php include 'array.php'; ?> 
    
    <br>
    <?php familyname("John", '1998'); ?>
    <?php familyname("Carlo", '2000'); ?>

    <br>

    <?php 
    setHeight(150);
    setHeight(80);
    setHeight();

    ?>

    <br>
    <?php 
    echo sum(10,9);
    echo "<br>";
    echo sum(999,5);
    ?>
</body>
</html>