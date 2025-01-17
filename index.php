<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>Selamat Datang - Website Kuliner</title>
    <style>
        /* Global Styles */
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            line-height: 1.6;
            background: linear-gradient(to bottom, #fceac0, #ffffff);
            /* Gradasi krem ke putih */
            color: #5f370e;
            /* Teks cokelat tua */
        }

        header {
            background-color: #8b4513;
            /* Warna cokelat tua */
            color: #fff;
            /* Teks putih */
            padding: 1rem 1rem;
            text-align: center;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }

        header h1 {
            font-size: 2rem;
            margin-bottom: 0.5rem;
            text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.2);
        }

        header p {
            font-size: 1rem;
            font-weight: 300;
        }

        /* Halaman Get Started */
        .get-started {
            text-align: center;
            padding: 4rem 2rem;
            background: #fceac0;
            border-radius: 10px;
            margin-top: 20px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
        }

        .get-started h2 {
            font-size: 2.5rem;
            margin-bottom: 1rem;
            color: #8b4513;
            /* Cokelat */
            text-shadow: 1px 1px 2px rgba(0, 0, 0, 0.2);
        }

        .get-started p {
            font-size: 1.3rem;
            margin-bottom: 2rem;
            color: #5f370e;
            /* Teks cokelat tua */
            line-height: 1.8;
            max-width: 600px;
            margin-left: auto;
            margin-right: auto;
        }

        .get-started .btn-start {
            background-color: #8b4513;
            /* Cokelat untuk tombol */
            color: white;
            padding: 15px 30px;
            font-size: 1.3rem;
            text-decoration: none;
            border-radius: 8px;
            display: inline-block;
            transition: background-color 0.3s ease, transform 0.2s;
        }

        .get-started .btn-start:hover {
            background-color: #5f370e;
            /* Warna lebih gelap untuk hover */
            transform: translateY(-3px);
            /* Efek hover tombol */
        }

        /* Footer */
        footer {
            background-color: #8b4513;
            /* Cokelat tua */
            color: #fff;
            /* Teks putih */
            text-align: center;
            padding: 1.5rem;
            margin-top: 40px;
            box-shadow: 0 -2px 10px rgba(0, 0, 0, 0.1);
        }

        footer p {
            font-size: 1rem;
            font-weight: 300;
        }

        /* Mobile responsiveness */
        @media (max-width: 768px) {
            header h1 {
                font-size: 2rem;
            }

            .get-started h2 {
                font-size: 2rem;
            }

            .get-started p {
                font-size: 1.1rem;
            }

            .get-started .btn-start {
                font-size: 1.2rem;
                padding: 12px 25px;
            }
        }
    </style>
</head>

<body>
    <header>
        <h1>Selamat Datang di Website Kuliner</h1>
        <p>Temukan berbagai rekomendasi makanan tradisional terbaik</p>
    </header>

    <section class="get-started">
        <h2>Apakah Anda siap untuk penjelajahan ?</h2>
        <p>
            "Pesan makanan favorit Anda dengan mudah dan cepat melalui website kami. Cukup telusuri menu, pilih hidangan yang Anda inginkan, dan lakukan pemesanan dalam beberapa klik saja. Nikmati hidangan lezat tanpa perlu keluar rumah!"
        </p>
        <a href="index2.php" class="btn-start">Mulai Menjelajahi</a>
    </section>

    <footer>
        <p>&copy; Created By <span class="fw-bold">Asep Jelpa Nasution</span></p>
    </footer>
</body>

</html>