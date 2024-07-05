<?php
$cookie_name = "logininfo";
$cookie_value = "Hari Nepal";
setcookie($cookie_name, $cookie_value, time() + (86400 * 30)); // cookie set for 30 days
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Working with Cookies</title>
</head>

<body>
    <?php
    if (!isset($_COOKIE[$cookie_name])) {
        echo "Cookie '" . $cookie_name . "' cannot be set.";
    } else {
        echo "Cookie '" . $cookie_name . "' is set successfully.";
        echo " and the cookie value is : " . $_COOKIE[$cookie_name];
    }
    ?>
</body>

</html>