<?php

include_once("config.php");

if(isset($_POST['Update']))
{
  $id_uji = $_POST['Id_uji'];

  $nama_uji = $_POST['Nama_uji'];
  $umur_uji = $_POST['Umur_uji'];
  $diabetes_uji = $_POST['Diabetes_uji'];
  $hipertensi_uji = $_POST['Hipertensi_uji'];
  $intraokular_uji = $_POST['Intraokular_uji'];
  $kebutaan_uji = $_POST['Kebutaan_uji'];

  $sql = "UPDATE uji_data SET Nama_uji='$nama_uji',Umur_uji='$umur_uji',Diabetes_uji='$diabetes_uji',Hipertensi_uji='$hipertensi_uji',Intraokular_uji='$intraokular_uji' Kebutaan_uji='$kebutaan_uji' WHERE Id_uji='$id_uji'";
  $result = mysqli_query($conn, $sql);

  header("Location: data_uji.php");
}
?>
<?php

  $id_uji = isset($_GET['Id_uji']) ?$_GET['Id_uji']:'';
  $nama_uji = isset($_GET['Nama_uji']) ?$_GET['Nama_uji']:'';
  $umur_uji = isset($_GET['Umur_uji']) ?$_GET['Umur_uji']:'';
  $diabetes_uji = isset($_GET['Diabetes_uji']) ?$_GET['Diabetes_uji']:'';
  $hipertensi_uji = isset($_GET['Hipertensi_uji']) ?$_GET['Hipertensi_uji']:'';
  $intraokular_uji = isset($_GET['Intraokular_uji']) ?$_GET['Intraokular_uji']:'';
  $kebutaan_uji = isset($_GET['Kebutaan_uji']) ?$_GET['Kebutaan_uji']:'';
  $sql = "SELECT * FROM uji_data WHERE Id_uji='$id_uji'";
  $result = mysqli_query($conn, $sql);

while ($row = mysqli_fetch_assoc($result)) {
  $nama_uji = $row['Nama_uji'];
  $umur_uji = $row['Umur_uji'];
  $diabetes_uji = $row['Diabetes_uji'];
  $hipertensi_uji = $row['Hipertensi_uji'];
  $intraokular_uji = $row['Intraokular_uji'];
  $kebutaan_uji = $row['Kebutaan_uji'];
}
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
                <li class="uk-active"><a href="#">Active</a></li>
                <li><a href="#">Parent</a></li>
                <li><a href="#">Item</a></li>
            </ul>

        </div>
    </div>
      <div class="uk-container uk-margin-large-top">
        <a class="uk-button uk-button-secondary" href="data_uji.php">Kembali</a>
      <form name="update_user" method="post" action="update_uji.php">
      <table class="uk-table uk-table-striped">
        <thead>
            <tr>
                <th>Nama</th>
                <td><input type="text" class="uk-input" name="Nama_uji" required value=<?php echo "$nama_uji";?>></td>
            </tr>
            <tr>
                <th>Umur</th>
                <td><input type="number" class="uk-input" name="Umur_uji" required value=<?php echo "$umur_uji";?>></td>
            </tr>
            <tr>
                <th>Diabetes</th>
                <td><select class="uk-select" name="Diabetes_uji" required>
                  <option value='' disabled selected ><?php echo "status sekarang : $diabetes_uji" ?></option>
                  <option value="Ya">Ya</option>
                  <option value="Tidak">Tidak</option>
                </td>

        </select>
            </tr>
            <tr>
                <th>Hipertensi</th>
                <td><select class="uk-select" name="Hipertensi_uji" required>
                  <option value='' disabled selected ><?php echo "status sekarang : $hipertensi_uji" ?></option>
                  <option value="Ya">Ya</option>
                  <option value="Tidak">Tidak</option>
                </td>
            </tr>
            <tr>
                <th>Intraokular</th>
                <td><input type="number" class="uk-input" name="Intraokular_uji"  required value=<?php echo "$intraokular_uji";?>></td>
            </tr>
            <tr>
                <th>Hipertensi</th>
                <td><select class="uk-select" name="Kebutaan_uji" required>
                  <option value='' disabled selected ><?php echo "status sekarang : $Kebutaan_uji" ?></option>
                  <option value="Ya">Ya</option>
                  <option value="Tidak">Tidak</option>
                </td>
            </tr>
            <tr>
                <td><input type="hidden" name="Id_uji" value=<?php echo isset($_GET['Id_uji']) ?$_GET['Id_uji']:'';?>></td>
                <td><input class="uk-button uk-button-secondary" type="submit" name="Update" value="Update"></td>
            </tr>
        </thead>
    <tbody>
    </tbody>
    </div>
</table>
    </body>
</html>
