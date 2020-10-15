<?php

namespace Manager;

class EmployeeManager
{
    private static $employees;
    private static $count = 0;
    public function __construct()
    {
        self::$employees = [];
    }
    public function add($employee)
    {
        self::$employees[] = $employee;
        self::$count++;
    }
    public static function Count()
    {
        return self::$count;
    }
    public function getEmployees()
    {
        return self::$employees;
    }
    public function clearEmployee($index)
    {
        array_splice(self::$employees, $index, 1);
        self::$count--;
    }
}
