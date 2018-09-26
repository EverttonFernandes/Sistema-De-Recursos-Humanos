<?php
session_start();
include 'includes/conexao.php';
include "includes/scriptFuncoes.php";

if(!empty($_SESSION["idVaga"])){
    $linha = getVaga($link, $_SESSION["idVaga"]);
}

if(!empty($_SESSION["idAdm"])){
    $linha = getAdm($link, $_SESSION["idAdm"]);
}

if(isset($_SESSION['login'])){

    echo "<a href='logout.php'><br>Logout</a>";

}
/**else{
header("Location:adm.php");
}**/
?>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="img/favicon.ico">
    <title>Àrea Administrativa</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom fonts for this template -->
    <link href="https://fonts.googleapis.com/css?family=Raleway:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Lora:400,400i,700,700i" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/business-casual.min.css" rel="stylesheet">
    <script type="text/javascript">
        function abreTelaDeCurriculos() {
            location.href = "curriculos.php"
        }
    </script>
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
                    <a class="nav-link text-uppercase text-expanded" href="index.html">Pagina Inicial
                        <span class="sr-only">(current)</span>
                    </a>
                </li>
                <li class="nav-item px-lg-4">
                    <a class="nav-link text-uppercase text-expanded" href="trabalheConosco.php">Voltar a página anterior</a>
                </li>

                <li class="nav-item px-lg-4">
                    <a class="nav-link text-uppercase text-expanded" href="vagas.php">Trabalhe Conosco</a>
                </li>
            </ul>
        </div>
    </div>
</nav>
<!--
<section class="page-section">
  <div class="container">
    <div class="product-item">
      <div class="product-item-title d-flex">
        <div class="bg-faded p-5 d-flex ml-auto rounded">
          <h2 class="section-heading mb-0">
            <span class="section-heading-upper">Blended to Perfection</span>
            <span class="section-heading-lower">Coffees &amp; Teas</span>
          </h2>
        </div>
      </div>
      <img class="product-item-img mx-auto d-flex rounded img-fluid mb-3 mb-lg-0" src="img/products-01.jpg" alt="">
      <div class="product-item-description d-flex mr-auto">
        <div class="bg-faded p-5 rounded">
          <p class="mb-0">We take pride in our work, and it shows. Every time you order a beverage from us, we guarantee that it will be an experience worth having. Whether it's our world famous Venezuelan Cappuccino, a refreshing iced herbal tea, or something as simple as a cup of speciality sourced black coffee, you will be coming back for more.</p>
        </div>
      </div>
    </div>
  </div>
</section>

<section class="page-section">
  <div class="container">
    <div class="product-item">
      <div class="product-item-title d-flex">
        <div class="bg-faded p-5 d-flex mr-auto rounded">
          <h2 class="section-heading mb-0">
            <span class="section-heading-upper">Delicious Treats, Good Eats</span>
            <span class="section-heading-lower">Bakery &amp; Kitchen</span>
          </h2>
        </div>
      </div>
      <img class="product-item-img mx-auto d-flex rounded img-fluid mb-3 mb-lg-0" src="img/products-02.jpg" alt="">
      <div class="product-item-description d-flex ml-auto">
        <div class="bg-faded p-5 rounded">
          <p class="mb-0">Our seasonal menu features delicious snacks, baked goods, and even full meals perfect for breakfast or lunchtime. We source our ingredients from local, oragnic farms whenever possible, alongside premium vendors for specialty goods.</p>
        </div>
      </div>
    </div>
  </div>
</section>

<section class="page-section">
  <div class="container">
    <div class="product-item">
      <div class="product-item-title d-flex">
        <div class="bg-faded p-5 d-flex ml-auto rounded">
          <h2 class="section-heading mb-0">
            <span class="section-heading-upper">From Around the World</span>
            <span class="section-heading-lower">Bulk Speciality Blends</span>
          </h2>
        </div>
      </div>
      <img class="product-item-img mx-auto d-flex rounded img-fluid mb-3 mb-lg-0" src="img/products-03.jpg" alt="">
      <div class="product-item-description d-flex mr-auto">
        <div class="bg-faded p-5 rounded">
          <p class="mb-0">Travelling the world for the very best quality coffee is something take pride in. When you visit us, you'll always find new blends from around the world, mainly from regions in Central and South America. We sell our blends in smaller to large bulk quantities. Please visit us in person for more details.</p>
        </div>
      </div>
    </div>
  </div>
</section> !-->
<center>
    <form class="form-horizontal" method="POST" action="deletaVaga.php">
        <fieldset style="color: white;">

            <!-- Form Name -->
            <legend style="text-align: center">Deletar vaga cadastrada</legend>

            <!-- Text input-->

          <div class="form-group">
            <label class="col-md-4 control-label" for="idAdmin">Seleciona a vaga na qual deseja excluir</label>
            <div class="col-md-5">
              <select id="idVaga" name="idVaga" class="form-control">
                  <?php
                        selectVaga($link);
                  ?>
              </select>
            </div>
          </div>

            <!-- Button (Double) -->
            <div class="form-group">
                <label class="col-md-4 control-label" for="idConfirmar"></label>
                <div class="col-md-8">
                    <button id="idExcluir" value="idExcluir" name="idExcluir" class="btn btn-danger">Deletar Vaga</button>
                </div>
            </div>

        </fieldset>

    </form>
</center>

<footer class="footer text-faded text-center py-5">
    <div class="container">
        <p class="m-0 small">Desenvolvido por Everton Fernandes</p>
    </div>
</footer>

<!-- Bootstrap core JavaScript -->
<script src="vendor/jquery/jquery.min.js"></script>
<script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
<?php
    if (isset($_POST["idExcluir"])){
        if (deletaVagaDeEmprego($link,$_POST['idVaga'])){
            echo "<script> alert('Vaga deletada, pois já foi preenchida.'); </script>";
        }
        else{
            echo "<script> alert('Erro ao deletar a vaga informada'); </script>";
        }
    }
?>
</body>
</html>
