<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Writing a csv file</title>
</head>

<body>
    <?php
    $names = array(
        "ram,ram@gmail.com,25",
        "sita,sita@gmail.com,22",
        "hari,hari@gmail.com,21",
    );
    $file = fopen("students.csv", "w");
    foreach ($names as $line) {
        fputcsv($file, explode(',', $line));
    }
    echo "Data inserted successfully.";
    fclose($file);
    ?>
</body>

</html>