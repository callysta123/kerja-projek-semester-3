<?php
include("config.php");

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Burger</title>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <!--<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script> -->
    <link rel="stylesheet" href="style.css">
    <style>
        .active {
            background-color: slateblue;
            border-radius: 4px;
            }
            .nav-item {
                margin-right: 20px;
            }
    </style>
</head>
<body>
    
    
<header>

    <input type="checkbox" name="" id="toggler">
    <label for="toggler" class="fas fa-bars"></label>

<a class="logo">The Burgers<span>.</span></a>

<nav class="navbar">
    <a href="#home" class="list">home</a>
    <a href="#about" class="list">about</a>
    <a href="#products" class="list">products</a>
    <a href="#contact" class="list">feedback</a>
</nav>

<div class="icons">
    <a href="login.php" class="fas fa-user"></a>

</div>
</header>

<section class="home" id="home">

    <div class="content">
        <h3>Fresh Burger</h3>
        <span>Delicious & Fresh Burger</span>
        <p align="justify">Sejak dua tahun lalu tercetus ide kami membuk usaha makanan yang bisa menopang hidup anak cucu cicit di kemudian hari. Terciptalah The Burgers dengan racikan citarasa yang berbeda, menggunakan bahan baku 100% daging sapi Australia berkualitas tinggi dan rendah lemak, juga roti dan saos yang kami buat sendiri. Dalam waktu 5 bulan The Burgers telah membuka 4 outlet di seluruh Indonesia dan lebih dari 1,2 juta pcs burger terjual setiap bulannya. Hingga saat ini sudah tercipta 4 outlet dan akan terus bertambah, berkembang, dan bertumbuh kedepannya.</p>
        <a href="#products" class="btn"> shop now</a>
    </div>
</section>

<section class="about" id="about">

    <h1 class="heading"><span> about </span> us </h1>
    <div class="row">
        <div class="video-container">
            <video src="foto/video1.mp4" loop autoplay muted class="posisi1"></video>
            <h3>Burger paling enak loh!!</h3>
        </div>
        <div calss="content">
            <h3>Mengapa harus memilih kita ?</h3>
        <br>
            <p align="justify">Karena Burger kami di masak menggunakan bahan pilihan berkualitas premium yang di impor langsung dari Australia. Dan di masak oleh chef profesional sehingga kualitasnya akan terus terjamin dan selalu fresh.</p>
        </br>
            <a href="#" class="btn">learn more</a>

        </div>
    </div>
</section>

<section class="icons-container">
    <div class="icons">
        <img src="foto/logo3.jpg" alt="">
        <div class="info">
            <h3>Free Delevery</h3>
            <span>on all orders</span>
        </div>
    </div>

    <div class="icons">
        <img src="foto/logo2.jpg" alt="">
        <div class="info">
            <h3>10 days return</h3>
            <span>moneyback guarantee</span>
        </div>
    </div>

    <div class="icons">
        <img src="foto/logo1.jpg" alt="">
        <div class="info">
            <h3>often & gifts</h3>
            <span>on all orders</span>
        </div>
    </div>

    <div class="icons">
        <img src="foto/logo4.jpg" alt="">
        <div class="info">
            <h3>secure paymens</h3>
            <span>on all orders</span>
        </div>
    </div>
</section>

