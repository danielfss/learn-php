<?php
require 'config.php';

// PEGAR OS CAMPOS
$id = filter_input(INPUT_POST, 'id');
$name = filter_input(INPUT_POST, 'name');
$email = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL);
$password = filter_input(INPUT_POST, 'password');

if ($id && $name && $email && $password) {
    $sql = $pdo->prepare("UPDATE usuarios SET nome = :name, email = :email, senha = :password WHERE id = :id");
    $sql->bindValue(':id', $id);
    $sql->bindValue(':name', $name);
    $sql->bindValue(':email', $email);
    $sql->bindValue(':password', $password);
    $sql->execute();

    header("Location: index.php");
    exit;
} else {
    header("Location: adicionar.php");
    exit;
}
