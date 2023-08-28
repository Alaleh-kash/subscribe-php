<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Log in</title>
    <link rel="stylesheet" href="style.css">  
</head>

<body>
    <div class="container">
 <h1>Welcome to our website</h1>
 <div class="form-section">
            <h2>Login</h2>
            <form action="#" method="post">
                <label for="login_email">Email:</label>
                <input type="text" id="login_username" name="login_username"><br>

                <label for="login_password">Password:</label>
                <input type="password" id="login_password" name="login_password"><br>

                <input type="submit" value="Login">
            </form>
        </div>
    </div>

<?php

$db = new mysqli('localhost', 'root', 'root', 'register_page'); 

if ($db->connect_error) {
    die("Connection failed: " . $db->connect_error); 
}

$output = "SELECT * FROM users WHERE email = ?";
$result = $db->query($output); 

if ($result->num_rows > 0) { 
    while ($row = $result->fetch_assoc()) {
        echo $row["email"] . "<br>" . $row["password"]; 
    }
} else { 
    echo "0 results"; 
}

$db->close();
 
?>

</body>
</html>
