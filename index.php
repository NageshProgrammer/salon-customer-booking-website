<?php 

$servername = "localhost";
$username = "root";
$password = "";
$database = "salon_website";
$port = 4306 ;

$conn = new mysqli($servername , $username , $password , $database , $port);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone_number = $_POST['phone_number'];
    $service = $_POST['services'];
    $date = $_POST['date'];
    $message = $_POST['messagae'];

    $sql = "INSERT INTO appointment (name, username, password) VALUES ('$name', '$username', '$password')";
    if (mysqli_query($conn, $sql)) {
        header('location: index.php');;
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
}

error_reporting(E_ALL);
ini_set('display_errors', 1);

?>  
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hair Salon Website</title>
    <link rel="stylesheet" href="style.css">
    <style>
        .user img {
            width: 40px;
            height: 40px;
            margin-top: 35px;
            border-radius: 50%;
            border: 2px solid white;
            cursor: pointer;
        }
    </style>

    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
</head>

<body>
    
    <div class="head">
        <div class="logo"><button><span>Barber</span> <br>Hair Salon </button></div>
        <div class="navbar">
            <nav>
                <a href="index.php">HOME</a>
                <a href="service.php">SERVICES</a>
                <a href="store.php">STORE</a>
                <a href="gallery.php">GALLERY</a>
                <a href="Feedback.php">FEEDBACK</a>
                <a href="contact.php">CONTACT US</a>
            </nav>
        </div>
        <div class="appoint" id="appointment-section">
            <button id="appointment-button" style="padding-left: 20px;">APPOINTMENT <ion-icon name="arrow-forward-outline"></ion-icon> </button>
        </div>
        <div class="user" style="padding-left: 30px;">
            <a href="reg.php"><img src="user.png" alt=""></a>
        </div>
    </div>
    <div class="time">
        <h3> <ion-icon name="call-outline"></ion-icon> &nbsp;&nbsp;Call Us : 012 (345) 67 895 &nbsp;|| <ion-icon name="time-outline"></ion-icon>&nbsp;&nbsp;Opening Hour : Sunday - Friday, 08 am - 09 pm</h3>
    </div>
    <br><br>
    <div class="mid">
        <h1 style="color: white;"> <b>BARBERS &#38; <br> BEAUTY SPA</b></h1>
        <p style="color: white; font-size: 20px;margin-left: 40px ; margin-top: -20px;">Lorem, ipsum dolor sit amet
            consectetur adipisicing elit. Quo maiores <br>facere totam, eos vel aut.</p>
        <a href="service.html"><button>EXPLORE OUR SERVICES <ion-icon name="arrow-forward-outline"></ion-icon></button></a>
    </div>

    <section id="service">
        <div class="provide">
            <h1 style="font-size: 40px;">SERVICES WE PROVIDE </h1>
            <p style="font-size: 20px;">We offer a wide range of services to our clients including <br>haircuts for men and
                women, beard trimming, shaving

            <div class="self">
                <div class="self1" id="box12">
                    <img src="./assets/images/scissor.png" alt="">
                    <h2>Hair Cutting Style</h2>
                    <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Maiores itaque quae quos voluptatem quis
                        nam.</p>
                    <a href="service.html"><button><ion-icon name="arrow-forward-outline"></ion-icon></button></a>
                </div>
                <div class="self1" id="box12">
                    <img src="./assets/images/facial.png" alt="">
                    <h2>Hair Washing</h2>
                    <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Maiores itaque quae quos voluptatem quis
                        nam.</p>
                    <a href="service.html"><button><ion-icon name="arrow-forward-outline"></ion-icon></button></a>
                </div>
                <div class="self1" id="box12">
                    <img src="./assets/images/relax.png" alt="">
                    <h2>Beauty & Spa</h2>
                    <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Maiores itaque quae quos voluptatem quis
                        nam.</p>
                    <a href="service.html"><button><ion-icon name="arrow-forward-outline"></ion-icon></button></a>
                </div>
            </div><br><br>
            <div class="self">
                <div class="self1">
                    <img src="./assets/images/shaving-razor.png" alt="">
                    <h2>Stylist Shaving</h2>
                    <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Maiores itaque quae quos voluptatem quis
                        nam.</p>
                    <a href="service.html"><button><ion-icon name="arrow-forward-outline"></ion-icon></button></a>
                </div>
                <div class="self1">
                    <img src="./assets/images/massage.png" alt="">
                    <h2>Body Treatment</h2>
                    <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Maiores itaque quae quos voluptatem quis
                        nam.</p>
                    <a href="service.html"><button><ion-icon name="arrow-forward-outline"></ion-icon></button></a>
                </div>
                <div class="self1">
                    <img src="./assets/images/hair-dye.png" alt="">
                    <h2>Multi Hair Colors</h2>
                    <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Maiores itaque quae quos voluptatem quis
                        nam.</p>
                    <a href="service.html"><button><ion-icon name="arrow-forward-outline"></ion-icon></button></a>
                </div>
            </div>

        </div><br><br><br>
    </section>
    <div class="main">
        <h1 style="color: white; width: 100%;"><b>AWESOME PRICING PLAN</b></h1>
        <p style="color: #363331;">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Eos magni dolor pariatur consequatur cumque
            inventore id velit expedita.
        </p>

        <div class="service6"><br>
            <div class="service5">
                <div class="all-pricing" id="box">
                    <div class="img"><img src="./assets/images/scissor.png" alt=""></div>
                    <h3>All Pricing</h3>
                </div>
                <div class="beauty-spa" id="box">
                    <div class="img"><img src="./assets/images/relax.png" alt=""></div>
                    <h3>Beauty & Spa</h3>
                </div>
                <div class="body-treatment" id="box">
                    <div class="img"><img src="./assets/images/massage.png" alt=""></div>

                    <h3>Body Treatment</h3>
                </div>
                <div class="face-washing" id="box">
                    <div class="img"><img src="./assets/images/facial.png" alt=""></div>

                    <h3>Face Washing</h3>
                </div>
                <div class="meditation" id="box">
                    <div class="img"><img src="./assets/images/yoga.png" alt=""></div>

                    <h3>Meditation</h3>
                </div>
                <div class="Shaving" id="box">
                    <div class="img"><img src="./assets/images/shaving-razor.png" alt=""></div>

                    <h3>Shaving</h3>
                </div>
            </div>
        </div>

        <div class="pricing">
            <div class="row1">
                <div class="col1" id="price">
                    <img src="./assets/images/pricing-1.jpg" width="100px" height="100px">
                    <div class="title">
                        <h3>Hair Cutting & Fitting</h3>
                        <h4>Clean and Simple 30-40 minutes</h4>
                    </div>
                    <div class="rate">
                        <h1> $ 54</h1>
                    </div>

                </div>
                <div class="col2" id="price">
                    <img src="./assets/images/pricing-2.jpg" width="100px" height="100px">
                    <div class="title">
                        <h3>Shaving and Facial</h3>
                        <h4>Clean and Simple 30-40 minutes</h4>
                    </div>
                    <div class="rate">
                        <h1> $ 75</h1>

                    </div>
                </div>
            </div>
            <div class="row2">
                <div class="col1" id="price">
                    <img src="./assets/images/pricing-3.jpg" width="100px" height="100px">
                    <div class="title">
                        <h3>Hair Color and Wash</h3>
                        <h4>Clean and Simple 30-40 minutes</h4>
                    </div>
                    <div class="rate">
                        <h1> $ 50</h1>
                    </div>
                </div>

                <div class="col2" id="price">
                    <img src="./assets/images/pricing-4.jpg" width="100px" height="100px">
                    <div class="title">
                        <h3>Body Massage</h3>
                        <h4>Clean and Simple 30-40 minutes</h4>
                    </div>
                    <div class="rate">
                        <h1> $ 60</h1>
                    </div>
                </div>
            </div>

            <div class="row3">
                <div class="col1" id="price">
                    <img src="./assets/images/pricing-5.jpg" width="100px" height="100px">
                    <div class="title">
                        <h3>Beauty and Spa</h3>
                        <h4>Clean and Simple 30-40 minutes</h4>
                    </div>
                    <div class="rate">
                        <h1> $ 50</h1>
                    </div>
                </div>
                <div class="col2" id="price">
                    <img src="./assets/images/pricing-6.jpg" width="100px" height="100px">
                    <div class="title">
                        <h3>Facial and Face Wash</h3>
                        <h4>Clean and Simple 30-40 minutes</h4>
                    </div>
                    <div class="rate">
                        <h1> $ 40</h1>
                    </div>
                </div>
            </div>
            <div class="row4">
                <div class="col1" id="price">
                    <img src="./assets/images/pricing-7.jpg" width="100px" height="100px">
                    <div class="title">
                        <h3>Backbone Massage</h3>
                        <h4>Clean and Simple 30-40 minutes</h4>
                    </div>
                    <div class="rate">
                        <h1> $ 30</h1>
                    </div>
                </div>
                <div class="col2" id="price">
                    <img src="./assets/images/pricing-8.jpg" width="100px" height="100px">
                    <div class="title">
                        <h3>Meditation and Massage</h3>
                        <h4>Clean and Simple 30-40 minutes</h4>
                    </div>
                    <div class="rate">
                        <h1> $ 40</h1>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="gallery">
        <div class="text">
            <h1>LATEST PHOTO GALLERY</h1>
            <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit.<br> Dignissimosomnis inventore , illum
                consectetur!</p>
        </div>
        <div class="explore"><button>EXPLORE MORE GALLERY <ion-icon name="arrow-forward-outline"></ion-icon></button>
        </div>
    </div>
    <div class="photos">
        <img src="./assets/images/gallery-1.jpg" alt="">
        <img src="./assets/images/gallery-2.jpg" alt="">
        <img src="./assets/images/ladies1.jpg" alt="">
        <img src="./assets/images/ladies2.jpg" alt="">
    </div>
    <br><br><br><br><br>
    <section id="appointment-section">
        <div class="appointment" id="appointment-section">
            <img src="./assets/images/appoin-banner-1.jpg" alt="">
            <div class="book">
                <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="POST ">
                    <h1 style="color: white;">BOOK MY APPOINTMENT</h1>
                    <p style="color: white;">Lorem ipsum dolor sit amet consectetur adipisicing elit. Aliquid <br>modi commodi
                        sunt voluptas? Magnam, numquam.</p>
                    <div class="email">
                        <input type="text" placeholder="Your Full Name" id="name" name="name">
                        <input type="text" placeholder="Email Address" id="email" name="email">
                    </div><br><br>
                    <div class="email">
                        <input type="text" placeholder="Phone Number" id="phone_number" name="phone_number">

                        <select name="services" id="category">
                            <option value="select">Select Services</option>
                            <option value="Hair_Cutting">Hair Cutting</option>
                            <option value="Beauty and Spa ">Beauty and Spa</option>
                            <option value="Body Treatment">Body Treatment</option>
                            <option value="Face Washing">Face Washing</option>
                            <option value="Meditation">Meditation</option>
                            <option value="Shaving">Shaving</option>
                        </select>
                    </div><br><br>
                    <div class="date" id="appointment_date">
                        <input type="Date" name="date" id="date">
                    </div><br><br>
                    <textarea id="message" placeholder="Write Message" id="message" name="message"></textarea>
                    <br><br><br><br>
                   <button type="submit" id="appoint" style="width: 80%; margin-left: 4%; font-size: 20px; padding: 10px;cursor:pointer;"> Appointment Now</button>
                </form>
            </div>
            <img src="./assets/images/appoin-banner-2.jpg" alt="">
        </div>

    </section>

    <div class="footer"><br>
        <div class="subscribe">
            <div class="box1">
                <a href=""><button><span>BARBAR </span><br> Hair Salon</button></a>
            </div>
            <div class="box2">
                <input type="text" required placeholder="Please Enter Your Email Address"><a href="index.php"><button>SUBSCRIBE NOW <ion-icon name="arrow-forward-outline"></ion-icon></button></a>
            </div>
        </div>
        <div class="copy">
            <h3>© 2024 <span>Nagesh & Vaishnavi</span>. All Right Reserved</h3>
        </div>

    </div>
    <script src="app.js"></script>
</body>

</html>