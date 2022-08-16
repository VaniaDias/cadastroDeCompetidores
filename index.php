<?php
  include "servicos/servicoMensagemSessao.php";
?>

<!DOCTYPE html>
<html>
  <head>
  <meta charset="UTF-8">
  <title>Formulário de Inscrição</title>
  <meta name="author" content="">
  <meta name="description" content="">
  <meta name="viewport" content="width-device-width, initial-scale-1">
  </head>

  <body>
    <p>FORMULÁRIO PARA INSCRIÇÃO DE COMPETIDORES</p>

    <form action="script.php" method="post">
      <?php
          $mensagemDeSucesso = obterMensagemSucesso();
          if (!empty($mensagemDeSucesso))
          {
            echo $mensagemDeSucesso;
          }
          
          
          $mensagemDeErro = obterMensagemErro();
          if (!empty($mensagemDeErro))
          {
            echo $mensagemDeErro;
          }
      ?>
    
      <p>Seu Nome: <input type="text" name= "nome" /></p>
      <p>Sua Idade: <input type="text" name= "idade" /></p>
      <p><input type="submit" value="Enviar dados do Competidor"/></p>
    </form>

  </body>
</html>