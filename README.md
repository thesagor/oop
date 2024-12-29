# Learning Object-Oriented Programming (OOP) in PHP

## Introduction

Object-Oriented Programming (OOP) is a programming paradigm that uses objects and classes to structure code. It is widely used in PHP to build scalable and maintainable applications.

### Why Use OOP in PHP?

1. **Reusability:** Code can be reused across different parts of an application.
2. **Scalability:** Easier to manage larger codebases.
3. **Encapsulation:** Protects data by restricting direct access.
4. **Inheritance:** Allows sharing functionality between classes.
5. **Polymorphism:** Provides flexibility to handle different data types or methods.

---

## Basic Concepts of OOP in PHP

### 1. Classes and Objects

- A **class** is a blueprint for creating objects.
- An **object** is an instance of a class.

```php
<?php
class Car {
    public $brand;
    public $color;

    public function drive() {
        echo "The car is driving.\n";
    }
}

$myCar = new Car();
$myCar->brand = "Toyota";
$myCar->color = "Red";
$myCar->drive();
?>
```

### 2. Properties and Methods

- **Properties** are variables inside a class.
- **Methods** are functions defined in a class.

### 3. Access Modifiers

Access modifiers define the visibility of properties and methods:

- **public:** Accessible from anywhere.
- **protected:** Accessible within the class and its subclasses.
- **private:** Accessible only within the class.

```php
<?php
class User {
    public $name;
    private $password;

    public function setPassword($password) {
        $this->password = $password;
    }

    public function getPassword() {
        return $this->password;
    }
}

$user = new User();
$user->name = "John Doe";
$user->setPassword("1234");
echo $user->getPassword();
?>
```

### 4. Constructor and Destructor

- **Constructor:** A special method called when an object is created.
- **Destructor:** A special method called when an object is destroyed.

```php
<?php
class Animal {
    public $name;

    public function __construct($name) {
        $this->name = $name;
        echo "A new animal named $name is created.\n";
    }

    public function __destruct() {
        echo "$this->name is destroyed.\n";
    }
}

$cat = new Animal("Cat");
?>
```

### 5. Inheritance

Inheritance allows a class to inherit properties and methods from another class.

```php
<?php
class Vehicle {
    public $type;

    public function move() {
        echo "The vehicle is moving.\n";
    }
}

class Bike extends Vehicle {
    public $brand;

    public function ride() {
        echo "Riding the $this->brand bike.\n";
    }
}

$bike = new Bike();
$bike->type = "Two-wheeler";
$bike->brand = "Yamaha";
$bike->move();
$bike->ride();
?>
```

### 6. Polymorphism

Polymorphism allows the same method to have different behaviors based on the object.

```php
<?php
class Shape {
    public function draw() {
        echo "Drawing a shape.\n";
    }
}

class Circle extends Shape {
    public function draw() {
        echo "Drawing a circle.\n";
    }
}

class Square extends Shape {
    public function draw() {
        echo "Drawing a square.\n";
    }
}

$shapes = [new Shape(), new Circle(), new Square()];

foreach ($shapes as $shape) {
    $shape->draw();
}
?>
```

---

## Advanced OOP Features

### 1. Interfaces

Interfaces define the structure of a class.

```php
<?php
interface Logger {
    public function log($message);
}

class FileLogger implements Logger {
    public function log($message) {
        echo "Logging to file: $message\n";
    }
}

$logger = new FileLogger();
$logger->log("This is a log message.");
?>
```

### 2. Abstract Classes

Abstract classes provide a base for other classes to extend.

```php
<?php
abstract class Animal {
    abstract public function makeSound();
}

class Dog extends Animal {
    public function makeSound() {
        echo "Woof!\n";
    }
}

$dog = new Dog();
$dog->makeSound();
?>
```

### 3. Traits

Traits allow code reuse in PHP when multiple inheritance is not possible.

```php
<?php
trait Logger {
    public function log($message) {
        echo "Log: $message\n";
    }
}

class Application {
    use Logger;
}

$app = new Application();
$app->log("Application started.");
?>
```

---

## Conclusion

OOP in PHP is a powerful way to write organized, maintainable, and reusable code. Mastering these concepts will significantly improve your PHP development skills.
