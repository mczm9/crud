<form method="post" action="#">
	
	<label> Digite o Id </label>
	<input type="number" name="id"> <br>
	<label> Digite o Nome </label>
	<input type="text" name="prof">
	<label> Digite o S. Gerais </label>
	<input type="text" name="servg">


		<button type="submit" name="sub"> Atualizar </button>   <!-- --Tem que ser submit para php, type button é para Js -->

</form>

<?php 
	if(isset($_POST['sub'])){
	
	$id = $_POST['id'];	
	$prof = $_POST['prof'];
	$servg = $_POST['servg'];
	header("location:setupdate.php?id=$id&prof=$prof&servg=$servg"); // ----- Chamar alguma pagina em php
}

?>