<?php
if(isset($_POST['visitas']) and $_POST['visitas'] == true)
{
    require '../class/visitantes.php';
    $Visitante = new visitante();
    $IP = $_SERVER['REMOTE_ADDR'];
    $Visitante->submitVisitorData($IP);
    var_dump($Visitante);
}
else
{
    echo "Requisição Não aceita";
    die();
}