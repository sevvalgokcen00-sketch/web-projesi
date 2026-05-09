<?php
$email = isset($_POST['email']) ? trim($_POST['email']) : '';
$sifre = isset($_POST['sifre']) ? trim($_POST['sifre']) : '';

$dogru_email = "b251210023@sakarya.edu.tr";
$dogru_sifre = "b251210023";

if (strtolower($email) === $dogru_email && $sifre === $dogru_sifre) {
    echo "<!DOCTYPE html>
    <html lang='tr'>
    <head>
        <meta charset='UTF-8'>
        <meta name='viewport' content='width=device-width, initial-scale=1.0'>
        <title>Hoşgeldiniz</title>
        <script src='https://cdn.tailwindcss.com'></script>
    </head>
    <body class='bg-slate-50 flex items-center justify-center min-h-screen font-sans text-center p-6'>
        <div class='bg-white p-12 rounded-3xl shadow-2xl max-w-lg w-full border-b-8 border-indigo-600'>
            <div class='text-7xl mb-6'>👋</div>
            <h1 class='text-3xl font-black text-indigo-900 mb-4 tracking-tighter'>Hoşgeldiniz b251210023</h1>
            <p class='text-slate-500 mb-10 text-lg'>Giriş işleminiz başarıyla tamamlandı.</p>
            
            <a href='giris.html' class='inline-block w-full bg-indigo-600 hover:bg-indigo-700 text-white font-black py-4 px-8 rounded-2xl transition-all shadow-lg'>
                ANA SAYFAYA DÖN
            </a>
        </div>
    </body>
    </html>";
} else {
    header("Location: login.html?hata=1");
    exit();
}
?>