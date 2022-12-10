<?php
// $_GET
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
    <title>GET</title>
</head>

<body>
    <h1>Daftar Mahasiswa</h1>
    <ul>
        <?php foreach ($mahasiswa as $mhs) : ?>
            <li>
                <a href="latihan2.php?nama=<?= $mhs["nama"]; ?>&nim=<?= $mhs["nim"]; ?>&email=<?= $mhs["email"]; ?>&jurusan=<?= $mhs["jurusan"]; ?>&gambar=<?= $mhs["gambar"]; ?>"><?= $mhs["nama"]; ?></a>
            </li>
        <?php endforeach; ?>
    </ul>
</body>

</html>