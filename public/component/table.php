<hr>

<h4> Usuários Cadastrados</h4>

<!-- Criação da tabela -->
<table border="1" cellpadding="2">

    <tr>
        <th>ID</th>
        <th>Usuário</th>
        <th>Senha</th>
    </tr>

    <?php
    
    // Consulta SQL para buscar todos os usuários cadastrados
    $sqlUsuarios = "SELECT * FROM users";
    // Executa a consulta no banco de dados
    $resultadoUsuarios = $conn -> query($sqlUsuarios);


      // Percorre cada registro retornado pela consulta
    while($linha = $resultadoUsuarios->fetch_assoc()){


        // Exibe cada usuário em uma nova linha da tabela
        echo "<tr>
        
            <td>" . $linha["id"] . "</td>
            <td>" . $linha["username"] . "</td>
            <td>" . $linha["password"] . "</td>
        
        </tr>";
    }
    
    ?>

</table>