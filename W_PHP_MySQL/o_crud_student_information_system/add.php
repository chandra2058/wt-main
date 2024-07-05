<?php
$conn = mysqli_connect('localhost', 'root', '') or die('Error: Unable to connect database' . mysqli_errno($conn));
$db = mysqli_select_db($conn, 'db_sis') or die('Error: Unable to select database' . mysqli_errno($conn));

if (isset($_POST['btnSubmit'])) {
    if (!empty($_FILES['s_photo']['name'])) {
        $s_photo = "sis_" . rand(0, 9999999999) . "_" . $_FILES['s_photo']['name'];
        $mainPath = "images/" . $s_photo;
        $tempPath = $_FILES['s_photo']['tmp_name'];
        move_uploaded_file($tempPath, $mainPath);
    } else {
        $s_photo = '';
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

    $sql = "INSERT INTO `students`(`s_name`, `s_address`, `s_class`, `s_email`, `s_con_no`, `s_crn`, `s_reg_no`, `s_dob`, `s_gender`, `s_guar_name`, `s_photo`) VALUES ('$stname','$staddress','$stclass','$stemail','$stcontactno','$stcrn','$stregno','$stdob','$stgender','$stguardiansname','$s_photo') ";

    $query = mysqli_query($conn, $sql);
    if ($query) {
        echo "Student record inserted successfully";
        ?>
        <meta http-equiv="refresh" content="2;URL='index.php'">
        <?php
    } else {
        echo "Ooops ! Something went wrong in your system.";
    }


}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SIS : Adding a new Student</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <h1>STUDENT INFORMATION SYSTEM [ADD]</h1>
    <div class="form-wrap">
        <form id="student_formid" name="student_form" method="post" enctype="multipart/form-data">
            <p>
                <label for="nameid">Name:</label>
                <input type="text" name="name" id="nameid">
            </p>
            <p>
                <label for="addressid">Address:</label>
                <input type="text" name="address" id="addressid">
            </p>
            <p>
                <label for="classid">Class:</label>
                <input type="text" name="class" id="classid">
            </p>
            <p>
                <label for="emailid">Email:</label>
                <input type="email" name="email" id="emailid">
            </p>
            <p>
                <label for="contactid">Contact No:</label>
                <input type="text" name="contactno" id="contactid">
            </p>
            <p>
                <label for="crnid">CRN:</label>
                <input type="text" name="crn" id="crnid">
            </p>
            <p>
                <label for="regid">Reg. No:</label>
                <input type="text" name="regno" id="regid">
            </p>
            <p>
                <label for="dobid">DoB:</label>
                <input type="date" name="dob" id="dobid">
            </p>
            <p>
                <label for="genderid">Gender:</label>
                <input type="radio" name="gender" value="1" checked> Male
                <input type="radio" name="gender" value="0"> Female
            </p>
            <p>
                <label for="guarid">Guardian's Name:</label>
                <input type="text" name="guardiansname" id="guarid">
            </p>
            <p>
                <label for="photoid">Photo:</label>
                <input type="file" name="s_photo" id="photoid" required>
            </p>
            <p>
                <input type="submit" id="btnid" name="btnSubmit" value="SUBMIT">
                <input type="reset" value="CANCEL">
            </p>
        </form>
    </div>
</body>

</html>

<?php
mysqli_close($conn);
?>