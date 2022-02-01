<?php
class User
{
    public string $name;
    public int $age;

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

    private function isAgeCorrect($age): int
    {
        return $age >= 18 && $age < 60;
    }
}

$user1 = new User();
$user1->age = 55;
//echo $user1->setAge(17);
//echo $user1->addAge(3);
//echo $user1->subAge(50);

class Student
{
    public string $name;
    public int $course;

    public function transferToNextCourse(): int
    {
        if ($this->isCourseCorrect($this->course)) {
             $this->course = $this->course + 1;
        }
        return $this->course;
    }
    private function isCourseCorrect($course): int
    {
        return $course < 5;
    }
}

$student1 = new Student();
//echo $student1->course = 3;
//echo '<br>';
//echo $student1->transferToNextCourse();
//echo '<br>';
//echo $student1->transferToNextCourse();
//echo $student1->transferToNextCourse();