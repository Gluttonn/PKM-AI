<?php include 'header.php'; ?>
<html>
    <header>
     <link rel="stylesheet" href="">
         <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
    </header>
    <body>
<main class="container mx-auto px-4 py-8">
    <h1 class="text-2xl font-bold mb-6">Daftar Dokter</h1>
    <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
        <div class="bg-white rounded shadow p-4 text-center">
            <img src="assets/doctor1.jpg" alt="Dr. Firmansyah" class="mx-auto rounded-full w-32 h-32 object-cover mb-4">
            <h2 class="font-semibold text-lg">Dr. Firmansyah, M.Kes</h2>
            <p class="text-gray-600">Spesialis Penyakit Dalam</p>
            <a href="doctor_detail.php?id=1" class="text-blue-600 hover:underline mt-2 inline-block">Lihat Profil</a>
        </div>
        <div class="bg-white rounded shadow p-4 text-center">
            <img src="assets/doctor2.jpg" alt="Dr. Raihan" class="mx-auto rounded-full w-32 h-32 object-cover mb-4">
            <h2 class="font-semibold text-lg">Dr. Raihan, Sp.B</h2>
            <p class="text-gray-600">Spesialis Bedah</p>
            <a href="doctor_detail.php?id=2" class="text-blue-600 hover:underline mt-2 inline-block">Lihat Profil</a>
        </div>
        <div class="bg-white rounded shadow p-4 text-center">
            <img src="assets/doctor3.jpg" alt="Dr. Dwi Khairani" class="mx-auto rounded-full w-32 h-32 object-cover mb-4">
            <h2 class="font-semibold text-lg">Dr. Dwi Khairani, Sp.KJ</h2>
            <p class="text-gray-600">Spesialis Kejiwaan</p>
            <a href="doctor_detail.php?id=3" class="text-blue-600 hover:underline mt-2 inline-block">Lihat Profil</a>
        </div>
    </div>
</main>
</body>
</html>
