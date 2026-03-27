<?php

class Account{
    private $accountNumber; // properties

    public function __construct($accountNumber) {  
        $this->accountNumber = $accountNumber;
    }

    public function getAccountNumber(){
        return $this->accountNumber;
    }

    public function setAccountNumber($accountNumber){
        $this->accountNumber = $accountNumber;
    }
}

class BankAccount {

    private $balance; // properties
    
    public function __construct($balance){
        $this->balance = $balance;
    }

    private function deposit($amount) {
        if($amount > 0){
            $this->balance += $amount;
        } 
        return $this; // method chaining
    }
    private function withdraw($amount){
        if($amount <= $this->balance){
            $this->balance -= $amount;
            return true;
        }
        return false;
    }

    public function transaction($amount, $type) {
        if ($type === 'deposit') {
            return $this->deposit($amount);
        } elseif ($type === 'withdraw') {
            return $this->withdraw($amount);
        }
        return false;
    }

    public function getbalance(){
        return $this->balance;
    }

}

class SavingsAccount extends BankAccount{
    private $interestRate;

    public function __construct($balance, $interestRate){
        parent::__construct($balance);
        $this->interestRate = $interestRate;
    }

    public function getInterestRate(){
        return $this->interestRate;
    }

    public function setInterestRate($interestRate){
        $this->interestRate = $interestRate;
    }

    public function addInterest(){
        if($this->getbalance() > 0){
            $interest = ($this->getbalance() * ($this->interestRate /100)) / 365;
            $this->transaction($interest, "deposit");
            return true;
        }
        return false;
    }

}

class CheckingAccount extends BankAccount{
    private $minBalance;

    public function __construct($balance, $minBalance){
        parent::__construct($balance);
        $this->minBalance = $minBalance;
    }

    public function withdraw($amount){
        if(($this->getbalance() - $this->minBalance) >= $amount){
            $this->transaction($amount, "withdraw");
            return true;
        }
        return false;
    }

    public function getminBalance()
    {
        return $this->minBalance;
    }
}

class Customer {
    private $name;
    private $email;
    private $phone;
    private $address;
    private $accounts = [];

    public function __construct($name,$email,$phone,$address)
    {
        $this->name = $name;
        $this->email = $email;
        $this->phone = $phone;
        $this->address= $address;
        $this->accounts = [];
    }

    public function openAccount($account, $bankAccount){
        $this->accounts[] = ['account'=>$account,'bankaccount'=>$bankAccount];
    }

    public function closeAccount($accountToClose){
        foreach($this->accounts as $index => $accountData){
            if($accountData['account']->getAccountNumber() === $accountToClose->getAccountNumber()){
                unset($this->accounts[$index]);
                return true;
            }
        }
        return false;
    }

    public function getName(){
        return $this->name;
    }
    public function getEmail(){
        return $this->email;
    }
    public function getPhone(){
        return $this->phone;
    }
    public function getAddress(){
        return $this->address;
    }

    public function getAccounts(){
        return $this->accounts ?? [];
    }

    public function setName($name){

        $name = trim($name);

        if($name === ""){
            return false;
        }
        $this->name = $name;
        return true;
    }
}

class Bank{
    private $customers;

    public function __construct(){
        $this->customers = [];
    }

    public function getCustomer(){
        return $this->customers;
    }

    public function addCustomer($customer){
        $this->customers[] = $customer;
    }

    public function removeCustomer($customer){
        $index = array_search($customer, $this->customers);

        if($index != false){
            unset($this->customers[$index]);
            return true;
        }
        return false;
    }

    public function processTransaction($account, $amount){
        if($amount > 0){
            $account->transaction($amount, "deposit");
        } else {
            $account->transaction(abs($amount), "withdraw");
        }
    }
}
