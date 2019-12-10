<?php

include_once("config.php");
$sql = "SELECT * FROM uji_data";
$result = mysqli_query($conn, $sql);
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
              <li><a href="klasifikasi_dataset.php">Klasifikasi</a></li>
              <li><a href="uji_klasifikasi.php">Uji</a></li>
              <li class="uk-active"><a href="">Data Hasil Uji</a></li>
            </ul>

        </div>
    </div>
      <div class="uk-container uk-margin-large-top">
    <div class="uk-heading-small uk-text-center">History Data Uji Naive Bayes</div>
    <a class="uk-button uk-button-secondary" href="uji_klasifikasi.php">Hitung probabilitas kebutaan Data</a>
      <table class="uk-table uk-table-striped">
    <thead>
        <tr>
            <th>No</th>
            <th>Nama</th>
            <th>Umur</th>
            <th>Diabetes</th>
            <th>Hipertensi</th>
            <th>Intraokular</th>
            <th>Kebutaan</td>
            <th>Tindak Lanjut</th>
        </tr>
    </thead>
    <tbody>
    <?php
    while($row = mysqli_fetch_assoc($result)) {
        echo "<tr>";
            echo"<td>".$no++."</td>";
            echo"<td>".$row['Nama_uji']."</td>";
            echo"<td>".$row['Umur_uji']."</td>";
            echo"<td>".$row['Diabetes_uji']."</td>";
            echo"<td>".$row['Hipertensi_uji']."</td>";
            echo"<td>".$row['Intraokular_uji']."</td>";
            echo"<td>".$row['Kebutaan_uji']."</td>";
            echo"<td><a class='uk-button uk-button-danger' href='delete_uji.php?Id_uji=$row[Id_uji]'>Delete</a></td></tr>";
          }
    ?>
    </tbody>
</div>
</table>
<div class="uk-container uk-margin-large-bottom">
    </body>
</html>
