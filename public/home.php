<?php

// Inclui o arquivo de conexão com o banco de dados
    include("../infra/db/connect.php");

     // Verifica se existe um usuário logado na sessão
    if(!isset($_SESSION["usuario"])){
        header("Location: ../index.php");
        exit();
    }
     // Verifica se o formulário foi enviado
    if($_SERVER["REQUEST_METHOD"] == "POST"){

        // Captura os dados digitados no formulário
        $usuario = $_POST["usuario"];
        $senha = $_POST["senha"];

        // Comando SQL para inserir um novo usuário no banco
        $sql = "INSERT INTO users (username, password) VALUES ('$usuario','$senha')";
        if($conn -> query($sql) === TRUE){
            echo "<script>alert('Usuário Cadastrado com sucesso!')</script>";
        }else{
            echo "<script>alert('Erro Usuário Não Cadastrado!')</script>";
        }
    }
?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link rel="stylesheet" href="../style/style.css">
</head>
<body>
    <?php

        // Inclui a barra de navegação
        include("../public/component/navbar.php");
    ?>
    <h2>Bem-vindo!</h2>
    <p> Usuário logado: 
        <?php echo $_SESSION["usuario"];?>
    </p>

    <h4>Cadastrar Novo Usuário</h4>
    <form method="POST">
        <label for="usuario">Usuario:</label>
        <input type="text" name="usuario">
        <br>
        <br>
        <label for="senha">Senha:</label>
        <input type="password" name="senha">
        <br>
        <br>
        <button type="submit">Cadastrar</button>
    </form>
    <?php
    
    include("../public/component/table.php");
    ?>


    <a href="logout.php">Sair</a>
    
</body>
</html>