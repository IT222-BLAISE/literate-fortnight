<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php include 'navbar.php'; ?>

    <h3>Positive and Negative</h3>
    <?php 
    echo checkPN(5);
    echo '<br>';
    echo checkPN(-5);
    ?>
</body>
</html>