<?php

include_once("config.php");
$sql = "SELECT * FROM dataset";
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
                <li class="uk-active"><a href="#">Dataset</a></li>
                <li><a href="klasifikasi_dataset.php">Klasifikasi</a></li>
                <li><a href="uji_klasifikasi.php">Uji</a></li>
                <li><a href="data_uji.php">Data Hasil Uji</a></li>
            </ul>

        </div>
    </div>
      <div class="uk-container uk-margin-large-top">
        <div class="uk-heading-small uk-text-center">Parameter</div>
      <table class="uk-table uk-table-striped">
        <thead>
          <tr>
            <th>Umur</th>
            <th>Diabetes</th>
            <th>Hipertensi</th>
            <th>Intraokular</th>
          </tr>
        </thead>
        <tbody>
        <tr>
          <td>35 - 45</td>
          <td>Ya</td>
          <td>Ya</td>
          <td> < 21 </td>
        </tr>
        <tr>
          <td>45 - 55</td>
          <td>Tidak</td>
          <td>Tidak</td>
          <td>21 - 41 </td>
        </tr>
        <tr>
          <td>55 - 65</td>
          <td></td>
          <td></td>
          <td>41 - 61</td>
        </tr>
        <tr>
          <td>65 - 75</td>
          <td></td>
          <td></td>
          <td> > 61 </td>
        </tr>
      </tbody>
    </table>
    <div class="uk-heading-small uk-text-center">Dataset kebutaan</div>
    <a class="uk-button uk-button-secondary" href="add.php">Tambah Data</a>
      <table class="uk-table uk-table-striped">
    <thead>
        <tr>
            <th>No</th>
            <th>Nama</th>
            <th>Umur</th>
            <th>Diabetes</th>
            <th>Hipertensi</th>
            <th>Intraokular</th>
            <th>Kebutaan</th>
            <th>Tindak Lanjut</th>
        </tr>
    </thead>
    <tbody>
    <?php
    while($row = mysqli_fetch_assoc($result)) {
        echo "<tr>";
            echo"<td>".$no++."</td>";
            echo"<td>".$row['Nama']."</td>";
            echo"<td>".$row['Umur']."</td>";
            echo"<td>".$row['Diabetes']."</td>";
            echo"<td>".$row['Hipertensi']."</td>";
            echo"<td>".$row['Intraokular']."</td>";
            echo"<td>".$row['Kebutaan']."</td>";
            echo"<td><a class='uk-button uk-button-primary' href='update.php?Id=$row[Id]'>Edit</a> <a class='uk-button uk-button-danger' href='delete.php?Id=$row[Id]'>Delete</a></td></tr>";
          }
    ?>
    </tbody>
</div>
</table>
<div class="uk-container uk-margin-large-bottom">
    </body>
</html>
