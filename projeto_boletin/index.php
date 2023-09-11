<?php

include_once("conexao.php");
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <title>Formulário de aprovação</title>
<link rel="stylesheet" href="./assets/css/style.css">
</head>
<body>
<nav>
  <ul>
    <a href="index.php">Cadastrar Nota</a>
    <a href="retorno.php">Lista de Notas</a>
    <a href="">Boletim</a>
  </ul>
</nav>
<div class="container">
    <h1>Formulário de aprovação</h1>
    <div class="inputs">
    <form action="cadastro.php" method="post">
        <input type="text">
      <input type="text" name="nome" id="" placeholder="Insira o Nome"><br>
      <input type="text" id="ent1" name="ent1" placeholder="Primeira entrada"><br>
      <input type="text" id="ent2"  name="ent2" placeholder="Segunda entrada"><br>
      <input type="text" id="ent3"   name="ent3" placeholder="Terceira entrada"><br>
      <label for="resultdo">Resultado</label><br>
      <input type="text" name="resultado" id="" placeholder="Insira aqui o resultado gerado"><br>
      <p id="resultado" name="resultado">Resultado</p><br><br>



    <input type="submit" value="Enviar">
    </form>

 
    <!--<form action="cadastro.php" method="post">
      <input type="text" name="resultado" id="">
      <input type="submit" value="Enviar">
    </form>-->
    
    <button class="enviar">Gerar Nota</button>
    </div>
  </div>
  </div>
  <script src="script.js"></script>
</body>
</html>