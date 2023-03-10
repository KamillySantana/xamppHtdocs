<?php
    include("../config/cabecalho.php");

    include("../conexao.php");

    $sql = "SELECT id, nome, email, telefone, agencia, conta, razao_social FROM fornec";

    $resultado = $conexao->query($sql);

    if($resultado->rowCount() > 0){
        echo "<table border=1>";
        echo "
            <tr>
                <th>ID</th>
                <th>Nome</th>
                <th>E-mail</th>
                <th>Telefone</th>
                <th>Agencia</th>
                <th>Conta</th>
                <th>Razão social</th>
                <th>Editar</th>
                <th>Deletar</th>
            </tr>
        ";
        foreach ($resultado as $row) {
            echo "<tr>";
            echo "<td>".$row["id"]."</td>";
            echo "<td>".$row["nome"]."</td>";
            echo "<td>".$row["email"]."</td>";
            echo "<td>".$row["telefone"]."</td>";
            echo "<td>".$row["agencia"]."</td>";
            echo "<td>".$row["conta"]."</td>";
            echo "<td>".$row["razao_social"]."</td>";

            echo '<td><a href="TelaEditar.php?id='.$row['id'].'">Editar</a></td>';
            echo '<td><a href="deletar.php?id='.$row['id'].'">Excluir</a></td>';
            echo "</tr>";
        }

        echo "</table>";

    }else {
        echo "Nenhum dado encontardo";
    }

    include("../config/rodape.php");
?>