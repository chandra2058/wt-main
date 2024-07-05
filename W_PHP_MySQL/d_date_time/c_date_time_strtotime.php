<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Working with PHP date and time</title>
</head>

<body>
    <?php
    // strtotime() method is used to convert human understandable time into unix time
    $myDateTime = strtotime("9:45am February 14 2014");
    echo "The date and time is = " . date("Y/m/d h:i:sa", $myDateTime);
    ?>
</body>

</html>