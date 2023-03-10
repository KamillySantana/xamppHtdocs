<?php

    include("../conexao.php");

    if(!isset($_GET['id'])){
        die("Usuário não existe");
    }

    $id = $_POST['id'];
    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $login = $_POST['login'];

    if(isset($id) && isset($nome) && isset($email) && isset($login)){
        $sql = "UPDATE usuario SET nome = :nome, email = :email, login = :login WHERE id = :id";
        $stmt = $conexao->prepare($sql);
        $stmt->bindValue(":id", $id);
        $stmt->bindValue(":nome", $nome);
        $stmt->bindValue(":email", $email);
        $stmt->bindValue(":login", $login);
        $stmt->execute();
        
        header("location: TelaListagem.php");
        exit();

    }else {
        die("Dados do formulario não preenchidos");
    }