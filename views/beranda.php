<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kuliner Tradisional</title>
    <style>
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
            text-align: center;
            padding: 20px;
            background: #FDE7CA;
        }

        .hero {
            text-align: center;
            padding: 40px 20px;
        }

        .hero h1 {
            font-size: 2.5rem;
            margin-bottom: 20px;
        }

        .hero p {
            font-size: 1rem;
            line-height: 1.6;
            margin-bottom: 20px;
        }

        .hero a {
            display: inline-block;
            padding: 10px 20px;
            font-size: 1rem;
            color: #FFF;
            background: #8B4513;
            border-radius: 5px;
            text-decoration: none;
        }

        .hero a:hover {
            background: #A0522D;
        }

        .card-container {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(150px, 1fr));
            gap: 20px;
            padding: 40px;
        }

        .card {
            background: #FFF;
            border-radius: 10px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
            text-align: center;
            padding: 20px;
            transition: transform 0.3s, box-shadow 0.3s;
        }

        .card:hover {
            transform: translateY(-10px);
            box-shadow: 0 6px 15px rgba(0, 0, 0, 0.2);
        }

        .card img {
            width: 60px;
            height: 60px;
            margin-bottom: 10px;
        }

        .card h3 {
            font-size: 1rem;
            margin-bottom: 10px;
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

<body>
    <section class="hero">
        <h1></h1>
        <p>
        Cita rasa Nusantara yang otentik hadir di Berbagai Kuliner. Kami menyajikan hidangan-hidangan Indonesia yang kaya akan rempah dan tradisi, dimasak dengan resep turun temurun dan sentuhan modern. Nikmati kehangatan dan kelezatan masakan rumahan yang akan membawa Anda bernostalgia ke kampung halaman. Dari rendang yang kaya rasa hingga soto ayam yang segar, setiap hidangan kami dibuat dengan cinta dan dedikasi.
        </p>
        <a href="#">Pesan Sekarang</a>
    </section>

    <section class="card-container">
        <?php
        $kuliner = [
            "Nasi Goreng" => "images/nasigoreng.jpg",
            "Rendang" => "images/Rendang.jpg",
            "Sate" => "images/Sate.jpg",
            "Gado-Gado" => "images/Gado_gado.jpg",
            "Bakso" => "images/Bakso.jpg",
            "Soto" => "images/Soto_Ayam.jpg",
            "Pempek" => "images/Empek_empek.jpg",
            "Gudeg" => "images/gudeg.jpg",
            "Nasi Uduk" => "images/Nasi_Uduk.jpg",
            "Ayam Goreng" => "images/ayam_goreng.jpg",
            "Lontong Sayur" => "images/lontong.jpg",
            "Ketoprak" => "images/ketoprak.jpg",
            "Es Cendol" => "images/cendol.jpg",
            "Kerak Telor" => "images/Kerak.jpg"
        ];

        foreach ($kuliner as $nama => $icon) {
            echo "
            <div class='card'>
                <img src='$icon' alt='$nama'>
                <h3>$nama</h3>
            </div>
            ";
        }
        ?>
    </section>
</body>

</html>