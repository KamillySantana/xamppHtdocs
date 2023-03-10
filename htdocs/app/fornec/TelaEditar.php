<?php

    include("../config/cabecalho.php");
    include("../conexao.php");

    if(!isset($_GET['id'])){
        die("ID do usuário inválido");
    }

    $id = $_GET['id'];

    $sql = "SELECT * FROM fornec WHERE id = :id";
    $stmt = $conexao->prepare($sql);
    $stmt->bindValue(":id", $id);
    $stmt->execute();
    $row = $stmt->fetch(PDO::FETCH_ASSOC);

    if(!$row){
        die("Fornecedor não encontrado");
    }
?>

<div class="container">
    <h1>Edição de fornecedor</h1>
    <form action="<?php echo "atualizar.php?id={$id}" ?>" method="POST">
    <input type="hidden" name="id" id="id" value="<?php echo $row['id'] ?>">

        <label for="nome">Nome</label>
        <input type="text" name="nome" id="nome" placeholder="Informe seu nome" required value="<?php echo $row['nome'] ?>">

        <label for="email">E-mail</label>
        <input type="email" name="email" id="email" placeholder="Informe seu email" required value="<?php echo $row['email'] ?>">

        <label for="telefone">Telefone</label>
        <input type="tel" name="telefone" id="telefone" placeholder="Informe seu telefone" required value="<?php echo $row['telefone'] ?>">

        <label for="agencia">Agencia</label>
        <input type="number" name="agencia" id="agencia" placeholder="Informe sua agencia" required value="<?php echo $row['agencia'] ?>">
        
        <label for="conta">Conta</label>
        <input type="number" name="conta" id="conta" placeholder="Informe sua conta" required value="<?php echo $row['conta'] ?>">
        
        <label for="razao_social">Razão social</label>
        <input type="text" name="razao_social" id="razao_social" placeholder="Razão social" required value="<?php echo $row['razao_social'] ?>">

        <button type="submit">Atualizar</button>

    </form>
</div>

<?php
    include("../config/rodape.php");
?>