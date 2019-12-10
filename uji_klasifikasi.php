<!DOCTYPE html>
<html>
    <head>
        <title>Title</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="css/uikit.min.css" />
        <script src="js/uikit.min.js"></script>
        <script src="js/uikit-icons.min.js"></script>
        <!-- UIkit CSS -->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/uikit@3.2.4/dist/css/uikit.min.css" />
        <!-- UIkit JS -->
        <script src="https://cdn.jsdelivr.net/npm/uikit@3.2.4/dist/js/uikit.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/uikit@3.2.4/dist/js/uikit-icons.min.js"></script>
    </head>
    <body>
    <div uk-sticky="sel-target: .uk-navbar-container; cls-active: uk-navbar-sticky">
      <nav class="uk-background-secondary uk-light" uk-navbar="dropbar: true;">
        <div class="uk-navbar-left">

            <ul class="uk-navbar-nav">
              <li><a href="index.php">Naive Bayes</a></li>
              <li><a href="view_dataset.php">Dataset</a></li>
              <li><a href="klasifikasi_dataset.php">Klasifikasi</a></li>
              <li class="uk-active"><a href="">Uji</a></li>
              <li><a href="data_uji.php">Data Hasil Uji</a></li>
            </ul>

        </div>
    </div>
      <div class="uk-container uk-margin-large-top">
        <div class="uk-heading-small uk-text-center">Pengujian Naive Bayes</div>
      <form action="uji_klasifikasi.php" method="post" name="form1">
      <table class="uk-table uk-table-striped">
    <thead>
        <tr>
            <th>Nama</th>
            <td><input type="text" class="uk-input" name="Nama_uji" required></td>
        </tr>
        <tr>
            <th>Umur</th>
            <td><input type="number" class="uk-input" name="Umur_uji" required></td>
        </tr>
        <tr>
            <th>Diabetes</th>
            <td><select class="uk-select" name="Diabetes_uji" required>
              <option value='' disabled selected >Status Diabetes</option>
              <option value="Ya">Ya</option>
              <option value="Tidak">Tidak</option>
            </td>
    </select>
        </tr>
        <tr>
            <th>Hipertensi</th>
            <td><select class="uk-select" name="Hipertensi_uji" required>
              <option value='' disabled selected >Status Hipertensi</option>
              <option value="Ya">Ya</option>
              <option value="Tidak">Tidak</option>
            </td>
        </tr>
        <tr>
            <th>Intraokular</th>
            <td><input type="number" class="uk-input" name="Intraokular_uji" required></td>
        </tr>
        <tr>
            <td></td>
            <td><input class="uk-button uk-button-secondary" type="submit" name="Submit" value="Proses"></td>
        </tr>
    </thead>
    </div>
</table>
</form>
<?php
include_once("config.php");
include_once("klasifikasi.php");

