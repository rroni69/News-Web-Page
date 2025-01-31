<?php

$host ="localhost";
$user = "root";
$pass = "";
$db = "News-Web-Page";
$conn = new mysqli($host, $user, $pass, $db);

if($conn->connect_error){
    die("Failed to connect to DB: " . $conn->connect_error);
}

// Function to get all users
function getAllUsers($conn){
    $sql = "SELECT email, password FROM users"; 
    $result = $conn->query($sql);

    $users = [];
    while ($row = $result->fetch_assoc()) { 
        $users[] = $row;
    }

    return $users;
}


?>