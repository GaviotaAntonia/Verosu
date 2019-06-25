
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>VEROSU S. de R.L M.I</title>
	<link rel="stylesheet" href="">
	<meta charset="utf-8">
  	<meta name="viewport" content="width=device-width, initial-scale=1">
  	<link rel="stylesheet" type="text/css" href="css/login.css">
  	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
  	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
  	<link rel="shortcut icon" type="image/png" href="conphoto/ab.png"> 
  	<link rel="stylesheet" href="css/register.css">
  	
	  <link rel="stylesheet" href="css/animate.css">
  	
  	<!--LETRA QUE SE UTLIZA-->
	
	<link href="https://fonts.googleapis.com/css?family=Roboto&display=swap" rel="stylesheet">

</head>

<body>

	<!--NAV -->
		<?php include 'nav.html' ?>
	<!--END FOR NAV -->
	
	<?php  

		if (isset($_POST['entrar'])) {
			require ("class/db.php");

			$username = $mysqli->real_escape_string($_POST['username']);
			$password = md5($_POST['password']);

			$consulta = "SELECT username, password, id FROM data WHERE username = '$username' AND password = '$password'";

			if ($resultado = $mysqli->query($consulta)) {
				while ($row = $resultado->fetch_array()) {
					$userok = $row['username'];
					$passok = $row['password'];
					$row  = $row['id'];
				}
				$resultado->close();
			}
			$mysqli->close();

			if (isset($username) && isset($password)) {
				if ($username == $userok && $passok == $passok) {
					session_start();
					$_SESSION['logueado'] = TRUE;
					$_SESSION['username'] = $userok;
					$_SESSION['id'] = $id;
					header("location: inicio.php");
				}else{
					header("location: login.php?error=login");
				}
			}
		}

	?>

	<div class="container" style="margin-top: 30px">
		<div class="row">
			<div class="col-md-6 login-form-1">
				<h3>Login</h3>      
				<form action="" method="post">
                    <div class="form-group">
                        <input type="text" class="form-control" placeholder="Introduce tu correo o nombre de usuario" name="username" />
                    </div>
                   	<div class="form-group">
                        <input type="password" class="form-control" placeholder="Introuce tu contraseña" name="password" />
                   	</div>
                   	<?php 
							if (isset($_GET['error'])) {
								echo "<center><span class='sub-error'>Error el usuario o contraseña no coinciden</span></center>";
							}
						?>

                   	<div class="form-group">
                        <input type="submit" class="btnSubmit" value="Login" name="entrar"/>
                   	</div>
                   	<div class="form-group">
                        <a href="#" class="btnForgetPwd">Recuperar contraseña?</a>
                   	</div>
                </form>	
			</div>

			<?php 

				if (isset($_POST['registro'])) {
					require ("class/db.php");

					$username = $mysqli->real_escape_string($_POST['username']);
					$name = $mysqli->real_escape_string($_POST['name']);
					$surname_mother = $mysqli->real_escape_string($_POST['surname_mother']);
					$surname_father = $mysqli->real_escape_string($_POST['surname_father']);
					$password = md5($_POST['password']); 
					$email = $mysqli->real_escape_string($_POST['email']);

					$ip = $_SERVER['REMOTE_ADDR'];

					$consultarusuario = "SELECT username FROM data WHERE username = '$username'";
					$consultaremail = "SELECT email FROM data WHERE email = '$email'";

					if ($resultadousuario = $mysqli->query($consultarusuario));
						$numerousuario = $resultadousuario->num_rows;

					if ($resultadoemail = $mysqli->query($consultaremail));
						$numeroemail = $resultadoemail->num_rows;

					if ($numeroemail>0)
					{
						echo "<center><span> Este correo ya esta registrado, intente con otro. </span></center>";
					}
					elseif ($numerousuario>0)
					{
						echo "<center><span> Este usuario ya existe. </span></center>";
					}
					else
					{
						$aleatorio = uniqid();

						$query = "INSERT INTO data (email,name,username,password,surname_father,surname_mother) VALUES ('$email','$name','$username','$password','$surname_father','$surname_mother')";

					if ($registro = $mysqli->query($query)) {
						
						Header("Refresh: 2; URL=inicio.php");

						echo "<center><span class='sub-error'> Felicidades $username se ha registrado correctamente, te hemos enviado un correo de confirmación. </span></center>";

						$email_to = $email;
						$email_subject = "Confirma tu email Curso";
						$email_from = "replay.tusitioweb.com";

						$email_message = "Hola" .$username. ", para poder disfrutar de nuestro sitio web, debe confirmar tu emial\n\n";
						$email_message .= "Ingresa el siguiente codigo para confirmar tu email\n\n";
						$email_message .= "Codigo:" .$aleatorio. "\n";

						$headers = 'From:' .$email_from."\r\n".
						'Reply-to:' .$email_from. "\r\n".
						'X-Mailer: PHP/' . phpversion();
						@mail($email_to, $email_subject, $email_message, $headers);
					}
					else{
						echo "Ha ocurrido un error en el registro, intentelo de nuevo";
						header("Refresh: 2; URL=login.php");
					}
				}

				$mysqli->close();

				}

			 ?>

			<div class="col-md-6 login-form-2">
                <h3>Registrarse</h3>
                <form action="" method="post">
                    <div class="form-group">
                        <input type="text" class="form-control" placeholder="Nombre de usuario" name="username" required />
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" placeholder="Nombre completo" name="name" required />
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" placeholder="Apellido Paterno" name="surname_father" required />
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" placeholder="Apellido Materno" name="surname_mother" required />
                    </div>
                    <div class="form-group">
                        <input type="password" class="form-control" placeholder="Contraseña" name="password" required />
                    </div>
                    <div class="form-group">
                        <input type="email" class="form-control" placeholder="Correo electronico" name="email" required />
                    </div>
                    <?php 


                     ?>
                    <div class="form-group">
                        <input type="submit" class="btnSubmit" name="registro" value="Registrarse" />
                    </div>
                </form>    
            </div>
		</div>
	</div>

</body>

	<!-- FOOTER -->

		<?php include 'footer.html' ?>

	<!--END FOR FOOTER -->


</html>

<?php
ob_end_flush();
?>