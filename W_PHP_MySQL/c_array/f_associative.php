<?php
    $marks = array(
        "Ram" => 56,
        "Sita" => 66,
        "Hari" => 96,
        "Gita" => 6
    );
    echo "Marks of Ram = ".$marks["Ram"]."<br/>";
    echo "Marks of Sita = ".$marks["Sita"]."<br/>";
    echo "Marks of Hari = ".$marks["Hari"]."<br/>";
    echo "Marks of Gita = ".$marks["Gita"]."<br/>";

    echo "Displaying marks of student using foreach<br/>";
    foreach ($marks as $key => $value) {
        echo "Marks of " .$key. " is = " .$value ."<br/>";
    }
?>