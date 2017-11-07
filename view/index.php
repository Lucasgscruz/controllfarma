
<!--
View - ControllFarma MVC
Carlos Magno
Lucas Geraldo


-->

<!DOCTYPE html>
<html>
<head>
	<title>Cadastrar Cliente</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="estilo.css">
		
</head>
	<body >

		<div class="container">  
		  <form id="contact" action="../controller/cadastro_controller.php" method="post">
		    <h3>Cadastrar Cliente</h3>
		    <fieldset>
		      <input placeholder="Nome do cliente" type="text" name="nome" tabindex="1" required autofocus>
		    </fieldset>
		    <fieldset>
		      <input placeholder="CPF do cliente" type="text" name="cpf" tabindex="2" required>
		    </fieldset>
		    <fieldset>
		      <button name="submit" type="submit" id="contact-submit" data-submit="...Sending">Enviar</button>
		    </fieldset>
		  </form>
		</div>

	</body>
</html>

<!-- <!DOCTYPE html>
<html>
<head>
	<title>Cadastrar Cliente</title>
	<meta charset="utf-8">
</head>
<body >
	<div style="width:100 %;text-align: center;">
		<h1>Cadastro cliente</h1>
		<form method="post" action="../controller/cadastro_controller.php">
			<label>Nome</label>
			<input type="" name="nome" style="width: 200px;">	
			<br>
			<label>CPF</label>
			<input type="" name="cpf" style="width: 200px;">
			<br>
			<button type="submit" name="submit">Enviar</button>
		</form>
	</div>

</body>
</html> -->