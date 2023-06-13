<?php
$servername = 'localhost';
$username = 'root';
$password = ' ';
$dbname = 'website';

$con = mysqli_connect($servername,$username,$password,$dbname);

if(!$con){
    die(mysqli_error($con));
}
else{
    echo "Database Connected";
}
?>