<?php
    $salary = [12000,13450,4500,6500,3450,1235];

    $no_of_employees = count($salary);

    $sum = 0;
    for ($i=0; $i < $no_of_employees ; $i++) { 
        $sum = $sum + $salary[$i];
    }
    $avg = $sum/$no_of_employees;

    echo "The average salary is Rs. $avg";
?>d