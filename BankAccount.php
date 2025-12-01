<?php
class BankAccount{
    public $owner;
    private $balance;
    public function __construct($owner,$balance){
        $this->owner = $owner;
        $this->balance = $balance;
    }
    public function deposit($amount){
        if($amount >= 0){
            $this->balance = $this->balance+$amount;
        }else{
        return false;
    }
}
    public function withdraw($amount){
        if($amount > 0 && $amount <= $this->balance){
            $this->balance = $this->balance - $amount;
        }else{
            return false;
        }
    }
    public function printInfo(){
        echo "Owner: ".$this->owner."<br>";
        echo "Bank balance: ".$this->balance." Breini<br>";
    }
}
?>