<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - Cafe Saya</title>
    <link rel="stylesheet" href="navbar.css">
    <!-- <style>
        body {
    font-family: Arial, sans-serif;
    background-color: #f0f0f0;
    margin: 0;
    padding: 0;
}

h2 {
    text-align:center;
}
.login-container {
    width: 300px;
    margin: 100px auto;
    padding: 20px;
    background-color: #fff;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    border-radius: 8px;
}

.form-group {
    margin-bottom: 15px;
}

.form-group label {
    display: block;
    margin-bottom: 5px;
}

.form-group input {
    width: 100%;
    padding: 8px;
    box-sizing: border-box;
}

button {
    width: 100%;
    padding: 10px;
    background-color: #5cb85c;
    color: #fff;
    border: none;
    border-radius: 5px;
    cursor: pointer;
}

button:hover {
    background-color: #4cae4c;

}
/* .lain {
    width: 100%;
    padding: 10px;
    background-color: #5cb85c;
    color: #fff;
    border: none;
    border-radius: 5px;
    cursor: pointer;
} */

a.lain {
    text-decoration:none;
    text-align:justify-content:
    color:blue;
    font-size: 10px;
}




    </style> -->
</head>
<body>
    <div class="login-container">
        <h2>Login</h2>
        <form action="login_process.php" method="POST">
            <div class="form-group">
                <label for="username">Username:</label>
                <input type="text" id="username" name="username" required>
            </div>
            <div class="form-group">
                <label for="password">Password:</label>
                <input type="password" id="password" name="password" required>
            </div>
            <button type="submit">Login</button>
        </form>
            <div class="lain" style="text-align:center; font-size:10px; padding:5px;"><a href="register.php">Belum Punya Akun</a></div>
    </div>
</body>
</html>
