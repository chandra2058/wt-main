<?php
    class Student{
        public $name;
        public $address;
        
        function set_name($name)
        {
            $this->name = $name;
        }
        function get_name()
        {
            return $this->name;
        }
        function set_address($address)
        {
            $this->address = $address;
        }
        function get_address()
        {
            return $this->address;
        }
    }

    $stu1 = new Student(); // creating an object
    $stu1->set_name("Ram");
    $stu1->set_address("Kathmandu");
    echo "The name is =".$stu1->get_name();
    echo "<br>";
    echo "The address is = ".$stu1->get_address();
?>