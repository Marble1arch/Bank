<?php 
require_once 'BankAccount.php';
    $account = new BankAccount("Niks", 0);
    $account -> printInfo();

 $account ->deposit(2);
 echo "After depositing $2: <br>";
 $account ->printInfo()."<br>";


 $account ->withdraw(2);
 echo "After withdrwaing $2: <br>";
 $account ->printInfo()."<br>";

 $account = new BankAccount("Breinis", 500000);
 $account -> printInfo();
 
$account ->deposit(1000);
echo "After depositing $1000: <br>";
$account ->printInfo()." Breini<br>";


$account ->withdraw(1000);
echo "After withdrwaing $1000: <br>";
$account ->printInfo()." Breini<br>";
?>