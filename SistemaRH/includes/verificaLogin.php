<?php
/**
 * Created by PhpStorm.
 * User: everton
 * Date: 23/12/17
 * Time: 13:13
 */

    session_start();
    if((isset($_SESSION["login"]) && isset($_SESSION["senha"])) || isset($_COOKIE["logado"])){
         header("Location:login.php");
    }
