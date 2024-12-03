<?php 
$srvname = "\SQLEXPRESS";
$db = "Prestasi_Mahasiswa";

try {
    $conn = new PDO("sqlsrv:server=$serverName;Database= $db");
} catch (PDOException $error) {
    die("Koneksi Gagal: " . $error->getMessage());
}

?>