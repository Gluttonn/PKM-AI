<?php include 'header.php'; ?>
<html>
    <header>
     <link rel="stylesheet" href="">
         <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
    </header>
    <body>
<main class="container mx-auto px-4 py-8">
    <h1 class="text-2xl font-bold mb-6">Daftar Pasien</h1>
    <table class="min-w-full bg-white rounded shadow">
        <thead>
            <tr class="bg-blue-600 text-white">
                <th class="py-2 px-4">Nama</th>
                <th class="py-2 px-4">Umur</th>
                <th class="py-2 px-4">Jenis Kelamin</th>
                <th class="py-2 px-4">Aksi</th>
            </tr>
        </thead>
        <tbody>
            <tr class="border-b">
                <td class="py-2 px-4">Budi Santoso</td>
                <td class="py-2 px-4">45</td>
                <td class="py-2 px-4">Laki-laki</td>
                <td class="py-2 px-4">
                    <a href="patient_detail.php?id=1" class="text-blue-600 hover:underline">Lihat Profil</a>
                </td>
            </tr>
            <tr class="border-b">
                <td class="py-2 px-4">Siti Aminah</td>
                <td class="py-2 px-4">38</td>
                <td class="py-2 px-4">Perempuan</td>
                <td class="py-2 px-4">
                    <a href="patient_detail.php?id=2" class="text-blue-600 hover:underline">Lihat Profil</a>
                </td>
            </tr>
            <tr>
                <td class="py-2 px-4">Joko Widodo</td>
                <td class="py-2 px-4">52</td>
                <td class="py-2 px-4">Laki-laki</td>
                <td class="py-2 px-4">
                    <a href="patient_detail.php?id=3" class="text-blue-600 hover:underline">Lihat Profil</a>
                </td>
            </tr>
        </tbody>
    </table>
</main>
</body>
</html>
