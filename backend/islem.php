<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>İşlem Sonucu - Şevval Gökçen</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-slate-100 font-sans flex flex-col min-h-screen">

    <header class="bg-indigo-600 text-white shadow-md relative z-50">
        <div class="max-w-5xl mx-auto px-4 py-5 flex flex-wrap justify-between items-center relative">
            
            <div class="text-center md:text-left">
                <h1 class="text-3xl font-bold">Şevval Gökçen</h1>
                <p class="text-sm mt-1 text-indigo-200">Kişisel Web Sayfası</p>
            </div>

            <button id="menuButonu" class="md:hidden block text-white hover:text-indigo-200 focus:outline-none">
                <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path>
                </svg>
            </button>

            <nav id="anaMenu" class="hidden md:block absolute md:static top-full left-0 w-full md:w-auto bg-indigo-700 md:bg-transparent shadow-lg md:shadow-none pb-4 md:pb-0 z-50">
                <ul class="flex flex-col md:flex-row items-center gap-4 md:gap-6 font-medium text-sm md:text-base pt-4 md:pt-0">
                    <li><a href="../index.html" class="hover:text-amber-400 transition duration-300 border-b-2 border-transparent hover:border-amber-400">Hakkımda</a></li>
                    <li><a href="../frontend/cv.html" class="hover:text-indigo-300 transition duration-300 border-b-2 border-transparent hover:border-indigo-300">CV</a></li>
                    <li><a href="../frontend/sehrimsayfası.html" class="hover:text-indigo-300 transition duration-300 border-b-2 border-transparent hover:border-indigo-300">Şehrim</a></li>
                    <li><a href="../frontend/kulturelmiras.html" class="hover:text-indigo-300 transition duration-300 border-b-2 border-transparent hover:border-indigo-300">Mirasımız</a></li>
                    <li><a href="../frontend/ilgi-alanlarim.html" class="hover:text-indigo-300 transition duration-300 border-b-2 border-transparent hover:border-indigo-300">İlgi Alanlarım</a></li>
                    <li><a href="../frontend/iletisim.html" class="hover:text-indigo-300 transition duration-300 border-b-2 border-transparent hover:border-indigo-300">İletişim</a></li>
                    <li><a href="../frontend/login.html" class="hover:text-indigo-300 transition duration-300 border-b-2 border-transparent hover:border-indigo-300">Giriş Yap</a></li>
                </ul>
            </nav>
        </div>
    </header>

    <main class="flex-grow flex items-center justify-center p-4">
        <div class="bg-white p-8 rounded-xl shadow-lg w-full max-w-2xl">
            <h1 class="text-3xl font-bold text-center text-emerald-600 mb-6 border-b pb-2">Gelen Form Verileri</h1>
            
            <?php
            if ($_SERVER["REQUEST_METHOD"] == "POST") {

                $hobiler = isset($_POST['hobiler']) ? $_POST['hobiler'] : [];

                $ad_soyad = htmlspecialchars($_POST['ad_soyad']);
                $email = htmlspecialchars($_POST['email']);
                $telefon = htmlspecialchars($_POST['telefon']);
                $sehir = htmlspecialchars($_POST['sehir']);
                $cinsiyet = htmlspecialchars($_POST['cinsiyet']);
                $mesaj = htmlspecialchars($_POST['mesaj']);

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

                echo "</ul>";

                echo "<div class='bg-slate-50 p-4 rounded border mt-4'><strong>Mesajınız:</strong><br><p class='mt-2 text-slate-600'>$mesaj</p></div>";

            } else {
                echo "<p class='text-red-500 font-bold'>Hata: Form gönderilmeden bu sayfaya erişilemez!</p>";
            }
            ?>

            <div class="mt-8 text-center">
                <a href="../frontend/iletisim.html" class="inline-block bg-indigo-600 hover:bg-indigo-700 text-white font-bold py-2 px-6 rounded shadow-md transition-all">
                    < Forma Geri Dön
                </a>
            </div>
        </div>
    </main>

    <footer class="bg-gray-800 text-white text-center py-6 mt-auto">
        <p>&copy; 2026 Şevval Gökçen - Web Teknolojileri Projesi</p>
    </footer>

    <script>
        const menuButonu = document.getElementById('menuButonu');
        const anaMenu = document.getElementById('anaMenu');

        if(menuButonu && anaMenu) {
            menuButonu.addEventListener('click', () => {
                anaMenu.classList.toggle('hidden');
            });
        }
    </script>
</body>
</html>