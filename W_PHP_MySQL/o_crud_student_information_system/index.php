<?php
$conn = mysqli_connect('localhost', 'root', '') or die('Error: Unable to connect database' . mysqli_errno($conn));
$db = mysqli_select_db($conn, 'db_sis') or die('Error: Unable to select database' . mysqli_errno($conn));

$sql = "SELECT * FROM `students` ";
$result = mysqli_query($conn, $sql);
$count = mysqli_num_rows($result);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>STUDENT INFORMATION SYSTEM</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <center>
        <h1>STUDENT INFORMATION SYSTEM</h1>
        <a href="add.php" title="add new student">ADD</a>
        <?php
        if ($count >= 1) {
            ?>
            <table cellpadding="10" cellspacing="1" border="1" width="1000">
                <tr>
                    <th>Student Roll</th>
                    <th>Name</th>
                    <th>Address</th>
                    <th>Class</th>
                    <th>Email</th>
                    <th>Contact No</th>
                    <th>CRN</th>
                    <th>Reg No.</th>
                    <th>DOB</th>
                    <th>Gender</th>
                    <th>Guardian's Name</th>
                    <th>Photo</th>
                    <th>Action</th>
                </tr>
                <?php
                while ($row = mysqli_fetch_array($result)) {
                    ?>
                    <tr>
                        <td><?php echo $row['s_id']; ?></td>
                        <td><?php echo $row['s_name']; ?></td>
                        <td><?php echo $row['s_address']; ?></td>
                        <td><?php echo $row['s_class']; ?></td>
                        <td><?php echo $row['s_email']; ?></td>
                        <td><?php echo $row['s_con_no']; ?></td>
                        <td><?php echo $row['s_crn']; ?></td>
                        <td><?php echo $row['s_reg_no']; ?></td>
                        <td><?php echo $row['s_dob']; ?></td>
                        <td><?php echo ($row['s_gender'] == 1) ? "Male" : "Female"; ?></td>
                        <td><?php echo $row['s_guar_name']; ?></td>
                        <td><?php
                        $s_photo = $row['s_photo'];
                        if (!empty($s_photo) && file_exists("images/" . $s_photo)) {
                            ?>
                                <img src="images/<?php echo $s_photo; ?>" width="75">
                                <?php
                        } else {
                            echo "No image Preview";
                        }
                        ?>
                        </td>
                        <td>
                        [
            <a href="view.php?id=<?php echo $row['s_id']; ?>" title="View : <?php echo $row['s_name']; ?>">View</a>  |
            <a href="edit.php?id=<?php echo $row['s_id']; ?>" title="Edit : <?php echo $row['s_name']; ?>">Edit </a> |
            <a href="delete.php?id=<?php echo $row['s_id']; ?>" title="Delete : <?php echo $row['s_name']; ?>" onClick="return confirm('Are you sure to delete  <?php echo $row['s_name']; ?> ?');">Delete</a>
			]
                        </td>
                    </tr>
                    <?php
                }
                ?>
            </table>
            <?php
            echo "No of student record = ".$count;
        } else
            echo "<h2> Sorry ! No Student record found in our System</h2>";
        ?>
    </center>
</body>

</html>
<?php
mysqli_close($conn);
?>