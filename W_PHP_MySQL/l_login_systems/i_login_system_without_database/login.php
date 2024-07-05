<?php
    if(isset($_GET))
    {
        $user = $_GET['username'];
        $pass = $_GET['password'];
        echo "Account Details";
        echo "<table border='1'>";
        echo "<tr> <td>Username</td><td>Password</td></tr>";
        echo "<tr><td>$user</td><td>$pass</td></tr>";
        echo "</table>";
    }
    else
    {
        echo "Record not found.";
    }