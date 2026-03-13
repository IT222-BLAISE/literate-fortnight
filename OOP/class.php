<?php

class BankAccount {
    private $accountNumber; // properties
    private $balance; // properties
    
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

    public function getAccountNumber(){
        return $this->accountNumber;
    }
    public function getbalance(){
        return $this->balance;
    }

    public function setAccountNumber($accountNumber){
        $this->accountNumber = $accountNumber;
    }
}

class Customer {
    public $name;

    public function getName(){
        return $this->name;
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
