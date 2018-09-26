<?php
/**
 * Created by PhpStorm.
 * User: everton
 * Date: 23/12/17
 * Time: 13:12
 */

$bd_local = 'localhost';
$usuario = 'root';
$senha = '12345';
$bd = 'banco_rh';
$link = mysqli_connect($bd_local, $usuario, $senha, $bd) or die (mysqli_error($link));
?>