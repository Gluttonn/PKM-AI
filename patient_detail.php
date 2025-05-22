<?php include 'header.php'; ?>

<?php
$patient_id = $_GET['id'] ?? 0;

$patients = [
    1 => [
        'name' => 'Budi Santoso',
        'age' => 45,
        'gender' => 'Laki-laki',
        'history' => [
            'Riwayat penyakit diabetes sejak 2015.',
            'Pernah menjalani operasi jantung pada 2018.',
            'Rutin kontrol kesehatan setiap 6 bulan.'
        ],
        'notes' => 'Pasien dalam kondisi stabil dan mengikuti pengobatan dengan baik.'
    ],
    2 => [
        'name' => 'Siti Aminah',
        'age' => 38,
        'gender' => 'Perempuan',
        'history' => [
            'Riwayat asma sejak kecil.',
            'Mengalami alergi musiman.',
            'Sedang menjalani terapi fisik.'
        ],
        'notes' => 'Pasien perlu menghindari pemicu alergi dan rutin kontrol.'
    ],
    3 => [
        'name' => 'Joko Widodo',
        'age' => 52,
        'gender' => 'Laki-laki',
        'history' => [
            'Riwayat hipertensi dan kolesterol tinggi.',
            'Mengikuti program diet dan olahraga.',
            'Kontrol rutin setiap 3 bulan.'
        ],
        'notes' => 'Pasien menunjukkan perbaikan kondisi kesehatan.'
    ]
];

$patient = $patients[$patient_id] ?? null;

if (!$patient) {
    echo "<main class='container mx-auto px-4 py-8'><h1 class='text-xl font-bold'>Pasien tidak ditemukan.</h1></main>";
    include 'footer.php';
    exit;
}
?>
<html>
    <header>
     <link rel="stylesheet" href="">
         <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
    </header>
    <body>

<main class="container mx-auto px-4 py-8 max-w-4xl">
    <h1 class="text-3xl font-bold mb-4"><?php echo htmlspecialchars($patient['name']); ?></h1>
    <p class="text-gray-700 mb-2">Umur: <?php echo htmlspecialchars($patient['age']); ?> tahun</p>
    <p class="text-gray-700 mb-6">Jenis Kelamin: <?php echo htmlspecialchars($patient['gender']); ?></p>

    <section class="mb-6">
        <h2 class="text-xl font-semibold mb-2">Riwayat Penyakit</h2>
        <ul class="list-disc list-inside text-gray-700">
            <?php foreach ($patient['history'] as $history): ?>
                <li><?php echo htmlspecialchars($history); ?></li>
            <?php endforeach; ?>
        </ul>
    </section>

    <section>
        <h2 class="text-xl font-semibold mb-2">Catatan</h2>
        <p class="text-gray-700"><?php echo htmlspecialchars($patient['notes']); ?></p>
    </section>
</main>
</body>
</html>
