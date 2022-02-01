<?php
class Employee
{
    public $name;

    public $age;

    public $salary;

    public function getName ()
    {
        return $this->name;
    }

    public function getAge()
    {
        return $this->age;
    }

    public function getSalary()
    {
        return $this->salary;
    }

    public function checkAge()
    {
        if ($this->age > 18){
            return true;
        } else {
            return false;
        }
    }
}

$user1 = new Employee();
$user1->name = 'john';
$user1->age = 25;
$user1->salary = 1000;

$user2 = new Employee();
$user2->name = 'eric';
$user2->age = 26;
$user2->salary = 2000;

//echo $user1->salary + $user2->salary;
//echo '<br>';
//echo $user1->age + $user2->age;
//echo '<br>';
//cоздайте два объекта класса Employee, запишите в их свойства какие-либо значения. С помощью метода getSalary найдите сумму зарплат созданных работников.
//echo $user1->getSalary()+$user2->getSalary();

class User
{
    public $name;
    public $age;

    public function setAge($age)
    {
        if ($age >= 18) {
            return $this->age = $age;
        } else {
            return $this->age;
        }
    }
}

$user1 = new User();
$user1->name = 'john';
$user1->age = 25;
$user1->setAge(17);
//echo $user1->age;

class Employee2
{
    public string $name;
    public float $salary;
    //Сделайте класс Employee, в котором будут следующие свойства работника - name, salary.
    // Сделайте метод doubleSalary, который текущую зарплату будет увеличивать в 2 раза.
    public function doubleSalary():float
    {
        return $this->salary * 2;
    }
}

class Rectangle
{
    public float $side1;
    public float $side2;

    public function getSquare(): float
    {
        return $this->side1 * $this->side2;
    }

    public function getPerimeter(): float
    {
        return ($this->side1 + $this->side2) * 2;
    }
}

$rectangle = new Rectangle();
$rectangle->side1 = 2.2;
$rectangle->side2 = 2;
echo $rectangle->getSquare();
echo '<br>';
echo $rectangle->getPerimeter();