<?php

include_once("config.php");
include_once("klasifikasi.php");

$no = 1;

?>

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
                <li class="uk-active"><a href="">Klasifikasi</a></li>
                <li><a href="uji_klasifikasi.php">Uji</a></li>
                <li><a href="data_uji.php">Data Hasil Uji</a></li>
            </ul>

        </div>
    </div>
      <div class="uk-container uk-margin-large-top">
        <div class="uk-heading-small uk-text-center">Klasifikasi Dataset</div>
        <table class="uk-table uk-table-striped uk-table-middle">
      <thead>
          <tr>
              <th colspan=2 class="uk-text-center">Kebutaan</th>
              <th class="uk-text-center">P(Kebutaan)</th>
          </tr>
      </thead>
      <tbody>
      <?php
      $row = mysqli_fetch_assoc($result);
      echo "<tr>";
        echo "<td>YA</td>";
        echo "<td class='uk-text-center'>". $row['P_YA']."</td>";
        echo "<td class='uk-text-center'>P_YA : ". $row['P_YA']." / ".$row['P_Kebutaan']."</td></tr>";
      echo "<tr>";
        echo "<td>TIDAK</td>";
        echo "<td class='uk-text-center'>". $row['P_TIDAK']."</td>";
        echo "<td class='uk-text-center'>P_TIDAK : ". $row['P_TIDAK']." / ".$row['P_Kebutaan']."</td></tr>";
        echo "<tr>";
          echo "<td>TOTAL</td>";
          echo "<td class='uk-text-center'>". $row['P_Kebutaan']."</td>";
          echo "<td class='uk-text-center'>". $row['Score']." % </td></tr>";
      ?>
    </tbody>
  </table>

  <table class="uk-table uk-table-striped uk-table-middle">
<thead>
    <tr>
        <th colspan=5 class="uk-text-center">Umur</th>
    </tr>
</thead>
<tbody>
<?php
$row_umur = mysqli_fetch_assoc($result_umur);
echo "<tr>";
  echo "<td></td>";
  echo "<td>YA</td>";
  echo "<td>TIDAK</td>";
  echo "<td>P(UMUR | KEBUTAAN = YA)</td>";
  echo "<td>P(UMUR | KEBUTAAN = TIDAK)</td>
</tr>";
echo "<tr>";
  echo "<td>35 - 45</td>";
  echo "<td>".$row_umur['P_UMUR_1_YA']."</td>";
  echo "<td>".$row_umur['P_UMUR_1_TIDAK']."</td>";
  echo "<td>".$row_umur['P_UMUR_1_YA']." / ".$row['P_YA']."</td>";
  echo "<td>".$row_umur['P_UMUR_1_TIDAK']." / ".$row['P_TIDAK']."</td>
</tr>";
echo "<tr>";
  echo "<td>35 - 45</td>";
  echo "<td>".$row_umur['P_UMUR_2_YA']."</td>";
  echo "<td>".$row_umur['P_UMUR_2_TIDAK']."</td>";
  echo "<td>".$row_umur['P_UMUR_2_YA']." / ".$row['P_YA']."</td>";
  echo "<td>".$row_umur['P_UMUR_2_TIDAK']." / ".$row['P_TIDAK']."</td>
</tr>";
echo "<tr>";
  echo "<td>35 - 45</td>";
  echo "<td>".$row_umur['P_UMUR_3_YA']."</td>";
  echo "<td>".$row_umur['P_UMUR_3_TIDAK']."</td>";
  echo "<td>".$row_umur['P_UMUR_3_YA']." / ".$row['P_YA']."</td>";
  echo "<td>".$row_umur['P_UMUR_3_TIDAK']." / ".$row['P_TIDAK']."</td>
</tr>";
echo "<tr>";
  echo "<td>35 - 45</td>";
  echo "<td>".$row_umur['P_UMUR_4_YA']."</td>";
  echo "<td>".$row_umur['P_UMUR_4_TIDAK']."</td>";
  echo "<td>".$row_umur['P_UMUR_4_YA']." / ".$row['P_YA']."</td>";
  echo "<td>".$row_umur['P_UMUR_4_TIDAK']." / ".$row['P_TIDAK']."</td>
</tr>";
?>
</tbody>
</table>

