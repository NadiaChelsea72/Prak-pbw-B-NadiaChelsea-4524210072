<?php
// biodata.php
function statusKelulusan(float $ipk): string
{
    if ($ipk >= 3.51) return 'Cumlaude'; // jika ipk sama dengan atau lebih besar dari 3.51 maka Cumlaude
    if ($ipk >= 2.00) return 'Tidak Cumlaude'; // jika ipk dibawah 2.00 maka Tidak cumlaude
    return 'IPK Tidak Valid'; 
}

$mahasiswa = [
    'nim' => '4524210072',
    'nama' => 'Nadia Chelsea',
    'prodi' => 'Teknik Informatika',
    'semester' => 5,
    'ipk' => 3.72
];
?>
<!doctype html>
<html lang="id">

<head>
    <meta charset="utf-8">
    <title>Biodata</title>
</head>

<body>
    <h1>Biodata Mahasiswa</h1>

    <ul>
        <?php foreach ($mahasiswa as $kunci => $nilai): ?>
            <li>
                <?= ucfirst($kunci) ?>:
                <?= htmlspecialchars((string)$nilai) ?>
            </li>
        <?php endforeach; ?>
    </ul>

    <p>
        Predikat:
        <?= statusKelulusan($mahasiswa['ipk']) ?>
    </p>
</body>

</html>
