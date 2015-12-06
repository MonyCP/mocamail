<!DOCTYPR html>
<html>
<head>
	<title>Login</title>
	<meta name="viewport" content="wight=device-widht, initial-escele=1.0">
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
	<link rel="stylesheet" type="text/css" href="bootstrap/bootstrap/css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="bootstrap/css/login.css"> 
</head>
<body>
	<div class="container">
		<div class="row moca">
			<div class="col-MD-12 col-SM-12 col-XS-12 col-LG-12 colors">
				<img src="bootstrap/img/taza.png" class="img-responsive">
				<h1>mocaMAIL</h1>
			</div>
			</div>
    </div>
	<div class="row">
		<div class="col-MD-6 col-SM-12 col-XS-12 col-LG-6">
			<div class="jumbotron loginbox">
				<from action="User/authenticate" method="POST" name="flogin" id="flogin">
				<span>Login</span>
				<br>
				<label>Nombre de usuario:</label>
				<input type="text" name="username" id="username" class="form-control">
				<label>Contraseña</label>
				<input type="password" name="password" id="password" class="form-control">
				<input type="button" value="Iniciar Sesión" class="btn btn-danger boton">
			</div>
		</div>
		<div class="col-MD-6 col-SM-12 col-XS-12 col-LG-6">
			<div class="jumbotron loginbox">
				<from action="user/registroDatos" method="POST" name="flogin" id="flogin">
				<span>Registro</span>
				<br>
				<label>Nombre</label>
				<input type="text" name="name" id="name" class="form-control">
				<label>Apellido</label>
				<input type="text" name="lastname" id="lastname" class="form-control">
				<label>Nombre de usuario</label>
				<input type="text" name="username" id="username" class="form-control">
				<label>Email</label>
				<input type="email" name="email" id="email" class="form-control">
				<label>Contraseña</label>
				<input type="password" name="password" id="password" class="form-control">
				<label>Repetir Contraseña</label>
				<input type="password" name="rep-password" id="rep-password" class="form-control">
				<input type="button" value="Registrarse" class="btn btn-danger boton">
				
			</div>
		</div>
	</div>
	<font color="red" style="font-weight: bold; font-size: 14px; text-decoration: underline"></font>
</body>
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
<script type="text/javascript">
	
</script>
</html>