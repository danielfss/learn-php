<?php
    $nome = filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    $email = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL);
    // $idade = filter_input(INPUT_POST, 'idade', FILTER_SANITIZE_NUMBER_INT);
    $idade = filter_input(INPUT_POST, 'idade', FILTER_VALIDATE_INT);
    $senha = filter_input(INPUT_POST, 'senha');
    
    // quando já temos a informação, quando não vem de um input
    $testeEmail = 'algumemail@hotmail.com';
    filter_var($testeEmail, FILTER_VALIDATE_EMAIL);

    if($nome && $senha) {
        echo 'NOME: ' . $nome . "<br/>";
        echo 'EMAIL: ' . $email . "<br/>";
        echo 'IDADE: ' . $idade . "<br/>";
        echo 'SENHA: ' . $senha . "<br/>";
    } else {
        // echo 'Preencha os campos corretamente';
        header("Location: index.php");
        exit;
    }
    
?>