<?php
require "includes/config.php";
?>
<!DOCTYPE html>
<html lang="en">

<body>

    <head>
        <style>
            /* Reset margin and padding */
            * {
                margin: 0;
                padding: 0;
                box-sizing: border-box;
            }

            body {
                font-family: 'Arial', sans-serif;
                background: #FCEAC0;
                color: #000;
            }

            header {
                background-color: #FCEAC0;
                /* Warna cokelat tua */
                color: #100000;
                /* Teks putih */
                padding: 1rem 0;
                text-align: center;
            }

            header nav a {
                margin: 0 15px;
                text-decoration: none;
                text-align: center;
                color: #000;
                font-weight: bold;
            }

            .hero {
                display: flex;
                flex-wrap: wrap;
                align-items: center;
                justify-content: center;
                padding: 50px 20px;
            }

            .hero-text {
                flex: 1;
                max-width: 500px;
                text-align: left;
                padding: 20px;
            }

            .hero-text h1 {
                font-size: 2rem;
                margin-bottom: 20px;
            }

            .hero-text p {
                margin-bottom: 20px;
                font-size: 1rem;
                line-height: 1.6;
            }

            .hero-text a {
                display: inline-block;
                padding: 10px 20px;
                font-size: 1rem;
                color: #FFF;
                background: #8B4513;
                border-radius: 5px;
                text-decoration: none;
            }

            .hero-text a:hover {
                background: #A0522D;
            }

            .hero-image {
                flex: 1;
                max-width: 500px;
                text-align: center;
                padding: 20px;
            }

            .hero-image img {
                width: 100%;
                border-radius: 10px;
            }

            footer {
                text-align: center;
                padding: 20px;
                background: #8B4513;
                margin-top: 20px;
            }

            footer p {
                font-size: 0.9rem;
            }
        </style>
    </head>
    <section class="hero">
        <div class="hero-text">
            <h1>KAMI MENYAJIKAN MAKANAN TRADISIONAL</h1>
            <p>
                "Jelajahi dunia rasa di Berbagai Kuliner. Dari hidangan tradisional hingga kreasi modern, kami hadirkan beragam pilihan kuliner untuk memanjakan selera Anda. Temukan restoran terbaik, resep andalan, dan ulasan kuliner yang informatif."
            </p>
            <p>Instagram.com/jelpa.en</p>
        </div>
        <div class="hero-image">
            <img src="images/foto2.jpeg" alt="Kuliner Tradisional">
        </div>
    </section>
</body>

</html>