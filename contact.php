<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us - Salon Booking</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <?php include('partial/header.php') ?>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
        }

        header {
            background-color: #333;
            color: #fff;
            padding: 10px;
            text-align: center;
        }

        form {
            max-width: 600px;
            margin: 20px auto;
            padding: 20px;
            background-color: #fff;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        label {
            display: block;
            margin-bottom: 8px;
        }

        input,
        textarea {
            width: 100%;
            padding: 8px;
            margin-bottom: 15px;
            box-sizing: border-box;
            border: 1px solid #ccc;
            border-radius: 4px;
        }

        button {
            background-color: #333;
            color: #fff;
            padding: 10px 20px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }

        button:hover {
            background-color: #555;
        }

        .icons {
            display: flex;
        }
    </style>
</head>

<body><br><br><br><br><br>
    <header>
        <h1>Contact Us - Salon Booking</h1>
    </header>

    <form id="bookingForm">
        <label for="name">Your Name:</label>
        <input type="text" id="name" name="name" required>

        <label for="email">Your Email:</label>
        <input type="email" id="email" name="email" required>

        <label for="phone">Your Phone Number:</label>
        <input type="tel" id="phone" name="phone" required>

        <label for="date">Preferred Date:</label>
        <input type="date" id="date" name="date" required>

        <label for="message">Query Message:</label>
        <textarea id="message" name="message" rows="4"></textarea>

        <button type="submit">Submit</button>
    </form>
    <div class="icons">
        <i class="fa-brands fa-facebook fa-3x"></i>
        <i class="fa-brands fa-instagram"></i>
        <i class="fa-brands fa-telegram"></i>
        <i class="fa-brands fa-linkedin"></i>
        <i class="fa-brands fa-facebook"></i>
    </div>

    <script>
        document.getElementById("bookingForm").addEventListener("submit", function(event) {
            event.preventDefault();
            // You can add JavaScript code here to handle form submission, e.g., send data to a server.
            alert("Booking submitted successfully!");
        });
    </script>

</body>

</html>