<?php
    session_start();

    require 'includes/conexao.php';
    require 'includes/scriptFuncoes.php';

    /**unset($_SESSION['loginSession']);
    unset($_SESSION['senhaSession']);
    session_destroy();
    header("location: index.php"); **/

    if(isset($_GET["idAdm"])){
        $linha = getAdm($link,$_GET["idAdm"]);
    }
?>

<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Página para realizar login">
    <meta name="author" content="Everton Fernandes">
      <link rel="icon" href="img/favicon.ico">
    <title>Login Administrador</title>

    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <link href="https://fonts.googleapis.com/css?family=Raleway:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Lora:400,400i,700,700i" rel="stylesheet">

    <link href="css/business-casual.min.css" rel="stylesheet">
      <link href="css/ie10-viewport-bug-workaround.css" rel="stylesheet">
      <link href="css/signin.css" rel="stylesheet">
      <script src="vendor/jquery/ie-emulation-modes-warning.js"></script>

  </head>

  <body>


    <h1 class="site-heading text-center text-white d-none d-lg-block">
      <span class="site-heading-upper text-primary mb-3">TMW Telecom</span>
      <span class="site-heading-lower">Sistema de Recursos Humanos TMW</span>
    </h1>

    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-dark py-lg-4" id="mainNav">
      <div class="container">
        <a class="navbar-brand text-uppercase text-expanded font-weight-bold d-lg-none" href="#">Start Bootstrap</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav mx-auto">
            <li class="nav-item px-lg-4">
              <a class="nav-link text-uppercase text-expanded" href="index.html">Página Inicial
                <span class="sr-only">(current)</span>
              </a>
            </li>
            <li class="nav-item active px-lg-4">
              <a class="nav-link text-uppercase text-expanded" href="adm.php">Area Administrativa</a>
            </li>
            <!--<li class="nav-item px-lg-4">
              <a class="nav-link text-uppercase text-expanded" href="trabalheConosco.html">Trabalhe Conosco</a>
            </li> -->
            <li class="nav-item px-lg-4">
              <a class="nav-link text-uppercase text-expanded" href="vagas.php">Trabalhe Conosco</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>

    <!--
    <section class="page-section about-heading">
      <div class="container">
        <img class="img-fluid rounded about-heading-img mb-3 mb-lg-0" src="img/about.jpg" alt="">
        <div class="about-heading-content">
          <div class="row">
            <div class="col-xl-9 col-lg-10 mx-auto">
              <div class="bg-faded rounded p-5">
                <h2 class="section-heading mb-4">
                  <span class="section-heading-upper">Strong Coffee, Strong Roots</span>
                  <span class="section-heading-lower">About Our Cafe</span>
                </h2>
                <p>Founded in 1987 by the Hernandez brothers, our establishment has been serving up rich coffee sourced from artisan farmers in various regions of South and Central America. We are dedicated to travelling the world, finding the best coffee, and bringing back to you here in our cafe.</p>
                <p class="mb-0">We guarantee that you will fall in <em>lust</em> with our decadent blends the moment you walk inside until you finish your last sip. Join us for your daily routine, an outing with friends, or simply just to enjoy some alone time.</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section> !-->

  <div class="container2">

      <form class="form-signin" method="POST" action="login.php">
          <h2 style="color: white;" class="form-signin-heading text-center">Faça o login</h2>

          <label for="inputEmail" class="sr-only">Login</label>
          <input type="text" name="login" class="form-control" placeholder="Digite o login" required autofocus><br>

          <label for="inputPassword" class="sr-only">Senha</label>
          <input type="password" name="senha" class="form-control" placeholder="Digite a senha" required>

          <button class="btn btn-lg btn-primary btn-block" value="Entrar" id="Entrar" name="Entrar" type="submit">Entrar</button>
      </form>
  </div>

    <footer class="footer text-faded text-center py-5">
      <div class="container">
        <p class="m-1 small">Desenvolvido por Everton Fernandes</p>
      </div>
    </footer>

    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="vendor/jquery/ie10-viewport-bug-workaround.js"></script>

  </body>

</html>
