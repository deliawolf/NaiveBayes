<?php
include_once("config.php");

$id_uji = $_GET['Id_uji'];

$sql = "DELETE FROM uji_data WHERE Id_uji=$id_uji";
$result = mysqli_query($conn, $sql);

header("Location:data_uji.php");
?>
