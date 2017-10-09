<?php
$bobot_presensi = "0.".$_POST['bobot_presensi'];
$bobot_quiz = "0.".$_POST['bobot_quiz'];
$bobot_tugas = "0.".$_POST['bobot_tugas'];
$bobot_praktek = "0.".$_POST['bobot_praktek'];
$bobot_uts = "0.".$_POST['bobot_uts'];
$bobot_uas = "0.".$_POST['bobot_uas'];

$id_kelas = $_POST['kelas'];
$id_prodi = $_POST['prodi'];
$query_prodi = mysql_query("SELECT * FROM program_studi WHERE id_prodi='$id_prodi'");
$fetch_prodi = mysql_fetch_array($query_prodi);
$nama_prodi = $fetch_prodi['nama_prodi'];
// Batas Query Prodi

$id_makul = $_POST['mata_kuliah'];
$query_makul = mysql_query("SELECT * FROM mata_kuliah WHERE kode='$id_makul'");
$fetch_makul = mysql_fetch_array($query_makul);
$nama_makul = $fetch_makul['nama_makul'];
// Batas Query Mata Kuliah

$id_semester = $_POST['semester'];
$query_semester = mysql_query("SELECT * FROM semester WHERE id_semester='$id_semester'");
$fetch_semester = mysql_fetch_array($query_semester);
$nama_semester = $fetch_semester['semester']." - ".$fetch_semester['periode'];
// Batas Query Semester

$id_username=$_SESSION['username'];
$query_dosen = mysql_query("SELECT * FROM dosen WHERE id_dosen='$id_username'");
$fetch_dosen = mysql_fetch_array($query_dosen);
$nama_dosen = $fetch_dosen['nama_dosen'];
//Query Kelas Mahasiswa
$no=1;
$query = mysql_query("SELECT * FROM kelas_mahasiswa WHERE id_kelas='$id_kelas' ORDER BY nama");
$jumlahrow = mysql_num_rows($query);
///Batas Query Kelas Mahasiswa

if (isset($_POST['masukdb'])) {
  $jumlahrow = $_POST['jumlahrow'];
  for ($i=0; $i <$jumlahrow ; $i++) { 
        $kelas_kelas = $_POST['kelas_kelas'];
        $makul_makul = $_POST['makul_makul'];
        $semester_semester = $_POST['semester_semester'];
        $id_username=$_SESSION['username'];

        $nim = $_POST['nim'][$i];
        $nama = $_POST['nama'][$i];
        $presensi = $_POST['presensi'][$i];
        $quiz = $_POST['quiz'][$i];
        $tugas = $_POST['tugas'][$i];
        $praktek = $_POST['praktek'][$i];
        $uts = $_POST['uts'][$i];
        $uas = $_POST['uas'][$i];
        $angka = $_POST['angka'][$i];

        if ($angka>80 AND $angka<=100) {
          $huruf = "A";
        } elseif ($angka>73 AND $angka<=80) {
          $huruf = "B+";
        } elseif ($angka>65 AND $angka<=73) {
          $huruf = "B";
        } elseif ($angka>60 AND $angka<=65) {
          $huruf = "C+";
        } elseif ($angka>50 AND $angka<=60) {
          $huruf = "C";
        } elseif ($angka>39 AND $angka<=50) {
          $huruf = "D";
        } elseif ($angka<=39) {
          $huruf = "E";
        } 

        $insert = mysql_query("INSERT INTO nilai(id_nilai, id_dosen, nim_mahasiswa, nama, id_kelas, id_semester, id_mata_kuliah, presensi, quiz, tugas, praktek, uts, uas, angka, huruf) VALUES ('','$id_username','$nim','$nama','$kelas_kelas','$semester_semester','$makul_makul','$presensi','$quiz','$tugas','$praktek','$uts','$uas','$angka','$huruf')");
    }
}
?>
<!DOCTYPE html>
<html>
<head>
<script type="text/javascript">
  
