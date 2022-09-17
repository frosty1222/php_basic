<?php 
class Person{
    public $name ="";
    public $age = 0;
    public $habit =[];
    public function __construct($name,$age,$habit=[]){
         $this->name = $name;
         $this->age = $age;
         $this->habit = $habit;
    }
    public function getInfo(){
        return "<h3>name:$this->name</h3><h3>age:$this->age</h3>";
    }
    public function getHabit(){
        return $this->habit;
    }
}
$person = new Person("dong",23,["reading book","watching movies","coding"]);
echo '<pre/>';
echo $person->getInfo();
$habit = $person->getHabit();
echo "<legend>My Habit</legend>";
foreach($habit as $key=>$val){
    echo"<h3>$key</h3>";echo "<h3>$val</h3>";
}

