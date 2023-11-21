<?php

trait Loggable {
    public function log($message) {
        date_default_timezone_set('Asia/Jakarta');
        echo '[' . date('Y-m-d H:i:s') . '] ' . $message . PHP_EOL;
    }
}

abstract class Animal {
    public $name;
    public $sound;

    abstract public function makeSound();

    public function setName($name) {
        $this->name = $name;
    }

    public function getName() {
        return $this->name;
    }
}

class Cat extends Animal {
    use Loggable;
    public function __construct($name) {
        $this->name = $name;
        $this->sound = 'Meow';
    }

    public function makeSound() {
        // echo $this->sound . PHP_EOL;
        $this->log($this->name . ' said ' . $this->sound . PHP_EOL);
    }
}


class Dog extends Animal {
    use Loggable;

    public function __construct($name) {
        $this->name = $name;
        $this->sound = 'Guk Guk';
    }

    public function makeSound() {
        // echo $this->sound . PHP_EOL;
        $this->log($this->name . ' said ' . $this->sound);
    }
}


$cat = new Cat('Prayitno');
$dog = new Dog('Kimoy');



$cat->makeSound();
$dog->makeSound();
