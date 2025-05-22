<?php
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}
$user = isset($_SESSION['user']) ? $_SESSION['user'] : null;
?>
<html>
    <header>
     <link rel="stylesheet" href="">
         <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
    </header>
    <body></body>
<header class="bg-white shadow">
    <div class="container mx-auto px-4 py-2 flex justify-between items-center border-b border-gray-200">
        <div class="text-sm text-gray-600">
            Layanan 24 jam
        </div>
        <div>
            <?php if ($user): ?>
                <a href="dashboard.php" class="text-blue-600 hover:underline">Dashboard</a>
                <a href="logout.php" class="ml-4 text-red-600 hover:underline">Logout</a>
            <?php else: ?>
                <a href="login.php" class="text-blue-600 hover:underline">Login</a>
            <?php endif; ?>
        </div>
    </div>
    <nav class="container mx-auto px-4 py-4 flex justify-between items-center">
        <div class="flex items-center space-x-2">
            <img src="assets/logo.png" alt="Logo" class="h-10 w-10 object-contain">
            <span class="font-bold text-xl text-blue-700">Rumah Sakit Bersama</span>
        </div>
        <ul class="flex space-x-6 text-gray-700 font-semibold">
            <li><a href="index.php" class="hover:text-blue-600">Beranda</a></li>
            <li><a href="patients.php" class="hover:text-blue-600">Daftar Pasien</a></li>
            <li><a href="doctors.php" class="hover:text-blue-600">Dokter</a></li>
            <li><a href="informasi.php" class="hover:text-blue-600">Informasi Publik</a></li>
        </ul>
    </nav>
</header>
