<?php

class BankAccount
{
    function __construct(private $balance)
    {
        
    }

    public function getBalance()
    {
        return $this->balance;
    }

    public function deposit($amount)
    {
        if ($amount > 0) {
            $this->balance += $amount;
        }

        return $this;
    }
}

class SavingAccount extends BankAccount
{
    private $interestRate;
    public function __construct($balance, $interestRate)
    {
        parent:: __construct($balance);
        $this->interestRate = $interestRate;
    }

    public function setInterestRate($interestRate)
	{
		$this->interestRate = $interestRate;
	}

    public function addInterest()
    {
        // calculate interest
        $interest = $this->interestRate * $this->getBalance();
        // deposit interest to the balance
        $this->deposit($interest);
    }
}

$account = new SavingAccount(100, 0.1);
echo $account->getBalance() . "<br>";
$account->addInterest();
echo $account->getBalance();
