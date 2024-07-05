<?php
    $students = array(
        array("Ram", 2, 12),
        array("Sita", 3, 15),
        array("Hari", 1, 11),
        array("Laxman", 2, 14)
    );

    /* echo $students[0][0]." studies in class ".$students[0][1]." and ".$students[0][2]." years old.<br/>";
    echo $students[1][0]." studies in class ".$students[1][1]." and ".$students[1][2]." years old.<br/>";
    echo $students[2][0]." studies in class ".$students[2][1]." and ".$students[2][2]." years old.<br/>";
    echo $students[3][0]." studies in class ".$students[3][1]." and ".$students[3][2]." years old."; */
    
    for ($row=0; $row <4; $row++) { 
        echo "<h2> Row : $row </h2>";
        echo "<ul>";
        for ($col=0; $col <3 ; $col++) { 
            echo "<li>".$students[$row][$col]."</li>";
        }
        echo "</ul>";
    }
    
?>