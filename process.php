<?php
include 'database.php';

if(isset($_POST['send']))
{
    $msg = $_POST['msg'];


    $sql = "insert into message(msg) values('$msg')";
    if(mysqli_query($con,$sql))
    {
        echo "<script>alert('Message Sent...') </script>";
        header('Location:index.php');

    }
}
?>
