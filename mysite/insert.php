<?php
include 'connect.php';
$sql =
    "insert into NCIT values('A',1,'Male',30),
    ('B',2,'Female',20),
    ('C',3,'Male',30),
    ('D',4,'male',10)";
$result = mysqli_query($conn, $sql);

if(!$result)
{
    echo "records were not inserted ";
}
else{
    echo "records were  inserted";
}

?>