<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <?php include('partial/header.php') ?>
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
    <style>
        .product-box {
            width: 250px;
            border: 1px solid #ddd;
            box-shadow: 2px 2px 5px rgba(0, 0, 0, 0.1);
            margin: 10px;
            text-align: center;
        }

        .div-box img {
            width: 300px;
            height: 300px;

        }

        .div-box {
            margin: 18px;
            padding: 20px;
            border: 1px solid black;
            border-radius: 10px;
            box-shadow: 5px 5px 7px 5px rgba(0, 0, 0, 0.3);

        }

        .product-image {
            width: 100%;
            height: auto;
        }

        .product-name {
            margin: 10px 0;
        }

        .product-price {
            font-weight: bold;
            margin-bottom: 10px;
        }

        .add-to-cart-button {
            background-color: #4CAF50;
            color: white;
            border: none;
            padding: 10px 20px;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            font-size: 14px;
            margin: 4px 2px;
            cursor: pointer;
        }

        .flex {
            display: flex;
            margin-left: -10px;
            margin-top: -10px;
        }
        .up{
            display: flex;
            font-size: 20px;
        }
        .username1{
            padding: 20px;
            margin-left: 65%;
            width: 15%;
            border: 2px solid black;
            height: 1.5rem;
            border-radius: 10px;
            
        }
        .cart{
            font-size: 35px;
            padding : 25px;
            border: 2px solid black;
            cursor: pointer;
            height: 1rem;
            margin-left: 30px;
            border-radius: 50%;
            justify-content: center;
            align-items: center;
            display: flex;
            background-color: black;
            color: white;
            
        }
    </style>
</head>

<body><br><br><br><br><br><br>
    <div class="up">
        <h2 style="margin-left: 20px;">STORE </h2>

        <div class="username1"><ion-icon name="person-outline"></ion-icon> &nbsp;Username</div>


        <div class="cart"><ion-icon name="cart-outline"></ion-icon></div>
    </div>


    <div class="flex">
        <div class="div-box">
            <img src="store/one.jpg" alt="Product Image" class="product-image">
            <h2 class="product-name">Hair Wash Kit</h2>
            <p class="product-price">$30</p>
            <button class="add-to-cart-button">Add to Cart</button>
        </div>
        <div class="div-box">
            <img src="store/eight.jpg" alt="Product Image" class="product-image">
            <h2 class="product-name">Massage Oil</h2>
            <p class="product-price">$40</p>
            <button class="add-to-cart-button">Add to Cart</button>
        </div>
        <div class="div-box">
            <img src="store/two.jpg" alt="Product Image" class="product-image">
            <h2 class="product-name">Hair Kit</h2>
            <p class="product-price">$20</p>
            <button class="add-to-cart-button">Add to Cart</button>
        </div>


        <div class="div-box">
            <img src="store/three.jpg" alt="Product Image" class="product-image">
            <h2 class="product-name">Hair Cutting Kit</h2>
            <p class="product-price">$60</p>
            <button class="add-to-cart-button">Add to Cart</button>
        </div>
    </div>
    <div class="flex">
        <div class="div-box">
            <img src="store/four.jpg" alt="Product Image" class="product-image">
            <h2 class="product-name">Salon Chair</h2>
            <p class="product-price">$150</p>
            <button class="add-to-cart-button">Add to Cart</button>
        </div>
        <div class="div-box">
            <img src="store/five.jpg" alt="Product Image" class="product-image">
            <h2 class="product-name">Salon Kit</h2>
            <p class="product-price">$99.99</p>
            <button class="add-to-cart-button">Add to Cart</button>
        </div>


        <div class="div-box">
            <img src="store/six.jpg" alt="Product Image" class="product-image">
            <h2 class="product-name">Party kit</h2>
            <p class="product-price">$50</p>
            <button class="add-to-cart-button">Add to Cart</button>
        </div>
        <div class="div-box">
            <img src="store/seven.jpg" alt="Product Image" class="product-image">
            <h2 class="product-name">Shampoo and Hair Washer</h2>
            <p class="product-price">$20</p>
            <button class="add-to-cart-button">Add to Cart</button>
        </div>
    </div>



    <script>
        const addToCartButtons = document.querySelectorAll('.add-to-cart-button');

        addToCartButtons.forEach((button) => {
            button.addEventListener('click', () => {
                const productBox = button.closest('.div-box');
                const productName = productBox.querySelector('.product-name').innerText;
                const productPrice = productBox.querySelector('.product-price').innerText;

                addToCart(productName, productPrice);
            });
        });

        function addToCart(productName, productPrice) {
            const cartItems = JSON.parse(localStorage.getItem('cartItems')) || [];

            cartItems.push({
                productName,
                productPrice
            });

            localStorage.setItem('cartItems', JSON.stringify(cartItems));

            alert(`${productName} has been added to your cart!`);
        }
    </script>
</body>

</html>