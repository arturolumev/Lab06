<?php
function conectar()
{
    $xc = mysqli_connect("localhost", "root", "","lab06");
    return $xc;
    die();
}

function desconectar($xc){
    mysqli_close($xc);
}

///conectar login///
function insertar($user, $pass){
    $xc = mysqli_connect("localhost", "root", "","lab06");
    $sql = "INSERT INTO `lab06`.`users` (`user`, `password`) VALUES '$user', '$pass'');
    ";
    mysqli_query($xc, $sql);
}
?>