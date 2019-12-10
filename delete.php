<?php
include_once("config.php");

$id = $_GET['Id'];

$sql = "DELETE FROM dataset WHERE Id=$id";
$result = mysqli_query($conn, $sql);

header("Location:view_dataset.php");
?>
