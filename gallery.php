<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gallery </title>
    <?php include('partial/header.php') ?>
    <style>
        .one{
            display: flex;
            margin-left: 50px;
        }
        img{
            width: 600px;
            height: 400px;
            margin: 40px;
            border: 4px solid black;
            border-radius: 10px;
        }
        .one1 img{
            width: 80%;
            height: 40rem;
            margin-left: 140px;
        }
    </style>
</head>
<body>
    
<br><br><br><br><br>
    <div class="one">
        <img src="gallery/gallery1.jpeg" alt="">
        <img src="gallery/gallery2.jpeg" alt="">
    </div>
    <div class="one">
        <img src="gallery/gallery5.jpeg" alt="">
        <img src="gallery/gallery6.jpeg" alt="">
    </div>
    <div class="one1">
        <img src="gallery/gallery7.jpeg" alt="">
        
    </div>
    <div class="one">
        <img src="gallery/gallery3.jpeg" alt="">
        <img src="gallery/gallery4.jpeg" alt="">
    </div>
    <div class="one">
        <img src="gallery/gallery8.jpeg" alt="">
        <img src="gallery/gallery9.jpeg" alt="">
    </div>
    <div class="one">
        <img src="gallery/gallery10.jpeg" alt="">
        <img src="gallery/gallery11.jpeg" alt="">
    </div>
</body>
</html>