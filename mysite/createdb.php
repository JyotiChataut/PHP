<?php
include 'connect.php';
$sql = "create database Mydb";
$result = mysqli_query($conn, $sql);
if(!$result)
{
    die("database is not created".mysqli_error($conn));

}
else{
    echo "db is succsessfully created";
}

?>