<?php
$serverName =
    "LAPTOP-M7D75T3I\SQLEXPRESS";
$database = array(
    "Database" => "Presma",
);

try {
    $conn = new PDO("sqlsrv:Server=$serverName;Database=$database");
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    echo "Koneksi gagal: " . $e->getMessage();
}
?>