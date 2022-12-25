<?php
include 'connection.php';
$firstname = $_POST['firstnameInput'];
$lastname = $_POST['lastnameInput'];
$email = $_POST['emailInput'];
$password = md5($_POST['passwordInput']);

if ($conn) {
    try {
        $sql = "INSERT INTO oauth_users (firstname, lastname, email, password) VALUES ('$firstname', '$lastname', '$email', '$password')";
        $result = $conn->query($sql);
        $conn = null;
        if ($result) {
            header("Location: login.php");
        } else {
            header("Location: register.php");
        }
    } catch (PDOException $e) {
        print "Error!: " . $e->getMessage() . "<br/>";
        die();
    }
}
