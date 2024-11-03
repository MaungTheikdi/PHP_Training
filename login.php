<?php  
session_start();  

require_once 'conn.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {  

    // Get the user input from the form
    $username = $_POST['user_name'];  
    $password = $_POST['pass_word'];  

    // Prepare and execute the query  
    //$sql = "SELECT * FROM users WHERE username = ?";  
    $stmt = $conn->prepare("SELECT * FROM users WHERE username = ?");
    $stmt->bind_param('s', $username);  // 's' is the username is string value, 'i' is integer value
    $stmt->execute();  

    $result = $stmt->get_result();
      

    if ($result->num_rows > 0) {  
        $user = $result->fetch_assoc();  
        // $user username=Admin, password=123456 

        if (password_verify($password, $user['password'])) {  
        //if ($password == $user['password']) {  
            $_SESSION['username'] = $username;  // $_SESSION['username'] is variable name
            echo "Login successful! Welcome, " . $username;  
            // Redirect or do something else (e.g. move to a dashboard)  
            
        } else {  
            echo "Invalid password.";  
        }  

    } else {  
        echo "User not found.";  
    }  

    $stmt->close();  
    $conn->close();  
}  
?>  

<!DOCTYPE html>  
<html lang="en">  
<head>  
    <meta charset="UTF-8">  
    <meta name="viewport" content="width=device-width, initial-scale=1.0">  
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">  
    <title>Login</title>  
</head>  
<body>  
<div class="container">  
    <h2>Login</h2>  
    <form method="POST" action="login.php">  
        <div class="mb-3">  
            <label for="username" class="form-label">Username</label>  
            <input type="text" class="form-control" name="user_name" required>  
        </div>  
        <div class="mb-3">  
            <label for="password" class="form-label">Password</label>  
            <input type="password" class="form-control" name="pass_word" required>  
        </div>  
        <!-- <button type="submit" class="btn btn-primary">Login</button>  -->
        <input type="submit" class="btn btn-primary" value="Login"> 
    </form>  
    <p>Don't have an account? <a href="register.php">Register here!</a></p>  
</div>  
</body>  
</html>