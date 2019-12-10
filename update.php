<?php

include_once("config.php");

if(isset($_POST['Update']))
{
  $id = $_POST['Id'];

  $nama = $_POST['Nama'];
  $umur = $_POST['Umur'];
  $diabetes = $_POST['Diabetes'];
  $hipertensi = $_POST['Hipertensi'];
  $intraokular = $_POST['Intraokular'];
  $kebutaan = $_POST['Kebutaan'];

  $sql = "UPDATE dataset SET Nama='$nama',Umur='$umur',Diabetes='$diabetes',Hipertensi='$hipertensi',Intraokular='$intraokular',Kebutaan='$kebutaan' WHERE Id='$id'";
  $result = mysqli_query($conn, $sql);

  header("Location: view_dataset.php");
}
?>
<?php

  $id = isset($_GET['Id']) ?$_GET['Id']:'';
  $nama = isset($_GET['Nama']) ?$_GET['Nama']:'';
  $umur = isset($_GET['Umur']) ?$_GET['Umur']:'';
  $diabetes = isset($_GET['Diabetes']) ?$_GET['Diabetes']:'';
  $hipertensi = isset($_GET['Hipertensi']) ?$_GET['Hipertensi']:'';
  $intraokular = isset($_GET['Intraokular']) ?$_GET['Intraokular']:'';
  $kebutaan = isset($_GET['Kebutaan']) ?$_GET['Kebutaan']:'';
  $sql = "SELECT * FROM dataset WHERE Id='$id'";
  $result = mysqli_query($conn, $sql);

while ($row = mysqli_fetch_assoc($result)) {
  $nama = $row['Nama'];
  $umur = $row['Umur'];
  $diabetes = $row['Diabetes'];
  $hipertensi = $row['Hipertensi'];
  $intraokular = $row['Intraokular'];
  $kebutaan = $row['Kebutaan'];
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
        <a class="uk-button uk-button-secondary" href="view_dataset.php">Kembali</a>
      <form name="update_user" method="post" action="update.php">
      <table class="uk-table uk-table-striped">
        <thead>
            <tr>
                <th>Nama</th>
                <td><input type="text" class="uk-input" name="Nama" required value=<?php echo "$nama";?>></td>
            </tr>
            <tr>
                <th>Umur</th>
                <td><input type="number" class="uk-input" name="Umur" required value=<?php echo "$umur";?>></td>
            </tr>
            <tr>
                <th>Diabetes</th>
                <td><select class="uk-select" name="Diabetes" required>
                  <option value='' disabled selected ><?php echo "status sekarang : $diabetes" ?></option>
                  <option value="Ya">Ya</option>
                  <option value="Tidak">Tidak</option>
                </td>

        </select>
            </tr>
            <tr>
                <th>Hipertensi</th>
                <td><select class="uk-select" name="Hipertensi" required>
                  <option value='' disabled selected ><?php echo "status sekarang : $hipertensi" ?></option>
                  <option value="Ya">Ya</option>
                  <option value="Tidak">Tidak</option>
                </td>
            </tr>
            <tr>
                <th>Intraokular</th>
                <td><input type="number" class="uk-input" name="Intraokular"  required value=<?php echo "$intraokular";?>></td>
            </tr>
            <tr>
                <th>Kebutaan</th>
                <td><select class="uk-select" name="Kebutaan" required>
                  <option value='' disabled selected ><?php echo "status sekarang : $kebutaan" ?></option>
                  <option value="Ya">Ya</option>
                  <option value="Tidak">Tidak</option>
                </td>
            </tr>
            <tr>
                <td><input type="hidden" name="Id" value=<?php echo isset($_GET['Id']) ?$_GET['Id']:'';?>></td>
                <td><input class="uk-button uk-button-secondary" type="submit" name="Update" value="Update"></td>
            </tr>
        </thead>
    <tbody>
    </tbody>
    </div>
</table>
    </body>
</html>
