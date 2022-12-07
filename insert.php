<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="utf-8">
	<title> Cadastrar Funcionário </title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
<div class="container">
  <form action="#" method="post">
  <p>Professor: <input type="text" name="prof"></p>
  <p>S. Gerais: <input type="text" name="servg"></p>
  <p> Gestão : <input type="text" name="gestao"></p>
  <p> Cantina: <input type="text" name="cantina"></p>
   <p style="text-align: center"> 
 <button type="submit" name="sub"> Cadastrar </button>
  </p>
  </form>
  <p><a href="http://localhost/crud2022">Home</a></p>
  <?php 
  if(isset($_POST['sub'])){
   extract($_POST); // transforma os names em variáveis    
    try{ 
     include_once("conexao.php"); //Compartilha informações com o outro arquivo.

     $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); // Dar aviso de que tem algo errado

     $inserir = $conn->prepare("INSERT INTO cadastro VALUES(:id,:prof,:servg,:gest,:cant)");
     
     $id = 0;
     $inserir->bindParam(":id",$id);
     $inserir->bindParam(":prof",$prof);
     $inserir->bindParam(":servg",$servg);
     $inserir->bindParam(":gest",$gestao);
     $inserir->bindParam(":cant",$cantina);
   
     $inserir->execute();
     echo "Dados inseridos com sucesso!";
	   }
     catch(Exception $e){
    echo "Erro: ".$e->getMessage(); 
  }
}
  ?>
  </div>
</body>
</html>