<?php
include 'koneksi.php';

if(isset($_POST['submit'])){

    $nama_lengkap   = htmlspecialchars($_POST['nama_lengkap']);
    $nim            = htmlspecialchars($_POST['nim']);
    $angkatan       = htmlspecialchars($_POST['angkatan']);
    $program_studi  = htmlspecialchars($_POST['program_studi']);
    $jenis_kelamin  = htmlspecialchars($_POST['jenis_kelamin']);
    $tempat_lahir   = htmlspecialchars($_POST['tempat_lahir']);
    $tanggal_lahir  = $_POST['tanggal_lahir'];
    $alamat         = htmlspecialchars($_POST['alamat']);
    $alasan         = htmlspecialchars($_POST['alasan']);

    $query = mysqli_query($conn, "INSERT INTO pendaftar(
        nama_lengkap,
        nim,
        angkatan,
        program_studi,
        jenis_kelamin,
        tempat_lahir,
        tanggal_lahir,
        alamat,
        alasan
    ) VALUES (
        '$nama_lengkap',
        '$nim',
        '$angkatan',
        '$program_studi',
        '$jenis_kelamin',
        '$tempat_lahir',
        '$tanggal_lahir',
        '$alamat',
        '$alasan'
    )");

    if($query){

        echo "
        <script>
            alert('Pendaftaran berhasil!');
            window.location.href = 'https://chat.whatsapp.com/LINK-GRUP-WA';
        </script>
        ";

    } else {

        echo "
        <script>
            alert('Pendaftaran gagal!');
            window.location.href = 'index.php';
        </script>
        ";
    }
}
?>