<?php
include '../koneksi.php';

header("Content-type: application/vnd-ms-excel");
header("Content-Disposition: attachment; filename=data_pendaftar.xls");
?>

<table border="1">

<tr>
    <th>No</th>
    <th>Nama Lengkap</th>
    <th>NIM</th>
    <th>Angkatan</th>
    <th>Program Studi</th>
    <th>Jenis Kelamin</th>
    <th>Tempat Lahir</th>
    <th>Tanggal Lahir</th>
    <th>Alamat</th>
    <th>Alasan</th>
</tr>

<?php
$no = 1;
$data = mysqli_query($conn, "SELECT * FROM pendaftar ORDER BY id DESC");

while($d = mysqli_fetch_array($data)){
?>

<tr>
    <td><?= $no++; ?></td>
    <td><?= $d['nama_lengkap']; ?></td>
    <td><?= $d['nim']; ?></td>
    <td><?= $d['angkatan']; ?></td>
    <td><?= $d['program_studi']; ?></td>
    <td><?= $d['jenis_kelamin']; ?></td>
    <td><?= $d['tempat_lahir']; ?></td>
    <td><?= $d['tanggal_lahir']; ?></td>
    <td><?= $d['alamat']; ?></td>
    <td><?= $d['alasan']; ?></td>
</tr>

<?php } ?>

</table>