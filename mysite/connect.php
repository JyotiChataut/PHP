<?php
$server = "localhost";
$user = "root";
$password = "";
$database="Mydb";
$conn = mysqli_connect($server, $user, $password,$database);
if(!$conn)
{
    die("db is not connected".mysqli_connect_error());

}
// else{
//     echo"dbconnected"; 
// }
?>