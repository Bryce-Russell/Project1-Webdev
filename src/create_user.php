<?php
require 'db_connection.php';

$password = password_hash('yourpassword', PASSWORD_DEFAULT); 
$query = "INSERT INTO users (firstname, lastname, email, username, password) VALUES (?, ?, ?, ?, ?)";
$stmt = $conn->prepare($query);
$stmt->bind_param('sssss', $firstname, $lastname, $email, $username, $password);

$firstname = 'John';
$lastname = 'frank';
$email = 'john@example.com';
$username = 'john123';
$password = password_hash('password123', PASSWORD_DEFAULT);

$stmt->execute();
echo "User created successfully!";
?>
