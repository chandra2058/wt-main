<?php
$conn = mysqli_connect('localhost', 'root', '') or die('Error: Unable to connect database' . mysqli_errno($conn));
$db = mysqli_select_db($conn, 'db_sis') or die('Error: Unable to select database' . mysqli_errno($conn));

if (isset($_POST['btnSubmit'])) {
    $id = $_POST['id'];
    $imgStatus = $_POST['imgStatus'];
    if ($imgStatus == 1) {
        $result = mysqli_query($conn, "SELECT * FROM `students` WHERE `s_id` = '$id' ");
        $row = mysqli_fetch_array($result);
        $s_photo = $row['s_photo'];
    } else {
        if (!empty($_FILES['s_photo']['name'])) {
            $s_photo = "sis_" . rand(0, 99999999) . "_" . $_FILES['s_photo']['name'];
            move_uploaded_file($_FILES['s_photo']['tmp_name'], "images/" . $s_photo);
        } else {
            $s_photo = '';
        }
    }
    $stname = $_POST['name'];
    $staddress = $_POST['address'];
    $stclass = $_POST['class'];
    $stemail = $_POST['email'];
    $stcontactno = $_POST['contactno'];
    $stcrn = $_POST['crn'];
    $stregno = $_POST['regno'];
    $stdob = $_POST['dob'];
    $stgender = $_POST['gender'];
    $stguardiansname = $_POST['guardiansname'];
    $sql =
        "
		UPDATE `students` SET
		`s_name`='$stname',
		`s_address`='$staddress',
		`s_class`='$stclass',
		`s_email`='$stemail',
		`s_con_no`='$stcontactno',
		`s_crn`='$stcrn',
		`s_reg_no`='$stregno',
		`s_dob`='$stdob',
		`s_gender`='$stgender',
		`s_guar_name`='$stguardiansname',
		`s_photo`='$s_photo'
		WHERE `s_id`='$id'
		";
    $query = mysqli_query($conn, $sql);
    if ($query) {
        echo "Student Record Updated Successfully ";
        ?>
        <meta http-equiv="refresh" content="2;URL='index.php'">
        <?php
    } else {
        echo "Ooops ! Error In System !!!";
    }

}

$id = $_GET['id'];

if (isset($_GET['deleteImage'])) {
    $s_photo = $_GET['deleteImage'];

    if (!empty($s_photo) && file_exists("images/" . $s_photo)) {
        unlink("images/" . $s_photo);
        $sql = "UPDATE `students` SET `s_photo` = ''	WHERE `id` = '$id' ";
        mysqli_query($conn, $sql);
    }
}

$sql = "SELECT * FROM `students` WHERE `s_id` = '$id'";
$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_array($result);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SIS : Edit Page</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <center>
        <h1>Student Information System [ Edit Student ]</h1>
        <a href="index.php">Back</a>
        <form name="frm1" action="" method="post" enctype="multipart/form-data">
            <table cellpadding="10" cellspacing="1" border="1" width="1000">
                <tr>
                    <th>Name</th>
                    <td><input type="text" name="name" value="<?php echo $row['s_name']; ?>"></td>
                </tr>
                <tr>
                    <th>Address</th>
                    <td><input type="text" name="address" value="<?php echo $row['s_address']; ?>"></td>
                </tr>
                <tr>
                    <th>Class</th>
                    <td><input type="text" name="class" value="<?php echo $row['s_class']; ?>"></td>
                </tr>
                <tr>
                    <th>Email</th>
                    <td><input type="email" name="email" value="<?php echo $row['s_email']; ?>"></td>
                </tr>
                <tr>
                    <th>Contact No</th>
                    <td><input type="text" name="contactno" value="<?php echo $row['s_con_no']; ?>"></td>
                </tr>
                <tr>
                    <th>CRN</th>
                    <td><input type="text" name="crn" value="<?php echo $row['s_crn']; ?>"></td>
                </tr>
                <tr>
                    <th>Reg No:</th>
                    <td><input type="text" name="regno" value="<?php echo $row['s_reg_no']; ?>"></td>
                </tr>
                <tr>
                    <th>DOB</th>
                    <td><input type="date" name="dob" value="<?php echo $row['s_dob']; ?>"></td>
                </tr>
                <tr>
                    <th>Gender</th>
                    <td>
                        <input type="radio" name="gender" value="1" <?php if ($row['s_gender'] == 1) {
                            echo "checked";
                        } ?>>
                        Male
                        <input type="radio" name="gender" value="0" <?php if ($row['s_gender'] == 0) {
                            echo "checked";
                        } ?>>
                        Female
                    </td>
                </tr>
                <tr>
                    <th>Guardians Name</th>
                    <td><input type="text" name="guardiansname" value="<?php echo $row['s_guar_name']; ?>"></td>
                </tr>
                <tr>
                    <th>Photo</th>
                    <td>
                        <?php
                        $s_photo = $row['s_photo'];
                        if (!empty($s_photo) && file_exists("images/" . $s_photo)) {
                            ?>
                            <img src="images/<?php echo $s_photo; ?>" width="75">
                            <a href="edit.php?id=<?php echo $_GET['id']; ?>&deleteImage=<?php echo $row['s_photo']; ?>"
                                title="Delete Image"
                                onClick="return confirm('Are you sure to delete the image ? ')">Delete</a>
                            <input type="hidden" name="imgStatus" value="1">
                            <?php
                        } else {
                            ?>
                            <input type="file" name="s_photo">
                            <input type="hidden" name="imgStatus" value="0">
                            <?php
                        }
                        ?>
                    </td>
                </tr>
                <tr>
                    <th>&nbsp;</th>
                    <td>
                        <input type="hidden" name="id" value="<?php echo $_GET['id']; ?>">
                        <input type="submit" value="UPDATE" name="btnSubmit">
                        <input type="reset" value="CANCEL">
                    </td>
                </tr>
            </table>
        </form>
    </center>
</body>

</html>
<?php
mysqli_close($conn);
?>