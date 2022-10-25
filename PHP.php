<?php

$fistname = $_POST["fname"];
$middlename = $_POST["mname"];
$lastname = $_POST["lname"];
$email = $_POST["email"];
$subject = $_POST["subject"];
$message = $_POST["message"];
$query = $_POST["query"];
$conn = mysqli_connect("localhost", "root", "", "Contact_Form") or die("connection failed");
$sql = "INSERT INTO contact_table(First_name, Middle_Name, Last_name, Email,Subject, Message, Query) VALUES ('{$fistname}','{$middlename} ','{$lastname}','{$email}','{$subject}','{$message}','{$query}' )";
$result = mysqli_query($conn, $sql) or die("Query Failed!");
mysqli_close($conn);
?>