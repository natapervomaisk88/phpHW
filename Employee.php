<?php
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
?>


