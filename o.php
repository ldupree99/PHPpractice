<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Login</title>
</head>
<body>

<?php

// User inputs (for testing purposes)
$enteredUsername = "bob123"; // You can modify the username here
$enteredPassword = "Pass123"; // You can modify the password here

// User database
$userDatabase = [
    ["username" => "example_user1", "password" => "hashed_password1", "email" => "user1@example.com"],
    ["username" => "example_user2", "password" => "hashed_password2", "email" => "user2@example.com"],
    // ... add more users as needed
];

// Check if the entered username and password match the stored values
foreach ($userDatabase as $user) {
    if (checkLogin($enteredUsername, $enteredPassword, $user["username"], $user["password"])) {
        echo "Welcome, {$user['username']}!";
        break;  // Stop searching after a successful login
    }
}

// Custom function to check login
function checkLogin($enteredUsername, $enteredPassword, $username, $password) {
    return ($enteredUsername == $username && $enteredPassword == $password);
}

// Test the login system with both correct and incorrect inputs
// Manually input different combinations of usernames and passwords to see if the system behaves as expected
 
?>

</body>
</html>
