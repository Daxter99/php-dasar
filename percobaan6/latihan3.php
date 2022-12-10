<?php
$mahasiswa = [
    [
        "nama" => "Ade Saputra",
        "nim" => "20103041020",
        "jurusan" => "Teknik Informatika",
        "email" => "adesaputra@unwahas.ac.id",
        "gambar" => "ade.jpg"
    ],
    [
        "nama" => "Daxter",
        "nim" => "20103041021",
        "jurusan" => "Teknik Informatika",
        "email" => "daxter@unwahas.ac.id",
        "gambar" => "dhika.jpg"
    ]
];
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan 3</title>
</head>

<body>
    <h1>Daftar Mahasiswa</h1>

    <?php foreach ($mahasiswa as $mhs) : ?>
        <ul>
            <li>
                <img src="img/<?= $mhs["gambar"]; ?>" alt="">
            </li>
            <li>Nama : <?= $mhs["nama"]; ?></li>
            <li>Nim : <?= $mhs["nim"]; ?></li>
            <li>Jurusan : <?= $mhs["jurusan"]; ?></li>
            <li>Email : <?= $mhs["email"]; ?></li>
        </ul>
    <?php endforeach ?>
</body>

</html>