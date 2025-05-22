


<?php include 'header.php'; ?>
<html>
    <header>
     <link rel="stylesheet" href="">
         <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
    </header>
    <body>
<main class="container mx-auto px-4 py-8">
    <section class="text-center">
        <img src="assets/hospital_illustration.png" alt="Hospital" class="mx-auto max-w-full h-auto mb-6">
        <h1 class="text-3xl font-bold mb-2">Kesehatan Anda,</h1>
        <h2 class="text-2xl font-semibold mb-6">Tanggung Jawab Kami</h2>
        <p class="max-w-xl mx-auto text-gray-700 mb-12">
            Rumah Sakit Bersama selalu siap memberikan pelayanan kesehatan terbaik untuk Anda dan keluarga.
        </p>
    </section>

    <section>
        <h3 class="text-xl font-bold text-center mb-6 underline decoration-blue-600 decoration-2">
            Fasilitas Dan Layanan RS Bersama
        </h3>
        <div class="grid grid-cols-1 md:grid-cols-3 gap-6 max-w-5xl mx-auto">
            <div class="bg-white p-6 rounded shadow text-center">
                <h4 class="font-semibold mb-2">Rawat Inap</h4>
                <p class="text-gray-600 mb-4">Unit rawat inap yang dilengkapi berbagai fasilitas untuk meningkatkan kenyamanan Anda selama perawatan di RS Bersama.</p>
                <a href="rawat_inap.php" class="inline-block bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-700">Selengkapnya</a>
            </div>
            <div class="bg-white p-6 rounded shadow text-center">
                <h4 class="font-semibold mb-2">Ruang Operasi</h4>
                <p class="text-gray-600 mb-4">Fasilitas ruang operasi modern dengan peralatan lengkap dan tenaga medis profesional.</p>
                <a href="ruang_operasi.php" class="inline-block bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-700">Selengkapnya</a>
            </div>
            <div class="bg-white p-6 rounded shadow text-center">
                <h4 class="font-semibold mb-2">UGD</h4>
                <p class="text-gray-600 mb-4">Unit Gawat Darurat siap melayani 24 jam untuk penanganan kasus darurat medis.</p>
                <a href="ugd.php" class="inline-block bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-700">Selengkapnya</a>
            </div>
            <div class="bg-white p-6 rounded shadow text-center">
                <h4 class="font-semibold mb-2">Medical Check Up</h4>
                <p class="text-gray-600 mb-4">Layanan pemeriksaan kesehatan lengkap untuk deteksi dini berbagai penyakit.</p>
                <a href="medical_checkup.php" class="inline-block bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-700">Selengkapnya</a>
            </div>
            <div class="bg-white p-6 rounded shadow text-center">
                <h4 class="font-semibold mb-2">Farmasi</h4>
                <p class="text-gray-600 mb-4">Apotek dengan berbagai obat dan suplemen yang lengkap dan terpercaya.</p>
                <a href="farmasi.php" class="inline-block bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-700">Selengkapnya</a>
            </div>
        </div>
    </section>
</main>

<footer class="bg-blue-700 text-white py-6 mt-12">
    <div class="container mx-auto px-4 flex flex-col md:flex-row justify-between items-center">
        <div class="mb-4 md:mb-0">
            <h5 class="font-bold mb-2">Rumah Sakit Bersama</h5>
            <p>Jl. Contoh Alamat No.123, Jakarta</p>
            <p>Telp: (021) 12345678</p>
            <p>Email: info@rsbersama.co.id</p>
        </div>
        <div class="flex space-x-6">
            <a href="tel:02112345678" class="hover:underline">Call Center</a>
            <a href="mailto:info@rsbersama.co.id" class="hover:underline">Customer Service</a>
        </div>
    </div>
</footer>
</body>
</html>
