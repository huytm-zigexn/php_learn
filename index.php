<?php

class BankAccount
{
    public float $balance = 0;

    public function __construct(float $balance)
    {
        $this->balance = $balance;
    }
}

$account1 = new BankAccount(0);
var_dump($account1);
$account = new BankAccount(100.5);
var_dump($account);


//Readonly-properties
class UserOld
{
    public readonly string $username;

    // public function __construct(string $username)
    // {
    //     $this->username = $username;
    // }
    public function setUserName(string $username)
    {
        $this->username = $username;
    }
}

// $user = new User('Huy');
// var_dump($user);
$user = new UserOld();
$user->setUserName('Huy');
//$user->setUserName('Hi'); //error if setUserName the second time
var_dump($user);


//Example with User and UserProfile
class UserProfile
{
    public function __construct(private string $name, private string $phone)
    {
    }

    public function changePhoneNumber($phone) {
        $this->phone = $phone;
    }
}

class User
{
    private readonly string $username;
    private readonly UserProfile $profile;

    public function __construct(string $username)
    {
        $this->username = $username;
    }

    public function setProfile(UserProfile $profile)
    {
        $this->profile = $profile;
    }

    public function profile(): UserProfile
    {
        return $this->profile;
    }
}


$user = new User('huytm');
$user->setProfile(new UserProfile('Tran Minh Huy', '0823749143'));
var_dump($user);
$user->profile()->changePhoneNumber('0961367308');
var_dump($user);