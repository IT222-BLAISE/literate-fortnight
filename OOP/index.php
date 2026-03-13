<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>OOP</title>
</head>
<body>
    <h1>WELCOME</h1>
    <?php include 'class.php'; ?>

    <?php
    $account = new BankAccount();
    $customer = new Customer();
    $customer->setName("John Doe");
    $customer->setName("");
    $customer->name = "JOHN NIBATO"; // direct access to public property

    $account->setAccountNumber("1");

    $account->transaction(100, 'deposit');
    $account->transaction(100, 'deposit');
    $account->transaction(50, 'withdraw');

    // $account->deposit(100);
    // $account->deposit(50);
    // $account->withdraw(200);
    // $account->withdraw(100);

    // $account->deposit(200)->deposit(50)->deposit(25)->withdraw(75); // method chaining

    echo "<h2>Account Details:</h2>";
    echo "Account Number: " . $account->getAccountNumber() . "<br>";
    echo "Balance: " . $account->getbalance() . "<br>";

    echo "<h2>Customer Details:</h2>";
    echo "Customer Name: " . $customer->getName() . "<br>";

    
    ?>
</body>
</html>