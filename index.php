<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Home</title>
    <!-- Aplicando o Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <!-- Estilos personalizados -->
    <style>
      body, html {
        height: 100%;
        background-color: #FFEB3B; /* cor de fundo amarelo */
      }
      .text-dark {
        color: #212529; /* cor do texto escura */
      }
      .cover-container {
        max-width: 42em;
      }
      .btn-primary {
        background-color: #212529; /* botão escuro */
        border-color: #212529;
      }
      .btn-primary:hover {
        background-color: #343a40;
        border-color: #343a40;
      }
    </style>
</head>
<body class="d-flex flex-column h-100 text-center text-dark">
    <div class="cover-container d-flex w-100 h-100 p-3 mx-auto flex-column">
      <!-- Cabeçalho da página -->
      <header class="mb-auto">
        <div>
          <!-- Menu de navegação -->
          <h3 class="float-md-start mb-0 text-dark">Aplicação PHP</h3>
          <nav class="nav nav-masthead justify-content-center float-md-end">
            <a class="nav-link active text-dark" aria-current="page" href="index.php">Home</a>
            <a class="nav-link text-dark" href="login.php">Login</a>
            <a class="nav-link text-dark" href="cadastro.php">Cadastro</a>
          </nav>
        </div>
      </header>
      <!-- Conteúdo principal da página -->
      <main class="px-3">
        <h1>Bem-vind@.</h1>
        <p class="lead">Página inicial(home) de um projeto criado para ensino de base de dados utilizando a linguagem PHP como linguagem de back-end. Acesse o projeto clicando em:</p>
        <a href="https://github.com/Vellone07/Cad-Login" class="btn btn-primary">GitHub</a>
      </main>
      <!-- Rodapé da página -->
      <footer class="mt-auto text-dark-50" style="padding: 20px;">
        <p>Aplicação PHP com Bootstrap 5, by <a href="https://getbootstrap.com/" class="text-dark">Bootstrap</a>.</p>
        <p>Projeto criado por <a href="https://www.linkedin.com/in/davi-vellone-7a3760268/" class="text-dark">@Davi


