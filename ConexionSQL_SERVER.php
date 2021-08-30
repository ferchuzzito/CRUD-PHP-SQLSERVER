<?php
$servername = 'localhost';
$connectioninfo = array('Database'=>'PruebaPHP', 'uid'=>'sa', 'pwd'=>'qwerty12', 'characterSet'=>'UTF-8');
$conn_sis = sqlsrv_connect($servername, $connectioninfo);
if($conn_sis){
echo "Conexion Exitosa";
} else {
echo "Conexion Fallida";
die(print_r(sqlsrv_errors(), true));
}
?>