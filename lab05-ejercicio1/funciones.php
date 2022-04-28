<?php
$importe = $_POST['importe'];
$hijos = $_POST['hijos'];
$bonificacion = 50*$hijos;
$sueldo_basico = 600;
$comision = (0.075*$importe)+$bonificacion;
$sueldo_bruto = $sueldo_basico + $comision + $bonificacion;
$descuento = 0.11*$sueldo_bruto;
$sueldo_neto = $sueldo_bruto-$descuento;

echo 'INFORME'.'<br/>';;
echo 'Comision: '.$comision. ' soles.'.'<br/>';
echo 'Bonificacion: '.$bonificacion. ' soles.'.'<br/>';;
echo 'Sueldo Bruto: '.$sueldo_bruto. ' soles.'.'<br/>';;
echo 'Descuento: '.$descuento. ' soles.'.'<br/>';;
echo 'Sueldo Neto: '.$sueldo_neto. ' soles.'.'<br/>';;
?>