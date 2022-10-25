<?php

$fistname = $_POST["fname"];
$middlename = $_POST["mname"];
$lastname = $_POST["lname"];
$email = $_POST["email"];
$subject = $_POST["subject"];
$message = $_POST["message"];
$query = $_POST["query"]
$conn = mysqli_connect("localhost", "root", "", "Contact_Form") or die("connection failed");
$sql = "INSERT INTO databse_table(First_name, Middle_Name, Last_name, Email, Mobile) VALUES ('{$fistname}','{$middlename} ','{$lastname}','{$email}','{$subject}','{$message}','{$query}' )";
$result = mysqli_query($conn, $sql) or die("Query Failed!");
header("location: http://localhost/database%20form/HTML.html");
mysqli_close($conn);
?>