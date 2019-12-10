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
                <li class="uk-active"><a href="#">Active</a></li>
                <li><a href="#">Parent</a></li>
                <li><a href="#">Item</a></li>
            </ul>

        </div>
    </div>
      <div class="uk-container uk-margin-large-top">
        <a class="uk-button uk-button-secondary" href="view_dataset.php">Kembali</a>
      <form action="add.php" method="post" name="form1">
      <table class="uk-table uk-table-striped">
    <thead>
        <tr>
            <th>Nama</th>
            <td><input type="text" class="uk-input" name="Nama" required></td>
        </tr>
        <tr>
            <th>Umur</th>
            <td><input type="number" class="uk-input" name="Umur" required></td>
        </tr>
        <tr>
            <th>Diabetes</th>
            <td><select class="uk-select" name="Diabetes" required>
              <option value='' disabled selected >Status Diabetes</option>
              <option value="Ya">Ya</option>
              <option value="Tidak">Tidak</option>
            </td>
    </select>
        </tr>
        <tr>
            <th>Hipertensi</th>
            <td><select class="uk-select" name="Hipertensi" required>
              <option value='' disabled selected >Status Hipertensi</option>
              <option value="Ya">Ya</option>
              <option value="Tidak">Tidak</option>
            </td>
        </tr>
        <tr>
            <th>Intraokular</th>
            <td><input type="number" class="uk-input" name="Intraokular" required></td>
        </tr>
        <tr>
            <th>Hipertensi</th>
            <td><select class="uk-select" name="Kebutaan" required>
              <option value='' disabled selected >Status Kebutaan</option>
              <option value="Ya">Ya</option>
              <option value="Tidak">Tidak</option>
            </td>
        </tr>
        <tr>
            <td></td>
            <td><input class="uk-button uk-button-secondary" type="submit" name="Submit" value="Tambah"></td>
        </tr>
    </thead>
    </div>
</table>
</form>
<?php

if(isset($_POST['Submit'])){

  $nama = $_POST['Nama'];
  $umur = $_POST['Umur'];
  $diabetes = $_POST['Diabetes'];
  $hipertensi = $_POST['Hipertensi'];
  $intraokular = $_POST['Intraokular'];
  $kebutaan = $_POST['Kebutaan'];

  include_once("config.php");

  $sql = "INSERT INTO dataset(Nama, Umur, Diabetes, Hipertensi, Intraokular, Kebutaan) VALUES('$nama','$umur','$diabetes','$hipertensi','$intraokular','$kebutaan')";
  $result = mysqli_query($conn, $sql);


  echo "Data Berhasil ditambahkan";
}
?>
</html>
