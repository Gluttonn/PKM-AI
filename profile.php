<?php
session_start();
if (!isset($_SESSION['user'])) {
    header('Location: login.php');
    exit();
}

$user = $_SESSION['user'];
$success = '';
$error = '';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = $_POST['name'] ?? '';
    $phone = $_POST['phone'] ?? '';
    $email = $_POST['email'] ?? '';

    // For demo, just update session data
    $_SESSION['user']['name'] = $name;
    $_SESSION['user']['phone'] = $phone;
    $_SESSION['user']['email'] = $email;

    $success = 'Profil berhasil diperbarui.';
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
    <h1 class="text-2xl font-bold mb-6 text-center">Profil Saya</h1>
    <?php if ($success): ?>
        <div class="bg-green-100 text-green-700 p-3 rounded mb-4"><?php echo $success; ?></div>
    <?php endif; ?>
    <form method="POST" action="profile.php" class="bg-white p-6 rounded shadow">
        <label for="name" class="block mb-2 font-semibold">Nama Lengkap</label>
        <input type="text" id="name" name="name" value="<?php echo htmlspecialchars($user['name'] ?? ''); ?>" class="w-full border px-3 py-2 rounded mb-4" />

        <label for="phone" class="block mb-2 font-semibold">Nomor HP</label>
        <input type="text" id="phone" name="phone" value="<?php echo htmlspecialchars($user['phone'] ?? ''); ?>" class="w-full border px-3 py-2 rounded mb-4" />

        <label for="email" class="block mb-2 font-semibold">Email</label>
        <input type="email" id="email" name="email" value="<?php echo htmlspecialchars($user['email'] ?? ''); ?>" class="w-full border px-3 py-2 rounded mb-4" />

        <button type="submit" class="w-full bg-blue-600 text-white py-2 rounded hover:bg-blue-700">Simpan</button>
    </form>
</main>
</body>
</html>
