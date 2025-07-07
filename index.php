<?php
// index.php - Smart Study Scheduler Entry Page
session_start();
?>

<!DOCTYPE html>
<html>
<head>
    <title>Smart Study Scheduler - Login</title>

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&family=Poppins:wght@300;400;600&display=swap" rel="stylesheet">

    <style>
        body {
            font-family: 'Poppins', sans-serif;
            margin: 0;
            padding: 0;
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
             background: linear-gradient(to right, #eefaf9, #d8f3ec);
            background-size: cover;
        }

        .login-box {
            width: 380px;
            padding: 40px 30px;
            border-radius: 16px;
            background: rgba(255, 255, 255, 0.85);
            box-shadow: 0 8px 24px rgba(0, 0, 0, 0.2);
            backdrop-filter: blur(6px);
            border: 1px solid rgba(255, 255, 255, 0.3);
            text-align: center;
        }

        h2 {
            font-family: 'Bebas Neue', sans-serif;
            font-size: 32px;
            letter-spacing: 1px;
            color: #1b5e20;
            margin-bottom: 25px;
        }

        input, select {
            width: 90%;
            padding: 12px;
            margin: 10px 0;
            border: 1px solid #b2dfdb;
            border-radius: 8px;
            background-color: #e0f2f1;
            font-size: 14px;
            color: #004d40;
        }

        input::placeholder {
            color: #00796b;
        }

        select {
            width: 95%;
            background-color: #e0f2f1;
            color: #00695c;
        }

        button {
            width: 95%;
            padding: 12px;
            margin-top: 15px;
            background-color: #26a69a;
            color: white;
            border: none;
            border-radius: 8px;
            font-size: 15px;
            font-weight: 600;
            cursor: pointer;
            transition: background 0.3s;
        }

        button:hover {
            background-color: #00796b;
        }

        .signup-link {
            margin-top: 20px;
            font-size: 13px;
            color: #555;
        }

        .signup-link a {
            color: #00695c;
            text-decoration: none;
            font-weight: 500;
        }
    </style>
</head>
<body>

    <div class="login-box">
        <h2>Smart Study Scheduler</h2>
        <form action="login.php" method="POST">
            <input type="text" name="username" placeholder="Username" required><br>
            <input type="password" name="password" placeholder="Password" required><br>

            <label for="role">Select Role:</label><br>
            <select name="role" required>
                <option value="">-- Select Role --</option>
                <option value="admin">Admin</option>
                <option value="instructor">Instructor</option>
                <option value="student">Student</option>
            </select><br><br>

            <button type="submit">Login</button>
        </form>

        <div class="signup-link">
            <p>Not registered? <a href="admin_signup.php">Admin Signup</a></p>
        </div>
    </div>

</body>
</html>
