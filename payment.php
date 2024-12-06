<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Payment Page</title>
    <style>
        body {
            display: flex;
            justify-content: center;
            background-image: url(download.jpeg);
            background-repeat: no-repeat;
            background-size: cover;
            overflow: hidden;
            height: 100vh;
        }

        .body1 {
            border: 2px solid black;
            padding: 20px;
            padding-right: 50px;
            border-radius: 10px;
            background-color: rgb(159, 184, 206);  
            height: 87vh;
            margin-top: 20px;
        }

        h1 {
            text-align: center;
        }

        h3 {
            text-align: center;
        }

        .body1 form input {
            width: 100%;
            font-size: 15px;
            padding: 10px;
        }

        .email {
            width: 100%;
            display: flex;
            justify-content: space-between;
        }
        #pno{
            width: 100%;
        }

        .dropdown select {
            width: 105%;
            font-size: 20px;
            padding: 8px 0;
            cursor: pointer;
        }

        .time {
            display: flex;
            margin-top: 10px;
            font-size: 20px;
            /* border: 2px solid red; */
        }

        .number {
            margin-left: 30px;
        }

        .date {
            width: 100%;
        }

        #Date {
            text-transform: uppercase;
        }

        .price {
            display: flex;
            margin-top: 10px;
            font-size: 20px;
            width: 105%;
        }

        #Price {
            width: 20%;
            margin-left: 10px;
        }
        .in {
            display: flex;
            font-size: 20px;
        }
        .in input[type=checkbox] {
            max-width: 15px;
            border: 2PX solid red;
        }
        input[type="submit"] {
            background-color: #4caf50;
            color: #fff;
            padding: 10px 15px;
            border: none;
            border-radius: 8px;
            cursor: pointer;
            margin-left: 2%;
        }

    </style>
</head>

<body>
    <div class="body1">
        <form action="">
            <h1>Payment Booking Form</h1>
            <h3>Please fill out the following details to Complete Your Booking</h3>

            <label for="Full Name">
                <input type="text" name="" id="name" placeholder="FULL NAME" required>
            </label><br><br>
            <div class="email">
                <label for="Email Address">
                    <input type="text" name="" id="" placeholder="Email Address" required>
                </label>
                <label for="Phone Number">
                    <input type="text" name="" id="pno" placeholder="Phone Number" required>
                </label>
            </div>
            <h2>Booking Details</h2>
            <div class="dropdown">
                <select id="itemSelect" name="items">
                    <option value="" disabled selected>Select Below Services</option>
                    <option value="item1">Hair Cutting</option>
                    <option value="item2">Beauty and Spa</option>
                    <option value="item3">Face Washing</option>
                    <option value="item4">Meditation</option>
                    <option value="item5">Shaving</option>
                </select>
            </div>
            <div class="time">
                <div class="date"><input type="date" id="Date"></div>
                <div class="number"><input type="text" placeholder="Time" 8:00></div>
            </div>
            <div class="price">
                <input type="text" placeholder="No. of Customers" id="Customer">
                <input type="text" placeholder="Price" id="Price">
            </div>
            <br>
            <div class="dropdown">
                <select id="itemSelect" name="items">
                    <option value="" disabled selected>Select Payment Method</option>
                    <option value="item1">PAYTM</option>
                    <option value="item2">GOOGLE PAY</option>
                    <option value="item3">PHONE PAY</option>
                    <option value="item4">UPI PAY</option>
                    <option value="item5">CASH AT SHOP</option>
                </select>
            </div>

            <div class="in">
                <input type="checkbox" required>
                <h4>&nbsp;I agree to terms and conditions</h4>
            </div>

            <input type="submit" value="PAY NOW">
        </form>

    </div>
    <script src="app.js"></script>
</body>

</html>