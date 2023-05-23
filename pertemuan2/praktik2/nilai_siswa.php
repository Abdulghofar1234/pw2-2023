<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hasil Nilai Siswa</title>
</head>

<body>

    <?php

        // Variable untuk menampung data
        $nama_siswa = $_POST['nama_lengkap'];
        $nama_kuliah = $_POST['matkul'];
        $uts = $_POST['nilai_uts'];
        $uas = $_POST['nilai_uas'];
        $tugas = $_POST['nilai_tugas'];

        $total_nilai = ($uts * 0.3) + ($uas * 0.35) + ($tugas * 0.35);

        // Menampilakan data dari variable
        echo 'Nama Siswa Teladan : ' . $nama_siswa;
        echo '<br> Mata Kuliah : ' . $nama_kuliah;
        echo '<br> UTS : ' . $uts;
        echo '<br> UAS : ' . $uas;
        echo '<br> TUGAS : ' . $tugas;
        echo '<hr> ';
        echo '<br> Total Nilai : ' . $total_nilai;
        echo '<hr> ';

    ?>


</body>

</html>
