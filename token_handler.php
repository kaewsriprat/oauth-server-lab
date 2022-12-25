<?php

if (!$_POST['client_id']) {
    header("Location: login.php");
}

$client_id = $_POST['client_id'];
$client_secret = $_POST['client_secret'];
$redirect_uri = $_POST['redirect_uri'];

// Connect to the database
include "connection.php";

// Check if the user exists
$sql = "SELECT oauth_users.id, oauth_users.firstname, oauth_users.lastname, oauth_users.email FROM oauth_clients ";
$sql .= "JOIN oauth_users ON oauth_clients.user_id = oauth_users.id ";
$sql .= "WHERE oauth_clients.client_id = :client_id AND client_secret = :client_secret AND redirect_uri = :redirect_uri";
$stmt = $conn->prepare($sql);
$stmt->execute(['client_id' => $client_id, 'client_secret' => $client_secret, 'redirect_uri' => $redirect_uri]);
$result = $stmt->fetchAll(PDO::FETCH_ASSOC);
$conn = null;
if (count($result) > 0) {
    echo json_encode($result);
} else {
    echo "No user found";
}
