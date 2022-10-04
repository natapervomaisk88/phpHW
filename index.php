<?php
declare(strict_types=1);
include_once('./Employee.php');
$empl1 = new Employee('john',25,1000);
$empl2 = new Employee('eric', 26, 2000);
$totalSalary = $empl1->salary+$empl2->salary;
$totalAge = $empl1->age+$empl2->age;
echo 'Сума зарплат: '.$totalSalary.'<br>';
echo 'Сума віку: '.$totalAge.'<br>';

?>

