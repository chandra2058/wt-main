<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Working with PHP date and time</title>
</head>

<body>
    <?php
    echo "Today is " . date("y/m/d") . "<br/>"; // Today is 24/05/16
    echo "Today is " . date("y-m-d") . "<br/>"; // Today is 24-05-16
    echo "Today is " . date("y.m.d") . "<br/>"; // Today is 24.05.16
    echo "Today is " . date("Y/m/d") . "<br/>"; // Today is 2024/05/16
    echo "Today is " . date("Y/M/d") . "<br/>"; // Today is 2024/May/16
    echo "Today is " . date("Y/M/D") . "<br/>"; // Today is 2024/May/Thu
    echo "Today is " . date("l") . "<br/>"; //Today is Thursday
    ?>
</body>

</html>