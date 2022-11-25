<?php
require 'config.php';

$id = filter_input(INPUT_GET, 'id');
if($id) {
    $sql = $pdo->prepare("DELETE FROM usuarios WHERE id = :id");
    $sql->bindValue(':id', $id);
    $sql->execute();

    if($sql->rowCount() > 0) {
        $info = $sql->fetch( PDO::FETCH_ASSOC );
    } else {
        header("Location: index.php");
        exit;
    }
}

header("Location: index.php");
exit;