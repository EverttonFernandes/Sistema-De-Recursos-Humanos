<?php
    session_start();

    include_once 'includes/conexao.php';
    include_once 'includes/scriptFuncoes.php';

    if(isset($_GET["idVaga"])){
        $linha = getVaga($link,$_GET["idVaga"]);
    }
?>
<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="img/favicon.ico">
    <title>Trabalhe Conosco</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom fonts for this template -->
    <link href="https://fonts.googleapis.com/css?family=Raleway:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Lora:400,400i,700,700i" rel="stylesheet">

    <!-- Custom styles for this template -->
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
              <a class="nav-link text-uppercase text-expanded" href="index.html">Pagina Inicial
                <span class="sr-only">(current)</span>
              </a>
            </li>
            <li class="nav-item px-lg-4">
              <a class="nav-link text-uppercase text-expanded" href="adm.php">Area Administrativa</a>
            </li>
            <!--<li class="nav-item px-lg-4">
              <a class="nav-link text-uppercase text-expanded" href="trabalheConosco.php">Trabalhe Conosco</a>
            </li> !-->
            <li class="nav-item active px-lg-4">
              <a class="nav-link text-uppercase text-expanded" href="vagas.php">Trabalhe Conosco</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>

    <section class="page-section cta">
      <div class="container">
        <div class="row">
          <div class="col-xl-9 mx-auto">
            <div class="cta-inner text-center rounded">
                <h1>Oportunidades TMW</h1>
                <?php listaVagaDeEmprego($link) ?>
            </div>
          </div>
        </div>
      </div>
    </section>

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
                <p class="mb-0">We guarantee that you will fall in
                  <em>lust</em>
                  with our decadent blends the moment you walk inside until you finish your last sip. Join us for your daily routine, an outing with friends, or simply just to enjoy some alone time.</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section> !-->

    <center>
        <form class="form-horizontal" method="POST" enctype="multipart/form-data" action="vagas.php" >
            <fieldset style="color: white;">

                <!-- Form Name -->
                <legend style="text-align: center">Cadastrar Curriculo em uma de nossas vagas</legend>

                <!-- Text input-->
                <div class="form-group">
                    <label class="col-md-4 control-label" for="vagaId">Seleciona a vaga na qual deseja se candidatar</label>
                    <div class="col-md-5">
                        <select id="vagaId" name="vagaId" class="form-control">
                            <?php
                                selectVaga($link);
                            ?>
                        </select>
                    </div>
                </div>


                <!-- Text input-->
                <div class="form-group">
                    <label class="col-md-4 control-label" for="nomeCompleto">Nome Completo</label>
                    <div class="col-md-5">
                        <input id="nome" name="nome" type="text" placeholder="Nome Completo" class="form-control input-md" required="">

                    </div>
                </div>

                <div class="form-group">
                    <label class="col-md-4 control-label" for="endereco">Endereço</label>
                    <div class="col-md-5">
                        <input id="endereco" name="endereco" type="text" placeholder="Endereço" class="form-control input-md" required="">
                    </div>
                </div>

                <div class="form-group">
                    <label class="col-md-4 control-label" for="estado">Estado</label>
                    <div class="col-md-5">
                        <input id="estado" name="estado" type="text" placeholder="Estado" class="form-control input-md" required="">
                    </div>
                </div>

                <div class="form-group">
                    <label class="col-md-4 control-label" for="nacionalidade">Nacionalidade</label>
                    <div class="col-md-5">
                        <input id="nacionalidade" name="nacionalidade" type="text" placeholder="Nacionalidade" class="form-control input-md" required="">
                    </div>
                </div>

                <div class="form-group">
                    <label class="col-md-4 control-label" for="telefone">Telefone</label>
                    <div class="col-md-5">
                        <input id="telefone" name="telefone" type="tel" placeholder="Telefone" class="form-control input-md" required="">

                    </div>
                </div>

                <div class="form-group">
                    <label class="col-md-4 control-label" for="endereco">Email</label>
                    <div class="col-md-5">
                        <input id="email" name="email" type="email" placeholder="exemplo@tmw.com" class="form-control input-md" required="">

                    </div>
                </div>

                <div class="form-group">
                    <label class="col-md-4 control-label" for="endereco">Formação Acadêmica</label>
                    <div class="col-md-5">
                        <input id="formacaoAcademica" name="formacaoAcademica" type="text" placeholder="Formação Acadêmica" class="form-control input-md" required="">

                    </div>
                </div>

                <div class="form-group">
                    <label class="col-md-4 control-label" for="ultimaExperiencia">Ultima Experiência</label>
                    <div class="col-md-5">
                        <input id="ultimaExperiencia" name="ultimaExperiencia" type="text" placeholder="Ultima Experiencia" class="form-control input-md" required="">
                    </div>
                </div>

                <div class="form-group">
                    <label class="col-md-4 control-label" for="informacoesExtras">Informações Extras</label>
                    <div class="col-md-5">
                        <input id="informacoesExtras" name="informacoesExtras" type="text" placeholder="Informações Extras" class="form-control input-md" required="">
                    </div>
                </div>

                <div class="form-group">
                    <label class="col-md-4 control-label" for="foto">Foto</label>
                    <div class="col-md-5">
                        <input id="foto" name="foto" type="file" placeholder="Foto" class="form-control input-md" required="">
                    </div>
                </div>
                <!--
              <!-- Select Basic
              <div class="form-group">
                <label class="col-md-4 control-label" for="idAdmin">Nível</label>
                <div class="col-md-5">
                  <select id="idAdmin" name="idAdmin" class="form-control">
                    <option value="1">Administrador</option>
                    <option value="2">Usuário</option>
                  </select>
                </div>
              </div> !-->

                <!-- Button (Double) -->
                <div class="form-group">
                    <label class="col-md-4 control-label" for="idConfirmar"></label>
                    <div class="col-md-8">
                        <button name ="idCadastrar" value="idCadastrar" id="idCadastrar" class="btn-success">Cadastrar Currículo</button>
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
    <script src="vendor/jquery/ie10-viewport-bug-workaround.js"></script>
    <?php
        if (isset($_POST["idCadastrar"])) {

            $uploaddir = 'photo_profile/';
            $uploadfile = $uploaddir . basename($_FILES['foto']['name']);

            if (move_uploaded_file($_FILES['foto']['tmp_name'], $uploadfile)) {
                echo "<script> alert('Sucesso no upload.'); </script>";
            } else {
                echo "<script> alert('Falha no upload.'); </script>";
            }

            if (canditoAVaga($link, $_POST["vagaId"], $_POST["nome"], $_POST["endereco"],
                $_POST["estado"],$_POST["nacionalidade"],$_POST["telefone"],$_POST["email"],$_POST["formacaoAcademica"],
                $_POST["ultimaExperiencia"], $_POST["informacoesExtras"], $uploadfile)) {
                echo "<script> alert('Currículo cadastrado com sucesso.'); </script>";
            }
            else {
                echo "<script> alert('Erro ao se candidatar a vaga.'); </script>";
            }
        }
        ?>
  </body>

  <!-- Script to highlight the active date in the hours list -->
  <script>
    $('.list-hours li').eq(new Date().getDay()).addClass('today');
  </script>

</html>
