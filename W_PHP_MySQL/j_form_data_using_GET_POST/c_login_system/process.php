<?php
    if(isset($_POST['submit']))
    {
        if(empty($_POST['username']) && empty($_POST['pass']))
        {
            header("location:index.php");
        }
        else{
            header("location:welcome.php");
        }

        // $user = $_POST['username'];
        // $pass = $_POST['pass'];
        // echo $user,"<br>";
        // echo $pass;
    }
?>