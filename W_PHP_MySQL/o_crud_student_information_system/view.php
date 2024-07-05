<?php
$conn = mysqli_connect('localhost', 'root', '') or die('Error: Unable to connect database' . mysqli_errno($conn));
$db = mysqli_select_db($conn, 'db_sis') or die('Error: Unable to select database' . mysqli_errno($conn));

$id = $_GET['id'];
$sql = "SELECT * FROM `students` WHERE `s_id` = '$id'";
$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_array($result);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SIS : View the Student</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <center>
        <h1>STUDENT INFORMATION SYSTEM [View Student]</h1>
        <a href="index.php">Back to Home Page</a>
        <a href="edit.php?id=<?php echo $row['s_id']; ?>" title="Edit : <?php echo $row['s_name']; ?>">Edit </a>
        <table cellpadding="10" cellspacing="1" border="1" width="500">
            <tr>
                <th>Roll</th>
                <td><?php echo $row['s_id']; ?></td>
            </tr>
            <tr>
                <th>Name</th>
                <td><?php echo $row['s_name']; ?></td>
            </tr>
            <tr>
                <th>Address</th>
                <td><?php echo $row['s_address']; ?></td>
            </tr>
            <tr>
                <th>Class</th>
                <td><?php echo $row['s_class']; ?></td>
            </tr>
            <tr>
                <th>Email</th>
                <td><?php echo $row['s_email']; ?></td>
            </tr>
            <tr>
                <th>Contact</th>
                <td><?php echo $row['s_con_no']; ?></td>
            </tr>
            <tr>
                <th>CRN</th>
                <td><?php echo $row['s_crn']; ?></td>
            </tr>

            <tr>
                <th>Reg No:</th>
                <td><?php echo $row['s_reg_no']; ?></td>
            </tr>
            <tr>
                <th>DOB</th>
                <td><?php echo $row['s_dob']; ?></td>
            </tr>
            <tr>
                <th>Gender</th>
                <td><?php echo ($row['s_gender'] == 1) ? "Male" : "Female"; ?></td>
            </tr>
            <tr>
                <th>Guardians Name</th>
                <td><?php echo $row['s_guar_name']; ?></td>
            </tr>
            <tr>
                <th>Photo</th>
                <td><?php
                $s_photo = $row['s_photo'];
                if (!empty($s_photo) && file_exists("images/" . $s_photo)) {
                    ?>
                        <img src="images/<?php echo $s_photo; ?>" width="75" />
                    <?php
                } else {
                    echo "No Photo Available";
                }

                ?>
                </td>
            </tr>
        </table>
        <a href="edit.php?id=<?php echo $row['s_id']; ?>" title="Edit : <?php echo $row['s_name']; ?>">Edit </a>
    </center>
</body>

</html>
<?php
mysqli_close($conn);
?>