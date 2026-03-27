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
    //create account
    $account1 = new Account("123");
    $account2 = new Account("222");
    $account3 = new Account("222");

    //create bank account
    $saveaccount = new SavingsAccount(100000, 3); 
    $checkaccount = new CheckingAccount(1000,100);
    $saveaccount1 = new SavingsAccount(1000, 3); 

    //create customer
    $customer1 = new Customer("JOHN DOE","JD@gmail.com","123","OC");
    $customer2 = new Customer("JOHN DOE","JDS@gmail.com","222","OC");
    $customer1->setName("John nibato");

    $customer1->openAccount($account1,$saveaccount);
    $customer1->openAccount($account2,$checkaccount);
    $customer2->openAccount($account3,$saveaccount1);

    $bank = new Bank(); // create bank

    $bank->addCustomer($customer1);
    $bank->addCustomer($customer2);
    
    $bank->processTransaction($customer1->getAccounts()[0]['bankaccount'], 1000);
    $bank->processTransaction($customer1->getAccounts()[1]['bankaccount'], -500);
    $bank->processTransaction($customer1->getAccounts()[1]['bankaccount'], -100);
    $bank->processTransaction($customer1->getAccounts()[0]['bankaccount'], -10000);

    $saveaccount->addInterest();
    // $customer2->closeAccount($account3);
    //display


    foreach($bank->getCustomer() as $customer){
        echo "<h2>Customer Details:</h2>";
        echo "Name: " . $customer->getName() . "<br>";
        echo "Email: " . $customer->getEmail() . "<br>";
        echo "Phone: " . $customer->getPhone() . "<br>";
        echo "Address: " . $customer->getAddress() . "<br>";
        echo "<br>";
        foreach($customer->getAccounts() as $account){
            echo "<br>";
            echo "Account Number: " . $account['account']->getAccountNumber() . "<br>";
            echo "Balance: " . $account['bankaccount']->getbalance() . "<br>";
        }
        echo "<br> <br>";
    }

    
    ?>
</body>
</html>