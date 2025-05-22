<?php
session_start();
if (isset($_SESSION['user'])) {
    header('Location: dashboard.php');
    exit();
}

$error = '';
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = $_POST['username'] ?? '';
    $password = $_POST['password'] ?? '';

    // Dummy user validation for demo, replace with DB check
    if ($username === 'admin' && $password === 'admin123') {
        $_SESSION['user'] = [
            'username' => $username,
            'role' => 'admin'
        ];
        header('Location: dashboard.php');
        exit();
    } else {
        $error = 'Username atau password salah.';
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
    <h1 class="text-2xl font-bold mb-6 text-center">Masuk ke Akun Anda</h1>
    <?php if ($error): ?>
        <div class="bg-red-100 text-red-700 p-3 rounded mb-4"><?php echo $error; ?></div>
    <?php endif; ?>
    <form method="POST" action="login.php" class="bg-white p-6 rounded shadow">
        <label for="username" class="block mb-2 font-semibold">Username</label>
        <input type="text" id="username" name="username" required class="w-full border px-3 py-2 rounded mb-4" />

        <label for="password" class="block mb-2 font-semibold">Password</label>
        <input type="password" id="password" name="password" required class="w-full border px-3 py-2 rounded mb-4" />

        <button type="submit" class="w-full bg-blue-600 text-white py-2 rounded hover:bg-blue-700">Masuk</button>
    </form>
    <p class="mt-4 text-center">
        Belum punya akun? <a href="register.php" class="text-blue-600 hover:underline">Daftar di sini</a>
    </p>
</main>
</body>
</html>
