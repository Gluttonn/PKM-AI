<?php include 'header.php'; ?>

<?php
$doctor_id = $_GET['id'] ?? 0;

$doctors = [
    1 => [
        'name' => 'Dr. Firmansyah, M.Kes',
        'specialization' => 'Spesialis Penyakit Dalam',
        'education' => 'Sarjana Kedokteran Universitas Indonesia',
        'experience' => [
            'Dokter spesialis penyakit dalam di Rumah Sakit Bersama sejak 2010.',
            'Berpengalaman menangani berbagai penyakit kronis dan akut.',
            'Aktif dalam penelitian dan pengajaran di bidang penyakit dalam.'
        ],
        'treatments' => [
            'Pengobatan penyakit kronis seperti diabetes dan hipertensi.',
            'Penanganan infeksi dan penyakit akut.',
            'Konsultasi kesehatan dan pencegahan penyakit.'
        ],
        'images' => ['assets/treatment1.jpg', 'assets/treatment2.jpg', 'assets/treatment3.jpg']
    ],
    2 => [
        'name' => 'Dr. Raihan, Sp.B',
        'specialization' => 'Spesialis Bedah',
        'education' => 'Sarjana Kedokteran Universitas Gadjah Mada',
        'experience' => [
            'Dokter spesialis bedah dengan pengalaman lebih dari 15 tahun.',
            'Menguasai berbagai teknik bedah modern.',
            'Aktif dalam pelatihan dan seminar bedah.'
        ],
        'treatments' => [
            'Operasi umum dan bedah minimal invasif.',
            'Penanganan trauma dan luka.',
            'Konsultasi pra dan pasca operasi.'
        ],
        'images' => ['assets/surgery1.jpg', 'assets/surgery2.jpg', 'assets/surgery3.jpg']
    ],
    3 => [
        'name' => 'Dr. Dwi Khairani, Sp.KJ',
        'specialization' => 'Spesialis Kejiwaan',
        'education' => 'Sarjana Kedokteran Universitas Airlangga',
        'experience' => [
            'Dokter spesialis kejiwaan dengan pengalaman klinis luas.',
            'Menangani berbagai gangguan mental dan emosional.',
            'Aktif dalam penelitian dan edukasi kesehatan mental.'
        ],
        'treatments' => [
            'Terapi dan konseling gangguan mental.',
            'Penanganan depresi, kecemasan, dan stres.',
            'Pencegahan dan edukasi kesehatan mental.'
        ],
        'images' => ['assets/mental1.jpg', 'assets/mental2.jpg', 'assets/mental3.jpg']
    ]
];

$doctor = $doctors[$doctor_id] ?? null;

if (!$doctor) {
    echo "<main class='container mx-auto px-4 py-8'><h1 class='text-xl font-bold'>Dokter tidak ditemukan.</h1></main>";
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
    <h1 class="text-3xl font-bold mb-4"><?php echo htmlspecialchars($doctor['name']); ?></h1>
    <p class="text-gray-700 mb-2"><?php echo htmlspecialchars($doctor['specialization']); ?></p>
    <p class="mb-6"><strong>Pendidikan:</strong> <?php echo htmlspecialchars($doctor['education']); ?></p>

    <section class="mb-6">
        <h2 class="text-xl font-semibold mb-2">Pengalaman</h2>
        <ul class="list-disc list-inside text-gray-700">
            <?php foreach ($doctor['experience'] as $exp): ?>
                <li><?php echo htmlspecialchars($exp); ?></li>
            <?php endforeach; ?>
        </ul>
    </section>

    <section class="mb-6">
        <h2 class="text-xl font-semibold mb-2">Mengangani</h2>
        <ul class="list-disc list-inside text-gray-700">
            <?php foreach ($doctor['treatments'] as $treatment): ?>
                <li><?php echo htmlspecialchars($treatment); ?></li>
            <?php endforeach; ?>
        </ul>
    </section>

    <section class="grid grid-cols-1 md:grid-cols-3 gap-4">
        <?php foreach ($doctor['images'] as $img): ?>
            <img src="<?php echo $img; ?>" alt="Treatment Image" class="rounded shadow">
        <?php endforeach; ?>
    </section>
</main>
</body>
</html>