</script>
<script type="text/javascript">
      function startCalc(){
      interval = setInterval("calc()",1);
      }
      function calc(){
          var bobot_presensi=<?php echo json_encode($bobot_presensi) ?>;
          var bobot_quiz =<?php echo json_encode($bobot_quiz) ?>;
          var bobot_tugas = <?php echo json_encode($bobot_tugas) ?>;
          var bobot_praktek= <?php echo json_encode($bobot_praktek) ?>;
          var bobot_uts = <?php echo json_encode($bobot_uts) ?>;
          var bobot_uas = <?php echo json_encode($bobot_uas) ?>;

          presensi0  = document.input_nilai.presensi0.value;
          quiz0 = document.input_nilai.quiz0.value;
          tugas0 = document.input_nilai.tugas0.value;
          praktek0 = document.input_nilai.praktek0.value;
          uts0 = document.input_nilai.uts0.value;
          uas0 = document.input_nilai.uas0.value;
          document.input_nilai.angka0.value = (presensi0 * bobot_presensi) + (quiz0 * bobot_quiz) + (tugas0 * bobot_tugas) + (praktek0 * bobot_praktek) + (uts0 * bobot_uts) + (uas0 * bobot_uas);

          presensi1  = document.input_nilai.presensi1.value;
          quiz1 = document.input_nilai.quiz1.value;
          tugas1 = document.input_nilai.tugas1.value;
          praktek1 = document.input_nilai.praktek1.value;
          uts1 = document.input_nilai.uts1.value;
          uas1 = document.input_nilai.uas1.value;
          document.input_nilai.angka1.value = (presensi1 * bobot_presensi) + (quiz1 * bobot_quiz) + (tugas1 * bobot_tugas) + (praktek1 * bobot_praktek) + (uts1 * bobot_uts) + (uas1 * bobot_uas);

          presensi2  = document.input_nilai.presensi2.value;
          quiz2 = document.input_nilai.quiz2.value;
          tugas2 = document.input_nilai.tugas2.value;
          praktek2 = document.input_nilai.praktek2.value;
          uts2 = document.input_nilai.uts2.value;
          uas2 = document.input_nilai.uas2.value;
          document.input_nilai.angka2.value = (presensi2 * bobot_presensi) + (quiz2 * bobot_quiz) + (tugas2 * bobot_tugas) + (praktek2 * bobot_praktek) + (uts2 * bobot_uts) + (uas2 * bobot_uas);

          presensi3  = document.input_nilai.presensi3.value;
          quiz3 = document.input_nilai.quiz3.value;
          tugas3 = document.input_nilai.tugas3.value;
          praktek3 = document.input_nilai.praktek3.value;
          uts3 = document.input_nilai.uts3.value;
          uas3 = document.input_nilai.uas3.value;
          document.input_nilai.angka3.value = (presensi3 * bobot_presensi) + (quiz3 * bobot_quiz) + (tugas3 * bobot_tugas) + (praktek3 * bobot_praktek) + (uts3 * bobot_uts) + (uas3 * bobot_uas);

          presensi4  = document.input_nilai.presensi4.value;
          quiz4 = document.input_nilai.quiz4.value;
          tugas4 = document.input_nilai.tugas4.value;
          praktek4 = document.input_nilai.praktek4.value;
          uts4 = document.input_nilai.uts4.value;
          uas4 = document.input_nilai.uas4.value;
          document.input_nilai.angka4.value = (presensi4 * bobot_presensi) + (quiz4 * bobot_quiz) + (tugas4 * bobot_tugas) + (praktek4 * bobot_praktek) + (uts4 * bobot_uts) + (uas4 * bobot_uas);       

          presensi5  = document.input_nilai.presensi5.value;
          quiz5 = document.input_nilai.quiz5.value;
          tugas5 = document.input_nilai.tugas5.value;
          praktek5 = document.input_nilai.praktek5.value;
          uts5 = document.input_nilai.uts5.value;
          uas5 = document.input_nilai.uas5.value;
          document.input_nilai.angka5.value = (presensi5 * bobot_presensi) + (quiz5 * bobot_quiz) + (tugas5 * bobot_tugas) + (praktek5 * bobot_praktek) + (uts5 * bobot_uts) + (uas5 * bobot_uas);

          presensi6  = document.input_nilai.presensi6.value;
          quiz6 = document.input_nilai.quiz6.value;
          tugas6 = document.input_nilai.tugas6.value;
          praktek6 = document.input_nilai.praktek6.value;
          uts6 = document.input_nilai.uts6.value;
          uas6 = document.input_nilai.uas6.value;
          document.input_nilai.angka6.value = (presensi6 * bobot_presensi) + (quiz6 * bobot_quiz) + (tugas6 * bobot_tugas) + (praktek6 * bobot_praktek) + (uts6 * bobot_uts) + (uas6 * bobot_uas);        

          presensi7  = document.input_nilai.presensi7.value;
          quiz7 = document.input_nilai.quiz7.value;
          tugas7 = document.input_nilai.tugas7.value;
          praktek7 = document.input_nilai.praktek7.value;
          uts7 = document.input_nilai.uts7.value;
          uas7 = document.input_nilai.uas7.value;
          document.input_nilai.angka7.value = (presensi7 * bobot_presensi) + (quiz7 * bobot_quiz) + (tugas7 * bobot_tugas) + (praktek7 * bobot_praktek) + (uts7 * bobot_uts) + (uas7 * bobot_uas);

          presensi8  = document.input_nilai.presensi8.value;
          quiz8 = document.input_nilai.quiz8.value;
          tugas8 = document.input_nilai.tugas8.value;
          praktek8 = document.input_nilai.praktek8.value;
          uts8 = document.input_nilai.uts8.value;
          uas8 = document.input_nilai.uas8.value;
          document.input_nilai.angka8.value = (presensi8 * bobot_presensi) + (quiz8 * bobot_quiz) + (tugas8 * bobot_tugas) + (praktek8 * bobot_praktek) + (uts8 * bobot_uts) + (uas8 * bobot_uas);

          presensi9  = document.input_nilai.presensi9.value;
          quiz9 = document.input_nilai.quiz9.value;
          tugas9 = document.input_nilai.tugas9.value;
          praktek9 = document.input_nilai.praktek9.value;
          uts9 = document.input_nilai.uts9.value;
          uas9 = document.input_nilai.uas9.value;
          document.input_nilai.angka9.value = (presensi9 * bobot_presensi) + (quiz9 * bobot_quiz) + (tugas9 * bobot_tugas) + (praktek9 * bobot_praktek) + (uts9 * bobot_uts) + (uas9 * bobot_uas);  

          presensi10  = document.input_nilai.presensi10.value;
          quiz10 = document.input_nilai.quiz10.value;
          tugas10 = document.input_nilai.tugas10.value;
          praktek10 = document.input_nilai.praktek10.value;
          uts10 = document.input_nilai.uts10.value;
          uas10 = document.input_nilai.uas10.value;
          document.input_nilai.angka10.value = (presensi10 * bobot_presensi) + (quiz10 * bobot_quiz) + (tugas10 * bobot_tugas) + (praktek10 * bobot_praktek) + (uts10 * bobot_uts) + (uas10 * bobot_uas); 

          presensi11  = document.input_nilai.presensi11.value;
          quiz11 = document.input_nilai.quiz11.value;
          tugas11 = document.input_nilai.tugas11.value;
          praktek11 = document.input_nilai.praktek11.value;
          uts11 = document.input_nilai.uts11.value;
          uas11 = document.input_nilai.uas11.value;
          document.input_nilai.angka11.value = (presensi11 * bobot_presensi) + (quiz11 * bobot_quiz) + (tugas11 * bobot_tugas) + (praktek11 * bobot_praktek) + (uts11 * bobot_uts) + (uas11 * bobot_uas);   

          presensi12  = document.input_nilai.presensi12.value;
          quiz12 = document.input_nilai.quiz12.value;
          tugas12 = document.input_nilai.tugas12.value;
          praktek12 = document.input_nilai.praktek12.value;
          uts12 = document.input_nilai.uts12.value;
          uas12 = document.input_nilai.uas12.value;
          document.input_nilai.angka12.value = (presensi12 * bobot_presensi) + (quiz12 * bobot_quiz) + (tugas12 * bobot_tugas) + (praktek12 * bobot_praktek) + (uts12 * bobot_uts) + (uas12 * bobot_uas);  

          presensi13  = document.input_nilai.presensi13.value;
          quiz13 = document.input_nilai.quiz13.value;
          tugas13 = document.input_nilai.tugas13.value;
          praktek13 = document.input_nilai.praktek13.value;
          uts13 = document.input_nilai.uts13.value;
          uas13 = document.input_nilai.uas13.value;
          document.input_nilai.angka13.value = (presensi13 * bobot_presensi) + (quiz13 * bobot_quiz) + (tugas13 * bobot_tugas) + (praktek13 * bobot_praktek) + (uts13 * bobot_uts) + (uas13 * bobot_uas);

          presensi14  = document.input_nilai.presensi14.value;
          quiz14 = document.input_nilai.quiz14.value;
          tugas14 = document.input_nilai.tugas14.value;
          praktek14 = document.input_nilai.praktek14.value;
          uts14 = document.input_nilai.uts14.value;
          uas14 = document.input_nilai.uas14.value;
          document.input_nilai.angka14.value = (presensi14 * bobot_presensi) + (quiz14 * bobot_quiz) + (tugas14 * bobot_tugas) + (praktek14 * bobot_praktek) + (uts14 * bobot_uts) + (uas14 * bobot_uas);

          presensi15  = document.input_nilai.presensi15.value;
          quiz15 = document.input_nilai.quiz15.value;
          tugas15 = document.input_nilai.tugas15.value;
          praktek15 = document.input_nilai.praktek15.value;
          uts15 = document.input_nilai.uts15.value;
          uas15 = document.input_nilai.uas15.value;
          document.input_nilai.angka15.value = (presensi15 * bobot_presensi) + (quiz15 * bobot_quiz) + (tugas15 * bobot_tugas) + (praktek15 * bobot_praktek) + (uts15 * bobot_uts) + (uas15 * bobot_uas);

          presensi16  = document.input_nilai.presensi16.value;
          quiz16 = document.input_nilai.quiz16.value;
          tugas16 = document.input_nilai.tugas16.value;
          praktek16 = document.input_nilai.praktek16.value;
          uts16 = document.input_nilai.uts16.value;
          uas16 = document.input_nilai.uas16.value;
          document.input_nilai.angka16.value = (presensi16 * bobot_presensi) + (quiz16 * bobot_quiz) + (tugas16 * bobot_tugas) + (praktek16 * bobot_praktek) + (uts16 * bobot_uts) + (uas16 * bobot_uas);

          presensi17  = document.input_nilai.presensi17.value;
          quiz17 = document.input_nilai.quiz17.value;
          tugas17 = document.input_nilai.tugas17.value;
          praktek17 = document.input_nilai.praktek17.value;
          uts17 = document.input_nilai.uts17.value;
          uas17 = document.input_nilai.uas17.value;
          document.input_nilai.angka17.value = (presensi17 * bobot_presensi) + (quiz17 * bobot_quiz) + (tugas17 * bobot_tugas) + (praktek17 * bobot_praktek) + (uts17 * bobot_uts) + (uas17 * bobot_uas);

          presensi18  = document.input_nilai.presensi18.value;
          quiz18 = document.input_nilai.quiz18.value;
          tugas18 = document.input_nilai.tugas18.value;
          praktek18 = document.input_nilai.praktek18.value;
          uts18 = document.input_nilai.uts18.value;
          uas18 = document.input_nilai.uas18.value;
          document.input_nilai.angka18.value = (presensi18 * bobot_presensi) + (quiz18 * bobot_quiz) + (tugas18 * bobot_tugas) + (praktek18 * bobot_praktek) + (uts18 * bobot_uts) + (uas18 * bobot_uas);

          presensi19  = document.input_nilai.presensi19.value;
          quiz19 = document.input_nilai.quiz19.value;
          tugas19 = document.input_nilai.tugas19.value;
          praktek19 = document.input_nilai.praktek19.value;
          uts19 = document.input_nilai.uts19.value;
          uas19 = document.input_nilai.uas19.value;
          document.input_nilai.angka19.value = (presensi19 * bobot_presensi) + (quiz19 * bobot_quiz) + (tugas19 * bobot_tugas) + (praktek19 * bobot_praktek) + (uts19 * bobot_uts) + (uas19 * bobot_uas);

          presensi20  = document.input_nilai.presensi20.value;
          quiz20 = document.input_nilai.quiz20.value;
          tugas20 = document.input_nilai.tugas20.value;
          praktek20 = document.input_nilai.praktek20.value;
          uts20 = document.input_nilai.uts20.value;
          uas20 = document.input_nilai.uas20.value;
          document.input_nilai.angka20.value = (presensi20 * bobot_presensi) + (quiz20 * bobot_quiz) + (tugas20 * bobot_tugas) + (praktek20 * bobot_praktek) + (uts20 * bobot_uts) + (uas20 * bobot_uas);

          presensi21  = document.input_nilai.presensi21.value;
          quiz21 = document.input_nilai.quiz21.value;
          tugas21 = document.input_nilai.tugas21.value;
          praktek21 = document.input_nilai.praktek21.value;
          uts21 = document.input_nilai.uts21.value;
          uas21 = document.input_nilai.uas21.value;
          document.input_nilai.angka21.value = (presensi21 * bobot_presensi) + (quiz21 * bobot_quiz) + (tugas21 * bobot_tugas) + (praktek21 * bobot_praktek) + (uts21 * bobot_uts) + (uas21 * bobot_uas);

          presensi22  = document.input_nilai.presensi22.value;
          quiz22 = document.input_nilai.quiz22.value;
          tugas22 = document.input_nilai.tugas22.value;
          praktek22 = document.input_nilai.praktek22.value;
          uts22 = document.input_nilai.uts22.value;
          uas22 = document.input_nilai.uas22.value;
          document.input_nilai.angka22.value = (presensi22 * bobot_presensi) + (quiz22 * bobot_quiz) + (tugas22 * bobot_tugas) + (praktek22 * bobot_praktek) + (uts22 * bobot_uts) + (uas22 * bobot_uas);

          presensi23  = document.input_nilai.presensi23.value;
          quiz23 = document.input_nilai.quiz23.value;
          tugas23 = document.input_nilai.tugas23.value;
          praktek23 = document.input_nilai.praktek23.value;
          uts23 = document.input_nilai.uts23.value;
          uas23 = document.input_nilai.uas23.value;
          document.input_nilai.angka23.value = (presensi23 * bobot_presensi) + (quiz23 * bobot_quiz) + (tugas23 * bobot_tugas) + (praktek23 * bobot_praktek) + (uts23 * bobot_praktek) + (uas23 * bobot_uas);

          presensi24  = document.input_nilai.presensi24.value;
          quiz24 = document.input_nilai.quiz24.value;
          tugas24 = document.input_nilai.tugas24.value;
          praktek24 = document.input_nilai.praktek24.value;
          uts24 = document.input_nilai.uts24.value;
          uas24 = document.input_nilai.uas24.value;
          document.input_nilai.angka24.value = (presensi24 * bobot_presensi) + (quiz24 * bobot_quiz) + (tugas24 * bobot_tugas) + (praktek24 * bobot_praktek) + (uts24 * bobot_uts) + (uas24 * bobot_uas);

          presensi25  = document.input_nilai.presensi25.value;
          quiz25 = document.input_nilai.quiz25.value;
          tugas25 = document.input_nilai.tugas25.value;
          praktek25 = document.input_nilai.praktek25.value;
          uts25 = document.input_nilai.uts25.value;
          uas25 = document.input_nilai.uas25.value;
          document.input_nilai.angka25.value = (presensi25 * bobot_presensi) + (quiz25 * bobot_quiz) + (tugas25 * bobot_tugas) + (praktek25 * bobot_praktek) + (uts25 * bobot_uts) + (uas25 * bobot_uas);

          presensi26  = document.input_nilai.presensi26.value;
          quiz26 = document.input_nilai.quiz26.value;
          tugas26 = document.input_nilai.tugas26.value;
          praktek26 = document.input_nilai.praktek26.value;
          uts26 = document.input_nilai.uts26.value;
          uas26 = document.input_nilai.uas26.value;
          document.input_nilai.angka26.value = (presensi26 * bobot_presensi) + (quiz26 * bobot_quiz) + (tugas26 * bobot_tugas) + (praktek26 * bobot_praktek) + (uts26 * bobot_uts) + (uas26 * bobot_uas);

          presensi27  = document.input_nilai.presensi27.value;
          quiz27 = document.input_nilai.quiz27.value;
          tugas27 = document.input_nilai.tugas27.value;
          praktek27 = document.input_nilai.praktek27.value;
          uts27 = document.input_nilai.uts27.value;
          uas27 = document.input_nilai.uas27.value;
          document.input_nilai.angka27.value = (presensi27 * bobot_presensi) + (quiz27 * bobot_quiz) + (tugas27 * bobot_tugas) + (praktek27 * bobot_praktek) + (uts27 * bobot_uts) + (uas27 * bobot_uas);

          presensi28  = document.input_nilai.presensi28.value;
          quiz28 = document.input_nilai.quiz28.value;
          tugas28 = document.input_nilai.tugas28.value;
          praktek28 = document.input_nilai.praktek28.value;
          uts28 = document.input_nilai.uts28.value;
          uas28 = document.input_nilai.uas28.value;
          document.input_nilai.angka28.value = (presensi28 * bobot_presensi) + (quiz28 * bobot_quiz) + (tugas28 * bobot_tugas) + (praktek28 * bobot_praktek) + (uts28 * bobot_uts) + (uas28 * bobot_uas);

          presensi29  = document.input_nilai.presensi29.value;
          quiz29 = document.input_nilai.quiz29.value;
          tugas29 = document.input_nilai.tugas29.value;
          praktek29 = document.input_nilai.praktek29.value;
          uts29 = document.input_nilai.uts29.value;
          uas29 = document.input_nilai.uas29.value;
          document.input_nilai.angka29.value = (presensi29 * bobot_presensi) + (quiz29 * bobot_quiz) + (tugas29 * bobot_tugas) + (praktek29 * bobot_praktek) + (uts29 * bobot_uts) + (uas29 * bobot_uas);

          presensi30  = document.input_nilai.presensi30.value;
          quiz30 = document.input_nilai.quiz30.value;
          tugas30 = document.input_nilai.tugas30.value;
          praktek30 = document.input_nilai.praktek30.value;
          uts30 = document.input_nilai.uts30.value;
          uas30 = document.input_nilai.uas30.value;
          document.input_nilai.angka30.value = (presensi30 * bobot_presensi) + (quiz30 * bobot_quiz) + (tugas30 * bobot_tugas) + (praktek30 * bobot_praktek) + (uts30 * bobot_uts) + (uas30 * bobot_uas);

          presensi31  = document.input_nilai.presensi31.value;
          quiz31 = document.input_nilai.quiz31.value;
          tugas31 = document.input_nilai.tugas31.value;
          praktek31 = document.input_nilai.praktek31.value;
          uts31 = document.input_nilai.uts31.value;
          uas31 = document.input_nilai.uas31.value;
          document.input_nilai.angka31.value = (presensi31 * bobot_presensi) + (quiz31 * bobot_quiz) + (tugas31 * bobot_tugas) + (praktek31 * bobot_praktek) + (uts31 * bobot_uts) + (uas31 * bobot_uas);

          presensi32  = document.input_nilai.presensi32.value;
          quiz32 = document.input_nilai.quiz32.value;
          tugas32 = document.input_nilai.tugas32.value;
          praktek32 = document.input_nilai.praktek32.value;
          uts32 = document.input_nilai.uts32.value;
          uas32 = document.input_nilai.uas32.value;
          document.input_nilai.angka32.value = (presensi32 * bobot_presensi) + (quiz32 * bobot_quiz) + (tugas32 * bobot_tugas) + (praktek32 * bobot_praktek) + (uts32 * bobot_uts) + (uas32 * bobot_uas);

          presensi33  = document.input_nilai.presensi33.value;
          quiz33 = document.input_nilai.quiz33.value;
          tugas33 = document.input_nilai.tugas33.value;
          praktek33 = document.input_nilai.praktek33.value;
          uts33 = document.input_nilai.uts33.value;
          uas33 = document.input_nilai.uas33.value;
          document.input_nilai.angka33.value = (presensi33 * bobot_presensi) + (quiz33 * bobot_quiz) + (tugas33 * bobot_tugas) + (praktek33 * bobot_praktek) + (uts33 * bobot_uts) + (uas33 * bobot_uas);

          presensi34  = document.input_nilai.presensi34.value;
          quiz34 = document.input_nilai.quiz34.value;
          tugas34 = document.input_nilai.tugas34.value;
          praktek34 = document.input_nilai.praktek34.value;
          uts34 = document.input_nilai.uts34.value;
          uas34 = document.input_nilai.uas34.value;
          document.input_nilai.angka34.value = (presensi34 * bobot_presensi) + (quiz34 * bobot_quiz) + (tugas34 * bobot_tugas) + (praktek34 * bobot_praktek) + (uts34 * bobot_uts) + (uas34 * bobot_uas);

          presensi35  = document.input_nilai.presensi35.value;
          quiz35 = document.input_nilai.quiz35.value;
          tugas35 = document.input_nilai.tugas35.value;
          praktek35 = document.input_nilai.praktek35.value;
          uts35 = document.input_nilai.uts35.value;
          uas35 = document.input_nilai.uas35.value;
          document.input_nilai.angka35.value = (presensi35 * bobot_presensi) + (quiz35 * bobot_quiz) + (tugas35 * bobot_tugas) + (praktek35 * bobot_praktek) + (uts35 * bobot_uts) + (uas35 * bobot_uas);

          presensi36  = document.input_nilai.presensi36.value;
          quiz36 = document.input_nilai.quiz36.value;
          tugas36 = document.input_nilai.tugas36.value;
          praktek36 = document.input_nilai.praktek36.value;
          uts36 = document.input_nilai.uts46.value;
          uas36 = document.input_nilai.uas36.value;
          document.input_nilai.angka36.value = (presensi36 * bobot_presensi) + (quiz36 * bobot_quiz) + (tugas36 * bobot_tugas) + (praktek36 * bobot_praktek) + (uts36 * bobot_uts) + (uas36 * bobot_uas);

          presensi37  = document.input_nilai.presensi37.value;
          quiz37 = document.input_nilai.quiz37.value;
          tugas37 = document.input_nilai.tugas37.value;
          praktek37 = document.input_nilai.praktek37.value;
          uts37 = document.input_nilai.uts37.value;
          uas37 = document.input_nilai.uas37.value;
          document.input_nilai.angka37.value = (presensi37 * bobot_presensi) + (quiz37 * bobot_quiz) + (tugas37 * bobot_tugas) + (praktek37 * bobot_praktek) + (uts37 * bobot_uts) + (uas37 * bobot_uas);

          presensi38  = document.input_nilai.presensi38.value;
          quiz38 = document.input_nilai.quiz38.value;
          tugas38 = document.input_nilai.tugas38.value;
          praktek38 = document.input_nilai.praktek38.value;
          uts38 = document.input_nilai.uts38.value;
          uas38 = document.input_nilai.uas38.value;
          document.input_nilai.angka38.value = (presensi38 * bobot_presensi) + (quiz38 * bobot_quiz) + (tugas38 * bobot_tugas) + (praktek38 * bobot_praktek) + (uts38 * bobot_uts) + (uas38 * bobot_uas);

          presensi39  = document.input_nilai.presensi39.value;
          quiz39 = document.input_nilai.quiz39.value;
          tugas39 = document.input_nilai.tugas39.value;
          praktek39 = document.input_nilai.praktek39.value;
          uts39 = document.input_nilai.uts39.value;
          uas39 = document.input_nilai.uas39.value;
          document.input_nilai.angka39.value = (presensi39 * bobot_presensi) + (quiz39 * bobot_quiz) + (tugas39 * bobot_tugas) + (praktek39 * bobot_praktek) + (uts39 * bobot_uts) + (uas39 * bobot_uas);

          presensi40  = document.input_nilai.presensi40.value;
          quiz40 = document.input_nilai.quiz40.value;
          tugas40 = document.input_nilai.tugas40.value;
          praktek40 = document.input_nilai.praktek40.value;
          uts40 = document.input_nilai.uts40.value;
          uas40 = document.input_nilai.uas40.value;
          document.input_nilai.angka40.value = (presensi40 * bobot_presensi) + (quiz40 * bobot_quiz) + (tugas40 * bobot_tugas) + (praktek40 * bobot_praktek) + (uts40 * bobot_uts) + (uas40 * bobot_uas);
      }
      function stopCalc(){
      clearInterval(interval);
      }
