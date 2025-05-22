<?php
session_start();
if (!isset($_SESSION['user'])) {
    header('Location: login.php');
    exit();
}
$user = $_SESSION['user'];
?>

<?php include 'header.php'; ?>
<html>
    <header>
     <link rel="stylesheet" href="">
         <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
    </header>
    <body>
<main class="container mx-auto px-4 py-8 max-w-3xl">
    <h1 class="text-3xl font-bold mb-6">Selamat Datang, <?php echo htmlspecialchars($user['username']); ?>!</h1>
    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
        <a href="doctors.php" class="block bg-blue-600 text-white p-6 rounded shadow hover:bg-blue-700 text-center font-semibold">Daftar Dokter</a>
        <a href="patients.php" class="block bg-blue-600 text-white p-6 rounded shadow hover:bg-blue-700 text-center font-semibold">Daftar Pasien</a>
        <a href="profile.php" class="block bg-blue-600 text-white p-6 rounded shadow hover:bg-blue-700 text-center font-semibold">Profil Saya</a>
        <a href="logout.php" class="block bg-red-600 text-white p-6 rounded shadow hover:bg-red-700 text-center font-semibold">Logout</a>
    </div>
</main>
</body>
</html>
