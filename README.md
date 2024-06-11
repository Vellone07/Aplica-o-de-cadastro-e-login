
Aplicação Web em PHP com Bootstrap 5 🌐
Visão Geral
Este projeto é uma pequena aplicação web desenvolvida utilizando Bootstrap 5. Ele consiste em três telas principais: a página inicial (index.php), a página de login (login.php) e a página de cadastro (cadastro.php).

Estrutura do Projeto
index.php: Página principal que dá as boas-vindas aos usuários.
login.php: Página onde os usuários podem fazer login.
cadastro.php: Página onde novos usuários podem se cadastrar na aplicação.
Banco de Dados
A aplicação requer um banco de dados, a ser criado, com duas tabelas principais:

Tabela cadUser

idcadUser: Chave primária (INT)
name: Nome do usuário (VARCHAR)
password: Senha do usuário (VARCHAR)
email: Email do usuário (VARCHAR)
tipoUser: Tipo de usuário (INT)
Tabela tbLogin

idtbLogin: Chave primária (INT)
dtHoraLogin: Timestamp do momento do login (TIMESTAMP)
cadUser_idcadUser: Chave estrangeira referenciando o usuário (INT)
Funcionalidades
Tela Principal (index.php)

Dá boas-vindas aos usuários e possui um botão que redireciona para o GitHub.
Tela de Login (login.php)

Permite que usuários façam login na aplicação.
Tela de Cadastro (cadastro.php)

Permite que novos usuários se registrem na aplicação.
Como Executar
Verifique se o PHP está instalado em seu ambiente.
Faça o download ou clone este repositório.
Coloque os arquivos em seu servidor web local (por exemplo, XAMPP ou WAMP).
Abra o navegador e navegue até http://localhost/nome_do_projeto/.
Estilização
A aplicação utiliza o Bootstrap 5 para estilização, com um tema escuro ajustado para cores de fundo e texto.

Créditos !
Aplicação PHP com Bootstrap 5, desenvolvida por @DaviVellone.
