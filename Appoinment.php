<!-- 
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body {
            overflow: hidden;
        }

        .appointment {
            display: flex;
            height: 45rem;
            background-repeat: no-repeat;
            width: 80%;
            margin-left: 28%;
            margin-bottom: 50px;

        }

        .book {
            width: 60%;
            background-color: #d5a153;
        }

        .book h1 {
            text-align: center;
            margin-top: 50px;

        }

        .book p {
            text-align: center;
            margin-top: 10px;
            line-height: 30px;
        }

        .email {
            margin-left: 30px;
        }

        .email input {
            font-size: 20px;
            padding: 13px;
            margin-right: 10px;
            width: 42%;

        }

        option {
            display: none;
        }

        .date input {
            width: 87%;
            height: 3rem;
            margin-left: 30px;
            font-size: 20px;
            text-transform: uppercase;
            padding-left: 20px;
        }

        textarea {
            margin-left: 30px;
            font-size: 20px;
            width: 87%;
            height: 15vh;
            padding: 10px;
        }

        .book a button {
            text-decoration: none;
            width: 90%;
            height: 3rem;
            margin-left: 30px;
            font-size: 18px;
            cursor: pointer;
            transition: 0.3s ease-in-out;
        }

        .book button:hover {
            background-color: black;
            color: white;

        }

        .dropdown {
            position: relative;
            display: inline-block;
            width: 46%;

        }

        .dropdown-select {
            padding: 10px;
            border: 1px solid #ccc;
            cursor: pointer;
            background-color: white;
            height: 1rem;
            padding-top: 15px;
            padding-bottom: 20px;
            font-size: 20px;
        }

        .dropdown-options {
            display: none;
            position: absolute;
            background-color: #fff;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            border: 1px solid #ccc;
            width: 100%;
        }

        .dropdown-option {
            padding: 10px;
            cursor: pointer;
            width: 100%;
        }
    </style>
</head>

<body>


    <div class="appointment" id="appointment-section">
        <div class="book">
            <h1 style="color: white;">BOOK MY APPOINTMENT</h1>
            <p style="color: white;">Lorem ipsum dolor sit amet consectetur adipisicing elit. Aliquid <br>modi commodi
                sunt voluptas? Magnam, numquam.</p>
            <div class="email" >
                <input type="text" placeholder="Your Full Name" >
                <input type="text" placeholder="Email Address" >
                <br><br>
            </div>
            <div class="email">
                <input type="text" placeholder="Phone Number" >
                <div class="dropdown">
                    <div class="dropdown-select" onclick="toggleOptions()">Select Category</div>
                    <div class="dropdown-options" id="options">
                        <div class="dropdown-option" onclick="selectOption('Beauty and Spa')">Beauty and Spa</div>
                        <div class="dropdown-option" onclick="selectOption('Body Treatment')">Body Treatment</div>
                        <div class="dropdown-option" onclick="selectOption('Face Washing')">Face Washing</div>
                        <div class="dropdown-option" onclick="selectOption('Meditation')">Meditation</div>
                        <div class="dropdown-option" onclick="selectOption('Shaving')">Shaving</div>
                    </div>
                </div>
            </div><br><br>
            <div class="date">
                <input type="Date">
            </div><br><br>
            <textarea name="" id="" placeholder="Write Message" ></textarea>
            <br><br><br><br>
            <a href="payment.html"><button href="payment.html">Appointment Now <ion-icon
                        name="arrow-forward-outline"></ion-icon></button></a>
        </div>
    </div>
    </div>
    <script>
        function toggleOptions() {
            var options = document.getElementById("options");
            options.style.display = options.style.display === "none" ? "block" : "none";
        }

        function selectOption(option) {
            var select = document.querySelector(".dropdown-select");
            select.innerHTML = option;
            toggleOptions();
        }
    </script>
</body>

</html>