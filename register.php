<?php  
// $_POST['username']; from attribute name="username"
// $_POST['password']; from attribute name="password"

//$conn = new mysqli('localhost', 'root', '', 'booking_project');
//$conn->query($sql)

require_once 'conn.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {  

    $username = $_POST['user_name'];
    $password = $_POST['pass_word'];
    // Hashing the password  
    $hashedPassword = password_hash($password, PASSWORD_DEFAULT);  
    // Next Test with MD5 
 
    // Insert user into the database  
    $sql = "INSERT INTO users (username, password) VALUES ('$username', '$hashedPassword')";  
    // $conn->query("SELECT * FROM users WHERE username);
    // $conn->query($sql)
    if ($conn->query($sql) === TRUE) {  
        echo "Registration successful!";  
    } else {  
        echo "Error: " . $sql . "<br>" . $conn->error;  
    }  

    $conn->close();  

}  
?>  

<!DOCTYPE html>  
<html lang="en">  
<head>  
    <meta charset="UTF-8">  
    <meta name="viewport" content="width=device-width, initial-scale=1.0">  
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">  
    <title>Register</title>  
</head>  
<body>  
<div class="container">  
    <h2>Register</h2>  


    <form method="POST" action="register.php">  
        
        <div class="mb-3">  
            <label for="username" class="form-label">Username</label>  
            <input type="text" class="form-control" name="user_name" required>  
        </div>  

        <div class="mb-3">  
            <label for="password" class="form-label">Password</label>  
            <input type="password" class="form-control" name="pass_word" required>  
        </div>  

        <div class="mb-3 form-check">
            <label class="form-check-label" for="exampleCheck1">Check me out</label>
            <input type="checkbox" class="form-check-input" id="exampleCheck1">            
        </div>

        <button type="submit" class="btn btn-primary">Register</button>  
    </form>  



    <p>Already have an account? <a href="login.php">Login here!</a></p>  
</div>  
</body>  
</html>