if(isset($_POST['Submit'])){

  $nama_uji = $_POST['Nama_uji'];
  $umur_uji = $_POST['Umur_uji'];
  $diabetes_uji = $_POST['Diabetes_uji'];
  $hipertensi_uji = $_POST['Hipertensi_uji'];
  $intraokular_uji = $_POST['Intraokular_uji'];

  $row_umur = mysqli_fetch_assoc($result_umur);
  if ($umur_uji < 46)
  {
    $umur_uji_ya = $row_umur['P_UMUR_1_YA'];
    $umur_uji_tidak = $row_umur['P_UMUR_1_TIDAK'];
  }
  elseif ($umur_uji > 45 and $umur_uji < 56 )
  {
    $umur_uji_ya = $row_umur['P_UMUR_2_YA'];
    $umur_uji_tidak = $row_umur['P_UMUR_2_TIDAK'];
  }
  elseif ($umur_uji > 55 and $umur_uji < 66 )
  {
    $umur_uji_ya = $row_umur['P_UMUR_3_YA'];
    $umur_uji_tidak = $row_umur['P_UMUR_3_TIDAK'];
  }
  elseif ($umur_uji > 65 ){
    $umur_uji_ya = $row_umur['P_UMUR_4_YA'];
    $umur_uji_tidak = $row_umur['P_UMUR_4_TIDAK'];
  }

  $row_diabetes = mysqli_fetch_assoc($result_diabetes);
  if ($diabetes_uji == "Ya" )
  {
    $diabetes_uji_ya = $row_diabetes['P_DIABETES_YA_YA'];
    $diabetes_uji_tidak = $row_diabetes['P_DIABETES_YA_TIDAK'];
  }
  elseif ($diabetes_uji == "Tidak" )
  {
    $diabetes_uji_ya = $row_diabetes['P_DIABETES_TIDAK_YA'];
    $diabetes_uji_tidak = $row_diabetes['P_DIABETES_TIDAK_TIDAK'];
  }
  $row_hipertensi = mysqli_fetch_assoc($result_hipertensi);
  if ($hipertensi_uji == "Ya" )
  {
    $hipertensi_uji_ya = $row_hipertensi['P_HIPERTENSI_YA_YA'];
    $hipertensi_uji_tidak = $row_hipertensi['P_HIPERTENSI_YA_TIDAK'];

  }
  elseif ($hipertensi_uji == "Tidak" )
  {
    $hipertensi_uji_ya = $row_hipertensi['P_HIPERTENSI_TIDAK_YA'];
    $hipertensi_uji_tidak = $row_hipertensi['P_HIPERTENSI_TIDAK_TIDAK'];
  }

  $row_intraokular = mysqli_fetch_assoc($result_intraokular);
  if ($intraokular_uji < 21 )
  {
    $intraokular_uji_ya = $row_intraokular['P_INTRAOKULAR_1_YA'];
    $intraokular_uji_tidak = $row_intraokular['P_INTRAOKULAR_1_TIDAK'];

  }
  elseif ($intraokular_uji > 20 and $intraokular_uji < 42 )
  {
    $intraokular_uji_ya = $row_intraokular['P_INTRAOKULAR_2_YA'];
    $intraokular_uji_tidak = $row_intraokular['P_INTRAOKULAR_2_TIDAK'];
  }
  elseif ($intraokular_uji > 40 and $intraokular_uji < 62 )
  {
    $intraokular_uji_ya = $row_intraokular['P_INTRAOKULAR_3_YA'];
    $intraokular_uji_tidak = $row_intraokular['P_INTRAOKULAR_3_TIDAK'];
  }
  elseif ($intraokular_uji > 61 ){
    $intraokular_uji_ya = $row_intraokular['P_INTRAOKULAR_4_YA'];
    $intraokular_uji_tidak = $row_intraokular['P_INTRAOKULAR_4_TIDAK'];
  }
  $row = mysqli_fetch_assoc($result);
  if ($umur_uji_ya == 0 OR $diabetes_uji_ya == 0 OR $hipertensi_uji_ya == 0 OR $intraokular_uji_ya == 0)
  {
      $umur_uji_ya = $umur_uji_ya+1;
      $diabetes_uji_ya = $diabetes_uji_ya+1;
      $hipertensi_uji_ya = $hipertensi_uji_ya+1;
      $intraokular_uji_ya = $intraokular_uji_ya+1;
      $row['P_YA'] = $row['P_YA']+4;
      echo "<br>Dikarenakan salah satu nilai YA bernilai 0 maka dilakukan laplace correction, dimana setiap nilai  UMUR/DIABETES/HIERTENSI/INTRAOKULAR ditambah 1 dan jumlah keseluruhan P(KEBUTAAN | YA) yang bernilai nol ditambah 4.";

  }else{
    echo "";
  }
  if($umur_uji_tidak == 0 OR $diabetes_uji_tidak == 0 OR $hipertensi_uji_tidak == 0 OR $intraokular_uji_tidak == 0)
  {
      $umur_uji_tidak = $umur_uji_tidak+1;
      $diabetes_uji_tidak = $diabetes_uji_tidak+1;
      $hipertensi_uji_tidak = $hipertensi_uji_tidak+1;
      $intraokular_uji_tidak = $intraokular_uji_tidak+1;
      $row['P_TIDAK'] = $row['P_TIDAK']+4;
      echo "<br>Dikarenakan salah satu nilai TIDAK bernilai 0 maka dilakukan laplace correction, dimana setiap nilai  UMUR/DIABETES/HIERTENSI/INTRAOKULAR ditambah 1 dan jumlah keseluruhan P(KEBUTAAN | TIDAK) yang bernilai nol ditambah 4.";
  }else{
    echo "";
  }
  ?>

  <table class="uk-table uk-table-striped uk-table-middle">
  <thead>
      <tr>
          <th colspan=2 class="uk-text-center">HASIL PROSES PERHITUNGAN</th>
      </tr>
  </thead>
  <tbody>
  <tr>
  <?php
  echo "<td>NAMA </td>
        <td> : ".$nama_uji."</td></tr>";
  echo "<tr><td>P (X) </td><td> : P(UMUR = ".$umur_uji." )*P(DIABETES = ".$diabetes_uji." )*P(HIPERTENSI = ".$hipertensi_uji." )*P(INTRAOKULAR = ".$intraokular_uji." )</td></tr>";

  $P_kebutaan_ya = ($umur_uji_ya / $row['P_YA'])*($diabetes_uji_ya / $row['P_YA'])*($hipertensi_uji_ya / $row['P_YA'])*($intraokular_uji_ya / $row['P_YA'])*($row['P_YA'] / $row['P_Kebutaan']);
  $FormattedNum = number_format($P_kebutaan_ya, 10);
  echo "<tr><td>P(KEBUTAAN = YA | X)</td><td> : ".$umur_uji_ya." / ".$row['P_YA']." * ".$diabetes_uji_ya." / ".$row['P_YA']." * ".$hipertensi_uji_ya." / ".$row['P_YA']." * ".$intraokular_uji_ya." / ".$row['P_YA']." * ".$row['P_YA']." / ".$row['P_Kebutaan'];
  echo " = ".$FormattedNum."</td></tr>";
  $KEBUTAAN_YA = $FormattedNum;

  $P_kebutaan_tidak = ($umur_uji_tidak / $row['P_TIDAK'])*($diabetes_uji_tidak / $row['P_TIDAK'])*($hipertensi_uji_tidak / $row['P_TIDAK'])*($intraokular_uji_tidak / $row['P_TIDAK'])*($row['P_TIDAK'] / $row['P_Kebutaan']);
  $FormattedNum2 = number_format($P_kebutaan_tidak, 10);

  echo "<tr><td>P(KEBUTAAN = TIDAK | X)</td><td> : ".$umur_uji_tidak." / ".$row['P_TIDAK']." * ".$diabetes_uji_tidak." / ".$row['P_TIDAK']." * ".$hipertensi_uji_tidak." / ".$row['P_TIDAK']." * ".$intraokular_uji_tidak." / ".$row['P_TIDAK']." * ".$row['P_TIDAK']." / ".$row['P_Kebutaan'];
  echo " = ".$FormattedNum2."</td></tr>";
  $KEBUTAAN_TIDAK = $FormattedNum2;

  if ($KEBUTAAN_YA > $KEBUTAAN_TIDAK){
    echo "<tr><td colspan=2 >Nilai P(KEBUTAAN = YA ) > P(KEBUTAAN = YA), maka kemungkinana ".$nama_uji." untuk buta lebih besar dengan probabilitas ".$KEBUTAAN_YA."</td></tr>";
    $kebutaan_uji = "YA";
  }
  if ($KEBUTAAN_YA < $KEBUTAAN_TIDAK){
    echo "<tr><td colspan=2 >Nilai P(KEBUTAAN = TIDAK ) > P(KEBUTAAN = YA), maka kemungkinana ".$nama_uji." untuk tidak buta lebih besar dengan probabilitas ".$KEBUTAAN_TIDAK."</td></tr>";
    $kebutaan_uji = "TIDAK";
  }

  $sql = "INSERT INTO uji_data(Nama_uji, Umur_uji, Diabetes_uji, Hipertensi_uji, Intraokular_uji, Kebutaan_uji) VALUES('$nama_uji','$umur_uji','$diabetes_uji','$hipertensi_uji','$intraokular_uji','$kebutaan_uji')";
  $result = mysqli_query($conn, $sql);
}
?>
<div class="uk-container uk-margin-large-bottom">
</html>
