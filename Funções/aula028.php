<?php

// CRIANDO FUNÇÕES

function exibeNome(){
    echo "Meu nome é Brayan";
}

exibeNome();

echo "<hr>";

// Passando parâmetros
function Nome($nome){
    echo "Meu nome é $nome";
}

Nome("Lucas Silvestre");

echo "<hr>";

// MÉDIA

function mediaAluno($nome_aluno, $nota1,$nota2,$nota3,$nota4){
    $media = ($nota1 + $nota2 + $nota3 + $nota4) / 4;
    if ($media >= 7){
        echo "Aluno $nome_aluno foi APROVADO com média $media";
    }
    elseif ($media >= 5 and $media < 7){
        echo "Aluno $nome_aluno está de RECUPERAÇÃO com média $media";
    }
    else{
        echo "Aluno $nome_aluno foi REPROVADO com média $media";
    }
}

mediaAluno("Brayan Campos", 4.5, 5.6, 3.2, 7.8);
echo "<br>";
mediaAluno("Pedro Henrique", 6.7, 8.7, 9.4, 7.4);
echo "<br>";
mediaAluno("João da Silva", 2.5, 5.6, 3.2, 2.4);


function exibeSenha(){
    $senha = "*************";
    echo "Sua senha é $senha";
}


exibeSenha();