<table class="uk-table uk-table-striped uk-table-middle">
<thead>
  <tr>
      <th colspan=5 class="uk-text-center">Diabetes</th>
  </tr>
</thead>
<tbody>
<?php
$row_diabetes = mysqli_fetch_assoc($result_diabetes);
echo "<tr>";
  echo "<td></td>";
  echo "<td>YA</td>";
  echo "<td>TIDAK</td>";
  echo "<td>P(DIABETES | KEBUTAAN = YA)</td>";
  echo "<td>P(DIABETES | KEBUTAAN = TIDAK)</td></tr>";
echo "<tr>";
echo "<tr>";
  echo "<td>YA</td>";
  echo "<td>".$row_diabetes['P_DIABETES_YA_YA']."</td>";
  echo "<td>".$row_diabetes['P_DIABETES_YA_TIDAK']."</td>";
  echo "<td>".$row_diabetes['P_DIABETES_YA_YA']." / ".$row['P_YA']."</td>";
  echo "<td>".$row_diabetes['P_DIABETES_YA_TIDAK']." / ".$row['P_TIDAK']."</td>";
echo "<tr>";
echo "<tr>";
  echo "<td>TIDAK</td>";
  echo "<td>".$row_diabetes['P_DIABETES_TIDAK_YA']."</td>";
  echo "<td>".$row_diabetes['P_DIABETES_TIDAK_TIDAK']."</td>";
  echo "<td>".$row_diabetes['P_DIABETES_TIDAK_YA']." / ".$row['P_YA']."</td>";
  echo "<td>".$row_diabetes['P_DIABETES_TIDAK_TIDAK']." / ".$row['P_TIDAK']."</td>";
echo "<tr>";
?>
</tbody>
</table>


<table class="uk-table uk-table-striped uk-table-middle">
<thead>
  <tr>
      <th colspan=5 class="uk-text-center">Hipertensi</th>
  </tr>
</thead>
<tbody>
<?php
$row_hipertensi = mysqli_fetch_assoc($result_hipertensi);
echo "<tr>";
  echo "<td></td>";
  echo "<td>YA</td>";
  echo "<td>TIDAK</td>";
  echo "<td>P(HIPERTENSI | KEBUTAAN = YA)</td>";
  echo "<td>P(HIPERTENSI | KEBUTAAN = TIDAK)</td></tr>";
echo "<tr>";
echo "<tr>";
  echo "<td>YA</td>";
  echo "<td>".$row_hipertensi['P_HIPERTENSI_YA_YA']."</td>";
  echo "<td>".$row_hipertensi['P_HIPERTENSI_YA_TIDAK']."</td>";
  echo "<td>".$row_hipertensi['P_HIPERTENSI_YA_YA']." / ".$row['P_YA']."</td>";
  echo "<td>".$row_hipertensi['P_HIPERTENSI_YA_TIDAK']." / ".$row['P_TIDAK']."</td>";
echo "<tr>";
echo "<tr>";
  echo "<td>TIDAK</td>";
  echo "<td>".$row_hipertensi['P_HIPERTENSI_TIDAK_YA']."</td>";
  echo "<td>".$row_hipertensi['P_HIPERTENSI_TIDAK_TIDAK']."</td>";
  echo "<td>".$row_hipertensi['P_HIPERTENSI_TIDAK_YA']." / ".$row['P_YA']."</td>";
  echo "<td>".$row_hipertensi['P_HIPERTENSI_TIDAK_TIDAK']." / ".$row['P_TIDAK']."</td>";
echo "<tr>";
?>
</tbody>
</table>

<table class="uk-table uk-table-striped uk-table-middle">
<thead>
  <tr>
      <th colspan=5 class="uk-text-center">Intraokular</th>
  </tr>
