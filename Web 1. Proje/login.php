<?php
$dogru_kullanici = "b241210071@sakarya.edu.tr";
$dogru_sifre = "b241210071";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST["email"];
    $sifre = $_POST["password"];

    if ($email == $dogru_kullanici && $sifre == $dogru_sifre) {
        echo "<script>
                alert('Hoşgeldiniz $sifre');
                window.location.href = 'index.html';
              </script>";
        exit();
    } else {
        // Hatalı giriş
        echo "<script>
                alert('Kullanıcı adı veya şifre hatalı!');
                window.location.href = 'login.html';
              </script>";
        exit();
    }
} else {
    header("Location: login.html");
    exit();
}
?>
