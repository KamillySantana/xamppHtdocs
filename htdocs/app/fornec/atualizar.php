<?php

    include("../conexao.php");

    if(!isset($_GET['id'])){
        die("Fornecedor não existe");
    }

    $id = $_POST['id'];
    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $telefone = $_POST['telefone'];
    $agencia = $_POST['agencia'];
    $conta = $_POST['conta'];
    $razao_social = $_POST['razao_social'];

    if(isset($id) && isset($nome) && isset($email) && isset($telefone) && isset($agencia) && isset($conta) && isset($razao_social)){
        $sql = "UPDATE fornec SET nome = :nome, email = :email, telefone = :telefone, agencia = :agencia, conta = :conta, razao_social = :razao_social WHERE id = :id";
        $stmt = $conexao->prepare($sql);
        $stmt->bindValue(":id", $id);
        $stmt->bindValue(":nome", $nome);
        $stmt->bindValue(":email", $email);
        $stmt->bindValue(":telefone", $telefone);
        $stmt->bindValue(":agencia", $agencia);
        $stmt->bindValue(":conta", $conta);
        $stmt->bindValue(":razao_social", $razao_social);
        $stmt->execute();
        
        header("location: TelaListagem.php");
        exit();

    }else {
        die("Dados do formulario não preenchidos");
    }