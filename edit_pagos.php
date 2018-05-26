<?php
include "connectdb.php";
$data=json_decode(file_get_contents("php://input"));
$placa=$dbhandle->real_escape_string($data->placa);
$monto=$dbhandle->real_escape_string($data->monto);
$fecha_pago=$dbhandle->real_escape_string($data->fecha_pago);
$id_pago=$dbhandle->real_escape_string($data->id_pago);
$query="update pagos_pendientes set placa='".$placa."', monto='".$monto."', fecha_pago='".$fecha_pago."' where id_pago='".$id_pago."'";
$dbhandle->query($query);
?>