</thead>
<tbody>
<?php
$row_intraokular = mysqli_fetch_assoc($result_intraokular);
echo "<tr>";
echo "<td></td>";
echo "<td>YA</td>";
echo "<td>TIDAK</td>";
echo "<td>P(UMUR | KEBUTAAN = YA)</td>";
echo "<td>P(UMUR | KEBUTAAN = TIDAK)</td>
</tr>";
echo "<tr>";
echo "<td> < 21</td>";
echo "<td>".$row_intraokular['P_INTRAOKULAR_1_YA']."</td>";
echo "<td>".$row_intraokular['P_INTRAOKULAR_1_TIDAK']."</td>";
echo "<td>".$row_intraokular['P_INTRAOKULAR_1_YA']." / ".$row['P_YA']."</td>";
echo "<td>".$row_intraokular['P_INTRAOKULAR_1_TIDAK']." / ".$row['P_TIDAK']."</td>
</tr>";
echo "<tr>";
echo "<td>21 - 41</td>";
echo "<td>".$row_intraokular['P_INTRAOKULAR_2_YA']."</td>";
echo "<td>".$row_intraokular['P_INTRAOKULAR_2_TIDAK']."</td>";
echo "<td>".$row_intraokular['P_INTRAOKULAR_2_YA']." / ".$row['P_YA']."</td>";
echo "<td>".$row_intraokular['P_INTRAOKULAR_2_TIDAK']." / ".$row['P_TIDAK']."</td>
</tr>";
echo "<tr>";
echo "<td>41 - 61</td>";
echo "<td>".$row_intraokular['P_INTRAOKULAR_3_YA']."</td>";
echo "<td>".$row_intraokular['P_INTRAOKULAR_3_TIDAK']."</td>";
echo "<td>".$row_intraokular['P_INTRAOKULAR_3_YA']." / ".$row['P_YA']."</td>";
echo "<td>".$row_intraokular['P_INTRAOKULAR_3_TIDAK']." / ".$row['P_TIDAK']."</td>
</tr>";
echo "<tr>";
echo "<td> > 61</td>";
echo "<td>".$row_intraokular['P_INTRAOKULAR_4_YA']."</td>";
echo "<td>".$row_intraokular['P_INTRAOKULAR_4_TIDAK']."</td>";
echo "<td>".$row_intraokular['P_INTRAOKULAR_4_YA']." / ".$row['P_YA']."</td>";
echo "<td>".$row_intraokular['P_INTRAOKULAR_4_TIDAK']." / ".$row['P_TIDAK']."</td>
</tr>";
?>
</tbody>
</table>
<table class="uk-table uk-table-striped uk-table-middle">
<thead>
  <tr>
      <th colspan=2 class="uk-text-center">Probabilitas Kebutaan terjadi</th>
      <th colspan=2 class="uk-text-center">Probabilitas kebutaan tidak terjadi</th>
  </tr>
