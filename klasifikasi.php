<?php
include_once("config.php");

$sql = "SELECT (SELECT COUNT(Id) FROM dataset) AS P_Kebutaan,
               (SELECT COUNT(Id) FROM dataset WHERE Kebutaan = 'Ya') AS P_YA,
               (SELECT COUNT(Id) FROM dataset WHERE Kebutaan = 'Tidak') AS P_TIDAK,
               (SELECT ROUND(COUNT(Id)* 100 / (Select COUNT(Id)), 0)) AS Score From dataset";

$sql_umur = "SELECT (SELECT COUNT(Id) FROM dataset) AS P_Kebutaan_umur,
               (SELECT COUNT(Id) FROM dataset WHERE Umur < 46 AND Kebutaan = 'Ya') AS P_UMUR_1_YA,
               (SELECT COUNT(Id) FROM dataset WHERE Umur > 45 AND UMUR < 56 AND Kebutaan = 'Ya') AS P_UMUR_2_YA,
               (SELECT COUNT(Id) FROM dataset WHERE Umur > 55 AND UMUR < 66 AND Kebutaan = 'Ya') AS P_UMUR_3_YA,
               (SELECT COUNT(Id) FROM dataset WHERE Umur > 65 AND Kebutaan = 'Ya') AS P_UMUR_4_YA,

               (SELECT COUNT(Id) FROM dataset WHERE Umur < 46 AND Kebutaan = 'Tidak') AS P_UMUR_1_TIDAK,
               (SELECT COUNT(Id) FROM dataset WHERE Umur > 45 AND UMUR < 56 AND Kebutaan = 'Tidak') AS P_UMUR_2_TIDAK,
               (SELECT COUNT(Id) FROM dataset WHERE Umur > 55 AND UMUR < 66 AND Kebutaan = 'Tidak') AS P_UMUR_3_TIDAK,
               (SELECT COUNT(Id) FROM dataset WHERE Umur > 65 AND Kebutaan = 'Tidak') AS P_UMUR_4_TIDAK,
               (SELECT ROUND(COUNT(Id)* 100 / (Select COUNT(Id)), 0)) AS Score From dataset";

$sql_diabetes = "SELECT (SELECT COUNT(Id) FROM dataset) AS P_Kebutaan_diabetes,
                        (SELECT COUNT(Id) FROM dataset WHERE Diabetes = 'Ya' AND Kebutaan = 'Ya') AS P_DIABETES_YA_YA,
                        (SELECT COUNT(Id) FROM dataset WHERE Diabetes = 'Tidak' AND Kebutaan = 'Ya') AS P_DIABETES_TIDAK_YA,
                        (SELECT COUNT(Id) FROM dataset WHERE Diabetes = 'Ya' AND Kebutaan = 'Tidak') AS P_DIABETES_YA_TIDAK,
                        (SELECT COUNT(Id) FROM dataset WHERE Diabetes = 'Tidak' AND Kebutaan = 'Tidak') AS P_DIABETES_TIDAK_TIDAK,
                        (SELECT ROUND(COUNT(Id)* 100 / (Select COUNT(Id)), 0)) AS Score From dataset";

$sql_hipertensi = "SELECT (SELECT COUNT(Id) FROM dataset) AS P_Kebutaan_hipertensi,
                          (SELECT COUNT(Id) FROM dataset WHERE Hipertensi = 'Ya' AND Kebutaan = 'Ya') AS P_HIPERTENSI_YA_YA,
                          (SELECT COUNT(Id) FROM dataset WHERE Hipertensi = 'Tidak' AND Kebutaan = 'Ya') AS P_HIPERTENSI_TIDAK_YA,
                          (SELECT COUNT(Id) FROM dataset WHERE Hipertensi = 'Ya' AND Kebutaan = 'Tidak') AS P_HIPERTENSI_YA_TIDAK,
                          (SELECT COUNT(Id) FROM dataset WHERE Hipertensi = 'Tidak' AND Kebutaan = 'Tidak') AS P_HIPERTENSI_TIDAK_TIDAK,
                          (SELECT ROUND(COUNT(Id)* 100 / (Select COUNT(Id)), 0)) AS Score From dataset";

$sql_intraokular = "SELECT (SELECT COUNT(Id) FROM dataset) AS P_Kebutaan_intraokular,
                    (SELECT COUNT(Id) FROM dataset WHERE Intraokular < 21 AND Kebutaan = 'Ya') AS P_INTRAOKULAR_1_YA,
                    (SELECT COUNT(Id) FROM dataset WHERE Intraokular > 20 AND Intraokular < 42 AND Kebutaan = 'Ya') AS P_INTRAOKULAR_2_YA,
                    (SELECT COUNT(Id) FROM dataset WHERE Intraokular > 41 AND Intraokular < 62 AND Kebutaan = 'Ya') AS P_INTRAOKULAR_3_YA,
                    (SELECT COUNT(Id) FROM dataset WHERE Intraokular > 61 AND Kebutaan = 'Ya') AS P_INTRAOKULAR_4_YA,

                    (SELECT COUNT(Id) FROM dataset WHERE Intraokular < 21 AND Kebutaan = 'Tidak') AS P_INTRAOKULAR_1_TIDAK,
                    (SELECT COUNT(Id) FROM dataset WHERE Intraokular > 20 AND Intraokular < 42 AND Kebutaan = 'Tidak') AS P_INTRAOKULAR_2_TIDAK,
                    (SELECT COUNT(Id) FROM dataset WHERE Intraokular > 41 AND Intraokular < 62 AND Kebutaan = 'Tidak') AS P_INTRAOKULAR_3_TIDAK,
                    (SELECT COUNT(Id) FROM dataset WHERE Intraokular > 61 AND Kebutaan = 'Tidak') AS P_INTRAOKULAR_4_TIDAK,
                    (SELECT ROUND(COUNT(Id)* 100 / (Select COUNT(Id)), 0)) AS Score From dataset";




$result = mysqli_query($conn, $sql);
$result_umur = mysqli_query($conn, $sql_umur);
$result_diabetes = mysqli_query($conn, $sql_diabetes);
$result_hipertensi = mysqli_query($conn, $sql_hipertensi);
$result_intraokular = mysqli_query($conn, $sql_intraokular);
?>
