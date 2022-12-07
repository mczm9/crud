<link rel="stylesheet" type="text/css" href="style.css">

<div class="container">
</div>

<?php 
//extract($_POST);  --- não utilizado, pois não vai ser pego dados em um forms

try{	

include_once("conexao.php");

$conn->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);

$read = $conn->prepare("UPDATE cadastro SET professores=:prof, servicosgerais=:serg, gestao=:gest, alimentacao=:aliment WHERE id=:id");
   

    $id = $_GET['id'];
    $prof = $_GET['prof'];
    $servg = $_GET['servg'];
    $gestao = "Helton1";
    $cantina = "Helena1";


   $read->bindParam(":prof",$prof);
   $read->bindParam(":serg",$servg);
   $read->bindParam(":gest",$gestao);
   $read->bindParam(":aliment",$cantina);
   $read->bindParam(":id",$id);

	$read->execute();
  echo "<p>Registro Atualizado! - <a href='http://localhost/crud2022'>Home</a></p>"; 

    }catch(Exception $e){
		echo "Erro: ".$e->getMessage(); 
	}

?>
