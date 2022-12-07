<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title> Cadastro PHP </title>
	<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
</head>
<style type="text/css">
	body{
		/*background-image: url(https://i.pinimg.com/564x/f9/20/69/f920698ca19b918b61be0f6c45f0b319.jpg);*/
	}
</style>
<body>
<header> <h2> Formulário Cadastro </h2></header>
<section>
	<div class="container">
	<form method="post" action="insert.php">
  <div class="input-group input-group-lg">
  <span class="input-group-text" id="inputGroup-sizing-lg">Professor</span>
  <input type="text" name="prof" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-lg">
</div>
<div class="input-group input-group-lg">
  <span class="input-group-text" id="inputGroup-sizing-lg">Serviços Gerais</span>
  <input type="text" name="servGerais" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-lg">
</div>
<div class="input-group input-group-lg">
  <span class="input-group-text" id="inputGroup-sizing-lg">Gestão </span>
  <input type="text" name="gestao" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-lg">
</div>
<div class="input-group input-group-lg">
  <span class="input-group-text" id="inputGroup-sizing-lg">E-mail </span>
  <input type="email" name="email" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-lg">
</div>
    <button type="submit" class="btn btn-primary">Cadastrar</button>
      </form>
	</div>
</section>
<footer>
		AFL - 2022
</footer>
<script src="bootstrap/js/bootstrap.bundle.min.js">
</script>
</body>
</html>