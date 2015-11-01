<!DOCTYPR html>
<html>
<head>
	<title>Login</title>
	<meta name="viewport" content="wight=device-widht, initial-escele=1.0">
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
	<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="css/login.css"> 
</head>
<body>
	<div class="container">
		<div class="row">
			<div class="col-MD-12 col-SM-12 col-XS-12 col-LG-12 colors">
				<img src="img/cup-of-coffee2.ico" class="img-responsive">
				<h1>mocaMAIL</h1>
			</div>
			</div>
    </div>
	<div class="row">
		<div class="col-MD-6 col-SM-12 col-XS-12 col-LG-6">
			<div class="jumbotron loginbox">
				<from method="POST" name="flogin" id="flogin">
				<span>Login</span>
				<br>
				<label>Nombre de usuario:</label>
				<input type="text" name="username" id="username" class="form-control">
				<label>Contraseña</label>
				<input type="text" name="password" id="password" class="form-control">
				<input type="submit" value="Conectarse" class="btn btn-success boton">
			</div>
		</div>
		<div class="col-MD-6 col-SM-12 col-XS-12 col-LG-6">
			<div class="jumbotron loginbox">
				<from method="POST" name="flogin" id="flogin">
				<span>Registro</span>
				<br>
				<label>Nombre</label>
				<input type="text" name="username" id="username" class="form-control">
				<label>Apellido</label>
				<input type="text" name="username" id="username" class="form-control">
				<label>Nombre de usuario</label>
				<input type="text" name="username" id="username" class="form-control">
				<label>Contraseña</label>
				<input type="text" name="password" id="password" class="form-control">
				<input type="submit" value="Conectarse" class="btn btn-success boton">
			</div>
		</div>
	</div>
</body>
</html>