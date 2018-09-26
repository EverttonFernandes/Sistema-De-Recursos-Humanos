<?php
/**
 * Created by PhpStorm.
 * User: everton
 * Date: 22/12/17
 * Time: 18:41
 */

// FUNÇÕES PARA A TABELA VAGA

function getAdm($link, $idAdm){
    $query="SELECT * FROM administrador WHERE idAdm = $idAdm";
    $resultado = mysqli_query($link, $query) or die (mysqli_error($link));
    return mysqli_fetch_array($resultado);
}

function verificaAdm($link, $login, $senha){
    if ($login && $senha){
        $query="SELECT * FROM administrador WHERE login = '$login' AND senha = '$senha'";
        $resultado= mysqli_query($link, $query) or die (mysqli_error($link));

        if(mysqli_num_rows($resultado)==0){
            return FALSE;
        }
        else{
            $_SESSION["login"]=$login;
            $linha=mysqli_fetch_array($resultado);
            $_SESSION["login"] = $linha["login"];
            $_SESSION["idAdm"]=$linha["idAdm"];
            setcookie("logado",time()+60*10);
            return TRUE;
        }
    }
}

function cadastravaga($link, $nomeVaga, $descricaoVaga, $escolaridadeMinima,$preRequisitos){
    $query = "INSERT INTO cadastravaga(nomeVaga, descricaoVaga, escolaridadeMinima, preRequisitos)"
    ."VALUES('$nomeVaga','$descricaoVaga','$escolaridadeMinima','$preRequisitos')";
    mysqli_query($link,$query) or die (mysqli_error($link));
	if (mysqli_affected_rows($link) == 1){
        return TRUE;
    }
    else {
        if(mysqli_errno($link) == 1062){
            echo "Erro ao cadastrar a vaga!";
            return FALSE;
        }
    }
}

function getVaga($link, $idVaga){
    $query="SELECT * FROM cadastravaga WHERE idVaga = $idVaga";
    $resultado = mysqli_query($link, $query) or die (mysqli_error($link));
    return mysqli_fetch_array($resultado);
}

function listaVagaDeEmprego($link){
    $query= "SELECT * FROM cadastravaga ORDER BY idVaga";
    $resultado = mysqli_query($link, $query) or die (mysqli_error($link));

    if (mysqli_affected_rows($link)==0){
        echo "<hr>"."<h6>"."<b>"."Não temos vagas no momento"."</hr>";
    }
    else {
        while ($linha = mysqli_fetch_array($resultado)) {
            echo "<hr>";
            echo "<h5>" . "Código da vaga: " . $linha['idVaga'] . "</h5>";
            echo "<br>";

            echo "<h3>" . "Cargo: " . $linha['nomeVaga'] . "</h3>";
            echo "<br>";

            echo "<h3>" . "Descriçao: " . $linha['descricaoVaga'] . "</h3>";
            echo "<br>";

            echo "<h3>" . "Formação Acadêmica: " . $linha['escolaridadeMinima'] . "</h3>";
            echo "<br>";

            echo "<h3>" . "Requisitos: " . $linha['preRequisitos'] . "</h3>";
            echo "<hr>";
        }
    }
}

function selectVaga($link){
    $query= "SELECT * FROM cadastravaga ORDER BY nomeVaga";
    $resultado = mysqli_query($link, $query) or die (mysqli_error($link));
    while($dados = mysqli_fetch_array($resultado)){
        $idVaga = $dados['idVaga'];
        $nomeVaga = $dados['nomeVaga'];
        echo "<option value='$idVaga'> $nomeVaga </option>";
    }
}

function atualizaVagaEmprego($link,$idVaga,$nomeVaga,$descricaoVaga,$escolaridadeMinima,$preRequisitos){
    $query= "UPDATE cadastravaga SET nomeVaga='$nomeVaga',descricaoVaga='$descricaoVaga',
    escolaridadeMinima='$escolaridadeMinima',preRequisitos='$preRequisitos' WHERE idVaga = '$idVaga'";
    mysqli_query($link,$query) or die(mysqli_error($link));
    if (mysqli_affected_rows($link) == 1){
        return TRUE;
    }
    else {
        if(mysqli_errno($link) == 1062){
            echo "Erro ao atualizar!";
            return FALSE;
        }
    }
}

function deletaVagaDeEmprego($link, $idVaga){
    $query= "DELETE FROM cadastravaga WHERE idVaga=$idVaga";
    mysqli_query($link,$query) or die (mysqli_error($link));
    if(mysqli_affected_rows($link)==1){
        return TRUE;
    }
    else{
        if(mysqli_errno($link)==1062){
            echo "Erro ao deletar vaga";
            return FALSE;
        }
    }
}

// FUNÇÕES PARA A TABELA CANDITADO

function canditoAVaga($link, $vagaId, $nome, $endereco, $estado, $nacionalidade, $telefone, $email, $formacaoAcademica,
                      $ultimaExperiencia, $informacoesExtras, $foto){
    $query = "INSERT INTO candidato(vagaId, nome, endereco, estado, nacionalidade, telefone, email, formacaoAcademica,
              ultimaExperiencia, informacoesExtras, foto)"
        ."VALUES('$vagaId','$nome','$endereco','$estado','$nacionalidade','$telefone','$email','$formacaoAcademica',
        '$ultimaExperiencia','$informacoesExtras','$foto')";
    mysqli_query($link,$query) or die (mysqli_error($link));
    if (mysqli_affected_rows($link) == 1){
        return TRUE;
    }
    else {
        if(mysqli_errno($link) == 1062){
            echo "Erro ao se canditar a vaga!";
            return FALSE;
        }
    }
}

function listaCandidatosAVaga($link){
    $query= "select *,cadastravaga.nomeVaga from candidato,cadastravaga 
    where cadastravaga.idVaga = candidato.vagaId order by candidato.nome";

    $resultado = mysqli_query($link, $query) or die (mysqli_error($link));

    if (mysqli_affected_rows($link)==0){
        echo "<hr>"."<h6>"."<b>"."Nenhum canditato cadastrado"."</hr>";
    }
    else {
        while ($linha = mysqli_fetch_array($resultado)) {

            echo "<h3>" . "Canditato(a) ao cargo de: " . $linha['nomeVaga'] . "</h3>";
            echo "<br>";

            echo "<h3>" . "<img src='" . $linha['foto'] . "'></h3>";
            echo "<br>";

            echo "<h5>" . "Nome: " . $linha['nome'] . "</h5>";
            echo "<br>";

            echo "<h5>" . "Endereço: " . $linha['endereco'] . "</h5>";
            echo "<br>";

            echo "<h5>" . "Estado: " . $linha['estado'] . "</h5>";
            echo "<br>";

            echo "<h5>" . "Nacionalidade: " . $linha['nacionalidade'] . "</h5>";
            echo "<br>";

            echo "<h5>" . "Telefone: " . $linha['telefone'] . "</h5>";
            echo "<br>";

            echo "<h5>" . "Email:: " . $linha['email'] . "</h5>";
            echo "<br>";

            echo "<h5>" . "Formação Acadêmica: " . $linha['formacaoAcademica'] . "</h5>";
            echo "<br>";

            echo "<h5>" . "Ultima Experiência: " . $linha['ultimaExperiencia'] . "</h5>";
            echo "<br>";

            echo "<h5>" . "Informações Extras: " . $linha['informacoesExtras'] . "</h5>";
            echo "<br>";

            echo "<hr>";

        }
    }
}