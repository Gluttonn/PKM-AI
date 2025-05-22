<?php
session_start();
$error = '';
$success = '';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = $_POST['username'] ?? '';
    $email = $_POST['email'] ?? '';
    $password = $_POST['password'] ?? '';
    $confirm_password = $_POST['confirm_password'] ?? '';

    if ($password !== $confirm_password) {
        $error = 'Password dan konfirmasi password tidak cocok.';
    } else {
        // Dummy registration logic, replace with DB insert
        // For demo, just show success message
        $success = 'Registrasi berhasil. Silakan <a href="login.php" class="text-blue-600 underline">login</a>.';
    }
}
?>

<?php include 'header.php'; ?>
<html>
    <header>
     <link rel="stylesheet" href="">
         <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
    </header>
    <body>
<main class="container mx-auto px-4 py-8 max-w-md">
    <h1 class="text-2xl font-bold mb-6 text-center">Daftar Akun Baru</h1>
    <?php if ($error): ?>
        <div class="bg-red-100 text-red-700 p-3 rounded mb-4"><?php echo $error; ?></div>
    <?php endif; ?>
    <?php if ($success): ?>
        <div class="bg-green-100 text-green-700 p-3 rounded mb-4"><?php echo $success; ?></div>
    <?php endif; ?>
    <form method="POST" action="register.php" class="bg-white p-6 rounded shadow">
        <label for="username" class="block mb-2 font-semibold">Username</label>
        <input type="text" id="username" name="username" required class="w-full border px-3 py-2 rounded mb-4" />

        <label for="email" class="block mb-2 font-semibold">Email</label>
        <input type="email" id="email" name="email" required class="w-full border px-3 py-2 rounded mb-4" />

        <label for="password" class="block mb-2 font-semibold">Password</label>
        <input type="password" id="password" name="password" required class="w-full border px-3 py-2 rounded mb-4" />

        <label for="confirm_password" class="block mb-2 font-semibold">Konfirmasi Password</label>
        <input type="password" id="confirm_password" name="confirm_password" required class="w-full border px-3 py-2 rounded mb-4" />

        <button type="submit" class="w-full bg-blue-600 text-white py-2 rounded hover:bg-blue-700">Daftar</button>
    </form>
    <p class="mt-4 text-center">
        Sudah punya akun? <a href="login.php" class="text-blue-600 hover:underline">Masuk di sini</a>
    </p>
</main>
</body>
</html>
