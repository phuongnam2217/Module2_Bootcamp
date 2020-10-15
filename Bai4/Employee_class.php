<?php
    namespace NhanVien;
    class Employee{
        private $firstName;
        private $lastName;
        private $birthday;
        private $address;
        private $jobPosition;
        public function __construct($firstName,$lastName,$birthday,$address,$jobPosition)
        {
            $this->firstName = $firstName;
            $this->lastName = $lastName;
            $this->birthday = $birthday;
            $this->address = $address;
            $this->jobPosition = $jobPosition;
        }
        public function setFirstName($firstName){
            $this->firstName = $firstName;
        }
        public function setLastName($lastName){
            $this->lastName = $lastName;
        }
        public function setBirthday($birthday){
            $this->birthday = $birthday;
        }
        public function setAddress($address){
            $this->address = $address;
        }
        public function setJobPosition($jobPosition){
            $this->jobPosition = $jobPosition;
        }
        public function getFirstName(){
            return $this->firstName;
        }
        public function getLastName(){
            return $this->lastName;
        }
        public function getBirthday(){
            return $this->birthday;
        }
        public function getAddress(){
            return $this->address;
        }
        public function getJobPosition(){
            return $this->jobPosition;
        }
        public function __toString()
        {
            return "Họ và tên: ".$this->firstName." ".$this->lastName.", Ngày sinh: ".$this->birthday.
            ", Địa chỉ: ".$this->address.", Vị trí công việc: ".$this->jobPosition;
        }
    }
