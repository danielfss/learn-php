<?php
    require('header.php');
?>

<form method="POST" action="recebedor.php">
    
    <label for="nome">
        Nome:
        <br/>
        <input type="text" name="nome" />
    </label>
    <br/>
    <br/>

    <label for="senha">
        Senha:
        <br/>
        <input type="password" name="senha" />
    </label>
    <br/>
    <br/>

    <input type="submit" value="Enviar" />

</form>