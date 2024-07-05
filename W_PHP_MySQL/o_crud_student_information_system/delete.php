<?php
$conn = mysqli_connect('localhost', 'root', '') or die('Error: Unable to connect database' . mysqli_errno($conn));
$db = mysqli_select_db($conn, 'db_sis') or die('Error: Unable to select database' . mysqli_errno($conn));

$id = $_GET['id'];
$sql = "DELETE FROM `students` WHERE `s_id`='$id' ";
$query = mysqli_query($conn, $sql);
if($query)
{
  echo "Record Deleted Successfully";
  ?>
  <meta http-equiv="refresh" content="2;URL='index.php'">
  <?php
}
else
{
   echo "OOops ! Sorry !! Something Error in system !!!";
}
?>