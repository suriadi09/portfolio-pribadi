
<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $nama = htmlspecialchars($_POST["nama"] ?? "");
    $email = htmlspecialchars($_POST["email"] ?? "");
    $pesan = htmlspecialchars($_POST["pesan"] ?? "");

    if ($nama == "" || $email == "" || $pesan == "") {
        echo "Semua kolom harus diisi.";
        exit;
    }

} else {
    header("Location: index.html");
    exit;
}

?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pesan Berhasil</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

    <section class="contact">
        <div class="section-title">
            <p>MESSAGE RECEIVED</p>
            <h2>Pesan Berhasil Dikirim!</h2>
        </div>

        <div class="about-box" style="max-width:550px; margin:auto;">
            <p>Terima kasih, <strong><?php echo $nama; ?></strong>!</p>
            <p>Email: <?php echo $email; ?></p>
            <p>Pesan: <?php echo nl2br($pesan); ?></p>
            <br>
            <a href="index.html" class="btn">Kembali ke Portfolio</a>
        </div>
    </section>

</body>
</html>
