<?php

$fistname = $_POST["fname"];
$lastname = $_POST["lname"];
$middlename = $_POST["mname"];
$email = $_POST["email"];
$mobile = $_POST["mobile"];
$conn = mysqli_connect("localhost", "root", "", "Contact_Form") or die("connection failed");
$sql = "INSERT INTO databse_table(First_name, Middle_Name, Last_name, Email, Mobile) VALUES ('{$fistname}','{$middlename} ','{$lastname}','{$email}','{$mobile}' )";
$result = mysqli_query($conn, $sql) or die("Query Failed!");
header("location: http://localhost/database%20form/HTML.php");
mysqli_close($conn);
?>