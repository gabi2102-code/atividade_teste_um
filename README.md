## Sistema Simples de Login e Cadastro de Usuários com PHP e MySQL
  
 O objetivo da aplicação é permitir que usuários façam login em um sistema, acessem uma área protegida e realizem o cadastro de novos usuários. O sistema também possibilita visualizar os usuários cadastrados e encerrar a sessão por meio do logout.

## Tecnologias Utilizadas
HTML 
CSS 
PHP 
MySQL 
Sessões PHP 

## Estrutura Básica dos Arquivos

 O sistema está organizado em algumas pastas para deixar o código mais organizado. Na pasta infra, fica o arquivo connect.php, que é responsável por fazer a conexão com o banco de dados.
 Na pasta public, estão os arquivos utilizados pelo usuário. Dentro da pasta component, temos o arquivo navbar.php, que exibe o cabeçalho da página, e o arquivo table.php, que mostra a tabela com os usuários cadastrados.
 Também na pasta public, o arquivo home.php é a página principal do sistema após o login, onde é possível cadastrar e visualizar usuários. Já o arquivo logout.php é utilizado para encerrar a sessão do usuário.
 Na raiz do projeto está o arquivo index.php, que corresponde à tela de login. Além disso, existe a pasta style, que contém o arquivo style.css, responsável pela aparência e estilização das páginas.

## Explicação Geral sobre o Funcionamento do Código

 O sistema funciona por meio da integração entre PHP e MySQL. Inicialmente, o arquivo connect.php estabelece a conexão com o banco de dados e inicia a sessão do usuário. Na página de login, o usuário informa seu nome de usuário e senha, e o sistema verifica se essas informações estão cadastradas na tabela de usuários do banco de dados. Caso os dados estejam corretos, uma sessão é criada e o usuário é direcionado para a página principal.
 Para garantir a segurança do acesso, as páginas protegidas verificam se existe uma sessão ativa. Se o usuário não estiver autenticado, ele é redirecionado automaticamente para a tela de login. O sistema também permite o cadastro de novos usuários por meio de um formulário, cujos dados são armazenados no banco de dados.
 Além disso, os usuários cadastrados podem ser visualizados em uma tabela, cujas informações são obtidas diretamente do banco através de consultas SQL. Por fim, quando o usuário deseja encerrar sua utilização do sistema, ele pode realizar o logout, que remove os dados da sessão e o redireciona novamente para a página de login.

 ## Principais Aprendizados Obtidos Durante a Análise
* Como conectar uma aplicação PHP a um banco de dados MySQL.
* Como utilizar formulários HTML para enviar informações.
* Como executar comandos SQL utilizando PHP.
* Como criar e utilizar sessões para controlar usuários logados.
* Como organizar um projeto em diferentes arquivos e componentes.
* Como exibir dados do banco de dados em tabelas HTML.
* A importância da segurança em sistemas de login, principalmente contra ataques de SQL Injection.
* A importância de separar estrutura (HTML), estilo (CSS) e lógica (PHP).