<?php
$servername = 'localhost';
$username = 'root';
$password = '';
$database = 'user_data';
$port = 4306;

$conn = new mysqli($servername, $username, $password, 'user_data', $port);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if (isset($_POST['submit'])) {
    $myname = $_POST['myname'];
    $email = $_POST['email'];
    $message = $_POST['message'];
    // Insert user data into the database
    $stmt = $conn->prepare("INSERT INTO feedback (Name, Email, Message) VALUES (?, ?, ?)");
    $stmt->bind_param("sss", $myname, $email, $message);

    if ($stmt->execute()) {
        header('location: index.php');
    } else {
        echo "Error: " . $stmt->error;
    }

    $stmt->close();
}

$conn->close();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Feedback Form</title>
    <?php include('partial/header.php') ?>
     <style>
        body{
            font-family: Arial, sans-serif;
        }
        .container{
            max-width: 600px;
            margin: 30px auto;
            padding: 20px;
            border: 1px solid #dddddd;
            border-radius: 5px;
            background-color:rgba(225, 132, 32, 0.805);
            height: 24rem;
        }
        label{
            display: block;
            margin-bottom: 5px;
            font-size: 20px;
        }
        input[type="text"],
        textarea{
            width: 97%;
            padding: 8px;
            margin-bottom: 15px;
            border: 1px solid #ddd;
            border-radius: 3px;
            font-size: 20px;
        }
        input[type="submit"]{
            background-color: #4CAF50;
            color: white;
            padding: 10px 20px;
            border: none;
            cursor: pointer;
            border-radius: 5px;
            float: right;
        }
        input[type="submit"]:hover{
            background-color: #45a049;
        }
        h2{
            text-align: center;
        }
    </style>
</head>
<body><br><br><br><br><br>
    <div class="container">
        <h2>Feedback Form</h2>
        <form action="submit" method="POST" id="feedback-form">
            <label for="name"></label>
            <input type="text" placeholder="Enter Full Name" name="myname" required>

            <label for="email"></label>
            <input type="text" placeholder="Enter your Email" name="email" required>

            <label for="message">Message:</label>
            <textarea id="message" name="message" rows="4" required></textarea>

            <input type="submit" value="Submit" name="submit">
        </form>
    </div>

    <script>
         document.getElementById('feedback-form').addEventListener('submit', function(event) {
        event.preventDefault();
        window.location.href = 'index.php';
        alert('Thanks for submitting your feedback');
    });
    </script>
</body>
</html>