<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
	
	<title> EA &#9119 Contacto - Mensaje envíado</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.1/css/bootstrap.min.css" integrity="sha384-VCmXjywReHh4PwowAiWNagnWcLhlEJLA5buUprzK8rxFgeH0kww/aWY76TfkUoSX" crossorigin="anonymous">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.0.0/animate.min.css"/>
	<link rel="stylesheet" href="estilos/estilo.css">
	<link rel="stylesheet" href="estilos/mediaqueries.css">
	

	<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>

</head>


<body>

	<header>
		
		<div class="navbar">
			<a href="index.html" class="Logo col-4"><img src="imagenes/fotos-estudio/audion-estudio-1.png"></a>
			
			<div class="dropdown col-4"> 
				<button class="dropbtn btn btn-secondary dropdown-toggle" id=dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false""> &#9776 Menú</button>
				<div class="dropdown-content  dropdown-menu" aria-labelledby="dropdownMenuButton"> 
					<a class="dropdown-item" href="estudiosAudion.html">Estudios Audión</a>
					<a class="dropdown-item" href="gonzalo.html">Gonzalo Villagra</a>
					<a class="dropdown-item" href="tienda.html">Tienda y Contrataciones</a>
					<a class="dropdown-item" href="contacto.html">Contacto</a>
						
				</div>
			</div>	
		</div>
		
	</header>

		

	<main>
		
            <?php 
$myemail = 'gonzapav@gmail.com';
$name = $_POST['nombre'];
$email = $_POST['email'];
$message = $_POST['mensaje'];

$to = $myemail;
$email_subject = "Nuevo mensaje: $subject";
$email_body = "Has recibido un nuevo mensaje. \n Nombre: $name \n Correo: $email \n Mensaje: \n $message";
$headers = "From: $email";

mail($to, $email_subject, $email_body, $headers);
echo "El mensaje se ha enviado correctamente";
?>      
        <center>
            <h1>Conactanos</h1>
                    <form method="post" action="enviar.php">
                        <input type="text" name="nombre" placeholder="Ingrese su nombre">
                        <input type="email" name="email" placeholder="Ingrese su Email">
                        <br>
                        <textarea type="text" name="mensaje" placeholder="Mensaje"></textarea>
                        <br>
                        <input type="reset"> 
                        <input type="submit" value="ENVIAR"> 

                        
                    </form>        
        </center>
		<div>
			<a href="https://web.whatsapp.com/" class="logoWpp"> <img src="imagenes/fotos-cualq/logo.wpp.PNG" class="imgWpp">  </a>
			<p class="animWpp animate_animated animate__bounceInLeft" > ¡Dejanos tu mensaje al Whatsapp! </p>
			<a href="mailto:cuenta@deemail.com" class="logoMail"  > <img src="imagenes/fotos-cualq/logo.mail.png" class="imgMail"></a>
			<p class="animMail animate_animated animate__bounceInRight">  ¡Dejanos tu mensaje al correo! </p>
		</div>
	</main>

	<footer class="footer">
		<nav>
			<h2>Seguinos</h2>	
				<div class="linkColor">	
					<a href="https://www.facebook.com/gonzalo.villagra.90"> <img src="imagenes/fotos-cualq/attachment-1.png" alt="Facebook Logo" width="15" height="15"> Gonzalo Villagra</a>
							
					<a href="https://instagram.com/gonzavillagra.ing?igshid=1d4ed1ofcd9hm"><img src="imagenes/fotos-cualq/ig-logo.png" alt="Instagram Logo" width="15" height="15"> @gonzavillagra.ing</a>
							
					<a href="https://instagram.com/estudiosaudion?igshid=16a8q8c0jykyq"><img src="imagenes/fotos-cualq/ig-logo.png" alt="Instagram Logo" width="15" height="15"> @estudiosaudion</a>
				</div>		
		</nav>		
	</footer> 




</body>
</html>