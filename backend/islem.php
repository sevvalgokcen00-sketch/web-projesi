<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Sonucu</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-slate-100 flex items-center justify-center min-h-screen p-4">

    <div class="bg-white p-8 rounded-xl shadow-lg w-full max-w-2xl">
        <h1 class="text-3xl font-bold text-emerald-600 mb-6 border-b pb-2">Gelen Form Verileri</h1>

        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            
            $ad_soyad = htmlspecialchars($_POST['ad_soyad']);
            $email = htmlspecialchars($_POST['email']);
            $telefon = htmlspecialchars($_POST['telefon']);
            $sehir = htmlspecialchars($_POST['sehir']);
            $cinsiyet = htmlspecialchars($_POST['cinsiyet']);
            $mesaj = htmlspecialchars($_POST['mesaj']);
            
            $hobiler = isset($_POST['hobiler']) ? $_POST['hobiler'] : [];

            echo "<ul class='space-y-4 text-lg'>";
            echo "<li><strong>Ad Soyad:</strong> <span class='text-slate-700'>$ad_soyad</span></li>";
            echo "<li><strong>E-Mail:</strong> <span class='text-slate-700'>$email</span></li>";
            echo "<li><strong>Telefon:</strong> <span class='text-slate-700'>$telefon</span></li>";
            echo "<li><strong>Şehir:</strong> <span class='text-slate-700'>$sehir</span></li>";
            echo "<li><strong>Cinsiyet:</strong> <span class='text-slate-700'>$cinsiyet</span></li>";
            
            echo "<li><strong>Hobiler:</strong> <span class='text-slate-700'>";
            if (empty($hobiler)) {
                echo "Seçilmedi";
            } else {
                echo htmlspecialchars(implode(", ", $hobiler));
            }
            echo "</span></li>";

            echo "<li class='bg-slate-50 p-4 rounded border mt-4'><strong>Mesajınız:</strong><br><p class='mt-2 text-slate-600'>$mesaj</p></li>";
            echo "</ul>";

        } else {
            echo "<p class='text-red-500 font-bold'>Hata: Form gönderilmeden bu sayfaya erişilemez!</p>";
        }
        ?>

        <div class="mt-8">
            <a href="../frontend/iletisim.html" class="bg-indigo-600 hover:bg-indigo-700 text-white font-bold py-2 px-4 rounded transition">
                ← Forma Geri Dön
            </a>
        </div>
    </div>

</body>
</html>