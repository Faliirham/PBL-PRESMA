<?php
$serverName = "SCAREBAT\SQLEXPRESS";
$database = array(
    "Database" => "Presma",
);

$conn = sqlsrv_connect($serverName, $database);
if ($conn === false) {
    die(print_r(sqlsrv_errors(), true));
}
?>
