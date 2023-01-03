<?php
$firstName = $_POST['firstName'];
$lastName = $_POST['lastName'];
$email = $_POST['email'];
$password = $_POST['password'];
$repassword = $_POST['repassword'];

// Database connection
$host = "localhost";
$dbUsername = "root";
$dbPassword = "";
$dbname = "reg";

if($conn->connection_error){
    die('Connection Failed : '.$conn->connect_error);
}else{
    $stmt = $conn->prepare("insert into registration(firstNamme, lastName, email, password, repassword)
    values(?, ?, ?, ?, ?)");
$stmt->bind_param("sssss",$firstName,$lastName,$email,$password,$repassword);
$stmt->execute();
echo "Signup Successfully...";
$stmt->close();
$conn->close();
}
?>