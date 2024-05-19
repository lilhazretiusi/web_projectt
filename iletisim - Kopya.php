<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gönderilen Form Verileri</title>
</head>
<body>
    <h1>Gönderilen Form Verileri</h1>
    <?php
    // Form verilerini al
    $name = $_POST['name'];
    $surname = $_POST['surname'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $phone = $_POST['phone'];
    $message = $_POST['message'];

    // Verileri ekrana yazdır
    echo "<p><strong>İsim:</strong> $name</p>";
    echo "<p><strong>Soyisim:</strong> $surname</p>";
    echo "<p><strong>E-mail:</strong> $email</p>";
    echo "<p><strong>Şifre:</strong> $password</p>";
    echo "<p><strong>Telefon Numarası:</strong> $phone</p>";
    echo "<p><strong>Mesaj:</strong> $message</p>";
    ?>
</body>
</html>
