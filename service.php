<!DOCTYPE html>
<html lang="en">

<head>
    <?php include('partial/header.php') ?>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Salon Booking Services</title>
    <style>
        body {
            font-family: 'Arial', sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
        }

        header {
            background-color: #333;
            color: #fff;
            text-align: center;
            padding: 1em 0;
            margin-left: px;
        }

        section {
            padding: 20px;
            margin: 20px;
            background-color: #fff;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        .service {
            display: flex;
            justify-content: space-between;
            margin-bottom: 20px;
            
        }

        .service img {
            max-width: 100px;
            max-height: 100px;
            object-fit: cover;
            margin-right: 20px;
        }

        .service-details {
            flex-grow: 1;
        }

        button {
            padding: 10px 20px;
            background-color: #333;
            color: #fff;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }
        .flex{
            display: flex;
            margin: 20px;
            margin-left: -10px;
        }
        
    </style>
</head>

<body><br><br><br><br><br><br>
    <!-- <iframe src="header.html" frameborder="0" width="100%" height="100px"></iframe> -->
    <header>
        <h1>Salon Booking Services</h1>
    </header>

    <section>
        <div class="flex">
        <div class="service">
            <img src="assets/images/pricing-1.jpg" alt="Haircut">
            <div class="service-details">
                <h2>Haircut</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed et mauris vel nisi volutpat
                    fermentum.</p>
                <button onclick="bookService('Haircut')">Book Now</button>
            </div>
        </div>

        <div class="service">
            <img src="assets/images/pricing-2.jpg" alt="Manicure">
            <div class="service-details">
                <h2>Shaving and Facial</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed et mauris vel nisi volutpat
                    fermentum.</p>
                <button onclick="bookService('Shaving and Facial')">Book Now</button>
            </div>
        </div>
    </div>
    <div class="flex">
        <div class="service">
            <img src="assets/images/pricing-3.jpg" alt="Haircut">
            <div class="service-details">
                <h2>Hair Color and Wash</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed et mauris vel nisi volutpat
                    fermentum.</p>
                <button onclick="bookService('Hair Color and Wash')">Book Now</button>
            </div>
        </div>
        <div class="service">
            <img src="assets/images/pricing-4.jpg" alt="Haircut">
            <div class="service-details">
                <h2>Body Massage</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed et mauris vel nisi volutpat
                    fermentum.</p>
                <button onclick="bookService('Body Massage')">Book Now</button>
            </div>
        </div>
    </div>
    <div class="flex">
        <div class="service">
            <img src="assets/images/pricing-5.jpg" alt="Haircut">
            <div class="service-details">
                <h2>Beauty and Spa</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed et mauris vel nisi volutpat
                    fermentum.</p>
                <button onclick="bookService('Beauty and Spa')">Book Now</button>
            </div>
        </div>
        <div class="service">
            <img src="assets/images/pricing-6.jpg" alt="Haircut">
            <div class="service-details">
                <h2>Facial and Face Wash</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed et mauris vel nisi volutpat
                    fermentum.</p>
                <button onclick="bookService('Facial and Face Wash')">Book Now</button>
            </div>
        </div>
    </div>
    <div class="flex">
        <div class="service">
            <img src="assets/images/pricing-7.jpg" alt="Haircut">
            <div class="service-details">
                <h2>Backbone Massage</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed et mauris vel nisi volutpat
                    fermentum.</p>
                <button onclick="bookService('Backbone Massage')">Book Now</button>
            </div>
        </div>
        <div class="service">
            <img src="assets/images/pricing-8.jpg" alt="Haircut">
            <div class="service-details">
                <h2>Meditatation and Massage</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed et mauris vel nisi volutpat
                    fermentum.</p>
                <button onclick="bookService('Meditatation and Massage')">Book Now</button>
            </div>
        </div>
    </div>
        <!-- Add more services as needed -->

    </section>

    <script>
        function bookService(serviceName) {
            alert('Booking confirmed for ' + serviceName);
            // Implement actual booking logic here
        }
    </script>
</body>

</html>
