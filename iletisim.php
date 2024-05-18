<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Bilgileri</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
</head>
<body>
    <div class="container">
        <h2>Gönderilen Bilgiler</h2>
        <ul>
            <li>İsim: <?php echo htmlspecialchars($_POST['name']); ?></li>
            <li>Soyisim: <?php echo htmlspecialchars($_POST['surname']); ?></li>
            <li>E-mail: <?php echo htmlspecialchars($_POST['email']); ?></li>
            <li>Şifre: <?php echo htmlspecialchars($_POST['password']); ?></li>
            <li>Telefon Numaranız: <?php echo htmlspecialchars($_POST['phone']); ?></li>
            <li>Mesajınız: <?php echo htmlspecialchars($_POST['message']); ?></li>
        </ul>
    </div>
</body>
</html>
