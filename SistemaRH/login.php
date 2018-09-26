<?php
/**
 * Created by PhpStorm.
 * User: everton
 * Date: 25/12/17
 * Time: 21:22
 */

    // SCRIPT LOGIN
    session_start();
    require 'includes/conexao.php';
    require 'includes/scriptFuncoes.php';

    if(isset($_POST["Entrar"])){

        $login = $_POST["login"];
        $senha = $_POST["senha"];

        if(verificaAdm($link,$login,$senha)){
            header('location:trabalheConosco.php');
        }
        else{
            echo "<script> alert('OPS, login ou senha inválido'); </script>";
            echo "Login ou senha inválidos <a href='index.html'>Voltar</a>";
        }
    }
