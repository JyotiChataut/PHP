<?php
include 'connect.php';
$sql =
    "create table NCIT (
Id int,
Name varchar(20),
Gender Varchar(20),
Marks int
)";
$result = mysqli_query($conn, $sql);

if($result)
{
    echo "table is created ";
}
else{
    echo "table is not created";
}

?>
