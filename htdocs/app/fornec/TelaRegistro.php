<?php
    include("../config/cabecalho.php");
?>

<div class="container">
    <h1>Fornecedores</h1>

    <form action="" method="POST">

        <label for="nome">Nome</label>
        <input type="text" name="nome" id="nome" placeholder="Informe seu nome" required>

        <label for="email">E-mail</label>
        <input type="email" name="email" id="email" placeholder="Informe seu email" required>

        <label for="telefone">Telefone</label>
        <input type="tel" name="telefone" id="telefone" placeholder="Informe seu telefone" maxlength="20" required>

        <label for="agencia">Agencia</label>
        <input type="number" name="agencia" id="agencia" placeholder="Informe sua agencia" required>

        <label for="conta">Conta</label>
        <input type="number" name="conta" id="conta" placeholder="Informe sua conta" required>

        <label for="razao_social">Razão social</label>
        <input type="text" name="razao_social" id="razao_social" placeholder="Razao social" required>

        <button type="submit">Enviar</button>

    </form>

    <?php
        //conectar com o banco de dados
        include("..//conexao.php");

        //formulario foi enviado?
        if ($_SERVER["REQUEST_METHOD"] == "POST"){
            $nome = $_POST["nome"];
            $email = $_POST["email"];
            $telefone = $_POST["telefone"];
            $agencia = $_POST["agencia"];
            $conta = $_POST["conta"];
            $razao_social = $_POST["razao_social"];

            $sql = "INSERT INTO fornec(nome, email, telefone, agencia, conta, razao_social) VALUES (:nome, :email, :telefone, :agencia, :conta, :razao_social)";
            $stmt = $conexao->prepare($sql);
            $stmt->bindValue(":nome", $nome);
            $stmt->bindValue(":email", $email);
            $stmt->bindValue(":telefone", $telefone);
            $stmt->bindValue(":agencia", $agencia);
            $stmt->bindValue(":conta", $conta);
            $stmt->bindValue(":razao_social", $razao_social);
            $stmt->execute();

            if ($stmt->rowCount() > 0){
                echo "<div class='sucess'>Fornecedor cadastrado com sucesso</div>";
            }else {
                echo "<div class='error'>Falha ao registrar</div>";
            }

            //fechar a conexao
            $conexao = null;
        }
    ?>

</div>

<?php
    include("../config/rodape.php");
?>