<?php

include("infra/db/connect.php");
// Incluir o arquivo responsável pela conexão com banco de dados


// Ele vai verificar se o fomulário foi enviado pelo POST
if($_SERVER["REQUEST_METHOD"] == "POST"){

    // Captura os dados digitados pelo usuário no formulário
    $usuario = $_POST["usuario"];
    $senha = $_POST["senha"];

   // Consulta SQL para verificar se existe um usuário com
    $sql = "SELECT * FROM users 
    WHERE username = '$usuario' 
    AND password = '$senha'";
    
     // Executa a consulta no banco de dados
    $resultado = $conn -> query($sql);


    // Verifica se a consulta retornou pelo menos um registro
    if($resultado -> num_rows > 0){
    $_SESSION["usuario"] = $usuario;
        
        // Redireciona o usuário para a página inicial
        header("Location: public/home.php");
        exit();
    }else{
        $erro = "Usuário ou senha inválidos.";
    }
}

?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login com PHP</title>
</head>
<body>

     // Inclui um componente externo (possivelmente uma tabela ou menu)
     <?php
    include("../public/component/table.php");
    ?>


    <h2>Login com PHP</h2><form method="POST">

       <!-- Campo para digitar o usuário -->
        <label for="usuario">Usuario:</label>
        <input type="text" name="usuario">
        <br>
        <br>
          <!-- Campo para digitar a senha -->
        <label for="senha">Senha:</label>
        <input type="password" name="senha">
        <br>
        <br>
        <?php
         // Exibe a mensagem de erro caso ela exista
            if(isset($erro)){
                echo $erro;
            }
        ?>
          <!-- Botão para enviar o formulário -->
        <button type="submit">Entrar</button>
    </form>
    


    
</body>
</html>