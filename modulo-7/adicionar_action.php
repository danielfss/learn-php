<?php
require 'config.php';

// PEGAR OS CAMPOS
$name = filter_input(INPUT_POST, 'name');
$email = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL);
$password = filter_input(INPUT_POST, 'password');

if ($name && $email && $password) {
    // Forma insegura para envio de dados
    // $pdo->query("INSERT INTO usuarios (nome, email, senha) VALUES ('$name', '$email', '$password')");

    $sql = $pdo->prepare("SELECT * FROM usuarios WHERE email = :email");
    $sql->bindValue(':email', $email);
    $sql->execute();

    if ($sql->rowCount() === 0) {
        // Forma segura
        $sql = $pdo->prepare("INSERT INTO usuarios (nome, email, senha) VALUES (:name, :email, :senha)");
        // Com o bindValue, ele pega o valor que foi passado na variável/input
        $sql->bindValue(':name', $name);
        $sql->bindValue(':email', $email);
        $sql->bindValue(':senha', $password);
        $sql->execute();

        header("Location: index.php");
        exit;
    } else {
        header("Location: adicionar.php");
        exit;
    }
} else {
    header("Location: adicionar.php");
    exit;
}
