<?php
// CRUD
require 'config.php';
$lista = [];
$sql = $pdo->query("SELECT * FROM usuarios");
if($sql->rowCount() > 0) {
    $lista = $sql->fetchAll( PDO::FETCH_ASSOC );
}
?>

<a href="adicionar.php">ADICIONAR USUÁRIO</a>
<table border="1" style="width: 100%;">
    <tr>
        <th>ID</th>
        <th>Nome</th>
        <th>E-mail</th>
        <th>Senha</th>
        <th>Ações</th>
    </tr>
    <?php foreach($lista as $usuario): ?>
        <tr>
            <td><?php echo $usuario['id']; ?></td>
            <td><?php echo $usuario['nome']; ?></td>
            <td><?= $usuario['email']; ?></td>
            <td><?= $usuario['senha']; ?></td>
            <td>
                <a href="editar.php?id=<?=$usuario['id'];?>">[ Editar ]</a>
                <a href="excluir.php?id=<?=$usuario['id'];?>" onclick="return confirm('Tem certeza que deseja deletar este usuário?')">[ Excluir ]</a>
            </td>
        </tr>
    <?php endforeach ?>

</table>