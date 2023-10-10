<?php
interface Animal{
    public function getSound();
}

class Dog implements Animal{
    public function getSound(){
        echo "The dog makes woof" . "<br/>";
    }
}
class Cat implements Animal{
    public function getSound(){
        echo "The cat makes meow" . "<br>";
    }
}

$dog = new Dog();
$dog->getSound();

$cat = new Cat();
$cat->getSound();

?>