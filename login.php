<!DOCTYPE html>
<html>

<head>
  <style>
    body {
      background-image: url('blurback.png');
      background-repeat: no-repeat;
      background-size: cover;
      backdrop-filter: blur(7px);
      font-family: Arial, sans-serif;
      margin: 0;
      padding: 0;
      display: flex;
      justify-content: center;
      align-items: center;
      height: 100vh;
    }

    .login {
      width: 400px;
      padding: 40px;
      position: relative;
      background: rgba(225, 132, 32, 0.805);
      box-sizing: border-box;
      box-shadow: 0 15px 25px rgba(0, 0, 0, 0.6);
      border-radius: 10px;
    }

    .login h2 {
      margin: 0 0 30px;
      padding: 0;
      color: #fff;
      text-align: center;
    }

    .login .user-box {
      position: relative;
    }

    .login .user-box input {
      width: 100%;
      padding: 10px 0;
      font-size: 16px;
      color: #fff;
      margin-bottom: 30px;
      border: none;
      border-bottom: 1px solid #fff;
      outline: none;
      background: transparent;
    }

    .login .user-box label {
      position: absolute;
      top: 0;
      left: 0;
      padding: 10px 0;
      font-size: 16px;
      color: #fff;
      pointer-events: none;
      transition: 0.5s;
    }

    .login .user-box input:focus~label,
    .login .user-box input:valid~label {
      top: -20px;
      left: 0;
      color: rgba(225, 132, 32, 0.805);
      font-size: 12px;
    }

    .login form a:hover {
      background: rgba(225, 132, 32, 0.805);
      color: #fff;
    }

    .login button:hover {
      background: rgba(225, 132, 32, 0.805);
    }

    .login button {
      width: 100%;
      padding: 10px 0;
      background: green;
      color: #fff;
      border: none;
      cursor: pointer;
      margin-top: 15px;
    }

    h4 {
      text-align: center;
    }

    .login1 h5 {
      color: black;
    }
  </style>
</head>

<body>

  <form method="POST">
    <div class="login-box">
      <div class="login">
        <h2>Login</h2>
        <div class="user-box">
          <input type="text" name="username" required="">
          <label>Username</label>
        </div>
        <div class="user-box">
          <input type="password" name="password" required="">
          <label>Password</label>
        </div>
        <button type="submit">Login</button>
        <h4>Don't Have an Account?<a href="reg.php">Click Here</a> </h4>

  </form>
  </div>

  <?php
  // Assuming you have a connection to your MySQL database
  $servername = "localhost";
  $username = "root";
  $password = "";
  $dbname = "salon_website";
  $port =  4306;

  $conn = new mysqli($servername, $username, $password, $dbname, $port);

  // Check connection
  if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
  }

  if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $usernameOrEmail = $_POST["username"];
    $password = $_POST["password"];

    $sql = "SELECT * FROM signinup WHERE username = '$usernameOrEmail' AND password = '$password'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
      header("Location: index.php");
    } else {
      echo '<h4 style = "color: white; background-color: black; padding: 5px; margin-left: -10px">Invalid username/email or password. Please try again.</h4>';
    }
  }

  $conn->close();
  ?>
  </div>
</body>

</html>