</thead>
<tbody>
<?php
  echo "<tr>";
  echo "<td>P (UMUR = (35-45) | KEBUTAAN = YA) = </td>";
  echo "<td>".$row_umur['P_UMUR_1_YA']." / ".$row['P_YA']."</td>";
  echo "<td>P (UMUR = (35-45) | KEBUTAAN = TIDAK) = </td>";
  echo "<td>".$row_umur['P_UMUR_1_TIDAK']." / ".$row['P_TIDAK']."</td></tr>";

  echo "<tr>";
  echo "<td>P (UMUR = (45-55) | KEBUTAAN = YA) = </td>";
  echo "<td>".$row_umur['P_UMUR_2_YA']." / ".$row['P_YA']."</td>";
  echo "<td>P (UMUR = (45-55) | KEBUTAAN = TIDAK) = </td>";
  echo "<td>".$row_umur['P_UMUR_2_TIDAK']." / ".$row['P_TIDAK']."</td></tr>";

  echo "<tr>";
  echo "<td>P (UMUR = (55-65) | KEBUTAAN = YA) = </td>";
  echo "<td>".$row_umur['P_UMUR_3_YA']." / ".$row['P_YA']."</td>";
  echo "<td>P (UMUR = (55-65) | KEBUTAAN = TIDAK) = </td>";
  echo "<td>".$row_umur['P_UMUR_3_TIDAK']." / ".$row['P_TIDAK']."</td></tr>";

  echo "<tr>";
  echo "<td>P (UMUR = (65-75) | KEBUTAAN = YA) = </td>";
  echo "<td>".$row_umur['P_UMUR_4_YA']." / ".$row['P_YA']."</td>";
  echo "<td>P (UMUR = (65-75) | KEBUTAAN = TIDAK) = </td>";
  echo "<td>".$row_umur['P_UMUR_4_TIDAK']." / ".$row['P_TIDAK']."</td></tr>";

  echo "<tr><td></td><td></td><td></td><td></td></tr><tr>";
  echo "<td>P (DIABETES = YA | KEBUTAAN = YA) = </td>";
  echo "<td>".$row_diabetes['P_DIABETES_YA_YA']." / ".$row['P_YA']."</td>";
  echo "<td>P (DIABETES = YA | KEBUTAAN = TIDAK) = </td>";
  echo "<td>".$row_diabetes['P_DIABETES_YA_TIDAK']." / ".$row['P_TIDAK']."</td></tr>";

  echo "<tr>";
  echo "<td>P (DIABETES = TIDAK | KEBUTAAN = YA) = </td>";
  echo "<td>".$row_diabetes['P_DIABETES_TIDAK_YA']." / ".$row['P_YA']."</td>";
  echo "<td>P (DIABETES = TIDAK | KEBUTAAN = TIDAK) = </td>";
  echo "<td>".$row_diabetes['P_DIABETES_TIDAK_TIDAK']." / ".$row['P_TIDAK']."</td></tr>";

  echo "<tr><td></td><td></td><td></td><td></td></tr><tr>";
  echo "<td>P (HIPERTENSI = YA | KEBUTAAN = YA) = </td>";
  echo "<td>".$row_hipertensi['P_HIPERTENSI_YA_YA']." / ".$row['P_YA']."</td>";
  echo "<td>P (HIPERTENSI = YA | KEBUTAAN = TIDAK) = </td>";
  echo "<td>".$row_hipertensi['P_HIPERTENSI_YA_TIDAK']." / ".$row['P_TIDAK']."</td></tr>";

  echo "<tr>";
  echo "<td>P (HIPERTENSI = TIDAK | KEBUTAAN = YA) = </td>";
  echo "<td>".$row_hipertensi['P_HIPERTENSI_TIDAK_YA']." / ".$row['P_YA']."</td>";
  echo "<td>P (HIPERTENSI = TIDAK | KEBUTAAN = TIDAK) = </td>";
  echo "<td>".$row_hipertensi['P_HIPERTENSI_TIDAK_TIDAK']." / ".$row['P_TIDAK']."</td></tr>";

  echo "<tr><td></td><td></td><td></td><td></td></tr><tr>";
  echo "<td>P (INTRAOKULAR = (<21) | KEBUTAAN = YA) = </td>";
  echo "<td>".$row_intraokular['P_INTRAOKULAR_1_YA']." / ".$row['P_YA']."</td>";
  echo "<td>P (INTRAOKULAR = (<21) | KEBUTAAN = TIDAK) = </td>";
  echo "<td>".$row_intraokular['P_INTRAOKULAR_1_TIDAK']." / ".$row['P_TIDAK']."</td></tr>";

  echo "<tr>";
  echo "<td>P (INTRAOKULAR = (21-41) | KEBUTAAN = YA) = </td>";
  echo "<td>".$row_intraokular['P_INTRAOKULAR_2_YA']." / ".$row['P_YA']."</td>";
  echo "<td>P (INTRAOKULAR = (21-41) | KEBUTAAN = TIDAK) = </td>";
  echo "<td>".$row_intraokular['P_INTRAOKULAR_2_TIDAK']." / ".$row['P_TIDAK']."</td></tr>";

  echo "<tr>";
  echo "<td>P (INTRAOKULAR = (41-61) | KEBUTAAN = YA) = </td>";
  echo "<td>".$row_intraokular['P_INTRAOKULAR_3_YA']." / ".$row['P_YA']."</td>";
  echo "<td>P (INTRAOKULAR = (41-61) | KEBUTAAN = TIDAK) = </td>";
  echo "<td>".$row_intraokular['P_INTRAOKULAR_3_TIDAK']." / ".$row['P_TIDAK']."</td></tr>";

  echo "<tr>";
  echo "<td>P (INTRAOKULAR = (>61) | KEBUTAAN = YA) = </td>";
  echo "<td>".$row_intraokular['P_INTRAOKULAR_4_YA']." / ".$row['P_YA']."</td>";
  echo "<td>P (INTRAOKULAR = (>61) | KEBUTAAN = TIDAK) = </td>";
  echo "<td>".$row_intraokular['P_INTRAOKULAR_4_TIDAK']." / ".$row['P_TIDAK']."</td></tr>";
?>
</tbody>
</table>

</div>
<div class="uk-margin-large-bottom">
    </body>
</html>
