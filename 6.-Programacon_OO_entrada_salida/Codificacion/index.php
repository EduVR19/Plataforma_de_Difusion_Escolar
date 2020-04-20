<!DOCTYPE html>
<html>
<head>
	<title></title>
	<?php require_once "scripts.php";  ?>
</head>
<body>
  <style>
  /* Make the image fully responsive */
  .carousel-inner img {
    width: 100%;
    height: 100%;
  }
  </style>

	<!--*********************INICIO DE ENCABEZADO********************-->
	<div class="container.fluid text-center" style="margin: 10px">
		<div class="row">
			<div class="col-sm-2">
	           	<div class="container">
				  <img src="img\logo.png"> 
				</div>
	        </div>
	         <div class="col-sm-8">
	            <div class="container" style="margin-top: 30px">
	                <h1 class="mx-auto d-block">Escuela Primaria “Profr. Luis Tijerina Almaguer” Zona 8</h1>
	            </div> 
	        </div>  
	         <div class="col-sm-2">
	           	<div class="container">
				  <img src="img\logo_2.png" class="mx-auto d-block" style="width:100%; height:100%"> 
				</div>
	        </div>
		</div>
	</div>
	<!--*********************FIN DE ENCABEZADO********************-->

	<!--*****************INICIO DE NAVBAR (HORIZONTAL)************-->
	<div class="container.fluid text-center">
		<nav class="navbar navbar-expand-sm bg-danger navbar-dark">
		  <ul class="navbar-nav">
		    <h2 style="color: white">Bienvenido(a)</h2>
		  </ul>
		</nav>
	</div>
	<!--*****************FIN DE NAVBAR (HORIZONTAL)************-->

	<div class="container.fluid">
		<div class="row.row-eq-height" style="display: flex;">

			<div class="col-sm-8">
				<div class="card text-left">
					<div class="card-header">
						Eventos y noticias
					</div>

	<!--*****************INICIO DE CONTENIDO DESLIZABLE************-->
					<div class="card-body">
					        <div class="container">
					            <div id="login-row" class="row justify-content-center align-items-center">
					                <div id="login-column" class="col-md-6">
					                    <div id="login-box" class="col-md-12">
					                        <div id="demo" class="carousel slide" data-ride="carousel">
											  <ul class="carousel-indicators">
											    <li data-target="#demo" data-slide-to="0" class="active"></li>
											    <li data-target="#demo" data-slide-to="1"></li>
											    <li data-target="#demo" data-slide-to="2"></li>
											  </ul>
											  <div class="carousel-inner">
											    <div class="carousel-item active">
											      <img src="img\foto.jpg" alt="Los Angeles" width="1100" height="500">
											      <div class="carousel-caption">
											        <h3>Los Angeles</h3>
											        <p>We had such a great time in LA!</p>
											      </div>   
											    </div>
											    <div class="carousel-item">
											      <img src="img\logo_2.png" alt="Chicago" width="1100" height="500">
											      <div class="carousel-caption">
											        <h3>Chicago</h3>
											        <p>Thank you, Chicago!</p>
											      </div>   
											    </div>
											    <div class="carousel-item">
											      <img src="img\logo_2.png" alt="New York" width="1100" height="500">
											      <div class="carousel-caption">
											        <h3>New York</h3>
											        <p>We love the Big Apple!</p>
											      </div>   
											    </div>
											  </div>
											  <a class="carousel-control-prev" href="#demo" data-slide="prev">
											    <span class="carousel-control-prev-icon"></span>
											  </a>
											  <a class="carousel-control-next" href="#demo" data-slide="next">
											    <span class="carousel-control-next-icon"></span>
											  </a>
											</div>
					                    </div>
					                </div>
					            </div>
					        </div>
					 </div>
					<hr>
				</div>
			</div>
	<!--*****************FIN DE CONTENIDO DESLIZABLE************-->


	<!--*****************INICIO DE LOGIN************-->
			<div class="col-sm-4">
				<div class="card text-left">
					<div class="card-header">
						Iniciar sesión
					</div>
					<div class="card-body">
					        <div class="container">
					            <div id="login-row" class="row justify-content-center align-items-center">
					                <div id="login-column" class="col-md-6">
					                    <div id="login-box" class="col-md-12">
					                        <form id="login-form" class="form" action="" method="post">
					                            <h3 class="text-center text-danger">Login</h3>
					                            <div class="form-group">
					                                <label for="username" class="text-dark">Usuario:</label><br>
					                                <input type="text" name="username" id="username" class="form-control">
					                            </div>
					                            <div class="form-group">
					                                <label for="password" class="text-dark">Contraseña:</label><br>
					                                <input type="password" name="password" id="password" class="form-control">
					                            </div>
					                            <div class="form-group">
					                                <label for="remember-me" class="text-dark"><span>Recordar</span> <span><input id="remember-me" name="remember-me" type="checkbox"></span></label><br>
					                                <input type="submit" name="submit" class="btn btn-danger btn-md" value="Submit">
					                            </div>
					                            <div id="register-link" class="text-primary">
					                                <a href="#" class="text-dark">Olvide la cuenta</a>
					                            </div>
					                        </form>
					                    </div>
					                </div>
					            </div>
					        </div>
					 </div>
					<hr>
				</div>
			</div>
	<!--*****************FIN DE LOGIN************-->


		</div>
	</div>


	<!--*****************INICIO DE CONTACTO ************-->
	<div class="container.fluid">
		<div class="row">
			<div class="col-sm-12">
				<div class="card text-left">
					<div class="card-header">
						Contacto
					</div>
					<div class="card-body">
						<div class="row text-center">	<!--SE CREA UNA FILA (EN BOOTRSTRAP LAS FILAS TIENEN 12 COLUMNDAS)-->	


							<!--*****************INICIO DE ÍCONOS ************-->
							<div class="col-sm-3">
									<span class="fa fa-phone" aria-hidden="true"></span> Teléfono
							</div>

							<div class="col-sm-3">
									<span class="fa fa-location-arrow"></span> Direccion
							</div>

							<div class="col-sm-3">
									<span class="fa fa-facebook-official"></span> <a href="#" class="text-dark">Facebook</a>
							</div>

							<div class="col-sm-3">
									<span class="fa fa-whatsapp"></span> <a href="#" class="text-dark">Whatsapp</a>
							</div>
							<!--*****************FIN DE ÍCONOS ************-->

						</div>
						<hr>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!--*********************FIN DE CONTACTO********************-->

</body>
</html>