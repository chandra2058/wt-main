<?php
    $students = array(
        array(
            "Name" => "Ram",
            "Marks" => 44,
            "Address" => "Kathmandu",
            "Email" => "sita@gmail.com"
        ),
        array(
            "Name" => "Sita",
            "Marks" => 34,
            "Address" => "Bhaktapur",
            "Email" => "cuteram@gmail.com"
        ),
        array(
            "Name" => "Hari",
            "Marks" => 4,
            "Address" => "Lalitpur",
            "Email" => "timrohari@gmail.com"
        ),
        array(
            "Name" => "Fool",
            "Marks" => 74,
            "Address" => "Chitwan",
            "Email" => "hamaradipak@gmail.com"
        )
    );

    // echo $students[2]["Email"]; // timrohari@gmail.com

    $keys = array_keys($students);

    for ($i=0; $i < count($students) ; $i++) { 
        echo "<br/>";
        foreach ($students[$keys[$i]] as $key => $value) {
            echo $value. "<br/>";
        }
    }

?>