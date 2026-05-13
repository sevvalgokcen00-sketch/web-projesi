<?php
$email = isset($_POST['email']) ? trim($_POST['email']) : '';
$sifre = isset($_POST['sifre']) ? trim($_POST['sifre']) : '';

$dogru_email = "b251210023@sakarya.edu.tr";
$dogru_sifre = "b251210023";

if (strtolower($email) === $dogru_email && $sifre === $dogru_sifre) {
?>
<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hoşgeldiniz</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-slate-50 flex flex-col min-h-screen font-sans">

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
                    <li><a href="giris.html" class="hover:text-amber-400 transition duration-300 border-b-2 border-transparent hover:border-amber-400">Hakkımda</a></li>
                    <li><a href="cv.html" class="hover:text-indigo-300 transition duration-300 border-b-2 border-transparent hover:border-indigo-300">CV</a></li>
                    <li><a href="sehrimsayfası.html" class="hover:text-indigo-300 transition duration-300 border-b-2 border-transparent hover:border-indigo-300">Şehrim</a></li>
                    <li><a href="kulturelmiras.html" class="hover:text-indigo-300 transition duration-300 border-b-2 border-transparent hover:border-indigo-300">Mirasımız</a></li>
                    <li><a href="ilgi-alanlarim.html" class="hover:text-indigo-300 transition duration-300 border-b-2 border-transparent hover:border-indigo-300">İlgi Alanlarım</a></li>
                    <li><a href="iletisim.html" class="hover:text-indigo-300 transition duration-300 border-b-2 border-transparent hover:border-indigo-300">İletişim</a></li>
                    <li><a href="login.html" class="hover:text-indigo-300 transition duration-300 border-b-2 border-transparent hover:border-indigo-300">Giriş Yap</a></li>
                </ul>
            </nav>
        </div>
    </header>

    <main class="flex-grow flex items-center justify-center p-6 text-center">
        <div class="bg-white p-12 rounded-3xl shadow-2xl max-w-lg w-full border-b-8 border-indigo-600">
            <div class="text-6xl mb-6">✅</div>
            <h1 class="text-3xl font-black text-indigo-900 mb-4 tracking-tighter">Hoşgeldiniz b251210023</h1>
            <p class="text-slate-500 mb-10 text-lg">Giriş işleminiz başarıyla tamamlandı.</p>

            <a href="giris.html" class="inline-block w-full bg-indigo-600 hover:bg-indigo-700 text-white font-black py-4 px-8 rounded-2xl transition-all shadow-lg hover:shadow-indigo-500/30">
                ANA SAYFAYA DÖN
            </a>
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
<?php
} else {
    header("Location: login.html?hata=1");
    exit();
}
?>