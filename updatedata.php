<?php

    echo  $stu_id = $_POST['id'];
    echo  $stu_name = $_POST['name'];
    echo  $stu_address = $_POST['address'];
    echo  $stu_class = $_POST['class'];
    echo  $stu_phone = $_POST['phone'];


$conn = mysqli_connect("localhost", "root", "", "crud") or die ("Connection Failed");

$sql = "UPDATE student SET name = '{$stu_name}', address = '{$stu_address}', class = '{$stu_class}', phone = '{$stu_phone}' WHERE id = {$stu_id} ";
$result = mysqli_query($conn, $sql) or die("Query Unsuccessful");

header("Location: http://localhost/crud_html/crud_html/index.php");

mysqli_close($conn);


?>
