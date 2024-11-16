<?php
$serverName = array (
    "SCAREBAT\SQLEXPRESS",
    "LAPTOP-M7D75T3I\SQLEXPRESS", 
);
$database = array(
    "Database" => "Presma",
);

$conn = sqlsrv_connect($serverName, $database);
if ($conn === false) {
    die(print_r(sqlsrv_errors(), true));
}
?>
