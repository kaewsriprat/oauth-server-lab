<?php

$email = $_POST['emailInput'];
$password = md5($_POST['passwordInput']);

// Connect to the database
include "connection.php";

// Check if the user exists
$sql = "SELECT * FROM oauth_users WHERE email = :email AND password = :password";
$stmt = $conn->prepare($sql);
$stmt->execute(['email' => $email, 'password' => $password]);
$result = $stmt->fetchAll(PDO::FETCH_ASSOC);
$conn = null;
if (count($result) > 0) {
    // User exists
    // Start the session
    session_start();
    // Set the session variables
    $_SESSION['user_id'] = $result[0]['id'];
    $_SESSION['user_email'] = $result[0]['email'];
    $_SESSION['user_name'] = $result[0]['name'];
    // Redirect to the home page
    header("Location: dashboard.php");
} else {
    // User does not exist
    // Redirect to the login page
    header("Location: login.php");
}
