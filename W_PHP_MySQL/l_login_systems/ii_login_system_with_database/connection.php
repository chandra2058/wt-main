<?php
$conn = mysqli_connect("localhost", "root", "", "db_sls");
if (!$conn) {
    die("Cannot connect database " . mysqli_errno($conn));
}