<section class="products" id="products">
    <h1 class="heading">latest <span>products</span></h1>

    <div class="box-container">

        <div class="box">
            <span class="discount">-10%</span>
            <div class="image">
                <img src="foto/gambar2.jpg" alt="">
                <div class="icons">
                    <a href="" class="fa fa-heart"></a>
                    <a href="" class="cart-btn">add to cart</a>
                    <a href="" class="fas fa-share"></a>
                </div>
            </div>
            <div class="content">
                <h3>Burger</h3>
                <div class="price">Rp. 54.000 <span>Rp. 60.000</span></div>
            </div>
            </div>


        <div class="box">
            <span class="discount">-15%</span>
            <div class="image">
                <img src="foto/gambar3.jpg" alt="">
                <div class="icons">
                    <a href="" class="fa fa-heart"></a>
                    <a href="" class="cart-btn">add to cart</a>
                    <a href="" class="fas fa-share"></a>
                </div>
            </div>
            <div class="content">
                <h3>Burger</h3>
                <div class="price">Rp. 42.500 <span>Rp. 50.000</span></div>
            </div>
        </div>>

        

        <div class="box">
            <span class="discount">-15%</span>
            <div class="image">
                <img src="foto/gambar4.jpg" alt="">
                <div class="icons">
                    <a href="" class="fa fa-heart"></a>
                    <a href="" class="cart-btn">add to cart</a>
                    <a href="" class="fas fa-share"></a>
                </div>
            </div>
            <div class="content">
                <h3>Burger</h3>
                <div class="price">Rp. 62.500 <span>Rp. 70.000</span></div>
            </div>
        </div>

        

        <div class="box">
            <span class="discount">-15%</span>
            <div class="image">
                <img src="foto/gambar5.jpg" alt="">
                <div class="icons">
                    <a href="" class="fa fa-heart"></a>
                    <a href="" class="cart-btn">add to cart</a>
                    <a href="" class="fas fa-share"></a>
                </div>
            </div>
            <div class="content">
                <h3>Burger</h3>
                <div class="price">Rp. 46.750<span>Rp. 55.000</span></div>
            </div>
        </div>

        

        <div class="box">
            <span class="discount">-15%</span>
            <div class="image">
                <img src="foto/gambar6.jpg" alt="">
                <div class="icons">
                    <a href="" class="fa fa-heart"></a>
                    <a href="" class="cart-btn">add to cart</a>
                    <a href="" class="fas fa-share"></a>
                </div>
            </div>
            <div class="content">
                <h3>Burger</h3>
                <div class="price">Rp. 55.250<span>Rp. 65.000</span></div>
            </div>
        </div>

        

        <div class="box">
            <span class="discount">-15%</span>
            <div class="image">
                <img src="foto/gambar7.jpg" alt="">
                <div class="icons">
                    <a href="" class="fa fa-heart"></a>
                    <a href="" class="cart-btn">add to cart</a>
                    <a href="" class="fas fa-share"></a>
                </div>
            </div>
            <div class="content">
                <h3>Burger</h3>
                <div class="price">Rp. 63.750 <span>Rp. 75.000</span></div>
            </div>
        </div>

        
        <div class="box">
            <span class="discount">-15%</span>
            <div class="image">
                <img src="foto/gambar8.jpg" alt="">
                <div class="icons">
                    <a href="" class="fa fa-heart"></a>
                    <a href="" class="cart-btn">add to cart</a>
                    <a href="" class="fas fa-share"></a>
                </div>
            </div>
            <div class="content">
                <h3>Burger</h3>
                <div class="price">Rp. 127.500<span>Rp. 150.000</span></div>
            </div>
        </div>

        
        <div class="box">
            <span class="discount">-15%</span>
            <div class="image">
                <img src="foto/gambar9.jpg" alt="">
                <div class="icons">
                    <a href="" class="fa fa-heart"></a>
                    <a href="" class="cart-btn">add to cart</a>
                    <a href="" class="fas fa-share"></a>
                </div>
            </div>
            <div class="content">
                <h3>Burger</h3>
                <div class="price">Rp. 68.000<span>Rp. 80.000</span></div>
            </div>
        </div>


        
</section>


<section class="contact" id="contact">

    <h1 class="heading"> <span></span>feedback</h1>

    <div class="row">

        <form action="contact.php" method="POST">
            <input type="text" placeholder="name" name="name" class="box">
            <input type="text" placeholder="email" name="email" class="box">
            <textarea name="message" class="box" placeholder="message" id="" cols="30" rows="10"></textarea>
            <input type="submit" value="send message" name="submit" class="btn">
        </form>
        
        </div>
    </div>
</section>

<section class="footer">

    <div class="box-container">

        <div class="box">
            <h3>quick links</h3>
            <a href="#">home</a>
            <a href="#">about</a>
            <a href="#">product</a>
            <a href="#">review</a>
            <a href="#">contact</a>
        </div>

        <div class="box">
            <h3>extrac links</h3>
            <a href="#">my account</a>
            <a href="#">my order</a>
            <a href="#">my favorite</a>
            <a href="#">review</a>
            <a href="#">contact</a>
        </div>

        <div class="box">
            <h3>locations</h3>
            <a href="#">Bandung</a>
            <a href="#">Bekasi</a>
            <a href="#">Jakarta</a>
            <a href="#">Blitar</a>
        </div>
        <div class="box">
            <h3>contac info</h3>
            <a href="#">+6281219386654</a>
            <a href="#">Theburgers@gmail.com</a>
            
        </div>
    </div>

</section>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js" integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script>
//     $(".list").on("click", function(){
//    $(".list").find(".active").removeClass(".active");
//    $(this).addClass("active");
// });

    let list = document.querySelectorAll('.list');

    list.forEach((e, i) =>{
        e.addEventListener("click", () =>{
            list.forEach((e) =>{
                e.classList.remove("active");
            })
            e.classList.add("active")
        })
    })
</script>
</body>
</html>