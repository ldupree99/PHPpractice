<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<?php
        $username = "user123";
        $password = "secretp@ssword";
        $attempts = 0;



        if (strlen($password) >= 8 && preg_match('/[A-Za-z]/', $password) && preg_match('/\d/', $password) && preg_match('/[@#$%^&+=]/', $password)) {
            echo "Password is strong!";
        } else {
            echo "Password is weak. Please strengthen it.";
        }

        function checkPasswordStrength($password) {
            // Your password strength checking logic here
        }
        
        // Call the function
        checkPasswordStrength($password);

        
        $weakPasswords = ["password", "123456", "qwerty", "letmein", "admin"];

if (in_array($password, $weakPasswords)) {
    echo "Weak password! Choose a stronger one.";
} else {
    echo "Password strength is okay.";
}






?>



</body>
</html>
