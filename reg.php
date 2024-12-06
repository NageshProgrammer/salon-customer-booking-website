<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Simple Sign Up</title>
    <style>
        body {
            background-image: url('blurback.png');
            background-repeat: no-repeat;
            background-size: cover;
            backdrop-filter: blur(3px);
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        form {
            max-width: 700px;
            width: 400px;
            margin: 0 auto;
            background-color: white;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            margin-top: 80px;
        }

        h2 {
            text-align: center;
            color: #333;
        }

        label {
            display: block;
            margin-bottom: 8px;
            color: #333;
        }

        input {
            width: 100%;
            padding: 8px;
            margin-bottom: 16px;
            box-sizing: border-box;
            border: 1px solid #ccc;
            border-radius: 4px;
        }

        input[type="submit"] {
            background-color: #4caf50;
            color: #fff;
            cursor: pointer;
        }

        input[type="submit"]:hover {
            background-color: #45a049;
        }

        /* Optional: Add some spacing between form elements */
        form label+input {
            margin-top: 8px;
        }

        #passwordError {
            color: red;
        }
    </style>
</head>

<body>
    <form method="post" onsubmit="return validateForm()">
        <h2>Sign Up</h2>
        <label for="username">Username:</label>
        <input type="text" name="username" placeholder="Username" required><br>

        <label for="email">Email:</label>
        <input type="email" name="email" placeholder="Email" required><br>

        <label for="password">Password:</label>
        <input type="password" name="password" placeholder="Password" id="password" required><br>

        <label for="repassword">Re-Enter Password:</label>
        <input type="password" name="repassword" placeholder="Re-Enter password" id="repassword"><br>
        <span id="passwordError"></span>

        <input type="submit" name="submit" value="Sign Up">
        <h3 style="text-align: center;">Have account ? <a href="login.php">Log In</a></h3>
    </form>
    <?php
    include "connect.php";
    session_start();
    // Get user input
    if (isset($_POST['submit'])) {
        $username = $_POST['username'];
        $email = $_POST['email'];
        $password = $_POST['password'];
        $repassword = $_POST['repassword'];


        // Insert user data into the database
        $sql = "INSERT INTO signinup (username, email, password, repassword) VALUES ('$username', '$email', '$password', '$repassword')";
        mysqli_query($conn, $sql);
        header('location: login.php');
    }

    // Close the connection
    // $conn->close();
    ?>

    <script>
        function validateForm() {
            var password = document.getElementById("password").value;
            var repassword = document.getElementById("repassword").value;

            if (password !== repassword) {
                document.getElementById("passwordError").innerText = "Passwords do not match.";
                return false;
            } else {
                document.getElementById("passwordError").innerText = "";
                return true;
            }
        }
    </script>
</body>

</html>