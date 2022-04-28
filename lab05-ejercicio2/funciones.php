<?php
$precio = $_POST['precio'];
$unidades = $_POST['unidades'];
$nuevo_precio = $precio - ($precio * 0.05);
$importe_compra = $nuevo_precio * $unidades;
$importe_descuento = $importe_compra * 0.07;
$importe_pagar = $importe_compra - $importe_descuento;
$obsequio = bcdiv(($unidades/2) , 1,0);

echo 'PRECIOS NUEVOS EN GASEOSAS'.'<br/>';;
echo 'Nuevo Precio          : '.$nuevo_precio. ' soles.'.'<br/>';
echo 'Importe de la compra  : '.$importe_compra. ' soles.'.'<br/>';;
echo 'Importe del descuento : '.$importe_descuento. ' soles.'.'<br/>';;
echo 'Importe a pagar       : '.$importe_pagar. ' soles.'.'<br/>';;
echo 'Obsequio              : '.$obsequio. ' caramelos.'.'<br/>';;
?>