<?php
include_once 'Employee_class.php';
include_once 'Employee_Manager.php';

use Manager\EmployeeManager;
use NhanVien\Employee;

$emloyeeManager = new EmployeeManager();
$emloyeeManager->add(new Employee("Nguyễn", "Nam", "20/10", "Huế", "IT"));
$emloyeeManager->add(new Employee("Ngọc", "Châu", "10/10", "Huế", "Marketing"));
$emloyeeManager->add(new Employee("Ngọc", "Huyền", "5/5", "Huế", "Doctor"));
echo "Số lượng nhân viên là :" . EmployeeManager::Count();
echo "<br>";
$employees = $emloyeeManager->getEmployees();
foreach ($employees as $employee) {
    echo $employee->__toString() . "<br>";
}
$index = 0;
echo "Xóa nhân viên ở vị trí $index " . $emloyeeManager->clearEmployee($index);
echo "<br>";
echo "Số lượng nhân viên là :" . EmployeeManager::Count() . "<br>";
$employees = $emloyeeManager->getEmployees();
foreach ($employees as $employee) {
    echo $employee->__toString() . "<br>";
}
