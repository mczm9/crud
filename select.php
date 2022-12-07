<?php 

include_once("conect.php");

try{

$smt = $conn->prepare("SELECT * FROM cadastro");
$stmt->execute();

$result = $smt->fetch(PDO::FETCH_OBJ);

// echo $result->professor."<br>";
// echo $result->revgerais."<br>";

echo "<table border=1>";
 echo "<tr><th>id</th><th>Prof</th><th>Serv Gerais</th>
         <th>Gestão</th><th> E-mail </th></tr>";  
while($result = $smt->fetch(PDO::FETCH_OBJ)){
	echo "<tr><td> $result->id </td> 
		              <td> $result->professor </td> 
		              <td> $result->servgerais </td>
		              <td> $result->gestao </td> 
		              <td> $result->email </td> </tr>"; 
}

echo "/table>";
} catch(Exeption $e){

echo "Erro de consulta ao BD ".utf8_decode($e->getMessage());
}
 ?>