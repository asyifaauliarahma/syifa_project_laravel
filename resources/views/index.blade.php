<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CAKRA MEDIKA</title>

    <!-- memanggil vite css-->
    @vite('resources/css/app.css')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
</head>
<body class="bg-gray-100">

    <!-- loader -->
    <div class="bg-gray-900 h-screen flex items-center justify-center" id="loader">
        <div class="loader border-t-4 border-blue-500 rounded-full w-16 h-16 animate-spin"></div>
    </div>

    <!-- header -->
    <div class="bg-blue-500 py-2">
        <div class="container mx-auto text-center">
            <h2 class="text-white text-lg">KLINIK</h2>
        </div>
    </div>

    <header class="bg-white shadow">
        <div class="container mx-auto px-4 py-4 flex justify-between items-center">
            <h1 class="text-2xl font-bold"><a href="index.html">CAKRA MEDIKA</a></h1>
            <nav>
                <ul class="flex space-x-4">
                    <li class="active"><a href="index.html" class="text-blue-500">HOME</a></li>
                    <li><a href="about.html" class="text-gray-700">ABOUT</a></li>
                    <li><a href="service.html" class="text-gray-700">SERVICE</a></li>
                    <li><a href="contact.html" class="text-gray-700">CONTACT</a></li>
                    <li><a href="gallery.html" class="text-gray-700">GALLERY</a></li>
                </ul>
            </nav>
        </div>
    </header>

    <!-- banner -->
    <section class="bg-blue-500 text-white py-16 text-center">
        <h2 class="text-3xl font-bold">WELCOME TO CAKRA MEDIKA</h2>
    </section>

    <!-- about -->
    <section class="py-16 bg-gray-100">
        <div class="container mx-auto px-4">
            <h3 class="text-2xl font-bold mb-4">ABOUT</h3>
            <p class="text-gray-700 mb-4">
                Berawal dari kepercayaan pengelola kawasan industri East Jakarta Industrial Estate (EJIP Cikarang) kepada Klinik Sapta Mitra sejak pertama kali berdiri pada tanggal 10 Januari 2005 untuk melakukan pemeriksaan kesehatan (MCU) pegawainya, maka sejak saat itu pula MCU menjadi bagian penting bagi Klinik Sapta Mitra dalam perkembangannya hingga saat ini.
            </p>
            <h4 class="text-xl font-bold mb-2">VISI KAMI</h4>
            <p class="text-gray-700 mb-4">MENJADI PERUSAHAAN PENYEDIA JASA K3 YANG MENJADI REFERENSI & TERSTANDAR INTERNASIONAL DI INDONESIA.</p>
            <h4 class="text-xl font-bold mb-2">MISI KAMI</h4>
            <p class="text-gray-700 mb-4">
                MENJALANKAN BISNIS KESEHATAN DAN BIDANG LAIN YANG TERKAIT, BERORIENTASI PADA KAIDAH-KAIDAH K3, KEPUASAN PELANGGAN, ANGGOTA PERUSAHAAN DAN PEMEGANG SAHAM. MENJADIKAN K3 SEBAGAI MEDIA UNTUK MENINGKATKAN KUALITAS KEHIDUPAN MASYARAKAT. MENJALANKAN KEGIATAN USAHA YANG BERWAWASAN LINGKUNGAN & KEMANUSIAAN.
            </p>
            <p class="text-gray-700">
                Cakra Medika diawali dengan berdirinya PT. Sapta Mitra Sejahtera yang merupakan perusahaan dibidang Klinik Kesehatan masyarakat dan Diagnostic Laboratory pada tanggal 10 Januari 2005. PT. Sapta Mitra Sejahtera atau dikenal dengan nama Klinik Sapta Mitra yang berlokasi di Taman Malaka, Duren sawit, Jakarta Timur untuk kali pertama berdiri mendapatkan kepercayaan dari pengelola Kawasan industri EJIP Cikarang untuk melakukan pekerjaan MCU pekerjanya.
            </p>
        </div>
    </section>

    <!-- service -->
    <section class="py-16 bg-white">
        <div class="container mx-auto px-4">
            <h3 class="text-2xl font-bold mb-8">SERVICE</h3>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <div class="bg-gray-100 p-6 rounded-lg shadow-md">
                    <h4 class="text-xl font-bold mb-2">VAKSINASI UMUM</h4>
                    <p class="text-gray-700">Layanan vaksinasi umum Klinik Cakra Medika melayani berbagai jenis vaksinasi untuk Anda.</p>
                </div>
                <div class="bg-gray-100 p-6 rounded-lg shadow-md">
                    <h4 class="text-xl font-bold mb-2">OCCUPATIONAL HEALTH EVENT ORGANIZER</h4>
                    <p class="text-gray-700">Kami Menyediakan Pelatihan Kesehatan untuk Dokter dan Paramedis, Penyewaan Ambulance 24 jam dan Penyedia Alat Kesehatan.</p>
                </div>
                <div class="bg-gray-100 p-6 rounded-lg shadow-md">
                    <h4 class="text-xl font-bold mb-2">MEDICAL CHECK UP</h4>
                    <p class="text-gray-700">Cakra Medika menyediakan layanan secara menyeluruh dengan didukung oleh tenaga medis yang profesional.</p>
                </div>
                <div class="bg-gray-100 p-6 rounded-lg shadow-md">
                    <h4 class="text-xl font-bold mb-2">HOME CARE</h4>
                    <p class="text-gray-700">Layanan Kesehatan andalan keluarga untuk mendapatkan layanan kesehatan cepat & terpercaya di rumah dengan mudah.</p>
                </div>
                <div class="bg-gray-100 p-6 rounded-lg shadow-md">
                    <h4 class="text-xl font-bold mb-2">INHOUSE CLINIC</h4>
                    <p class="text-gray-700">Layanan inhouse clinic bertujuan untuk menunjang pertolongan medis bagi karyawan di dalam perusahaan agar lebih cepat dan efisien.</p>
                </div>
                <div class="bg-gray-100 p-6 rounded-lg shadow-md">
                    <h4 class="text-xl font-bold mb-2">SCREENING COVID19</h4>
                    <p class="text-gray-700">Layanan Screening Covid19 dalam rangka mempercepat tracing dan screening covid19 agar lebih cepat dan akurat.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- footer -->
    <footer class="bg-blue-500 text-white py-4">
        <div class="container mx-auto text-center">
            <h3>&copy; 2023 - ASYIFA AULIA RAHMA. CAKRA MEDIKA</h3>
        </div>
    </footer>

    <script>
        $(document).ready(function(){
            $("#loader").fadeOut();
        });
    </script>
</body>
</html>
