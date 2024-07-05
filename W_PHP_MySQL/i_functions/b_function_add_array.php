<?php
    function addMarks($num)
    {
        $sum = 0;
        foreach ($num as $value) {
            $sum += $value; // $sum = $sum + $value
        }
        return $sum;
    }

    $ramMarks = [23,45,86,95,78];
    $sitaMarks = [78,89,56,25,74];
    $sumRamMarks = addMarks($ramMarks);
    $sumSitaMarks = addMarks($sitaMarks);
    echo "Ram's total marks = $sumRamMarks <br>";
    echo "Sita's total marks = $sumSitaMarks";
?>