<?php
session_start();
require 'db.php';

$username = $_POST['username'];
$password = $_POST['password'];

$sql = "SELECT * FROM users WHERE username=?";
$stmt = $conn->prepare($sql);
$stmt->bind_param("s", $username);
$stmt->execute();
$result = $stmt->get_result();

if ($result->num_rows === 1) {
    $row = $result->fetch_assoc();

    if ($password === $row['password']) {  
        $_SESSION['user'] = $username;
        header("Location: index.php");
        exit();
    }
}

// if wrong login → send back with error
header("Location: login.html?error=1");
exit();
?>