</script>
<style type="text/css">
    .input-hover:hover{
        background-color: #f5f5f5;
    }
</style>
</head>
<body>
        <div class="row">
                        <div class="col-md-12">
                            <!-- Advanced Tables -->
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                     Detail
                                </div>
                                <div class="panel-body">
                                    <table>
                                        <tr>
                                            <td><label>Prodi</label></td>
                                            <td style="padding:0px 8px 0px 8px"><label> : </label></td>
                                            <td><?php echo $nama_prodi ?></td>
                                            <td width="50px"></td>
                                            <td><label>Semester</label></td>
                                            <td style="padding:0px 8px 0px 8px"><label> : </label></td>
                                            <td><?php echo $nama_semester; ?></td>
                                        </tr>
                                        <tr>
                                            <td><label>Mata Kuliah</label></td>
                                            <td style="padding:0px 8px 0px 8px"><label> : </label></td>
                                            <td><?php echo $nama_makul; ?></td>
                                            <td width="50px"></td>
                                            <td><label>Dosen Pengampu</label></td>
                                            <td style="padding:0px 8px 0px 8px"><label> : </label></td>
                                            <td><?php echo $nama_dosen; ?></td>
                                        </tr>
                                        <tr>
                                            <td><label>Kode MK</label></td>
                                            <td style="padding:0px 8px 0px 8px"><label> : </label></td>
                                            <td><?php echo $id_makul; ?></td>
                                        </tr>
                                        
                                    </table>
                                </div>
                            </div>
                            <!--End Advanced Tables -->
                        </div>
        </div>
        <div class="row">
                    <div class="col-md-12 col-sm-12">
                        <!-- Advanced Tables -->
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                 Daftar Mahasiswa
                            </div>
                            <div class="panel-body">
                              <form name="input_nilai" role="form" method="POST">
                                <table width="100%" class="table table-bordered table-hover" id="datatables-example">
                                    <thead>
                                        <tr>
                                        <th style="text-align:center;padding-bottom:30px;" rowspan="2">No.</th>
                                        <th style="width:9%;text-align:center;padding-bottom:30px;" rowspan="2">Nim</th>
                                        <th style="width:20%;text-align:center;padding-bottom:30px;" rowspan="2">Nama</th>
                                        <th colspan="6" style="text-align:center;padding-bottom:10px;">Unsur Penilaian</th>
                                        <th rowspan="2" style="text-align:center;padding-bottom:30px;">Angka</th>
                                        </tr>
                                        <tr>
                                        <th>Presensi</th>
                                        <th>Quiz</th>
                                        <th>Tugas</th>
                                        <th>Praktek</th>
                                        <th>UTS</th>
                                        <th>UAS</th>
                                        </tr>
                                    </thead>
                                    
                                    
                                    <tbody>
                                        
                                        <?php
                                        for ($i=0; $i < $jumlahrow; $i++) { 
                                        $row = mysql_fetch_array($query);
                                        ?>
                                        <tr>
                                        <td><?php echo $no++."."; ?></td>
                                        <td><input style="border:0px;width:100%;height:21px;margin-top:-2px;background-color:#fff;" type="text" name="nim[]" id="<?php echo 'nim'.$i; ?>" class="input-hover form-control" readonly="" value="<?php echo $row['nim']; ?>"></td>
                                        <td><input style="border:0px;width:100%;height:21px;margin-top:-2px;background-color:#fff;" type="text" name="nama[]" id="<?php echo "nama".$i; ?>" class="input-hover form-control" readonly="" value="<?php echo $row['nama']; ?>"></td>
                                        <td><input style="border:0px;width:100%;height:21px;margin-top:-2px;" type="text" name="presensi[]" id="<?php echo "presensi".$i; ?>" class="input-hover form-control" onFocus="startCalc();" onBlur="stopCalc();"></td>
                                        <td><input style="border:0px;width:100%;height:21px;margin-top:-2px;" type="text" name="quiz[]" id="<?php echo "quiz".$i; ?>" class="input-hover form-control" onFocus="startCalc();" onBlur="stopCalc();"></td>
                                        <td><input style="border:0px;width:100%;height:21px;margin-top:-2px;" type="text" name="tugas[]" id="<?php echo "tugas".$i; ?>" class="input-hover form-control" onFocus="startCalc();" onBlur="stopCalc();"></td>
                                        <td><input style="border:0px;width:100%;height:21px;margin-top:-2px;" type="text" name="praktek[]" id="<?php echo 'praktek'.$i; ?>" class="input-hover form-control" onFocus="startCalc();" onBlur="stopCalc();"></td>
                                        <td><input style="border:0px;width:100%;height:21px;margin-top:-2px;" type="text" name="uts[]" id="<?php echo 'uts'.$i; ?>" class="input-hover form-control" onFocus="startCalc();" onBlur="stopCalc();"></td>
                                        <td><input style="border:0px;width:100%;height:21px;margin-top:-2px;" type="text" name="uas[]" id="<?php echo 'uas'.$i; ?>" class="input-hover form-control" onFocus="startCalc();" onBlur="stopCalc();"></td>
                                        <td><input style="border:0px;width:100%;height:21px;margin-top:-2px;" type="text" name="angka[]" id="<?php echo 'angka'.$i; ?>" class="input-hover form-control" readonly="" onFocus="starthuruf();" onBlur="stophuruf();"></td>
                                        </tr>
                                        <?php } ?>                                        
                                        

                                    </tbody>
                                </table>
                                <input type="hidden" name="jumlahrow" value="<?php echo "$jumlahrow";?>">
                                <input type="hidden" name="kelas_kelas" value="<?php echo "$id_kelas"; ?>">
                                <input type="hidden" name="semester_semester" value="<?php echo "$id_semester"; ?>">
                                <input type="hidden" name="makul_makul" value="<?php echo "$id_makul"; ?>">
                                <button type="submit" class="btn btn-primary" name="masukdb"> Submit </button>
                              </form>               
                            </div>
                        </div>
                        <!--End Advanced Tables -->
                    </div>
        </div>
    
<script src="assets/js/jquery-1.10.2.js"></script>
      <!-- BOOTSTRAP SCRIPTS -->
    <script src="assets/js/bootstrap.min.js"></script>
    <!-- METISMENU SCRIPTS -->
    <script src="assets/js/jquery.metisMenu.js"></script>
     <!-- DATA TABLE SCRIPTS -->
    <script src="assets/js/dataTables/jquery.dataTables.js"></script>
    <script src="assets/js/dataTables/dataTables.bootstrap.js"></script>
        <script>
            $(document).ready(function () {
                $('#dataTables-example').dataTable();
            });
    </script>
         <!-- CUSTOM SCRIPTS -->
    <script src="assets/js/custom.js"></script>

</body>
</html>
