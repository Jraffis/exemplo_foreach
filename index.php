<?php
    $dados = array();
    $nome = "Clístenes";
    $idade = "74";
    $sexo = "Maculino";
    $estadocivil = "Casado";
    $profissao = "Aposentado Rico";

    $dados [0][0] = "<b>Nome</b>";
    $dados [0][1] = "Meu nome é " . $nome;

    $dados [1][0] = "<b>Idade</b>";
    $dados [1][1] = "Eu tenho " . $idade . " anos";

    $dados [2][0] = "<b>Sexo</b>";
    $dados [2][1] = "Eu sou do gênero " . $sexo;

    $dados [3][0] = "<b>Estado Civil</b>";
    $dados [3][1] = "Sou " . $estadocivil;

    $dados [4][0] = "<b>Profissão</b>";
    $dados [4][1] = "Atualmente sou um " . $profissao;

    foreach ($dados as $indice => $valor){
        foreach ($valor as $indice_1 => $valor_1){
            echo "[$indice] [$indice_1] $valor_1 <br/>";
        }
    }
?>