<?php
    include_once 'header.php';
?>
<div class="container">
  <h2>Data Mahasiswa</h2>
  <table class="table">
      <thead>
          <tr>
              <th>No</th>
              <th>Nama Lengkap</th>
              <th>Mata Kuliah</th>
              <th>UTS</th>
              <th>UAS</th>
              <th>Tugas</th>
              <th>Rerata</th>
              <th>Grade</th>
              <th>Predikat</th>
              <th>Keterangan</th>
          </tr>
      </thead>
      <tbody>
          <tr>
              <td>1</td>
              <td>Fakhirul</td>
              <td>Statistika dan Probabilitas</td>
              <td>89</td>
              <td>95</td>
              <td>80</td>
              <td>87.95</td>
              <td>A</td>
              <td>Sangat Memuaskan</td>
              <td>Lulus</td>
          </tr>
          <tr>
              <td>2</td>
              <td>Rul</td>
              <td>Statistika dan Probabilitas</td>
              <td>78</td>
              <td>81</td>
              <td>80</td>
              <td>79.75</td>
              <td>B</td>
              <td>Memuaskan</td>
              <td>Lulus</td>
          </tr>
          <!--<tr>
			<td> <?php echo $_POST['no'] ?></td>
			<td> <?php echo $_POST['nama_lengkap'] ?></td>
			<td> <?php echo $_POST['matkul'] ?></td>
			<td> <?php echo $_POST['nilai_uts'] ?></td>
			<td> <?php echo $_POST['nilai_uas'] ?></td>
            <td> <?php echo $_POST['nilai_tugas'] ?></td>
		  </tr>-->

          <?php
            require_once 'libfungsi.php';
            if(isset($_POST['submit'])){
            $nickname = $_POST['nama_lengkap'];
            $uts = $_POST['nilai_uts'];
            $uas = $_POST['nilai_uas'];
            $tugas = $_POST['nilai_tugas'];
            $kelulusaan = kelulusan ($uts, $uas, $tugas);
            $grade = grade($kelulusaan);
            $predikat = predikat($kelulusaan);
            }
          ?>
      </tbody>
  </table>
</div>
<?php
    include_once 'footer.php';
?>