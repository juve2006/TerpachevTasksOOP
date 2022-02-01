<?php
class User
{
    public string $name;
    public int $age;

    public function isAgeCorrect($age): int
    {
        if ($age > 18 && $age < 60) {
            return true;
        } else {
            return false;
        }
    }

    public function setAge($age): int
    {
        if($this->isAgeCorrect($age)){
            return $this->age = $age;
        } else {
            return $this->age;
        }
    }

    public function addAge($years): int
    {
        $newAge = $this->age + $years;
        if ($this->isAgeCorrect($newAge)){
            return $this->age = $newAge;
        } else {
            return $this->age;
        }
    }

    public function subAge($years): int
    {
        $newAge = $this->age - $years;
        if ($this->isAgeCorrect($newAge)){
            return $this->age = $newAge;
        } else {
            return $this->age;
        }
    }
}

$user1 = new User();
$user1->age = 55;
echo $user1->setAge(17);
echo $user1->addAge(3);
echo $user1->subAge(50);
