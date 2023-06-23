<html>
  <head>
    <title>PHP Test</title>
    <link href = "novo.css" rel = "stylesheet">
  </head> 

  <body class="paragrafo">
<br><br><br><br><br><br><br><br><br>
 <div class="bloquin"><center><form method="post">
<br><br>
    Nome:<input type="text" name="Nome">
    <p> Idade: <input type="text" name="idade"></p>
    <p>Email: <input type="email" name="Email"></p>
   <p>Senha: <input type="password" name="senha" ></p> 
    <p> <input type="submit" value="Enviar"></p>
   </form></div>
    
<?php 
$filme = $_POST["idade"];
$filme = $_POST["Email"];
$filme = $_POST["Nome"];
$filme = $_POST["senha"]

?>


    
  </body>
</html>