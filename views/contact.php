<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Tangkap data dari form
    $name = htmlspecialchars(trim($_POST['name']));
    $email = htmlspecialchars(trim($_POST['email']));
    $message = htmlspecialchars(trim($_POST['message']));

    // Validasi sederhana
    if (!empty($name) && !empty($email) && !empty($message)) {
        // Kirim email (sesuaikan konfigurasi server Anda)
        $to = "your-email@example.com"; // Ganti dengan email tujuan
        $subject = "Pesan dari $name";
        $headers = "From: $email\r\n";
        $headers .= "Content-Type: text/plain; charset=UTF-8\r\n";
        $body = "Nama: $name\nEmail: $email\nPesan:\n$message";

        if (mail($to, $subject, $body, $headers)) {
            $success = "Pesan berhasil dikirim. Terima kasih telah menghubungi kami.";
        } else {
            $error = "Gagal mengirim pesan. Silakan coba lagi nanti.";
        }
    } else {
        $error = "Semua field harus diisi.";
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us - Kuliner</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #FCEAC0;
        }

        .container {
            max-width: 600px;
            margin: 50px auto;
            padding: 20px;
            background: #fff;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
        }

        h1 {
            text-align: center;
            color: #333;
        }

        form {
            display: flex;
            flex-direction: column;
        }

        label {
            margin-top: 10px;
            font-weight: bold;
        }

        input,
        textarea {
            margin-top: 5px;
            padding: 10px;
            font-size: 16px;
            border: 1px solid #ccc;
            border-radius: 5px;
            width: 100%;
        }

        button {
            margin-top: 20px;
            padding: 10px;
            font-size: 16px;
            background-color: #28a745;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }

        button:hover {
            background-color: #218838;
        }

        .message {
            margin-top: 20px;
            padding: 10px;
            border-radius: 5px;
        }

        .success {
            background-color: #d4edda;
            color: #155724;
            border: 1px solid #c3e6cb;
        }

        .error {
            background-color: #f8d7da;
            color: #721c24;
            border: 1px solid #f5c6cb;
        }
    </style>
</head>

<body>
    <div class="container">
        <h1>Contact Us</h1>
        <?php if (!empty($success)): ?>
            <div class="message success">
                <?php echo $success; ?>
            </div>
        <?php endif; ?>
        <?php if (!empty($error)): ?>
            <div class="message error">
                <?php echo $error; ?>
            </div>
        <?php endif; ?>
        <form method="POST" action="">
            <label for="name">Nama:</label>
            <input type="text" id="name" name="name" placeholder="Masukkan nama Anda" required>

            <label for="email">Email:</label>
            <input type="email" id="email" name="email" placeholder="Masukkan email Anda" required>

            <label for="message">Pesan:</label>
            <textarea id="message" name="message" rows="5" placeholder="Tulis pesan Anda di sini" required></textarea>

            <button type="submit">Kirim Pesan</button>
        </form>
    </div>
</body>

</html>