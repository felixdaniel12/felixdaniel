<!doctype html>
<html lang="en">
<head>
    <meta name="description" content="" />

    <title>Document</title>
</head>
<body>

<table border="1">
    <thead>
    <tr>
        <th>No</th>
        <th>Nama Kegiatan</th>
        <th>Tanggal kegiatan</th>
        <th>Status</th>
        <th>Tanggal Absen</th>
        <th>Action</th>
    </tr>
    </thead>
    <tbody class="table-border-bottom-0">
    <?php
    require_once '../Model/Absen.php';
    $absens= Absen::getAll();
    $no = 1;
   while ($a= mysqli_fetch_object($absens)){
        ?>
    <tr>
        <td><?= $no++ ?></td>
        <td><?= $a->nama_kegiatan?></td>
        <td><?= $a->tgl_kegiatan?></td>
        <td><?= $a->status?></td>
        <td><?=$a->tgl_absen?></td>
        <td> <form action="../controller/updateabsen.php" method="post">
                <input type="hidden" name="tgl" value="<?= $a->tgl_absen?>">

                <button type="submit">Masuk</button></td>
        </tr>
<?php
    }?>
    </tbody>
</body>
</html>