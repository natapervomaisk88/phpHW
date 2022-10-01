<?php
declare(strict_types=1);
class Employee
{
    private string $name;
    private int $age;
    private float $salary;

    public function __get($name)
    {
        return $this->$name;
    }

    public function __set($name, $value)
    {
        $this->name = $value;
    }
    public function __construct(string $name, int $age, float $salary)
    {
        $this->name = $name;
        $this->age = $age;
        $this->salary = $salary;
    }
}

$empl1 = new Employee('john',25,1000);
$empl2 = new Employee('eric', 26, 2000);
$totalSalary = $empl1->salary+$empl2->salary;
$totalAge = $empl1->age+$empl2->age;
echo 'Сума зарплат: '.$totalSalary.'<br>';
echo 'Сума віку: '.$totalAge.'<br>';

?>

