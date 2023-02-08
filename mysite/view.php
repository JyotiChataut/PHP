<html>
    <body>
       
    <table border="1">
        <tr>
            <td>Id</td>
            <td>Name</td>
            <td>Gender</td>
            <td>Marks</td>
       

<?php
include 'connect.php';
$sql ="select * from NCIT";
$result = mysqli_query($conn, $sql);
$num = mysqli_num_rows($result);
if($num>0)
{
while($row=mysqli_fetch_assoc($result))
{?>
<tr>
    <td><?php echo $row['Id']?></td>
    <td><?php echo $row['Name']?></td>
    <td><?php echo $row['Gender']?></td>
    <td> <?php echo $row['Marks']?></td>
</tr>
   
    <?php
}
}
?>
