<?php
$mahasiswa = [
    ["Ade Saputra", "20103041020", "Teknik Informatika", "adesaputra@unwahas.ac.id"],
    ["Dayat Nurul", "20103041020", "Teknik Informatika", "adesaputra@unwahas.ac.id"],
    ["Sandhika", "20103041020", "Teknik Informatika", "adesaputra@unwahas.ac.id"]
];
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Mahasiswa</title>
</head>

<body>
    <h1>Daftar Mahasiswa</h1>

    <?php foreach ($mahasiswa as $mhs) : ?>
        <ul>
            <li>Nama : <?= $mhs[0]; ?></li>
            <li>Nim : <?= $mhs[1]; ?></li>
            <li>Jurusan :<?= $mhs[2]; ?></li>
            <li>Email : <?= $mhs[3]; ?></li>
        </ul>
    <?php endforeach ?>
</body>

</html>