<?php

     $stu_name = $_POST['name'];
     $stu_address = $_POST['address'];
     $stu_class = $_POST['class'];
     $stu_phone = $_POST['phone'];


    $conn = mysqli_connect("localhost", "root", "", "crud") or die ("Connection Failed");

    $sql = "INSERT INTO student(name, address, class, phone) VALUES ('{$stu_name}','{$stu_address}','{$stu_class}','{$stu_phone}')";
    $result = mysqli_query($conn, $sql) or die("Query Unsuccessful");

    header("Location: http://localhost/crud_html/crud_html/index.php");

    mysqli_close($conn);


?>